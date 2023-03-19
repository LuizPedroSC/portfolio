<?php

namespace App\Services;

use App\DTO\UserDTO;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function all()
    {
        return $this->userRepository->all();
    }

    public function create($request)
    {
        $userDTO = new UserDTO($request);
        $this->encryptPassword($userDTO->password);
        $user = $this->userRepository->create($userDTO->toArray());
        return $user;
    }

    public function find(int $user_id)
    {
        $user = $this->userRepository->find($user_id);
        return $user;
    }

    public function update(int $user_id, $request)
    {
        $userDTO = new UserDTO($request);
        $user = $this->userRepository->find($user_id);
        $this->userRepository->update($user, $userDTO->toArray(['name', 'email']));
        return $user;
    }

    public function destroy(int $user_id)
    {
        $user = $this->userRepository->find($user_id);
        $destroy = $this->userRepository->destroy($user);
        return $destroy;
    }

    // metodos Auxiliares;
    private function encryptPassword(&$plaintext)
    {
        $plaintext = Hash::make($plaintext);
    }
}