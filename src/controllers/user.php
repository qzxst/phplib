<?php

namespace Blr\Php\Controllers;

use Blr\Php\Models\User as UserModel;
use MillionMile\GetEnv\Env;

class User
{
    
    public function index(): void
    {
        $conf = [
            'type' => Env::get('DB_TYPE', 'mysql'),
            'database' => Env::get('DB_NAME', 'test'),
            'host' => Env::get('DB_HOST', 'mysql'),
            'username' => Env::get('DB_USER', 'root'),
            'password' => Env::get('DB_PASS', '123456'),
            'port' => Env::get('DB_PORT', '3306')
        ];
        $user = new UserModel($conf);
        var_dump($user);
        exit;
    }
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    public function hello(): void
    {
    }
}
