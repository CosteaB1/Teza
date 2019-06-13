<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $fillable = ['student_id', 'object_id', 'note'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function students()
    {
        return $this->belongsTo(Students::class, 'student_id', 'id');
    }

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
    public static function validateNotes()
    {
        return [
            'note'       => 'required|integer|between:1,10',
            'student_id' => 'required|integer|exists:students,id',
            'object_id'  => 'required|integer|exists:objects,id',
        ];
    }
}
