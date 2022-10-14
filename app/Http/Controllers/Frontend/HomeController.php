<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Services\Helper;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        view()->share('logo_light', Helper::get_static_option('logo_light'));
        view()->share('logo_dark', Helper::get_static_option('logo_dark'));
        view()->share('contact_no', Helper::get_static_option('contact_no'));
        view()->share('email', Helper::get_static_option('email'));
        view()->share('address', Helper::get_static_option('address'));
        view()->share('welcome_message', Helper::get_static_option('welcome_message'));
        view()->share('tag_line', Helper::get_static_option('tag_line'));
        view()->share('tag_by', Helper::get_static_option('tag_by'));
        view()->share('contact_us_message', Helper::get_static_option('contact_us_message'));
        view()->share('twitter', Helper::get_static_option('twitter'));
        view()->share('facebook', Helper::get_static_option('facebook'));
        view()->share('instagram', Helper::get_static_option('instagram'));
        view()->share('linkedin', Helper::get_static_option('linkedin'));
        view()->share('youtube', Helper::get_static_option('youtube'));
        view()->share('google_business', Helper::get_static_option('google_business'));
        view()->share('embed_map_link', Helper::get_static_option('embed_map_link'));
        view()->share('redirect_map_link', Helper::get_static_option('redirect_map_link'));
    }

    public function index()
    {
        $welcome_title = Helper::get_static_option('welcome_title');
        $welcome_message = Helper::get_static_option('welcome_message');
        $tag_line = Helper::get_static_option('tag_line');
        $tag_by = Helper::get_static_option('tag_by');
        $about_title = Helper::get_static_option('about_title');
        $about_message = Helper::get_static_option('about_message');
        $about_title_1 = Helper::get_static_option('about_title_1');
        $about_message_1 = Helper::get_static_option('about_message_1');
        $about_1_points = Helper::get_static_option('about_1_points');
        $about_1_image = Helper::get_static_option('about_1_image');
        $about_title_2 = Helper::get_static_option('about_title_2');
        $about_2_points = Helper::get_static_option('about_2_points');
        $about_2_image = Helper::get_static_option('about_2_image');
        $team_header = Helper::get_static_option('team_header');
        $team_title = Helper::get_static_option('team_title');
        $team_message = Helper::get_static_option('team_message');
        $pricing_title = Helper::get_static_option('pricing_title');
        $pricing_message = Helper::get_static_option('pricing_message');
        $subscription_title_1 = Helper::get_static_option('subscription_title_1');
        $subscription_description_1 = Helper::get_static_option('subscription_description_1');
        $subscription_points_1 = Helper::get_static_option('subscription_points_1');
        $subscription_title_2 = Helper::get_static_option('subscription_title_2');
        $subscription_description_2 = Helper::get_static_option('subscription_description_2');
        $subscription_points_2 = Helper::get_static_option('subscription_points_2');
        $contact_us_title = Helper::get_static_option('contact_us_title');
        $contact_us_message = Helper::get_static_option('contact_us_message');
        $faqs = Faq::get()->take(4);

        return view('pages.frontend.index', compact([
            'welcome_title',
            'welcome_message',
            'tag_line',
            'tag_by',
            'about_title',
            'about_message',
            'about_title_1',
            'about_message_1',
            'about_1_points',
            'about_1_image',
            'about_title_2',
            'about_2_points',
            'about_2_image',
            'team_header',
            'team_title',
            'team_message',
            'pricing_title',
            'pricing_message',
            'subscription_title_1',
            'subscription_description_1',
            'subscription_points_1',
            'subscription_title_2',
            'subscription_description_2',
            'subscription_points_2',
            'contact_us_title',
            'contact_us_message',
            'faqs'
        ]));
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
        $faqs = Faq::get()->take(4);

        return view('pages.frontend.faqs', compact('faqs'));
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
