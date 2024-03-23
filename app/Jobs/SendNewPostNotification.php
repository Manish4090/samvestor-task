<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendNewPostNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $post;

    public function __construct($post)
    {
        $this->post = $post;
    }

    public function handle()
    {
        $adminEmail = 'nickykumar.1010@gmail.com';

        $subject = 'New Post Added';
        $content = 'A new post titled "'.$this->post->title.'" has been added.';

        Mail::raw($content, function ($message) use ($adminEmail, $subject) {
            $message->to($adminEmail)->subject($subject);
        });
    }
}
