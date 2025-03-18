<?php

namespace Core;

use PDO;

class Database
{
    public $connector;

    public $statment;

    public function __construct($config, $user = 'root', $password = null)
    {
        $this->connector = new PDO('mysql:'.http_build_query($config, '', ';'),
            $user,
            $password
        );
    }

    public function query($query, $param = [])
    {
        $this->statment = $this->connector->prepare($query);
        $this->statment->execute($param);

        return $this;

        // return $statment->fetch(PDO::FETCH_ASSOC);
    }

    public function find()
    {
        return $this->statment->fetch(PDO::FETCH_ASSOC);
    }

    public function get()
    {
        return $this->statment->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findOrFail()
    {
        $result = $this->statment->fetch(PDO::FETCH_ASSOC);

        if (! $result) {
            abort(404, 'Todo innexistante');
            exit();
        }

        return $result;
    }

    public function execute($query, $param = [])
    {
        $statment = $this->connector->prepare($query);

        return $statment->execute($param);
    }
}