<?php

namespace Kofus\LibPhoneNumber\Validator;

class LibPhoneNumber extends \Zend\Validator\AbstractValidator
{
    const LENGTH = 'length';
    const UPPER  = 'upper';
    const LOWER  = 'lower';
    const DIGIT  = 'digit';
    
    protected $messageTemplates = array(
    		self::LENGTH => "Input must be at least 8 characters in length",
    		self::UPPER  => "Input must contain at least one uppercase letter",
    		self::LOWER  => "Input must contain at least one lowercase letter",
    		self::DIGIT  => "Input must contain at least one digit character"
    );
    
    public function isValid($value)
    {
    	$this->setValue($value);
    
    	$isValid = true;
    
    	if (strlen($value) < 8) {
    		$this->error(self::LENGTH);
    		$isValid = false;
    	}
    
    	/*
    	if (!preg_match('/[A-Z]/', $value)) {
    		$this->error(self::UPPER);
    		$isValid = false;
    	}
    
    	if (!preg_match('/[a-z]/', $value)) {
    		$this->error(self::LOWER);
    		$isValid = false;
    	}
    
    	if (!preg_match('/\d/', $value)) {
    		$this->error(self::DIGIT);
    		$isValid = false;
    	} */
    
    	return $isValid;
    }    
}