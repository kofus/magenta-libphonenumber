<?php

namespace Kofus\LibPhoneNumber\Filter;
use Zend\Filter\FilterInterface;

class PhoneNumber implements FilterInterface
{
	public function filter($value) {
	    return $value;
	}
}