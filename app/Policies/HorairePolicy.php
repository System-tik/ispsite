<?php

namespace App\Policies;

use App\Models\Horaire;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class HorairePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Horaire $horaire): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if($user->hasRole('admin') && $user->hasPermissionTo('créer horaire')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Horaire $horaire): bool
    {
        if($user->hasRole('admin') && $user->hasPermissionTo('modifier horaire')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Horaire $horaire): bool
    {
        if($user->hasRole('admin') && $user->hasPermissionTo('supprimer horaire')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Horaire $horaire): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Horaire $horaire): bool
    {
        //
    }
}
