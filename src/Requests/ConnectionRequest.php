<?php
namespace NickNickIO\Octoprint\Requests;

use NickNickIO\Octoprint\Interfaces\ConnectionInterface;
use NickNickIO\Octoprint\Resources\ConnectionResource;

class ConnectionRequest extends Request implements ConnectionInterface
{
    public function get()
    {
        $resource = $this->connector->get('/connection');
        return $this->load(['connection' => $resource], ConnectionResource::class, 'connection');
    }
}