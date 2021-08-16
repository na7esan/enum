<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * 複数代入可能な属性
     *
     * @var array
     */
    protected $fillable = ['body','category'];

    const CATEGORY = [
        1 => "MUST",
        2 => "SOMEDAY",
        3 => "DONT DO ",
    ];


    public final function getCategoryAttribute(int $num):string
    {
        return self::CATEGORY[$num];
    }
}
