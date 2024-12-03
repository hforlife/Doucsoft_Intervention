<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    //
    public function PDF(){
        
        //Variables
        $titre = "FICHE D'INFORMATION - ANALYSE & AUDIT";
        
        //Contenu
        $pdf = new Fpdf('P', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial', '', 16);

        // Header
        $pdf->Cell(280, 40, $titre, 0, 1, 'C');
        
        //Fin
        $pdf->Output();
    }
}
