<?php

namespace App\Controllers;

class Course extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Artikel'
        ];
        return view('swevel/course/course', $data);
    }

    public function detailCourse()
    {
        $data = [
            'title' => 'Detail Course'
        ];
        return view('swevel/course/detail_course', $data);
    }
}
