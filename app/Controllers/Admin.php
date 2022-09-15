<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('swevel/admin/dashboard', $data);
    }

    public function aboutus()
    {
        $data = [
            'title' => 'About Us'
        ];
        return view('swevel/admin/admin-about-us', $data);
    }

    public function faq()
    {
        $data = [
            'title' => 'FAQ',
        ];
        return view('swevel/admin/admin_faq', $data);
    }

    public function article()
    {
        $data = [
            'title' => 'Artikel',
        ];
        return view('swevel/admin/admin-artikel', $data);
        // return view('swevel/admin/admin-article', $data);
    }
    public function event()
    {
        $data = [
            'title' => 'Event',
        ];
        return view('swevel/admin/admin-event', $data);
    }
    public function portofolio()
    {
        $data = [
            'title' => 'Portofolio',
        ];
        return view('swevel/admin/admin-portofolio', $data);
    }
}
