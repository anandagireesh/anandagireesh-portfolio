<?php

namespace App\Livewire\Web\Section;

use Livewire\Component;
use App\Jobs\SendContactEmailQueueJob;
use App\Models\Contact as ModelsContact;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Validate;
use Illuminate\Http\Request;

use GuzzleHttp\Client;

class Contact extends Component
{
    use LivewireAlert;

    #[Validate('required|min:3|regex:/^[a-zA-Z0-9\s]+$/')]
    public $name='';

    #[Validate('required|email')]
    public $email='';

    #[Validate('required|min:3|regex:/^[a-zA-Z0-9\s]+$/')]
    public $subject='';

    #[Validate('required|min:3|regex:/^[a-zA-Z0-9\s]+$/')]
    public $msg='';

    public $captchaToken;
    public $captchaScore=0;

    public function sendEmail(){
        $this->validate();
        $response = Http::post('https://www.google.com/recaptcha/api/siteverify?secret=6LesPIwpAAAAAFES0GenE-c4DMmllIId78dW0NRZ&response=' .  $this->captchaToken);

        if (array_key_exists('score', $response->json())) {
    $this->captchaScore = $response->json()['score'];
        }
    if ($this->captchaScore > 0.3) {

        $details['email'] = 'anandagireesh@gmail.com';
        $details['name'] = $this->name;
        // $details['from_email'] = $this->email;
        $details['subject'] = $this->subject;
        $details['msg'] = $this->msg;

        ModelsContact::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->msg,
        ]);
    // dispatch(new SendContactEmailQueueJob($details));
    $this->alert('success', 'Contact form Submitted successfully', [
 'position' => 'center',
 'timer' => 3000,
 'toast' => true,
 'background' => '#070d1b',
 'color' => '#ffffff'
]);
        $this->reset();
    } else {
        $this->alert('failure', 'Something Went wrong', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'background' => '#070d1b',
            'color' => '#ffffff'
           ]);
        return session()->flash('success', 'Google thinks you are a bot, please refresh and try again');
    }

    }

    public function render()
    {
        return view('livewire.web.section.contact');
    }
}
