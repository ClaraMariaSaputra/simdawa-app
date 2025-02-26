<?php
$pdf = new FPDF("P", "cm", "A4");
$pdf->AddPage();
$pdf->SetTitle("Laporan Data Persyaratan Beasiswa");

// Header
$pdf->SetFont("Arial", "B", 16);
$pdf->Cell(19, 1, "KEMAHASISWAAN UNISKA BANJARMASIN", 0, 1, "C");
$pdf->SetFont("Arial", "", 11);
$pdf->Cell(19, 1, "Alamat: Jalan Adhyaksa No.3 Kel. Sungai Miai Kec. Banjarmasin Utara", 0, 1, "C");
$pdf->Line(1, 3, 20, 3);
$pdf->Ln();

// Subjudul
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(19, 1, "Laporan Data Persyaratan Beasiswa", 0, 1, "C");
$pdf->Ln();

// Header Tabel
$pdf->SetFont("Arial", "B", 11);
$pdf->SetFillColor(0, 255, 0);
$pdf->Cell(1, 1, "No", 1, 0, "C", true);
$pdf->Cell(10, 1, "Nama Persyaratan", 1, 0, "C", true);
$pdf->Cell(8, 1, "Keterangan", 1, 1, "C", true);

// Isi Tabel
$pdf->SetFont("Arial", "", 11);
$no = 1;
foreach ($persyaratan as $a) {
    $pdf->Cell(1, 1, $no++, 1, 0, "C");
    $pdf->Cell(10, 1, $a->nama_persyaratan, 1, 0, "C");
    $pdf->Cell(8, 1, $a->keterangan, 1, 1, "C");
}

// Output
$pdf->Output("I", "Laporan Data Persyaratan Beasiswa.pdf");
