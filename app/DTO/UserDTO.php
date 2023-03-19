<?php

namespace App\DTO;

class UserDTO extends DTO
{
    public $id;
    public string $name;
    public string $email;
    public string $password;

    public function __construct($request, $id = null)
    {
        $this->id = $id;
        $this->name = $request['nome'];
        $this->email = $request['email'];
        $this->password = $request['senha'] ?? '';
    }
}