<?php

namespace App\Http\Controllers;

use App\Histoire;
use PDF;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function printPDF()
    {
        // This  $data array will be passed to our PDF blade
        $data = [
            'title' => 'First PDF for Medium',
            'heading' => 'Hello from 99Points.info',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.'
            ];

        $pdf = PDF::loadView('pdf_view', $data);
        return $pdf->download('medium.pdf');
    }

    public function print($debut, $fin)
    {

        $data = [
            'title' => 'First PDF for Medium',
            'debut' => $debut,
            'fin' => $fin
        ];

        $histoire = new Histoire();
        $histoire->debut = $debut;
        $histoire->fin = $fin;
        $histoire->save();

        //$data = 6001;
        $pdf = PDF::loadView('pdf_view', $data);

        $name = $debut.'-'.$fin.'.pdf';

        return $pdf->download($name);

        //dd($fin);
    }
}
