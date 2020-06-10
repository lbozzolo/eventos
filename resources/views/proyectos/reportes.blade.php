@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="card grid-margin">

                <div class="row">
                    <div class="col-lg-9 col-md-7 col-sm-6">
                        <div class="card-body">
                            <h2>
                                <span class="text-dark">{!! $item->nombre !!}</span>
                                <span class="text-warning"> / Reportes</span>
                            </h2>
                            <p>{!! ($item->descripcion)? $item->descripcion : '' !!}</p>

                            @role('Superadmin|Admin')
                            @if($item->isFinished())

                                <button title="Activar Evento" type="button" data-toggle="modal" data-target="#activar" class="btn btn-success mb-1">Activar evento</button>

                                <!-- Modal -->
                                <div class="modal fade" id="activar" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Activar Evento</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>¿Desea activar este evento/proyecto?</p>
                                            </div>
                                            <div class="modal-footer">

                                                <a href="{!! route('proyectos.activar', $item->id) !!}" class="btn btn-sm btn-primary">Activar</a>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @else

                                @if($item->isGoingOn() || $item->isFinished())
                                <button title="Finalizar Evento" type="button" data-toggle="modal" data-target="#finalizar" class="btn btn-danger mb-1">Marcar como Finalizado</button>

                                <!-- Modal -->
                                <div class="modal fade" id="finalizar" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" ><i class="mdi mdi-alert-circle text-danger"></i> Marcar Evento como finalizado</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>¿Desea marcar este evento/proyecto como finaizado?</p>
                                                <p>
                                                    Al hacerlo se dejará de tomar registro sobre los usuarios online.<br>
                                                    Si no lo hiciera, el sistema podría seguir tomando registro de los mismos innecesariamente
                                                    hasta por dos horas más después de finalizado el evento.
                                                </p>
                                            </div>
                                            <div class="modal-footer">

                                                <a href="{!! route('proyectos.finalizar', $item->id) !!}" class="btn btn-sm btn-danger">Finalizar</a>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif

                            @endif
                            @endrole

                            @role('Superadmin|Admin')
                            <a href="{!! route($modelPlural.'.show', $item->id) !!}" class="btn btn-outline-dark mb-1">Volver</a>
                            @endrole

                            @role('Cliente')
                            <a href="{!! route('proyectos.consultas', $item->id) !!}" class="btn btn-outline-info mb-1">
                                <i class="mdi mdi-message-text-outline"></i> Consultas
                            </a>
                            <a href="{!! route('clientes.proyecto.iframe', $item->id) !!}" class="btn btn-primary mb-1">
                                <i class="mdi mdi-youtube-play"></i> Visualizar evento
                            </a>
                            <a href="{!! route('clientes.profile', Auth::user()->id) !!}" class="btn btn-outline-dark mb-1">Salir</a>
                            @endrole

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6">
                        <div class="card-body">
                            <strong>Fecha del evento</strong> <br>
                            {!! $item->fecha !!}, {!! $item->hora !!} hs <br>
                            <small>estado</small>
                            @if($item->estado->slug == 'activo')
                                <span class="text-success">{!! strtoupper($item->estado->nombre) !!}</span>
                            @elseif($item->estado->slug == 'finalizado')
                                <span class="text-danger">{!! strtoupper($item->estado->nombre) !!}</span>
                            @else
                                <span class="text-info">{!! strtoupper($item->estado->nombre) !!}</span>
                            @endif
                            @if($item->isGoingOn())
                                <br><br>
                                <small class="" style="border: 1px solid limegreen; padding: 5px 10px">
                                    en vivo <i class="mdi mdi-circle text-success"></i>
                                </small>
                            @endif
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </div>
    <div class="row">

        <div class="col-lg-6">
            @include('proyectos.partials.widget-inscripciones')
            @include('proyectos.partials.widget-online-timeline')
        </div>
        <div class="col-lg-6">

            @if($item->isFinished() && $item->reportes->count())
                @include('proyectos.partials.widget-resumen')
            @endif

            @include('proyectos.partials.widget-paises')

        </div>

    </div>

@endsection

@section('js')

    <script>

        // window.setTimeout(function(){
        //     location.reload()
        // },15000);

        loadConnectedUsers();

        function loadConnectedUsers(inscriptos, conectados, porcentaje){

            var info = $('#conectados');
            info.total = info.attr('data-total');
            info.connected = info.attr('data-connected');
            info.percentage = info.attr('data-percentage');

            var total, value, percentage;

            // console.log('inscriptos: ' + inscriptos);
            // console.log('conectados: ' + conectados);
            // console.log('porcentaje: ' + porcentaje);

            if(inscriptos && conectados && porcentaje){
                total = inscriptos;
                value = conectados;
                percentage = porcentaje;
            } else {
                total = info.total;
                value = info.connected;
                percentage = info.percentage;
            }

            var data = {
                labels: [
                    "Conectados",
                ],
                datasets: [
                    {
                        data: [value, total-value],
                        backgroundColor: [
                            "#00ce68",
                            "gray"
                        ],
                        hoverBackgroundColor: [
                            "lightgreen",
                            "lightgray"
                        ],
                        hoverBorderColor: [
                            "#00ce68",
                            "gray"
                        ]
                    }]
            };

            var myChart = new Chart(document.getElementById('conectados'), {
                type: 'doughnut',
                data: data,
                options: {
                    responsive: true,
                    legend: {
                        display: false
                    },
                    title: {
                        display: false,
                        text: percentage + '%'
                    },
                    cutoutPercentage: 80,
                    tooltips: {
                        filter: function(item, data) {
                            var label = data.labels[item.index];
                            if (label) return item;
                        }
                    }
                }
            });

            textCenter(percentage);

            function textCenter(val) {

                Chart.pluginService.register({
                    beforeDraw: function(chart) {
                        var width = chart.chart.width,
                            height = chart.chart.height,
                            ctx = chart.chart.ctx;

                        ctx.restore();
                        var fontSize = (height / 114).toFixed(2);
                        ctx.font = fontSize + "em sans-serif";
                        ctx.textBaseline = "middle";

                        var text = chart.options.title.text,
                            textX = Math.round((width - ctx.measureText(text).width) / 2),
                            textY = height / 2;

                        ctx.fillText(text, textX, textY);
                        ctx.save();
                    }
                });
            }

        }


        // ================================================================================================
        // Gráfico de países
        // ================================================================================================


        var paises = <?php echo json_encode($item->usersByCountryName()) ?>;
        var cantidades = <?php echo json_encode($item->usersByCountryAmount()) ?>;

        // console.log(cantidades);

        var dataPaises = {
            datasets: [{
                data: cantidades,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
            }],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: paises
        };

        var randomColorPlugin = {
            // We affect the `beforeUpdate` event
            beforeUpdate: function(chart)
            {
                var backgroundColor = [];
                var borderColor = [];

                // For every data we have ...
                for (var i = 0; i < chart.config.data.datasets[0].data.length; i++) {

                    // We generate a random color
                    var color = "rgba(" + Math.floor(Math.random() * 255) + "," + Math.floor(Math.random() * 255) + "," + Math.floor(Math.random() * 255) + ",";

                    // We push this new color to both background and border color arrays
                    // .. a lighter color is used for the background
                    backgroundColor.push(color + "0.2)");
                    borderColor.push(color + "1)");
                }

                // console.log(color);
                // We update the chart bars color properties
                chart.config.data.datasets[0].backgroundColor = backgroundColor;
                chart.config.data.datasets[0].borderColor = borderColor;
            }

        };

        Chart.pluginService.register(randomColorPlugin);

        var paisesChart = new Chart(document.getElementById('paises'), {
            data: dataPaises,
            type: 'horizontalBar',
            options: {
                legend : {
                    display: false
                },
                gridLines : {
                    lineWidth: 0.5
                },
                tooltips: {
                    enable: false,
                    titleFontSize: 1
                },
                scales: {
                    xAxes: [{
                        display: true,
                        ticks: {
                            stepValue: 1,
                            beginAtZero: true,
                            userCallback: function(label, index, labels) {
                                // when the floored value is the same as the value we have a whole number
                                if (Math.floor(label) === label) {
                                    return label;
                                }

                            },
                        }
                    }]
                }
            }
        });


        // ================================================================================================
        // Gráfico de online-timeline
        // ================================================================================================


        function loadOnlineTimeline(users, timestamps){

            var usersOnline = <?php echo json_encode($item->usersOnlineThroughTime()) ?>;
            var timestampsOnline = <?php echo json_encode($item->timestampsThroughTime()) ?>;


            if(users && timestamps){
                usersOnline = users;
                timestampsOnline = timestamps;
            }

            var dataOnlineTimeline = {
                datasets: [{
                    data: usersOnline,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                }],
                labels: timestampsOnline
            };


            var timelineChart = new Chart(document.getElementById('online_timeline'), {
                data: dataOnlineTimeline,
                type: 'line',
                options: {
                    animation: false,
                    legend : {
                        display: false
                    },
                    gridLines : {
                        lineWidth: 0.5
                    },
                    tooltips: {
                        enable: false,
                        titleFontSize: 1
                    },
                    scales: {
                        yAxes: [{
                            display: true,
                            ticks: {
                                stepValue: 1,
                                beginAtZero: true,
                                userCallback: function(label, index, labels) {
                                    // when the floored value is the same as the value we have a whole number
                                    if (Math.floor(label) === label) {
                                        return label;
                                    }

                                },
                            }
                        }]
                    }
                }
            });

        }

        loadOnlineTimeline();

        setInterval(function()
        {
            var fetch = true;
            var url = '{!! route('proyectos.get.online.timeline') !!}';
            $.ajax(
                {
                    type : 'get',
                    url : url,
                    dataType : 'json',
                    data : {
                        'proyecto_id': '{!! $item->id !!}',
                        'fetch' : fetch
                    },
                    success : function(data) {
                        loadOnlineTimeline(data.users, data.timestamps);
                    },
                });

        }, 300000);



        // ================================================================================================
        // SetInterval de usuarios online
        // ================================================================================================


        setInterval(function()
        {
            var fetch = true;
            var url = '{!! route('proyectos.get.connected') !!}';
            $.ajax(
                {
                    type : 'get',
                    url : url,
                    dataType : 'json',
                    data : {
                        'proyecto_id': '{!! $item->id !!}',
                        'fetch' : fetch
                    },
                    success : function(data) {

                        if(data.conectados === 1){
                            conectados = data.conectados + ' conectado';
                        } else {
                            conectados = data.conectados + ' conectados';
                        }

                        $('#conectadosDiv').html('');
                        $('#conectadosDiv').html(conectados);

                        loadConnectedUsers(data.inscriptos, data.conectados, data.porcentaje);

                    },
                });

        }, 10000);


    </script>


@endsection