<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class RajaOngkirController extends Controller
{
    public function getProvinces()
    {
        $response = Http::withHeaders(['key' => env('RAJAONGKIR_API_KEY')])->get(env('RAJAONGKIR_BASE_URL') . 'destination/province');
        return response()->json($response->json());
    }
    public function getCities(Request $request)
    {
        $provinceId = $request->input('province_id');

        $response = Http::withHeaders(['key' => env('RAJAONGKIR_API_KEY')])->get(env('RAJAONGKIR_BASE_URL') . 'destination/city/' . $provinceId);
        return response()->json($response->json());
    }
    public function getCost(Request $request)
    {
        $origin = (int) $request->input('origin');
        $destination = (int) $request->input('destination');
        $weight = (int) $request->input('weight');
        $courier = $request->input('courier');
        $response = Http::asForm()->withHeaders(['key' => env('RAJAONGKIR_API_KEY')])->post(env('RAJAONGKIR_BASE_URL') . 'calculate/district/domestic-cost', ['origin' => $origin, 'destination' => $destination, 'weight' => $weight, 'courier' => $courier,]);
        return response()->json($response->json());
    }
}