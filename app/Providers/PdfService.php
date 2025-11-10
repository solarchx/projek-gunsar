<?php

namespace App\Services;

use App\Models\Rujukan;
use Illuminate\Support\Facades\View;
use Dompdf\Dompdf;
use Dompdf\Options;

class PdfService
{
    protected $dompdf;

    public function __construct()
    {
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $this->dompdf = new Dompdf($options);
    }

    public function generatePdf($rujukanId)
    {
        $rujukan = Rujukan::findOrFail($rujukanId);
        $view = View::make('rujukan.pdf', compact('rujukan'));

        $this->dompdf->loadHtml($view->render());
        $this->dompdf->setPaper('A4', 'portrait');
        $this->dompdf->render();

        return $this->dompdf->stream('rujukan_' . $rujukanId . '.pdf', ['Attachment' => false]);
    }
}