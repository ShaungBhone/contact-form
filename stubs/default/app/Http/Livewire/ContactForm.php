<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    public $alertSuccess;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required|min:10'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $contact = $this->validate();

        // Execution doesn't reach here if validation fails.

        $contact['name'] = $this->name;
        $contact['email'] = $this->email;
        $contact['phone'] = $this->phone;
        $contact['message'] = $this->message;

        sleep(1);
        Mail::to('shaungbhone.business@gmail.com')->send(new ContactFormMail($contact));

        $this->formResetting();

        $this->alertSuccess = 'Message successfully sent';
    }

    protected function formResetting() {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->message = '';
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}