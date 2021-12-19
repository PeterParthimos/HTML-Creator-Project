<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientRequest extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'author', 'title', 'body', 'template', 'timestamp', 'reqID'
    ];

    public function generate(): string {
        return (new FinalResponse)->new($this);
    }
}
