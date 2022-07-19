<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
     public function store(){
         $user = auth()->user();
         $pdf = PDF::loadView('pdf.layout1', ['user' => $user ])->setPaper('a4' ,'por')->setOptions(['defaultFont' => 'sans-serif']);
         return $pdf->stream('abedok.pdf');
     }
}
