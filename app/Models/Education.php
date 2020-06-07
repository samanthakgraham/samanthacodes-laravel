<?php
namespace Models;

use Illuminate\Database\Eloquent\Model;

final class Education extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'education';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'institution',
        'degree',
        'program',
        'city',
        'year_completed'
    ];
}
