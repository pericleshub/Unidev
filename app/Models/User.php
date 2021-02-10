<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password',];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function filterAll($request)
    {
        $users = User::where('name', 'like', '%' . $request->get('keyword') . '%');

        switch ($request->get('order_by')) {
            case 'id':
                $users = $users->orderBy('id', 'asc');
                break;
            case 'newest':
                $users = $users->orderBy('created_at', 'desc');
                break;
            case 'older':
                $users = $users->orderBy('created_at', 'asc');
                break;
        }

        return $users->paginate(10);
    }

}
