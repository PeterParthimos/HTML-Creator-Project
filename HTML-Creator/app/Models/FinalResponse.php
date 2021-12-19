<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class FinalResponse extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $reqID, $author, $title, $body, $template, $timestamp;

    protected $fillable = [
        'reqID', 'author', 'title', 'body', 'template', 'timestamp'
    ];

    public function new($req): string {
        $this->reqID = $req->id;
        $this->author = $req->author;
        $this->title = $req->title;
        $this->body = $req->body;
        $this->template = $req->template;
        $this->timestamp = $req->timestamp;

        $filename = $this->reqID . '_HTML-CREATOR.html';

        switch ($req->template) {
            case 2:
                $html = (new Template2())->getHTML($req);
                break;
            case 3:
                $html = (new Template3())->getHTML($req);
                break;
            default:
                $html = (new Template1())->getHTML($req);
                break;
        }

        Storage::disk('s3')->put($filename, $html);
        return Storage::disk('s3')->url($filename);
    }
}
