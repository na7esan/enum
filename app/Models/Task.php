<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    private const CATEGORY = [
        1 => "MUST",
        2 => "SOMEDAY",
        3 => "DONT DO ",
    ];


    public final function getCategoryAttribute(int $num):string
    {
        return self::CATEGORY[$num];
    }
}
