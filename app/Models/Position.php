<?php
namespace Models;

use Illuminate\Database\Eloquent\Model;

final class Position extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'position';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idx',
        'position_name',
        'company',
        'city',
        'date_started',
        'date_left'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date_started' => 'date',
        'date_left' => 'date'
    ];
}
