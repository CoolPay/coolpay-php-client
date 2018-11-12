<?php
namespace CoolPay\API;

/**
 * @class       CoolPay_Exception
 * @extends     Exception
 * @since       0.1.0
 * @package     CoolPay
 * @category    Class
 * @author      Patrick Tolvstein, Perfect Solution ApS
 * @docs        http://www.coolpay.com/docs
  */
class Exception extends \Exception
{
    /**
     * __Construct function.
     *
     * Redefine the exception so message isn't optional
     *
     * @access public
     */
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        // Make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }
}
