<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function download(Payment $payment)
    {
        $payment->load("user");

        $pdf = Pdf::loadView("livewire.receipt.download", compact('payment'));

        return response()->streamDownload(
            fn () => print($pdf->stream()),
            'receipt_' . $payment->id. '.pdf'
        );
    }
}
