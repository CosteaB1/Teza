<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    protected $fillable = ['object_id', 'name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function objects()
    {
        return $this->belongsTo(Objects::class, 'object_id', 'id');
    }

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
