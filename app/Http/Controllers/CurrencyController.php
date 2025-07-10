<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CurrencyController extends Controller
{
    public function index()
    {
        // List of sample currencies
        $currencies = ['USD', 'INR', 'EUR', 'GBP', 'JPY'];
        return view('index', compact('currencies'));
    }
    
    public function convert(Request $request)
    {
        $from = $request->from;
        $to = $request->to;
        $amount = $request->amount;
        $api_key = env('API_KEY');
        
        try {
                // $response = Http::get("https://v6.exchangerate-api.com/v6/{$api_key}/convert", [           
                // 'from' => $from,
                // 'to' => $to,
                // 'amount' => $amount
            // ]);   
                $url = "https://v6.exchangerate-api.com/v6/{$api_key}/pair/{$from}/{$to}/{$amount}";  


                $response = Http::get($url);
            
            //dd($response->json());
            if ($response->successful()) {
                $result = $response->json();
                return view('result', [
                    'from' => $from,
                    'to' => $to,
                    'amount' => $amount,
                    'converted' => $result['conversion_result']
                    
                ]);
            }
        } catch (\Exception $e) {
            return back()->with('error', 'API Error: ' . $e->getMessage());
        }
    }
}
