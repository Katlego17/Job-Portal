<?php

namespace App\Notifications;

use App\Models\Job\Application;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class JobApplicationNotification extends Notification
{
    use Queueable;

    protected $application;

    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('New Job Application')
            ->line('A new job application has been submitted.')
            ->line('Job Title: ' . $this->application->job_title)
            ->line('Job Region: ' . $this->application->job_region)
            ->line('Company: ' . $this->application->company)
            ->action('View Job Application', url('/jobs/single/' . $this->application->job_id))
            ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [
            // If you need to send JSON formatted notifications
        ];
    }
}
