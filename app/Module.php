<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{

    protected $table = 'modules';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'label', 'route', 'icon'];

    /**
     * A module can be have many permissions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }


    /**
     * List all modules present in the module table
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function listAvailableModules()
    {
        return $this->all();
    }

}
