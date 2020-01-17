<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;
use PDF;

class PdfController extends Controller
{
    public function geraPdf()
    {
        $contatos = Contato::all();

        $pdf = PDF::loadView('pdf',compact('contatos'));

        return $pdf->setPaper('a4')->stream('Lista_de_Contatos.pdf');
    }
}
