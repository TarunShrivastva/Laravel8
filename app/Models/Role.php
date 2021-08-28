<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;


    /**
     * The users that belong to the role.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'role_owner', 'roles_id', 'owner_id' )->using(RoleUser::class); //->as('subscribe_user')// ->withTimestamps()->withPivot('status'); // should be reverse
    }

    /**
     * The users that belong to the role.
     */
    public function activeUsers()
    {
        return $this->belongsToMany(User::class, 'role_owner', 'roles_id', 'owner_id' )->wherePivot('status', 'active')->as('subscribe_user')->withTimestamps()->withPivot('status'); // should be reverse
    }

    /**
     * The users that belong to the role.
     */
    public function inActiveUsers()
    {
        return $this->belongsToMany(User::class, 'role_owner', 'roles_id', 'owner_id' )->wherePivot('status', 'inactive')->as('subscribe_user')->withTimestamps()->withPivot('status'); // should be reverse
    }
}
