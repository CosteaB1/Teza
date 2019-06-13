<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objects extends Model
{
    protected $fillable = ['name', 'note'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teachers()
    {
        return $this->hasMany(Teachers::class, 'object_id', 'id');
    }

    public function notes()
    {
        return $this->hasMany(Notes::class, 'object_id', 'id');
    }

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
