<?php

namespace Nane\Database;

use Nane\GenericSingleton;

class ConnectMySql extends GenericSingleton 
{
    private $cnx;
    // En mettant le constructeur en visibilité protected on s'assure
    // que nous ne pourrons pas instancier cette classe depuis l'extérieur
    protected function __construct() 
    {
        $config = include dirname(__DIR__, 2).'/config.php';
        $this->cnx = new \PDO($config['mysql']['dsn'], $config['mysql']['username'], $config['mysql']['password']);
    }
 
    public function getCNX() 
    {
        return $this->cnx;
    }
}
