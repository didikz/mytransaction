<?php

namespace Mytransaction\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'role', 'status'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeNoFilter($query)
    {
        return $query;
    }

    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeActive($query)
    {
        return $query->where('status', '=', 1);
    }

    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeInactive($query)
    {
        return $query->where('status', '=', 0);
    }

    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeAdminRole($query)
    {
        return $query->where('role', '=', 'admin');
    }

    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeManagerRole($query)
    {
        return $query->where('role', '=', 'manager');
    }

    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeStaffRole($query)
    {
        return $query->where('role', '=', 'staff');
    }

    /**
     * @param $query
     * @param $id
     *
     * @return mixed
     */
    public function scopeModelId($query, $id)
    {
        return $query->where('id', '=', $id);
    }

    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeCreatedAtDesc($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    /**
     * @param $query
     * @param array $relationships
     *
     * @return mixed
     */
    public function scopeWithRelationships($query, $relationships = [])
    {
        if(count($relationships) > 0) {
            return $query->with($relationships);
        }
        return $query;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions()
    {
        return $this->hasMany('Mytransaction\Models\Transaction');
    }
}
