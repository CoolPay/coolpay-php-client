<?php
namespace CoolPay;

use CoolPay\API\Client;
use CoolPay\API\Request;

class CoolPay
{
    /**
     * Contains the CoolPay_Request object
     *
     * @access public
     **/
    public $request;

    /**
    * __construct function.
    *
    * Instantiates the main class.
    * Creates a client which is passed to the request construct.
    *
    * @auth_string string Authentication string for CoolPay
    *
    * @access public
    */
    public function __construct($auth_string = '')
    {
        $client = new Client($auth_string);
        $this->request = new Request($client);
    }
}
