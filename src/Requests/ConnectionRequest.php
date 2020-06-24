<?php
namespace NickNickIO\Octoprint\Requests;

use NickNickIO\Octoprint\Interfaces\ConnectionInterface;
use NickNickIO\Octoprint\Resources\ConnectionResource;
use NickNickIO\Octoprint\Response;

class ConnectionRequest extends Request implements ConnectionInterface
{

    public function show()
    {
        $resource = $this->connector->get('/connection');
        return $this->load(['connection' => $resource], ConnectionResource::class, 'connection');
    }

    public function connect()
    {
        $this->connector->post('/connection', ['command' => 'connect']);
        return $this->response(200);
    }

    public function disconnect()
    {
        $this->connector->post('/connection', ['command' => 'disconnect']);
        return $this->response(200);
    }
}