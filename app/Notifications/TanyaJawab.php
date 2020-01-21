<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class TanyaJawab extends Notification
{
    use Queueable;
    protected $pertanyaan;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($pertanyaan)
    {
        $this->pertanyaan = $pertanyaan;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'pertanyaan' => $this->pertanyaan,
        ];
    }
}
