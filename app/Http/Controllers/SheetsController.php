<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SheetsController extends Controller
{
    public function viewSheets(){
        $client = new \Google_Client();
        $client->setApplicationName('SXCGrandSummit');
        $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
        $client->setAccessType('offline');
        $client->setAuthConfig(__DIR__ . '/../../../storage/credentials.json');

        $service = new \Google_Service_Sheets($client);
        $spreadsheetId = "1XsMr5U1kWZ0lu8jQrUAv7yS0Zz_0MO1ux4B2d2YzJKE";

        $range = "PreEvent2!A1:C4";
        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        $sheets = ["dataset" => $response->getValues()];

        return view("sheets", $sheets);
    }
}
