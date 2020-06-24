<?php
namespace NickNickIO\Octoprint\Requests;

use NickNickIO\Octoprint\Connector;
use NickNickIO\Octoprint\Response;

class Request
{

    /**
     * @var string
     */
    protected $resource;

    /**
     * @var Connector
     */
    protected $connector;

    /**
     * Request constructor.
     * @param Connector $connector
     */
    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
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
            return new $resource($resources[$array_key]);
        }

        foreach($resources[$array_key] as $resource_string) {
            $response[] = new $resource($resource_string);
        }

        if (count($response) == 1) {
            return collect($response)->first();
        }

        // Fallback for when a single resource has multiple arrays.
        if (array_keys($resources)[0] == $array_key) {
            return new $resource($resources[$array_key]);
        }

        return $response;
    }

    protected function response(int $code)
    {
        return (new Response($code))->response;
    }

}