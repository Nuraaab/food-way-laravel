<?php

namespace App\Providers;

use App\Models\Subscribe;
use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class NavBarProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('admin.navbar', function ($view) {
            $currentTimestamp = Carbon::now();
            $allComments = Testimonial::all();
            $comments = Testimonial::take(5)->get();
            $comments->each(function ($comment) use ($currentTimestamp) {
                $commentTimestamp = Carbon::parse($comment->created_at);
                $timeDifference = $commentTimestamp->diffForHumans($currentTimestamp);
                $comment->setAttribute('timeDifference', $timeDifference);
            });

             $allmessage = Subscribe::all();
            
            $messages = Subscribe::take(5)->get();
            
            $messages->each(function ($message) use ($currentTimestamp) {
                $messageTimestamp = Carbon::parse($message->created_at);
                $timeDifference = $messageTimestamp->diffForHumans($currentTimestamp);
                $message->setAttribute('timeDifference', $timeDifference);
            });
            $view->with(['comments'=> $comments, 'allComments'=> $allComments, 'messages' => $messages, 'allmessages' => $allmessage]);
        });
    }
}
