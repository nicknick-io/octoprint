<?php
namespace NickNickIO\Octoprint;

use NickNickIO\Octoprint\Requests\ConnectionRequest;
use NickNickIO\Octoprint\Requests\UserRequest;

class Octoprint
{

    /**
     * @var Connector
     */
    protected $connector;

    /**
     * @var UserRequest
     */
    public $user;

    /**
     * @var ConnectionRequest
     */
    public $connection;

    /**
     * Octoprint constructor.
     * @param $ip
     * @param $token
     */
    public function __construct($ip, $token)
    {
        $this->connector = new Connector($ip, $token);
        $this->user = new UserRequest($this->connector);
        $this->connection = new ConnectionRequest($this->connector);
    }

}