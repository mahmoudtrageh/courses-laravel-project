<?php

namespace App\Notifications;

use App\RegisterCourse;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewRegister extends Notification
{
    use Queueable;
    public $courses;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(RegisterCourse $courses)
    {
        $this->courses = $courses;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','broadcast'];
    }

    public function toDatabase($notifiable)
    {
        foreach($this->courses->courses as $regist)
            {
            

        return [
            'name' => $this->courses->name,
            'message' => 'new user registered for a course',
            'course_id' => $this->courses->course_id,

            'course_name' =>$regist->c_name
        ];
    }

    }


    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'courses'=>$this->courses->name
        ];

    }

    public function toBroadcast($notifiable)
    {
        return [
            'courses'=>$this->courses->name
        ];
    }

    public function broadcastOn(){
        return 'new-register';
    }

}
