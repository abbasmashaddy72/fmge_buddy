<?php

namespace App\Http\Livewire\Form\Frontend;

use App\Models\ContactUs as ModelsContactUs;
use Livewire\Component;

class ContactUs extends Component
{
    // Model Values
    public $name, $email, $contact_number, $question, $message;

    // Custom Value
    public $success = false;

    protected $rules = [
        'name' => 'required',
        'email' => '',
        'contact_number' => '',
        'question' => '',
        'message' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $validatedData = $this->validate();
        ModelsContactUs::create($validatedData);

        $this->reset();

        $this->success = true;
    }

    public function render()
    {
        return view('livewire.form.frontend.contact-us');
    }
}
