<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany(Students::class, 'class_id', 'id');
    }

    /**
     * @return array
     */
    public static function validateStudents()
    {
        return [
            'name' => 'required|string',
        ];
    }
}
