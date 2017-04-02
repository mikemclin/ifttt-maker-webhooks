<?php

namespace NotificationChannels\IftttMakerWebhooks;

use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Notifications\Events\NotificationFailed;
use NotificationChannels\IftttMakerWebhooks\Exceptions\CouldNotSendNotification;

class IftttMakerWebhooksChannel
{
    /**
     * @var IftttMakerWebhooksClient
     */
    protected $client;

    /**
     * @var Dispatcher
     */
    protected $events;

    /**
     * IftttMakerWebhooksChannel constructor.
     *
     * @param IftttMakerWebhooksClient $client
     * @param Dispatcher $events
     */
    public function __construct(IftttMakerWebhooksClient $client, Dispatcher $events)
    {
        $this->client = $client;
        $this->events = $events;
    }

    /**
     * Send the given notification.
     *
     * @param  mixed $notifiable
     * @param  \Illuminate\Notifications\Notification $notification
     * @return mixed
     */
    public function send($notifiable, Notification $notification)
    {
        try {
            $trigger = $notification->toIftttMakerWebhooks($notifiable);
            if (is_string($trigger)) {
                $trigger = new IftttMakerWebhooksRequest($trigger);
            }
            if (! $trigger instanceof IftttMakerWebhooksRequest) {
                throw CouldNotSendNotification::serviceRespondedWithAnError('`$notification::toIftttMakerWebhooks()` must return an `IftttMakerWebhooksRequest` instance or a string.');
            }
            if (! isset($trigger->key)) {
                $trigger->key = $this->getKey($notifiable);
            }

            return $this->client->send($trigger);
        } catch (\Exception $exception) {
            $this->events->fire(new NotificationFailed($notifiable, $notification, 'ifttt-maker-webhooks', ['message' => $exception->getMessage()]));
        }
    }

    /**
     * Get the address to send a notification to.
     *
     * @param mixed $notifiable
     * @return mixed
     * @throws CouldNotSendNotification
     */
    protected function getKey($notifiable)
    {
        if ($notifiable->routeNotificationFor('IftttMakerWebhooks')) {
            return $notifiable->routeNotificationFor('IftttMakerWebhooks');
        }
        throw CouldNotSendNotification::serviceRespondedWithAnError('`$notifiable::routeNotificationForIftttMakerWebhooks()` is required when `IftttMakerWebhooksRequest::key` not set.');
    }
}
