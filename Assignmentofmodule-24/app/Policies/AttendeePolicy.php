<?php

namespace App\Policies;

use App\Models\Attendee;
use App\Models\User;

class AttendeePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(?User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(?User $user, Attendee $attendee): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Attendee $attendee): bool
    {
        return $user->id === $attendee->user_id || $user->id = $attendee->event->user_id;
    }

}
