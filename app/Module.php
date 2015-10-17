<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{

    protected $table = 'modules';

    /**
     * A module can be have many permissions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }
}
