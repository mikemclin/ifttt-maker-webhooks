<?php

namespace NotificationChannels\IftttMakerWebhooks;

use NotificationChannels\IftttMakerWebhooks\Exceptions\CouldNotSendNotification;

class IftttMakerWebhooksClient
{
    public function send(IftttMakerWebhooksRequest $request)
    {
        if (! $request->name) {
            throw CouldNotSendNotification::serviceRespondedWithAnError('IftttMakerWebhooksTrigger::name is required.');
        }
        if (! $request->key) {
            throw CouldNotSendNotification::serviceRespondedWithAnError('IftttMakerWebhooksTrigger::key is required.');
        }

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL            => "https://maker.ifttt.com/trigger/{$request->name}/with/key/{$request->key}",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => '',
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 30,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => 'POST',
            CURLOPT_POSTFIELDS     => json_encode($request->payload),
            CURLOPT_HTTPHEADER     => [
                'cache-control: no-cache',
                'content-type: application/json',
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            throw CouldNotSendNotification::serviceRespondedWithAnError("cURL Error: {$err}");
        }

        return $response;
    }
}
