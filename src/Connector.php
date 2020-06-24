<?php
namespace NickNickIO\Octoprint;

use Zttp\Zttp;

class Connector
{

    /**
     * @var Zttp
     */
    protected $zttp;

    /**
     * @var string
     */
    protected $token;

    /**
     * @var string
     */
    protected $ip;

    /**
     * @var string
     */
    protected $uri;

    /**
     * Connection constructor.
     * @param $ip
     * @param $token
     */
    public function __construct($ip, $token)
    {
        $this->ip = $ip;
        $this->token = $token;
        $this->uri = "http://{$ip}/api";
        $this->zttp = Zttp::withHeaders([
            'x-api-key' => $token,
        ]);
    }

    /**
     * @param $uri
     * @return mixed
     */
    public function get($uri)
    {
        return $this->zttp->get($this->uri . $uri)->json();
    }

}