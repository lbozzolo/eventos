<?php

namespace Eventos\Http\Controllers;

use Carbon\Carbon;
use Eventos\Exports\AsistentesExport;
use Eventos\Exports\CodigosExport;
use Eventos\Exports\ConsultasExport;
use Eventos\Exports\InscriptosExport;
use Eventos\Http\Requests\CreateCodigosRequest;
use Eventos\Http\Requests\CreateConsultaRequest;
use Eventos\Http\Requests\CreateProyectoRequest;
use Eventos\Http\Requests\UpdateProyectoRequest;
use Eventos\Models\Auspiciante;
use Eventos\Models\Categoria;
use Eventos\Models\Cliente;
use Eventos\Models\Codigo;
use Eventos\Models\Consulta;
use Eventos\Models\Estado;
use Eventos\Models\Grupo;
use Eventos\Models\Iframe;
use Eventos\Models\Pdf;
use Eventos\Models\Proyecto;
use Eventos\Models\Tag;
use Eventos\Models\Tipo;
use Eventos\Models\Video;
use Eventos\Repositories\ClienteRepository;
use Eventos\Repositories\ProyectoRepository;
use Eventos\Http\Controllers\AppBaseController as AppBaseController;
use Eventos\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class ProyectoController extends AppBaseController
{
    private $repo;
    private $gender;
    private $model;
    private $modelSpanish;
    private $modelSpanishPlural;
    private $modelPlural;
    private $store_success_message;
    private $store_failure_message;
    private $show_failure_message;
    private $update_success_message;
    private $update_failure_message;
    private $destroy_success_message;
    private $destroy_failure_message;
    private $no_results_message;
    private $data;
    private $clienteRepo;

    use ImageTrait;

    public function __construct(ProyectoRepository $repository, ClienteRepository $clienteRepo)
    {
        $this->repo = $repository;
        $this->clienteRepo = $clienteRepo;
        $this->gender = 'M';
        $this->model = 'proyecto';
        $this->modelPlural = 'proyectos';
        $this->modelSpanish = 'proyecto';
        $this->modelSpanishPlural = 'proyectos';
        $this->store_success_message = ($this->gender == 'M')? ucfirst($this->modelSpanish).' creado con éxito' : ucfirst($this->modelSpanish).' creada con éxito';
        $this->store_failure_message = ($this->gender == 'M')? 'Ocurrió un error. No se pudo crear el '.ucfirst($this->modelSpanish) : 'Ocurrió un error. No se pudo crear la'.ucfirst($this->modelSpanish);
        $this->show_failure_message = ($this->gender == 'M')? 'No se encontró el '.ucfirst($this->modelSpanish.' especificado') : 'No se encontró la'.ucfirst($this->modelSpanish.' especificada');
        $this->update_success_message = ($this->gender == 'M')? ucfirst($this->modelSpanish).' actualizado con éxito' : ucfirst($this->modelSpanish).' actualizada con éxito';
        $this->update_failure_message = ($this->gender == 'M')? 'Ocurrió un error. No se pudo actualizar el '.ucfirst($this->modelSpanish).' especificado' : 'Ocurrió un error. No se pudo actualizar la'.ucfirst($this->modelSpanish).' especificada';
        $this->destroy_success_message = ($this->gender == 'M')? ucfirst($this->modelSpanish).' eliminado con éxito' : ucfirst($this->modelSpanish).' eliminada con éxito';
        $this->destroy_failure_message = ($this->gender == 'M')? 'Ocurrió un error. No se pudo eliminar el '.ucfirst($this->modelSpanish).' especificado' : 'Ocurrió un error. No se pudo eliminar la'.ucfirst($this->modelSpanish).' especificada';
        $this->no_results_message = ($this->gender == 'M')? 'No hay ningún '.$this->modelSpanish. ' cargado en el sistema.' : 'No hay ninguna '. $this->modelSpanish . ' cargada en el sistema.';

        $this->data['model'] = $this->model;
        $this->data['gender'] = $this->gender;
        $this->data['modelPlural'] = $this->modelPlural;
        $this->data['modelSpanish'] = $this->modelSpanish;
        $this->data['modelSpanishPlural'] = $this->modelSpanishPlural;
        $this->data['noResultsMessage'] = $this->no_results_message;
    }

    public function index()
    {
        $this->data['grupos'] = Grupo::orderBy('id', 'desc')->get();
        $this->data['items'] = Proyecto::orderBy('id', 'desc')->paginate(5);
        return view($this->modelPlural.'.index')->with($this->data);
    }

    public function create()
    {
        $this->data['estados'] = Estado::pluck('nombre', 'id');
        $this->data['tipos'] = Tipo::pluck('nombre', 'id');
        $this->data['categorias'] = Categoria::pluck('nombre', 'id');
        $this->data['clientes'] = Cliente::pluck('nombre', 'id');
        $this->data['auspiciantes'] = Auspiciante::pluck('nombre', 'id');

        return view($this->modelPlural.'.create')->with($this->data);
    }

    public function store(CreateProyectoRequest $request)
    {
        $inputs = $request->all();

        $inputs['alert_message_active'] = (isset($inputs['alert_message_active']))? 1 : 0;
        $inputs['fecha'] = Carbon::parse($inputs['fecha'])->format('Y-m-d h:i');

        $item = $this->repo->create($inputs);
        $item->header()->create();

        if(!$item)
            return redirect()->back()->withErrors($this->store_failure_message);

        return redirect()->route($this->modelPlural.'.index')->with('ok', $this->store_success_message);
    }

    public function storeCodigos(CreateCodigosRequest $request, $id)
    {
        $this->data['item'] = Proyecto::find($id);

        for($i=1; $i<=$request['cantidad_codigos']; $i++){
            $code = str_random(8);
            while (Codigo::where('code', $code)->first()){
                $code = str_random(8);
            }
            Codigo::create(['proyecto_id' => $id, 'code' => $code]);
        }

        return redirect()->back()->with('ok', 'Códigos generados con éxito');
    }

    public function show($id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (!$this->data['item'])
            return redirect()->back()->withErrors($this->show_failure_message);

        return view($this->modelPlural.'.show')->with($this->data);
    }

    public function edit($id)
    {
        $this->data['item'] = Proyecto::findorfail($id);

        $this->data['estados'] = Estado::pluck('nombre', 'id');
        $this->data['tipos'] = Tipo::pluck('nombre', 'id');
        $this->data['categorias'] = Categoria::pluck('nombre', 'id');
        $this->data['clientes'] = Cliente::pluck('nombre', 'id');
        $this->data['auspiciantes'] = Auspiciante::pluck('nombre', 'id');

        return view($this->modelPlural.'.edit')->with($this->data);
    }

    public function update($id, UpdateProyectoRequest $request)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);
        $this->data['items'] = $this->repo->all();

        $estado = Estado::find($request['estado_id']);

        $inputs = $request->all();

        $inputs['alert_message_active'] = (isset($inputs['alert_message_active']))? 1 : 0;
        $inputs['fecha'] = Carbon::parse($inputs['fecha'])->format('Y-m-d H:i');

        if(!isset($inputs['publico']))
            $inputs['publico'] = null;

        if (!$this->data['item'])
            return redirect()->back()->withErrors($this->update_failure_message);

        if(!isset($inputs['auspiciantes']))
            $inputs['auspiciantes'] = [];

        $this->data['item'] = $this->repo->update($inputs, $id);

        if($this->data['item']->principal == 1){
            $proyectos = Proyecto::all()->except($this->data['item']->id);
            foreach($proyectos as $proyecto){
                $proyecto->principal = 0;
                $proyecto->save();
            }
        }

//        if($estado->slug == 'finalizado' && !$this->data['item']->dateIsPast()){
//            $activo = Estado::where('slug', 'activo')->first();
//            $this->data['item']->estado_id = $activo->id;
//            $this->data['item']->save();
//        }

        if($estado->slug != 'finalizado' && $this->data['item']->dateIsPast()){
            $finalizado = Estado::where('slug', 'finalizado')->first();
            $this->data['item']->estado_id = $finalizado->id;
            $this->data['item']->save();
            return redirect()->route($this->modelPlural.'.show', $this->data['item']->id)
                ->with('warning', 'No se pudo cambiar el estado del proyecto porque la fecha del mismo indica que está finalizado. Si desea forzar el cambio primero debe cambiar la fecha.');
        }

        return redirect()->route($this->modelPlural.'.show', $this->data['item']->id)->with('ok', $this->update_success_message);
    }

    public function imagenes($id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->show_failure_message);

        return view($this->modelPlural.'.images')->with($this->data);
    }

    public function iframes($id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->show_failure_message);

        return view($this->modelPlural.'.iframes')->with($this->data);
    }

    public function storeIframes(Request $request, $id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->show_failure_message);

        if(!$request['path'])
            return redirect()->back()->withErrors('El campo URL está vacío');

        $inputs = $request->except('_token');
        $inputs['proyecto_id'] = $id;

        $iframe = Iframe::create($inputs);

        if(!$iframe)
            return redirect()->back()->withErrors('Ocurrió un error. No se pudo guardar el link del video');

        return redirect()->back()->with('ok', 'iframe guardado con éxito');
    }

    public function videos($id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->show_failure_message);

        return view($this->modelPlural.'.videos')->with($this->data);
    }

    public function storeVideos(Request $request, $id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->show_failure_message);

        if(!$request['path'])
            return redirect()->back()->withErrors('El campo URL está vacío');

        $inputs = $request->except('_token');
        $inputs['proyecto_id'] = $id;

        $iframe = Video::create($inputs);

        if(!$iframe)
            return redirect()->back()->withErrors('Ocurrió un error. No se pudo guardar el link del video');

        return redirect()->back()->with('ok', 'Video guardado con éxito');
    }

    public function consultas($id, $sala = null)
    {
        $this->data['item'] = Proyecto::find($id);
        $this->data['recientes'] = $this->data['item']->consultasRecientes($sala);
        $this->data['recientes'] = $this->data['item']->consultasRecientes($sala);
        $this->data['archivadas'] = $this->data['item']->consultasArchivadas($sala);
        $this->data['sala'] = $sala;

        return view($this->modelPlural.'.consultas')->with($this->data);
    }

    public function consultasAdmin($id)
    {
        $this->data['item'] = Proyecto::find($id);
        return view($this->modelPlural.'.consultas-admin')->with($this->data);
    }

    public function storeMessage(CreateConsultaRequest $request, $id)
    {
        $proyecto = Proyecto::find($id);

        $request['nombre'] = ($proyecto->tipoProyecto() == 'Público')? $request['nombre'] : Auth::user()->fullname;
//        $request['nombre'] = ($proyecto->publico)? $request['nombre'] : Auth::user()->fullname;

        if(!$request['texto'] || !$id || !$request['nombre'] )
            return redirect()->back();

        $consultas = Consulta::where('ip_address', '=',request()->ip())->lastMessages(1)->get();

        if($consultas->count())
            return redirect()->back()->with('warning', 'Debe esperar un minuto para hacer la próxima consulta')->withInput();

        $consulta = Consulta::create([
            'proyecto_id' => $id,
            'nombre' => $request['nombre'],
            'texto' => $request['texto'],
            'ip_address' => (request()->ip())? request()->ip() : null
        ]);

        if(isset($consulta) && !$consulta)
            return redirect()->back()->withErrors('Ocurrió un error. No se pudo enviar la consulta');

        return redirect()->back()->with('ok', 'Consulta enviada con éxito');
    }

    public function storeConsulta(Request $request)
    {
        $rules = array (
            'nombre' => 'max:191',
            'email' => 'max:191|email',
            'texto' => 'required|max:255',
        );

        $messages = array (
            'nombre.max' => 'Su nombre no puede exceder los 191 caracteres',
            'emai.max' => 'Su email no puede exceder los 191 caracteres',
            'emai.email' => 'El formate del email es incorrecto',
            'texto.required' => 'No puede enviar una consulta vacía',
            'texto.max' => 'Su consulta no puede exceder los 255 caracteres',
        );

        $validator = Validator::make( $request->all(), $rules, $messages);
        $consultas = Consulta::where('ip_address', '=',request()->ip())->lastMessages(1)->get();

        if($consultas->count())
            return response()->json(['errors' => ['Debe esperar un minuto para hacer la próxima consulta']]);

        if ($validator->fails())
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);

        $proyecto = Proyecto::find($request->proyecto_id);
        $consultasTotal = Consulta::where('ip_address', '=',request()->ip())->where('proyecto_id', $proyecto->id)->count();

        $restriccionConsultas = $this->repo->filterByMaxUsers($proyecto, $consultasTotal);

        // Si el usuario excede la cantidad de consultas permitidas en el evento
        if($restriccionConsultas && $consultasTotal >= $restriccionConsultas){
            $mensaje = ($restriccionConsultas == 1)? 'Lo sentimos. Sólo puede realizarse una consulta por persona en este evento.' : 'Lo sentimos. Sólo pueden realizarse '.$restriccionConsultas.' consultas por persona en este evento.';
            return response()->json(['errors' => [$mensaje]]);
        }

        $nombre = ($proyecto->tipoProyecto() == 'Público')? $request->nombre : Auth::user()->fullname;
        $email = ($proyecto->tipoProyecto() == 'Público')? $request->email : Auth::user()->email;

        $data = Consulta::create([
            'proyecto_id' => $proyecto->id,
            'nombre' => $nombre,
            'email' => $email,
            'texto' => $request->texto,
            'ip_address' => (request()->ip())? request()->ip() : null
        ]);

        if(isset($request['iframe_id'])){
            $iframe = Iframe::find($request['iframe_id']);
            $iframe->consultas()->save($data);
        }

        return response()->json( $data );
    }

    public function getAlertMessage(Request $request)
    {
        $proyecto = Proyecto::find($request['proyecto_id']);
        $data = ($proyecto->isAlertMessage())? $proyecto->alert_message : 'off';
        return response()->json($data);
    }

    public function destroyConsulta($id)
    {
        $consulta = Consulta::find($id);
        $consulta->delete();
        return redirect()->back();
    }

    public function archivarConsulta($id, $consultaId)
    {
        $consulta = Consulta::find($consultaId);
        $consulta->archivado = !$consulta->archivado;
        $consulta->save();

        return redirect()->back();
    }

    public function reportes($id)
    {
        $this->data['item'] = Proyecto::find($id);
        return view('proyectos.reportes')->with($this->data);
    }

    public function getConnected(Request $request)
    {
        $proyecto = Proyecto::find($request->proyecto_id);
        $inscriptos = $proyecto->inscriptos->count();
        $conectados = $proyecto->connected();
        $porcentaje = $proyecto->connectedPercentage();

        // Seteo los asistentes
        foreach($proyecto->inscriptos as $user){
            if($user->isOnline()){
                $inscripcion = $user->proyectos()->find($proyecto->id)->pivot;
                $inscripcion->attendment = 1;
                $inscripcion->save();
            }
        }

        if($proyecto->isGoingOn())
            $this->repo->recordAmountUsersOnline($proyecto->id, $conectados);

        return response()->json(['inscriptos' => $inscriptos, 'conectados' => $conectados, 'porcentaje' => $porcentaje]);
    }

    public function getConnectePercentage(Request $request)
    {
        $proyecto = Proyecto::find($request->proyecto_id);
        $conectados = $proyecto->connectedPercentage();
        return response()->json($conectados);
    }

    public function getOnlineTimeline(Request $request)
    {
        $proyecto = Proyecto::find($request->proyecto_id);
        $users = $proyecto->usersOnlineThroughTime();
        $timestamps = $proyecto->timestampsThroughTime();
        return response()->json(['users' => $users, 'timestamps' => $timestamps]);
    }

    public function finalizar($id)
    {
        $proyecto = Proyecto::find($id);
        $estadoFinalizado = Estado::where('slug', 'finalizado')->first();

        if(!$estadoFinalizado)
            return redirect()->back()->withErrors('No se pudo finalizar el evento porque no existe el estado FINALIZADO. Debe crearlo primero.');

        $proyecto->estado_id = $estadoFinalizado->id;
        $proyecto->save();

        return redirect()->back()->with('ok', 'Evento finalizado con éxito.');
    }

    public function activar($id)
    {
        $proyecto = Proyecto::find($id);

        if($proyecto->dateIsPast())
            return redirect()->back()->with('warning', 'No se pudo activar el proyecto porque la fecha del mismo indica que está finalizado. Si desea forzar la activación primero debe cambiar la fecha.');

        $estadoActivo = Estado::where('slug', 'activo')->first();
        $proyecto->estado_id = $estadoActivo->id;
        $proyecto->save();

        return redirect()->back()->with('ok', 'Evento activado con éxito.');
    }

    public function pdfs($id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->show_failure_message);

        return view($this->modelPlural.'.pdfs')->with($this->data);
    }

    public function storePDF(Request $request, $id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->show_failure_message);

        if(!$request->file('url_pdf'))
            return redirect()->back()->withErrors('Debe seleccionar un archivo PDF');

        if($request->file('url_pdf')){

            $file = $request->file('url_pdf');
            $nombre = $this->changeFileNameIfExists($file);

            Storage::disk('public_pdf')->put($nombre,  File::get($file));

            $title = strtolower(str_slug($this->data['item']->nombre.'_pdf_'.($this->data['item']->pdfs->count() + 1)));

            $pdf = Pdf::create([
                'title' => $title,
                'path' => $nombre
            ]);

            $this->data['item']->pdfs()->save($pdf);
        }

        return redirect()->back()->with('ok', 'PDF guardado con éxito');
    }

    public function destroyPdf(Request $request, $id)
    {
        $pdf = Pdf::find($id);
        $pdf->delete();
        return redirect()->back()->with('ok', 'PDF eliminado con éxito');
    }

    public function inscripciones($id)
    {
        $proyecto = Proyecto::find($id);
        $this->data['items'] =  $proyecto->inscriptos()->paginate(10);
        $this->data['proyectos'] = Proyecto::pluck('nombre', 'id');
        $this->data['total'] = $proyecto->inscriptos->count();
        $this->data['proyecto'] = $proyecto;

        return view('proyectos.inscripciones')->with($this->data);
    }

    public function asistencia($id)
    {
        $proyecto = Proyecto::find($id);
        $this->data['items'] =  $proyecto->inscriptos()->where('attendment', 1)->paginate(10);
        $this->data['proyectos'] = Proyecto::pluck('nombre', 'id');
        $this->data['total'] = $proyecto->inscriptos->count();
        $this->data['proyecto'] = $proyecto;

        return view('proyectos.inscripciones')->with($this->data);
    }

    public function destroy($id)
    {
        $this->data['item'] = $this->repo->findWithoutFail($id);

        if (empty($this->data['item']))
            return redirect()->back()->withErrors($this->destroy_failure_message);

        $this->repo->delete($id);

        return redirect(route($this->modelPlural.'.index'))->with('ok', $this->destroy_success_message);
    }

    public function destroyIframe($proyecto, $iframe)
    {
        $this->data['proyecto'] = Proyecto::find($proyecto);
        $this->data['iframe'] = Iframe::find($iframe);

        if (empty($this->data['proyecto']))
            return redirect()->back()->withErrors($this->destroy_failure_message);

        $this->data['iframe']->delete();

        return redirect(route($this->modelPlural.'.iframes', $proyecto))->with('ok', 'Iframe eliminado con éxito');
    }

    public function destroyVideo($proyecto, $video)
    {
        $this->data['proyecto'] = Proyecto::find($proyecto);
        $this->data['video'] = Video::find($video);

        if (empty($this->data['proyecto']))
            return redirect()->back()->withErrors($this->destroy_failure_message);

        $this->data['video']->delete();

        return redirect(route($this->modelPlural.'.videos', $proyecto))->with('ok', 'Video eliminado con éxito');
    }

    public function exportInscriptos($id)
    {
        return Excel::download(new InscriptosExport($id), 'inscriptos.xlsx');
    }

    public function exportAsistentes($id)
    {
        return Excel::download(new AsistentesExport($id), 'inscriptos.xlsx');
    }

    public function exportConsultas($id)
    {
        return Excel::download(new ConsultasExport($id), 'consultas.xlsx');
    }

    public function exportCodigos($id)
    {
        return Excel::download(new CodigosExport($id), 'codigos.xlsx');
    }

    public function verCodigos($id, $estado = null)
    {
        $this->data['proyecto'] = Proyecto::findOrFail($id);

        if(!$this->data['proyecto']->codigos->count())
            return redirect()->back()->withErrors('El proyecto seleccionado no tiene códigos generados');

        $this->data['codigos'] = $this->data['proyecto']->codigos()->paginate(15);

        if($estado == 'disponibles')
            $this->data['codigos'] = $this->data['proyecto']->codigos()->where('user_id', null)->paginate(15);

        if(!$this->data['codigos'])
            return redirect()->back()->withErrors('No hay códigos generados en este proyecto');

        return view('proyectos.codigos')->with($this->data);
    }

    public function searchUser(Request $request, $id)
    {
        $proyecto = Proyecto::find($id);
        $this->data['proyecto'] = $proyecto;

        $this->data['items'] = $proyecto->inscriptos()->paginate(15);
        $this->data['proyectos'] = Proyecto::pluck('nombre', 'id');

        $validator = Validator::make($request->input(), ['search' => 'max:25'], ['search.max' => 'La búsqueda no puede exceder los 25 caracteres']);

        if ($validator->fails())
            return view('proyectos.inscripciones')->withErrors($validator)->with($this->data);

        $search = $request['search'];

        if($search != '' && $search != ' ' && $search != null){
            $result = $proyecto->inscriptos()->where('name', 'like', "%$search%")
                ->orWhere(function ($query) use ($search) {
                    $query->where('lastname', 'like', "%$search%")
                        ->orWhere('dni', 'like', "%$search%")
                        ->orWhere('email', 'like', "%$search%");
                });
        } else {
            return redirect()->route('proyectos.inscripciones', $proyecto->id);
        }

        $resultado = $result->paginate()->filter(function ($user) use ($proyecto){
            return ($proyecto->inscriptos()->where('user_id', $user->id)->first())? $user : null;
        });


        $this->data['items'] = $resultado->unique('id');

        return view('proyectos.inscripciones')->with($this->data);

    }

    public function buscarCodigo(Request $request, $id)
    {
        $this->data['proyecto'] = Proyecto::find($id);
        $this->data['codigos'] = $this->data['proyecto']->codigos()->paginate(15);

        $validator = Validator::make($request->input(), ['search' => 'max:8'], ['search.max' => 'La búsqueda no puede exceder los 8 caracteres']);

        if ($validator->fails())
            return redirect()->back()->withErrors('No se encontró el código. Revise que esté bien escrita su búsqueda');

        $search = $request['search'];

        if($search != '' && $search != ' ' && $search != null){

            $result = Codigo::where('code','LIKE','%'.$search.'%')->orWhereHas('user', function($query) use ($search) {

                $query->where('name', 'LIKE', '%'.$search.'%');
                $query->orWhere('lastname', 'LIKE', '%'.$search.'%');
                $query->orWhere('email', 'LIKE', '%'.$search.'%');

            })->with('user')->paginate(30);

            $this->data['result'] = $result->filter(function ($item) use ($id) {
                return $item->proyecto_id == $id;
            });

            if(!$this->data['result']){
                $this->data['result'] = null;
            }

        } else {
            return redirect()->back();
        }

        return view('proyectos.codigos')->with($this->data);
    }

    public function updateCantidadConsultas(Request $request, $id)
    {
        $this->data['proyecto'] = Proyecto::find($id);
        $cantidad = $request['cantidad'];

        $this->data['proyecto']->maximas_consultas = $cantidad;
        $this->data['proyecto']->save();

        return redirect()->back();
    }

    public function updateConsultasIlimitadas($id)
    {
        $this->data['proyecto'] = Proyecto::find($id);

        $this->data['proyecto']->maximas_consultas = null;
        $this->data['proyecto']->save();

        return redirect()->back();
    }

    public function updateIframe(Request $request, $id)
    {
        $rules = array (
            'title' => 'required|max:191',
            'path' => 'required|max:191'
        );

        $messages = array (
            'title.max' => 'El título o descripción no puede exceder los 191 caracteres',
            'title.required' => 'El título o descripción está vacío',
            'path.required' => 'La URL es obligatoria',
            'path.max' => 'La URL no puede exceder los 191 caracteres',
        );

        $validator = Validator::make( $request->input(), $rules, $messages);

        if ($validator->fails())
            return redirect()->back()->withErrors( $validator);

        $iframe = Iframe::find($id);
        $iframe->title = $request['title'];
        $iframe->path = $request['path'];
        $iframe->save();

        return redirect()->back()->with('ok', 'Iframe editado con éxito');
    }

    public function encuestas($id)
    {
        $this->data['item'] = Proyecto::find($id);
        return view('proyectos.encuestas')->with($this->data);
    }

    public function materialRelacionado($id)
    {
        $this->data['proyecto'] = Proyecto::find($id);
        $this->data['items'] = $this->data['proyecto']->materiales()->paginate(10);
        $this->data['tags'] = Tag::pluck('name', 'id');

        return view('proyectos.material')->with($this->data);
    }

    public function changeFileNameIfExists($file)
    {
        $regEx = '/\\.[^.\\s]{3,4}$/';
        $string_random = str_random(28);

        $originalName = $file->getClientOriginalName();
        $extension = $file->guessExtension();

        $nombre = preg_replace($regEx, '', $originalName) . '-' . $string_random . '.' . $extension;
        $nombre = str_replace(' ','',$nombre);
        $nombre = str_replace_array('#', ['x'], $nombre);
        $nombre = strtolower($nombre);

        return $nombre;
    }

}
