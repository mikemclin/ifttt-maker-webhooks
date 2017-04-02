<?php

namespace NotificationChannels\IftttMakerWebhooks;

use NotificationChannels\IftttMakerWebhooks\Exceptions\CouldNotSendNotification;
use NotificationChannels\IftttMakerWebhooks\Events\MessageWasSent;
use NotificationChannels\IftttMakerWebhooks\Events\SendingMessage;
use Illuminate\Notifications\Notification;

class IftttMakerWebhooksChannel
{
    public function __construct()
    {
        // Initialisation code here
    }

    /**
     * Send the given notification.
     *
     * @param mixed $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     *
     * @throws \NotificationChannels\IftttMakerWebhooks\Exceptions\CouldNotSendNotification
     */
    public function send($notifiable, Notification $notification)
    {
        //$response = [a call to the api of your notification send]

//        if ($response->error) { // replace this by the code need to check for errors
//            throw CouldNotSendNotification::serviceRespondedWithAnError($response);
//        }
    }
}
