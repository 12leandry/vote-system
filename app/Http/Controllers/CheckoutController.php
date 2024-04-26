<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class CheckoutController extends Controller
{


    public function show()
    {
        return view('checkout');
    }

    public function process(Request $request)
    {
        // Retrieve billing information from the request

        // Construct the payment payload
        $paymentData = [
            'amount' => $request->input('price'), // Assuming the price is passed from the shopping page
            'currency' => 'XAF', // Assuming the currency is XAF
            // Add more payment parameters as needed
        ];

        // Get the access token from Campay
        $accessToken = $this->getAccessToken();

        // Make a POST request to Campay's API to process the payment
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $accessToken,
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->post('https://campay.net/api/', $paymentData);

        // Check if the request was successful
        if ($response->successful()) {
            // Process the payment response and handle accordingly
            return redirect()->route('thank-you'); // Redirect to thank you page
        } else {
            // Handle the error if the request was not successful
            return back()->withError('Payment failed. Please try again.'); // Redirect back with error message
        }
    }

    private function getAccessToken()
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->post('https://campay.net/api/token', [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'username' => env('CAMPAY_USERNAME'),
                'password' => env('CAMPAY_PASSWORD'),
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        return $data['access_token'];
    }




}
