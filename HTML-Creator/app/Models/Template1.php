<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template1 extends Model
{
    use HasFactory;

    public function getHTML($req):String {
        $html = '<!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>' . $req->title . '</title>
                    <style> * { margin: 0; padding: 0; } </style>
                </head>
                <body style="background-color: rgb(200, 233, 233); font-family: Arial, Helvetica, sans-serif;">
                    <div id="main" style="width: 60%; padding-left: 20%; min-height: 90vh;">
                        <h1 style="padding-top: 10vh; text-decoration: underline;">' . $req->title . '</h1>
                        <h4 style="padding-top: 1vh;">Written By: ' . $req->author . '</h4>
                        <h5 style="line-height: 135%;">Published ' . $req->timestamp . '</h5>
                        <p style="padding-top: 4vh; line-height: 150%;">' . $req->body . '</p>
                    </div>
                </body>
                <footer style="height: 10vh; display: flex;">
                    <div id="one" style="width: 30%; line-height: 10vh; padding-left: 20%;"><h4>Created using HTML-Creator</h4></div>
                    <div id="two" style="width: 30%; line-height: 10vh; text-align: right;"><p>&copy; 2021</p></div>
                </footer>
            </html>';
        return $html;
    }
}
