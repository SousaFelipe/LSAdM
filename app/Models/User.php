<?php
namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Config;


class User extends AuthenticatableUser
{
    use HasFactory, Notifiable;



    public function name()
    {
        return $this->name;
    }



    public function email()
    {
        return $this->email;
    }



    public function firstName()
    {
        $name = explode(' ', $this->name);
        return $name[0];
    }



    public function firstAndLastName($full = true)
    {
        $first = $this->firstName();
        $expLast = explode(' ', $this->name);
        $last = $expLast[ count($expLast) - 1 ];
        return $full ? ($first . ' ' . $last) : (substr($first, 0, 1) . substr($last, 0, 1));
    }



    public function avatar($asObject = false, $asDefault = true)
    {
        $level = $asDefault ? 'users' : 'providers';
        $path = 'images/avatars/' . $level . '/';
        $file = 'default.png';

        $alloweds = Config::get('filesystems.alloweds');

        foreach ($alloweds as $allowed) {
            if (file_exists(public_path($path . $this->code .'.'. $allowed))) {
                $file = $this->code .'.'. $allowed;
                break;
            }
        }

        if ($asObject) {
            $this->avatar = url($path . $file);
            return $this;
        }

        return url($path . $file);
    }
}
