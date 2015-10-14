<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCompany extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_company';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['company_id', 'user_id', 'role_id'];

    /**
     * Map User, Company, Role.
     * @param User $user
     * @param Company $company
     * @param Role $role
     */
    public function mapUserCompanyRole(User $user, Company $company, Role $role)
    {
        $userCompanyRole = new UserCompany();
        $userCompanyRole->user_id = $user->id;
        $userCompanyRole->company_id = $company->id;
        $userCompanyRole->role_id = $role->id;
        $userCompanyRole->save();
    }
}
