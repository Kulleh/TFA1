<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'name' => 'Lean'
            ],
            [
                'name' => 'Kurt'
            ],
            [
                'name' => 'Sean'
            ],
            [
                'name' => 'Geralt'
            ],
            [
                'name' => 'Ciri'
            ]
        ];

        return view('users', ['users' => $users]);
    }
}
