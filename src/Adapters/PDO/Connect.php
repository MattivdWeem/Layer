<?php

namespace MattivdWeem\Layer\Adapters\PDO;

use MattivdWeem\Layer\Adapters\ConnectInterface;
use MattivdWeem\Layer\Connection;

class Connect implements ConnectInterface
{
    public function connect(
        Connection $connection
    ) {
        try {
            $con = new \PDO(
                'mysql:host='.$connection->getServer().':'.$connection->getPort().
                ';dbname='.$connection->getDatabase(),
                $connection->getUser(),
                $connection->getPassword()
            );

            return $con;
        } catch (PDOException $e) {
            throw $e;
        }
    }
}
