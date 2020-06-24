<?php
namespace NickNickIO\Octoprint\Interfaces;

interface ConnectionInterface
{
    /**
     * Used to show data about the current connection.
     * @return mixed
     */
    public function show();

    /**
     * Used to connect to the printer.
     * @return mixed
     */
    public function connect();

    /**
     * Used to disconnect the printer.
     * @return mixed
     */
    public function disconnect();
}