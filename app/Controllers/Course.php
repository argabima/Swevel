<?php

namespace App\Controllers;

class Course extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Course'
        ];
        return view('swevel/course/course', $data);
    }

    // public function detailArtikel()
    // {
    //     $data = [
    //         'title' => 'Detail Artikel'
    //     ];
    //     return view('swevel/artikel/detail_artikel', $data);
    // }
}
