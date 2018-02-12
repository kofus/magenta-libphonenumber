<?php

namespace Kofus\LibPhoneNumber\Validator;

class PhoneNumber extends \Zend\Validator\AbstractValidator
{
    protected $msgs = array();
    
    public function isValid($value)
    {
    	$this->setValue($value);
    	
    	$phoneUtil = \libphonenumber\PhoneNumberUtil::getInstance();
    	
    	try {
   	        $phoneNumber = $phoneUtil->parse($value, $this->getOption('default_region'));
    	} catch (\libphonenumber\NumberParseException $e) {
    	    $this->msgs[] = $e->getMessage();
    	    return false;
    	}
   	    
    	$isValid = $phoneUtil->isValidNumber($phoneNumber, $this->getOption('default_region'));
    	
    	if (! $isValid) {
    	    $this->error(self::INVALID);
    	}
    	
    	return $isValid;
    }
    
    public function getMessages()
    {
        return $this->msgs;
    }
}