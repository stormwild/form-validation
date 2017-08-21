<?php

class Validator
{
    protected $_errors = array();
    public function __construct()
    {
    }
    
    /**
     * Check Integer
     */
    public function checkInteger($value)
    {
        if (!is_int($value)) {
            $this->_errors[strtolower($value)] = 'The supplied value must be an integer.';
        }
        return $this;
    }
    
    /**
     * Validate Floats
     */
    public function checkFloat($value)
    {
        if (!is_float($value)) {
            $this->_errors[strtolower($value)] = 'The supplied value must be a float number.';
        }
        return $this;
    }
    
    /**
     * Validate Strings
     */
    public function checkString($value)
    {
        if (!is_string($value)) {
            $this->_errors[strtolower($value)] = 'The supplied value must be a string.';
        }
        return $this;
    }
    
    /**
     * Get Errors
     */
    public function getErrors()
    {
        return $this->_errors;
    }
    
    /**
     * Clear Errors
     */
    public function clearErrors()
    {
        $this->_errors = array();
    }
    
    /**
     * Validate Supplied Data
     */
    public function validate()
    {
        return empty($this->_errors) ? true : false;
    }
}