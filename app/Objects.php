<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objects extends Model
{
    protected $fillable = ['name'];

    /**
     * @return array
     */
    public static function validateObjects()
    {
        return [
            'name' => 'required|string',
        ];
    }
}
