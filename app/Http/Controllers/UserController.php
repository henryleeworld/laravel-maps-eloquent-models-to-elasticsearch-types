<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    /**
     * Show the application.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*
        $user = User::find(1);
        $user->addToIndex();
        */
        User::addAllToIndex();
        $user = User::searchByQuery(['match' => ['name' => 'Blair DuBuque']])->first();
        echo '使用者編號：' . $user['id'] . PHP_EOL;
        echo '使用者姓名：' . $user['name'] . PHP_EOL;
        echo '電子郵件：' . $user['email'] . PHP_EOL;
    }
}
