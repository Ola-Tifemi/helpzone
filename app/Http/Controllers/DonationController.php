<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DonationController extends Controller
{
    public function download()
{
    $user = auth()->user();
    $payments = $user->payments()->latest()->get();

    $pdf = Pdf::loadView('donations.pdf', compact('user', 'payments'));
    return $pdf->download('my_donations.pdf');
}
}
