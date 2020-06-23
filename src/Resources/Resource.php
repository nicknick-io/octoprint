<?php
namespace NickNickIO\Octoprint\Resources;

class Resource
{

    /**
     * Resource constructor.
     * @param array $properties
     */
    public function __construct(array $properties = [])
    {
        foreach($properties as $name => $property) {
            $this->{$name} = $property;
        }
    }

}