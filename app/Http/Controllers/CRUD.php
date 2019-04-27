<?php

namespace App\Http\Controllers;

use View;
use File;
use Storage;
use Illuminate\Http\Request;

class CRUD extends Controller
{
    public function index()
    {
        $data_request_detail = "data_request_detail";
        return view("get", ['data_request_detail' => $data_request_detail]);
    }

    public function __construct()
    { }

    public function viewthanks()
    {
        $nama = "bejo";
        return view("thanks", ['nama' => $nama]);
    }

    public function create(Request $request)
    {
        $userinput = $request->all();
        $arraytext = $userinput["Name"] . "," . $userinput["Email"] . "," . $userinput["Date"] . ",+62" . $userinput["Phone"] . "," . $userinput["Gender"] . "," . $userinput["Address"];
        $currentTime = time();
        $fileName = $userinput["Name"] . "-" . date('dmYhis', $currentTime);
        Storage::disk('local')->put($fileName . ".txt", $arraytext);
        return view("thanks", ['nama' => $userinput["Name"]]);
    }

    public function viewtext($fileName)
    {
        if (strlen($fileName) < 15) {
            return "error" . $fileName;
        } else {
            if (!strpos($fileName, ".txt")) {
                $fileName .= ".txt";
            }
            $storage = Storage::disk('local')->get($fileName);
            $txtarrayvalue = explode(',', $storage);
            //phonenumber
            $txtarrayvalue[3] = substr($txtarrayvalue[3], 3);
            return view("welcome", ['value' => $txtarrayvalue]);
        }
    }
}
