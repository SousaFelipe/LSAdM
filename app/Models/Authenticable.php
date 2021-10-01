<?php
namespace App\Models;


class Authenticable extends User
{
    /**
     * @var long
    */
    protected $id;

    /**
     * @var string
    */
    protected $hash;

    /**
     * @var string
    */
    protected $email;

    /**
     * @var string
    */
    protected $password;

    /**
     * @var Date
    */
    protected $created_at;
}
