<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payments; // Assuming you have a Payment model
use App\Helpers\PaystackHelper;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log; // Add this import

class PaymentsController extends Controller
{
    // Show the payment form
    public function showPaymentForm()
    {
        return view('payments.form'); // Ensure you have a Blade template at resources/views/payments/form.blade.php
    }

    // Handle payment submission
    public function processPayment(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

            // processPayment

        $reference = PaystackHelper::genTranxRef();

        $payment = Payments::create([
            'amount' => $request->amount,
            'status' => 'pending',
            'reference' => $reference,
            'user_id' => auth()->id(),
        ]);

        //connect to paystack API
        $paystackSecretKey = env('PAYSTACK_SECRET_KEY');
        $response = Http::withToken($paystackSecretKey)->post('https://api.paystack.co/transaction/initialize', [
            'email' => $request->email,
            'amount' => $request->amount * 100,
            'reference' => $reference, // important!
            'callback_url' => route('payment.callback'),
        ]);

        // then redirect...

        


        if ($response->successful()) {
            $paymentData = $response->json();
            return redirect($paymentData['data']['authorization_url']);
        }

        return back()->withErrors('Unable to process payment. Please try again.');
    }

    // Handle Paystack callback
    public function handleCallback(Request $request)
    {
        $paystackSecretKey = env('PAYSTACK_SECRET_KEY');
        $response = Http::withToken($paystackSecretKey)->get('https://api.paystack.co/transaction/verify/' . $request->reference);
        
            
if ($response->successful() && $response->json()['data']['status'] === 'success') {
    $reference = $response->json()['data']['reference']; // safer than trusting $request
    $payment = Payments::where('reference', $reference)->first();

    if (!$payment) {
        Log::error('Payment not found for reference: ' . $reference);
    }

    if ($payment) {
        $payment->status = 'completed'; // manually set the status
        $payment->save();               // save it to the database
        Log::info('Payment updated: ' . $payment->reference);
    }

    return redirect()->route('dashboard.user');
}

        return redirect()->route('payment.failed');
    }


}
