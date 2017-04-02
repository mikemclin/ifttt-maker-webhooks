<?php

namespace NotificationChannels\IftttMakerWebhooks\Exceptions;

class CouldNotSendNotification extends \Exception
{
    public static function serviceRespondedWithAnError($message)
    {
        return new static($message);
    }
}
