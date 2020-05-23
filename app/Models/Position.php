<?php
namespace Models;

final class Position
{
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
