<?php
namespace NickNickIO\Octoprint\Requests;

use NickNickIO\Octoprint\Connection;

class Request
{

    /**
     * @var string
     */
    protected $resource;

    /**
     * @var Connection
     */
    protected $connection;

    /**
     * DropletInterface constructor.
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @param array $resources
     * @param $resource
     * @param $array_key
     * @return array
     */
    protected function load(array $resources, $resource, $array_key)
    {
        $response = [];

        if (!is_array(collect($resources[$array_key])->first())) {
            $class = "NickNickIO\Octoprint\Resources\\" . $resource;
            return new $class($resources[$array_key]);
        }

        foreach($resources[$array_key] as $resource_string) {
            $class = "NickNickIO\Octoprint\Resources\\" . $resource;
            $response[] = new $class($resource_string);
        }

        if (count($response) == 1) {
            return collect($response)->first();
        }

        return $response;
    }

}