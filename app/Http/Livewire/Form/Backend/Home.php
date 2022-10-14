<?php

namespace App\Http\Livewire\Form\Backend;

use App\Services\Helper;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Home extends Component
{
    use WithFileUploads;

    public $logo_light;
    public $logo_dark;
    public $contact_no;
    public $email;
    public $address;
    public $welcome_title;
    public $welcome_message;
    public $tag_line;
    public $tag_by;
    public $about_title;
    public $about_message;
    public $about_title_1;
    public $about_message_1;
    public $about_1_points;
    public $about_1_image;
    public $about_title_2;
    public $about_2_points;
    public $about_2_image;
    public $team_header;
    public $team_title;
    public $team_message;
    public $pricing_title;
    public $pricing_message;
    public $subscription_title_1;
    public $subscription_description_1;
    public $subscription_points_1;
    public $subscription_title_2;
    public $subscription_description_2;
    public $subscription_points_2;
    public $contact_us_title;
    public $contact_us_message;
    public $twitter;
    public $facebook;
    public $instagram;
    public $linkedin;
    public $youtube;
    public $google_business;
    public $embed_map_link;

    public $logoLightIsUploaded = false;
    public $logoDarkIsUploaded = false;
    public $About1ImageIsUploaded = false;
    public $About2ImageIsUploaded = false;

    public function mount()
    {
        $this->logo_light = Helper::get_static_option('logo_light');
        $this->logo_dark = Helper::get_static_option('logo_dark');
        $this->contact_no = Helper::get_static_option('contact_no');
        $this->email = Helper::get_static_option('email');
        $this->address = Helper::get_static_option('address');
        $this->welcome_title = Helper::get_static_option('welcome_title');
        $this->welcome_message = Helper::get_static_option('welcome_message');
        $this->tag_line = Helper::get_static_option('tag_line');
        $this->tag_by = Helper::get_static_option('tag_by');
        $this->about_title = Helper::get_static_option('about_title');
        $this->about_message = Helper::get_static_option('about_message');
        $this->about_title_1 = Helper::get_static_option('about_title_1');
        $this->about_message_1 = Helper::get_static_option('about_message_1');
        $this->about_1_points = Helper::get_static_option('about_1_points');
        $this->about_1_image = Helper::get_static_option('about_1_image');
        $this->about_title_2 = Helper::get_static_option('about_title_2');
        $this->about_2_points = Helper::get_static_option('about_2_points');
        $this->about_2_image = Helper::get_static_option('about_2_image');
        $this->team_header = Helper::get_static_option('team_header');
        $this->team_title = Helper::get_static_option('team_title');
        $this->team_message = Helper::get_static_option('team_message');
        $this->pricing_title = Helper::get_static_option('pricing_title');
        $this->pricing_message = Helper::get_static_option('pricing_message');
        $this->subscription_title_1 = Helper::get_static_option('subscription_title_1');
        $this->subscription_description_1 = Helper::get_static_option('subscription_description_1');
        $this->subscription_points_1 = Helper::get_static_option('subscription_points_1');
        $this->subscription_title_2 = Helper::get_static_option('subscription_title_2');
        $this->subscription_description_2 = Helper::get_static_option('subscription_description_2');
        $this->subscription_points_2 = Helper::get_static_option('subscription_points_2');
        $this->contact_us_title = Helper::get_static_option('contact_us_title');
        $this->contact_us_message = Helper::get_static_option('contact_us_message');
        $this->twitter = Helper::get_static_option('twitter');
        $this->facebook = Helper::get_static_option('facebook');
        $this->instagram = Helper::get_static_option('instagram');
        $this->linkedin = Helper::get_static_option('linkedin');
        $this->youtube = Helper::get_static_option('youtube');
        $this->google_business = Helper::get_static_option('google_business');
        $this->embed_map_link = Helper::get_static_option('embed_map_link');
    }

    protected $rules = [
        'logo_light' => '',
        'logo_dark' => '',
        'contact_no' => '',
        'email' => '',
        'address' => '',
        'welcome_title' => '',
        'welcome_message' => '',
        'tag_line' => '',
        'tag_by' => '',
        'about_title' => '',
        'about_message' => '',
        'about_title_1' => '',
        'about_message_1' => '',
        'about_1_points' => '',
        'about_1_image' => '',
        'about_title_2' => '',
        'about_2_points' => '',
        'about_2_image' => '',
        'team_header' => '',
        'team_title' => '',
        'team_message' => '',
        'pricing_title' => '',
        'pricing_message' => '',
        'subscription_title_1' => '',
        'subscription_description_1' => '',
        'subscription_points_1' => '',
        'subscription_title_2' => '',
        'subscription_description_2' => '',
        'subscription_points_2' => '',
        'contact_us_title' => '',
        'contact_us_message' => '',
        'twitter' => '',
        'facebook' => '',
        'instagram' => '',
        'linkedin' => '',
        'youtube' => '',
        'google_business' => '',
        'embed_map_link' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

        if (gettype($this->logo_light) != 'string') {
            $this->logoLightIsUploaded = true;
        }
        if (gettype($this->logo_dark) != 'string') {
            $this->logoDarkIsUploaded = true;
        }
        if (gettype($this->about_1_image) != 'string') {
            $this->About1ImageIsUploaded = true;
        }
        if (gettype($this->about_2_image) != 'string') {
            $this->About2ImageIsUploaded = true;
        }
    }

    public function submit()
    {
        abort_if(Gate::denies('homepage'), 403);

        $validatedData = $this->validate();

        foreach ($validatedData as $key => $value) {
            if ($key != 'logo_light' || $key != 'logo_dark' || $key != 'about_1_image' || $key != 'about_2_image') {
                Helper::set_static_option($key, $value);
            }

            if ($this->logo_light == null) {
            } elseif (gettype($this->logo_light) != 'string') {
                $image = $this->logo_light->store('homepage', 'public');
                Helper::set_static_option('logo_light', $image);
            }
            if ($this->logo_dark == null) {
            } elseif (gettype($this->logo_dark) != 'string') {
                $image = $this->logo_dark->store('homepage', 'public');
                Helper::set_static_option('logo_dark', $image);
            }
            if ($this->about_1_image == null) {
            } elseif (gettype($this->about_1_image) != 'string') {
                $image = $this->about_1_image->store('homepage', 'public');
                Helper::set_static_option('about_1_image', $image);
            }
            if ($this->about_2_image == null) {
            } elseif (gettype($this->about_2_image) != 'string') {
                $image = $this->about_2_image->store('homepage', 'public');
                Helper::set_static_option('about_2_image', $image);
            }
        }

        return $this->redirectRoute('admin.homepage');
    }

    public function render()
    {
        return view('livewire.form.backend.home');
    }
}
