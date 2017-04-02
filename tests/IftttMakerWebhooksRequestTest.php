<?php

namespace NotificationChannels\IftttMakerWebhooks\Test;

use NotificationChannels\IftttMakerWebhooks\IftttMakerWebhooksRequest;

class IftttMakerWebhooksRequestTest extends \PHPUnit_Framework_TestCase
{
    public function test_name_can_be_passed_into_constructor()
    {
        $request = new IftttMakerWebhooksRequest('myName');
        $this->assertEquals('myName', $request->name);
    }

    public function test_it_can_set_the_name()
    {
        $request = new IftttMakerWebhooksRequest();
        $request->name('myName');
        $this->assertEquals('myName', $request->name);
    }

    public function test_it_can_set_key()
    {
        $request = new IftttMakerWebhooksRequest();
        $request->key('myKey');
        $this->assertEquals('myKey', $request->key);
    }

    public function test_values_are_empty_strings_by_default()
    {
        $request = new IftttMakerWebhooksRequest();
        $this->assertEquals([
            'value1' => '',
            'value2' => '',
            'value3' => '',
        ], $request->payload);
    }

    public function test_it_can_set_value1()
    {
        $request = new IftttMakerWebhooksRequest();
        $request->value1('myValue');
        $this->assertEquals('myValue', $request->payload['value1']);
    }

    public function test_it_can_set_value2()
    {
        $request = new IftttMakerWebhooksRequest();
        $request->value2('myValue');
        $this->assertEquals('myValue', $request->payload['value2']);
    }

    public function test_it_can_set_value3()
    {
        $request = new IftttMakerWebhooksRequest();
        $request->value3('myValue');
        $this->assertEquals('myValue', $request->payload['value3']);
    }
}
