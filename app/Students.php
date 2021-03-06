<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = [
        'name',
        'class_id',
    ];

    protected $table = 'students';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function classes()
    {
        return $this->belongsTo(Classes::class, 'class_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notes()
    {
        return $this->hasMany(Notes::class, 'student_id', 'id');
    }

    public static function validateStudents()
    {
        return [
            'name'      => 'required|string',
            'class_id'  => 'required|integer|exists:students,id',
        ];
    }
}
