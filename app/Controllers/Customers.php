<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'name' => 'Kulleh'
            ],
            [
                'name' => 'Popoy'
            ],
            [
                'name' => 'Ice'
            ],
            [
                'name' => 'Jere'
            ],
            [
                'name' => 'Charles'
            ]
        ];

        return view('customers', ['customers' => $customers]);
    }
}
