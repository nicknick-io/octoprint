<?php
namespace NickNickIO\Octoprint\Interfaces;

interface UserInterface
{
    public function list();

    public function get(string $username);

    public function create(string $name, string $password, bool $active, array $groups = [], array $permissions = []);

    public function update(string $name, bool $active, bool $admin);

}