<?php

namespace CoolPay\Tests;

use CoolPay\API\Exception;

class ExceptionTest extends \PHPUnit_Framework_TestCase
{
    private $testMessage = 'CoolPay Message';
    private $testCode = 100;

    public function testThrownExceptionValues()
    {
        try {
            throw new Exception($this->testMessage, $this->testCode);
        } catch (Exception $e) {
            $this->assertEquals($e->getMessage(), $this->testMessage);
            $this->assertEquals($e->getCode(), $this->testCode);
        }
    }
}
