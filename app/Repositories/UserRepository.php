<?php

namespace App\Repositories;

use App\Models\User;
use App\Interfaces\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class UserRepository implements UserRepositoryInterface
{
    public function all():Collection
    {
        return User::all();
    }

    public function create(array $data):User
    {
        return User::create($data);
    }

    public function find(int $user_id):User
    {
        return User::findOrFail($user_id);
    }

    public function update(User &$user, array $data):bool
    {
        return $user->fill($data)->save();
    }

    public function destroy(User $user):bool
    {
        return $user->delete();
    }
}