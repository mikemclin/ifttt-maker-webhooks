<?php

namespace NotificationChannels\IftttMakerWebhooks;

class IftttMakerWebhooksRequest
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $key = null;

    /**
     * @var array
     */
    public $payload;

    public function __construct($name = null)
    {
        $this->name = $name;
        $this->payload = [
            'value1' => '',
            'value2' => '',
            'value3' => '',
        ];
    }

    /**
     * Name setter
     *
     * @param string $name
     * @return IftttMakerWebhooksRequest
     */
    public function name($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Key setter
     *
     * @param string $key
     * @return IftttMakerWebhooksRequest
     */
    public function key($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * Value 1 setter
     *
     * @param string $value
     * @return IftttMakerWebhooksRequest
     */
    public function value1($value)
    {
        $this->payload['value1'] = $value;
        return $this;
    }

    /**
     * Value 2 setter
     *
     * @param string $value
     * @return IftttMakerWebhooksRequest
     */
    public function value2($value)
    {
        $this->payload['value2'] = $value;
        return $this;
    }

    /**
     * Value 3 setter
     *
     * @param string $value
     * @return IftttMakerWebhooksRequest
     */
    public function value3($value)
    {
        $this->payload['value3'] = $value;
        return $this;
    }
}
