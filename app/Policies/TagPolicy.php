<?php

namespace App\Policies;

use App\User;
use Spatie\Tags\Tag as Tag;
use Illuminate\Auth\Access\HandlesAuthorization;

class TagPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the tag.
     *
     * @param  \App\User  $user
     * @param  \App\Offer  $offer
     * @return mixed
     */
    public function view(User $user, Tag $tag)
    {
        return $user->role == 'admin';
    }

    /**
     * Determine whether the user can create offers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->role == 'admin';
    }

    /**
     * Determine whether the user can update the offer.
     *
     * @param  \App\User  $user
     * @param  \App\Offer  $offer
     * @return mixed
     */
    public function update(User $user, Tag $tag)
    {
        return $user->role == 'admin';
    }

    /**
     * Determine whether the user can delete the offer.
     *
     * @param  \App\User  $user
     * @param  \App\Offer  $offer
     * @return mixed
     */
    public function delete(User $user, Tag $tag)
    {
        return $user->role == 'admin';
    }

    /**
     * Determine whether the user can restore the offer.
     *
     * @param  \App\User  $user
     * @param  \App\Offer  $offer
     * @return mixed
     */
    public function restore(User $user, Tag $tag)
    {
        return $user->role == 'admin';
    }

    /**
     * Determine whether the user can permanently delete the offer.
     *
     * @param  \App\User  $user
     * @param  \App\Offer  $offer
     * @return mixed
     */
    public function forceDelete(User $user, Tag $tag)
    {
        return $user->role == 'admin';
    }
}
