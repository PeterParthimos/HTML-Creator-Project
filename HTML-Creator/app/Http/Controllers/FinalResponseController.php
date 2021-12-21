<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FinalResponse;

class FinalResponseController extends Controller
{
    public function getAll() {
        return FinalResponse::all();
    }

    public function newResponse($reqID, $file, $url, $time) {
        return FinalResponse::create([
            'requestID' => $reqID,
            'filename' => $file,
            'url' => $url,
            'timestamp' => $time
        ]);
    }
}
