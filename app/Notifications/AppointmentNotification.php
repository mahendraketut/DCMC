<?php

namespace App\Notifications;

// use Illuminate\Bus\Queueable;
// use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Notifications\Messages\MailMessage;
// use Illuminate\Notifications\Notification;

use App\Channels\Messages\WhatsAppMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Channels\WhatsAppChannel;
use App\Models\Appointment;
use App\Models\User;

class AppointmentNotification extends Notification
{
    use Queueable;


    public $appointment;

    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
    }

    public function via($notifiable)
    {
        return [WhatsAppChannel::class];
    }

    public function toWhatsApp($notifiable)
    {
        $patientName = $this->appointment->patient->name;
        $doctorName = $this->appointment->doctor->name;
        $day = $this->appointment->schedule->day;
        $appointmentId = $this->appointment->appointment_id;

        return (new WhatsAppMessage)
            ->content(
                "Hello *{$patientName}*, your appointment with doctor *{$doctorName}* on *{$day}* has been created. Your appointment ID is *{$appointmentId}*"
                    . PHP_EOL . PHP_EOL . "*Note:* "
                    . PHP_EOL . "1️⃣ Please confirm your presence at the clinic administration staff when you arrive."
                    . PHP_EOL . "2️⃣ This is an automated message, please do not reply to this message."
                    . PHP_EOL . PHP_EOL . "Thank you for using JDC Online Reservation System by DCMC🙏"
                    . PHP_EOL . "Have a nice day!"
            );
    }
}
