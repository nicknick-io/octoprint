<?php
namespace NickNickIO\Octoprint\Requests;

use NickNickIO\Octoprint\Interfaces\UserInterface;
use NickNickIO\Octoprint\Resources\UserResource;

class UserRequest extends Request implements UserInterface
{
    public function list()
    {
        $resources = $this->connector->get('/access/users');
        return $this->load($resources, UserResource::class, 'users');
    }

    public function get(string $username)
    {
        // TODO: Implement get() method.
    }

    public function create(string $name, string $password, bool $active, array $groups = [], array $permissions = [])
    {
        // TODO: Implement create() method.
    }

    public function update(string $name, bool $active, bool $admin)
    {
        // TODO: Implement update() method.
    }
}