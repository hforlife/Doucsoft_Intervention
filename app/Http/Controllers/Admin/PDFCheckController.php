<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checklist;
use App\Models\Intervention;
use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class PDFCheckController extends Controller
{
    //
    public function PDF($intId)
    {
        $info = Checklist::find($intId);

        // Décoder les données JSON
        $type = json_decode($info->data, true);
        $domaine = $info->intervention->name;

        $sentence = "CHECKLIST D'INTERVENTION";

        $pdf = new CustomPDF(); // Utilisation de la classe étendue
        $pdf->AliasNbPages();
        $pdf->AddPage();

        // Contenu principal
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, utf8_decode($sentence), 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 15);
        $pdf->SetTextColor(0, 0, 200);
        $pdf->Cell(0, 10, utf8_decode($domaine), 0, 1, 'C');

        // Générer le tableau avec les données décodées
        $this->generateTable($pdf, $type);

        $pdf->Output();
    }

    // Méthode privée pour générer un tableau
    private function generateTable($pdf, $data)
    {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->SetTextColor(0, 0, 0);

        // En-tête du tableau
        $pdf->Cell(60, 10, utf8_decode('N°'), 1, 0, 'C');
        $pdf->Cell(60, 10, 'Contenu', 1, 0, 'C');
        $pdf->Cell(60, 10, 'Check', 1, 0, 'C');
        $pdf->Ln();

        // Lignes du tableau
        $pdf->SetFont('Arial', '', 12);
        $i = 1; // Compteur de ligne
        foreach ($data as $row) {
            $pdf->Cell(60, 10, utf8_decode($i), 1, 0, 'C');
            $pdf->Cell(60, 10, utf8_decode($row['content'] ?? 'N/A'), 1, 0, 'C'); // Content
            $checkText = 'N/A';
            if (isset($row['validCheck'])) {
                    if($row['validCheck'] == 'on'){
                        $checkText = 'V';
                    }else if($row['validCheck'] != 'on'){
                        $checkText = 'X';
                    }
                }
                $pdf->Cell(60, 10, utf8_decode($checkText), 1, 0, 'C');
                // $pdf->Cell(20, 10, utf8_decode($row['validCheck'] ?? 'N/A'), 1, 0, 'C'); // Check
                $pdf->Ln();
                $i++; // Incrémenter le numéro de ligne
            }
        }
    }


// Classe personnalisée pour gérer le header et le footer
class CustomPDF extends Fpdf
{
    // Header personnalisé
    public function Header()
    {
        // Logo
        $this->Image('assets/images/DoucSoft-black.png', 10, 10, 190);
        $this->Ln(22); // Décalage vers le bas
    }

    // Footer personnalisé
    public function Footer()
    {
        // Positionnement à gauche en bas
        $this->SetY(-25);
        $this->SetFont('Arial', 'I', 10);
        $this->Cell(0, 10, '+223 44 50 08 31 ', 0, 0);
        // Positionnement à gauche en bas email
        $this->SetY(-20);
        $this->SetFont('Arial', 'I', 10);
        $this->Cell(0, 10, 'contact@doucsoft.tech', 0, 0);
        // Positionnement à droite en bas
        $this->SetY(-25);
        $this->SetFont('Arial', 'I', 10);
        $this->Cell(0, 10, '+223 76 70 50 70 ', 0, 0, 'R');
        // Positionnement à droite en bas email
        $this->SetY(-20);
        $this->SetFont('Arial', 'I', 10);
        $this->Cell(0, 10, 'support@doucsoft.tech', 0, 0, 'R');
        // Positionnement à 1.5 cm du bas
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}
