<?php

namespace App\Http\Controllers;

use App\Models\ClientRequest;
use Illuminate\Http\Request;

class ClientRequestController extends Controller
{
    public function getAll() {
        return ClientRequest::all();
    }

    public function newRequest() {
        \request()->validate([
            'author' => 'required',
            'title' => 'required',
            'body' => 'required',
            'template' => 'required',
        ]);

        $request = ClientRequest::create([
            'author' => \request('author'),
            'title' => \request('title'),
            'body' => \request('body'),
            'template' => \request('template'),
            'timestamp' => date('Y-m-d h:i:s')
        ]);

        return $request->generate();
    }
}
