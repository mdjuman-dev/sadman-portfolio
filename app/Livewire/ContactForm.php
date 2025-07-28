<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;
use App\Mail\ContactNotification;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name, $number, $email, $subject, $message;
    public function submit()
    {
        $this->validate([
            'name' => 'required|min:3',
            'number' => 'required|numeric',
            'email' => 'required|email',
            'subject' => 'nullable|string',
            'message' => 'required|min:5',
        ]);

        $contact = Contact::create([
            'name' => $this->name,
            'number' => $this->number,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        // মেইল পাঠানো
        Mail::to('mdjumann57955@gmail.com')->send(new ContactNotification($contact));
        $this->reset();
        $this->dispatch('success');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
