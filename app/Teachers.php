<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    protected $fillable = ['object_id', 'name'];

    /**
     * @return array
     */
    public static function validateTeachers()
    {
        return [
            'name'      => 'required|string',
            'object_id' => 'required|integer|exists:objects,id',
        ];
    }
}
