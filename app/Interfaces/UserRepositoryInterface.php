<?php

namespace App\Interfaces;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

interface UserRepositoryInterface
{
    public function all(): Collection;

    public function create(array $data): User;

    public function find(int $user_id): User;

    public function update(User &$user, array $data): bool;

    public function destroy(User $user): bool;
}