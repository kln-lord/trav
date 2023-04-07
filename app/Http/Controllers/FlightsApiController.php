<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FlightsApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $curl = curl_init();
        $query = $request->goingTo;
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://pexelsdimasv1.p.rapidapi.com/v1/search?query=$query&locale=en-US&per_page=15&page=1",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "Authorization: yVCKEAnEP5wJ0kHPXOuo6lejHVHxQI7AbG8vOdFde2DCqoru2TRRuG1l",
                "X-RapidAPI-Host: PexelsdimasV1.p.rapidapi.com",
                "X-RapidAPI-Key: 04b8aedfb8mshd2ba522914ded56p12c1e6jsn28ec8555dc3d"
            ],
        ]);

        $response = json_decode(curl_exec($curl));
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $photos = $response->photos;
        }

        $curl = curl_init();
        $params = [
            'limit' => 5,
            'size' => 0,
        ];
        // 'multi', 'single' or 'countries' type of request
        $DestinationiataCode="";
	    $apc = new apc('multi', $params);
        $apcResponseObj = $apc->request($request->goingTo);
        // dd($apcResponseObj);
        foreach ($apcResponseObj->airports as $airport) {
            if (!str_contains($airport->name,"All Airports") && !str_contains($airport->name,"Casablanca–Anfa")) {
                $DestinationiataCode = $airport->iata;
                break;
            }
        }
        $OriginiataCode = "";
        $apcResponseObj = $apc->request($request->goingFrom);
        foreach ($apcResponseObj->airports as $airport) {
            if (!str_contains($airport->name,"All Airports") && !str_contains($airport->name,"Casablanca–Anfa")) {
                $OriginiataCode = $airport->iata;
                break;
            }
        }
        // dd($OriginiataCode);
        // dd("https://skyscanner44.p.rapidapi.com/search-extended?adults=$request->numberOfAdults&origin=$OriginiataCode&destination=$DestinationiataCode&departureDate=$request->checkIn&cabinClass=$request->TravelClass&currency=USD&stops=0%2C1%2C2&duration=50&startFrom=00%3A00&arriveTo=23%3A59&returnStartFrom=00%3A00&returnArriveTo=23%3A59");
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://skyscanner44.p.rapidapi.com/search-extended?adults=$request->numberOfAdults&origin=$OriginiataCode&destination=$DestinationiataCode&departureDate=$request->checkIn&cabinClass=$request->TravelClass&currency=EUR&stops=0%2C1%2C2&duration=50&startFrom=00%3A00&arriveTo=23%3A59&returnStartFrom=00%3A00&returnArriveTo=23%3A59",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: skyscanner44.p.rapidapi.com",
                "X-RapidAPI-Key: e6d00f6155mshae049dc6e8e49b1p13e279jsn0312909c6605"
                //in case a41d00f77dmshe56af85ff56c5a5p1be7f1jsncc8881365fa9
                //in case 2865c1e6a6msh6168f650e2a1fafp1d122djsn027e2a47ff2d
            ],
        ]);



        $response = json_decode(curl_exec($curl));
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            // echo "origin : " . $response->itineraries->results[0]->legs[0]->origin->name . " Destination : " . $response->itineraries->results[0]->legs[0]->destination->name . " duration In Minutes : " . $response->itineraries->results[0]->legs[0]->durationInMinutes . " departure : " . $response->itineraries->results[0]->legs[0]->departure . " arrival : " . $response->itineraries->results[0]->legs[0]->arrival . " Airlines : " . $response->itineraries->results[0]->legs[0]->carriers->marketing[0]->name . "<br>";

            // // $response->airports[0] desti airport [1] src airport
            // foreach($response->itineraries->results[0]->pricing_options as $pricing_option){
            //     echo "rating : " . $pricing_option->agents[0]->rating . " for " . $pricing_option->price->amount . "$<br>";
            //     echo "get your ticker here : " . $pricing_option->url;
            // }
            // dd($apcResponseObj);
            if(empty($response->itineraries->results)) echo 'No Flights From ' . $request->goingFrom .' To '.$request->goingTo.' are Available at the moment';

            else return view('flightsSearchResults',['destination'=>$request->goingTo,'results'=>$response->itineraries->results,'photos'=>$photos]);
        }

    }
}
