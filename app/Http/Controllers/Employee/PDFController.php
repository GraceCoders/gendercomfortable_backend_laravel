<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y')
        ];
           
        $pdf = Pdf::loadView('employee.testpdf', $data);
     
        return $pdf->download('tutsmake.pdf');
    }
}
