<?php

namespace App\Controllers;

class Submission extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Submission'
        ];
        return view('swevel/submission/submission', $data);
    }
}
