<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

    protected $table = 'permissions';

    /**
     * A permission can be applied to roles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * A permission can be applied to roles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function modules()
    {
        return $this->belongsToMany(Module::class);
    }
}