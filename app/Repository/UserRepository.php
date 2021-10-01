<?php
namespace App\Repository;


use App\Models\User;


class UserRepository extends Repository
{
    public static function findByEmail(string $email) : User | null
    {
        return self::bind(User::class)
            ->where('email', $email)
            ->first();
    }
}