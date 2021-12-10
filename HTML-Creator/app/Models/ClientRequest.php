<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientRequest extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'title', 'body', 'template', 'timestamp'
    ];

    public $title = 'default';
    public $body = 'default';
    public $template = 1;
    public $timestamp;
}