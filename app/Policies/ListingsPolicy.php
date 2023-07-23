<?php

namespace App\Policies;

use App\Models\Listings;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ListingsPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->hasRole('admin')) {
            return true;
        }
    }

    public function browse(User $user){
        // return $user->role_id == 3;
        return $user->hasRole('seller');
    }

    public function read(User $user, Listings $listings){
        if(empty($listings->shop)){
            return false;
        }
        return $user->id == $listings->shop->user_id;
    }


    /**
     * Determine whether the user can update the Listings.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Listings  $listings
     * @return \Illuminate\Auth\Access\Response|bool
     */

    public function edit(User $user, Listings $listings)
    {
        if(empty($listings->shop)){
            return false;
        }
        return $user->id == $listings->shop->user_id;
    }
    /**
     * Determine whether the user can create Listingss.
     *
     * @param  \App\Models\User   $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function add(User $user)
    {
        return $user->hasRole('seller');
    }

    /**
     * Determine whether the user can delete the Listings.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Listings  $listings
     * @return mixed
     */

     public function delete(User $user, Listings $listings)
     {
        if(empty($listings->shop)){
            return false;
        }
         return $user->id == $listings->shop->user_id;
     }

}
