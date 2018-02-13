<?php

namespace Kofus\LibPhoneNumber\View\Helper;
use Zend\View\Helper\AbstractHelper;
use Zend\Filter\FilterChain;

class PhoneNumberFormatHelper extends AbstractHelper
{
    public function __invoke($number, $format=1)
    {
        $phoneUtil = \libphonenumber\PhoneNumberUtil::getInstance();
        $phoneNumber = $phoneUtil->parse($number);
        
        return $phoneUtil->format($phoneNumber, $format);
    }
}