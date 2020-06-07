<?php
namespace Models;

use Illuminate\Database\Eloquent\Model;

final class PersonalInfo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'personal_info';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'city',
        'email',
        'github',
        'website'
    ];
}
