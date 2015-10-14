<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'role_user';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['role_id', 'user_id'];

    /**
     * Fetch the collection of site permissions.
     *
     * @param $auth
     * @return Collection
     */
    protected function getPrimaryRole($auth)
    {
        return RoleUser::select('name as role')
            ->join('roles', 'roles.id', '=', 'role_user.role_id')
            ->where('role_user.user_id','=',$auth->user()->getAuthIdentifier())
            ->first()->role;
    }



}
