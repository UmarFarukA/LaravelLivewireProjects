<?php

namespace App\Livewire\Receipt;

use App\Models\Payment;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;

class Download extends Component
{
    public $payment;
    public function download($payment_id)
    {

        $this->payment = Payment::with("user")->find($payment_id);


        $pdf = Pdf::loadView("pdf.receipt", [
            "payment" => $this->payment
        ]);

        return response()->streamDownload(
            fn () => print($pdf->stream()),
            'receipt_' . $this->payment->id. '.pdf'
        );
    }
    public function render()
    {
        return view('livewire.receipt.download');
    }
}
