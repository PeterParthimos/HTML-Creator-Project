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
        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'template' => 'required',
        ]);

        $req = new ClientRequest();

        $req->title = request('title');
        $req->body = request('body');
        $req->template = request('template');
        $time = date_create();
        $req->timestamp = date_timestamp_get($time);

        $req->save();
    }
}
