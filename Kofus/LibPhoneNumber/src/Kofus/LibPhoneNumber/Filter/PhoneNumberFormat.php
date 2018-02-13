<?php

namespace Kofus\LibPhoneNumber\Filter;
use Zend\Filter\FilterInterface;
use Zend\Filter\AbstractFilter;

class PhoneNumberFormat extends AbstractFilter
{
    public function __construct(array $options = array())
    {
        $this->options = $options;
    }
    
	public function filter($value) 
	{
	    $phoneUtil = \libphonenumber\PhoneNumberUtil::getInstance();
        $phoneNumber = $phoneUtil->parse($value, $this->getOption('default_region'));
        
        return $phoneUtil->format($phoneNumber, $this->getOption('format'));
	}
	
	public function getOption($key)
	{
	    if (isset($this->options[$key]))
	        return $this->options[$key];
	}
}