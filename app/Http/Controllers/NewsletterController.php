<?php

namespace Kallfu\Http\Controllers;

use Illuminate\Http\Request;
use Kallfu\Http\Controllers\AppBaseController as AppBaseController;
use Kallfu\Models\Newsletter;

class NewsletterController extends AppBaseController
{
    private $data;

    public function index()
    {
        $this->data['newsletters'] = Newsletter::all();
        return view('newsletter.index')->with($this->data);
    }

    public function destroy(Request $request, $id)
    {
        $newsletter = Newsletter::find($id);
        $newsletter->delete();

        return redirect()->back()->with('ok', 'Suscripción eliminada con éxito.');
    }

}
