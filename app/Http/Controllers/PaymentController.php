<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BlessDarah\PhpCampay\Campay;

class PaymentController extends Controller
{
    protected $campay;

    public function __construct(Campay $campay)
    {
        $this->campay = $campay;
    }

    public function processPayment(Request $request)
    {
        // Retrieve necessary data from the request
        $amount = $request->input('amount');
        // Other relevant data

        // Call the Campay library to process the payment
        try {
            $response = $this->campay->collect([
                'amount' => $amount,
                'currency' => 'XAF', // Assuming XAF currency
                // Add more payment parameters as needed
            ]);

            // Handle the payment response
            // For example, you can log the response or update the order status

            return redirect()->route('thank-you')->with('success', 'Payment successful.');
        } catch (\Exception $e) {
            // Handle any exceptions or errors
            return redirect()->route('checkout')->with('error', 'Payment failed. Please try again.');
        }
    }
}
