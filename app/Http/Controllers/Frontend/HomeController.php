<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.frontend.index');
    }

    public function blogs()
    {
        return view('pages.frontend.blogs');
    }

    public function blog_detail()
    {
        return view('pages.frontend.blog_detail');
    }

    public function courses()
    {
        return view('pages.frontend.courses');
    }

    public function course_detail()
    {
        return view('pages.frontend.course_detail');
    }

    public function contact_us()
    {
        return view('pages.frontend.contact_us');
    }

    public function faqs()
    {
        return view('pages.frontend.faqs');
    }

    public function about_us()
    {
        return view('pages.frontend.about_us');
    }

    public function gallery()
    {
        return view('pages.frontend.gallery');
    }
}
