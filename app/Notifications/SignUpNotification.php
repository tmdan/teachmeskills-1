<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SignUpNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $newUser;

    public function __construct($newUser)
    {
        $this->newUser = $newUser;

    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Зарегестрировался новый пользователь)')
            ->line('Имя пользователя — '.$this->newUser->name)
            ->line('Email адрес — '.$this->newUser->email);

    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
