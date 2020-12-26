<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Mail;
use App\Mail\WelcomeEmail;

class SendWelcomeEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $to_name = 'Wicodus';
        $to_email = "doducluong270198@gmail.com";//send to this email

        $data = array("name"=>"noi dung ten","body"=>"noi dung body"); //body of mail.blade.php

        Mail::send('mail.mail_buy_product',$data,function($message) use ($to_name,$to_email){
            $message->to($to_email)->subject('Thông báo mua hàng');//send this mail with subject
            $message->from($to_email,$to_name);//send from this mail
        });


    }
}
