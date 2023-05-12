<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\Contact;
use App\Models\Contact as ModelsContact;
use Illuminate\Support\Facades\Mail;
class ContactComponent extends Component
{
    public $name, $email, $phone, $subject, $message;
    public $success;

    public $showAlert = false;

    protected $rules = [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|max:255',
        'subject' => 'required|max:255',
        'message' => 'required|max:2000'
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function submit()
    {
        $this->validate();

        $data['name'] = $this->name;
        $data['email'] = $this->email;
        $data['phone'] = $this->phone;
        $data['subject'] = $this->subject;
        $data['message'] = $this->message;

        Mail::to('pereira.joaquin@gmail.com')->send(new Contact($data));
        ModelsContact::create($data);

        $this->resetForm();

        session()->flash('message', trans('msg_success'));

        $this->success = trans('msg_success');
        $this->showAlert = true;
    }

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->subject = '';
        $this->message = '';
    }
    public function render()
    {
        return view('livewire.contact-component');
    }
}
