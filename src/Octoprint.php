<?php
namespace NickNickIO\Octoprint;

use NickNickIO\Octoprint\Requests\UserRequest;

class Octoprint
{

    /**
     * @var Connection
     */
    protected $connection;

    /**
     * @var UserRequest
     */
    public $user;

    /**
     * Octoprint constructor.
     * @param $ip
     * @param $token
     */
    public function __construct($ip, $token)
    {
        $this->connection = new Connection($ip, $token);
        $this->user = new UserRequest($this->connection);
    }

}