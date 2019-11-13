<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UserCreated extends Notification
{
    use Queueable;

    public $pass;
    public $verification;
    public $phone;

    /**
     * Create a new notification instance.
     *
     * @param $pass
     */
    public function __construct($pass, $verification, $phone)
    {
        $this->pass = $pass;
        $this->verification = $verification;
        $this->phone = $phone;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Вы оставили заказ на нашем сайте.')
                    ->line('Мы зарегистрировали Вас на сайте '.url('texmart.kg').'.')
                    ->line('Ваши данные для входа в учетную запись:')
                    ->line('Номер телефона: '. $this->phone)
                    ->line('Пароль: '. $this->pass)
                    ->line('Код верификации: '. $this->verification)
                    ->line('Спасибо что оставили заявку!');
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
            //
        ];
    }
}
