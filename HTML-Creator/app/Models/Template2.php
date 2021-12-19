<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template2 extends Model
{
    use HasFactory;

    public function getHTML($res):String {
        return '
        <html lang="en">

        </html>
        ';
    }
}
