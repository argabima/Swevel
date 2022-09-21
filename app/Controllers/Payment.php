<?php

namespace App\Controllers;

class Payment extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Payment'
        ];
        return view('swevel/payment/payment', $data);
    }
}
