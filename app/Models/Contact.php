<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * @method static create(array $array)
 */
class Contact extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
//    protected $fillable = [
//        'user_id',
//        'name',
//        'phone',
//        'email'
//    ];

    protected $guarded = [];
//    protected $with     = ['user'];

    /**
     * Get the users that owns the contact.
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
//            ->withPivot(['user_id'])
//            ->wherePivot('user_id', '=', Auth::user()->id);
    }
}
