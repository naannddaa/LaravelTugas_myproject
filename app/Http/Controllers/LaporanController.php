<?php
namespace App\Http\Controllers;

use PDF;
use App\Models\pegawai;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;

class LaporanController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Laporan Pegawai',
            'tanggal' => date('d-m-Y'),
            'pegawai' => pegawai::all()
        ];

        $pdf = FacadePdf::loadView('laporan.pegawai', $data);
                //   ->setPaper('A4', 'portrait');

        return $pdf->download('laporan-pegawai.pdf');
    }

    public function index()
{
    $data = [
        'title' => 'Laporan Pegawai',
        'tanggal' => date('d-m-Y'),
        'pegawai' => pegawai::all(),
    ];

    return view('laporan.pegawai', $data);
}
}
