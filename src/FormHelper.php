<?php

class FormHelper
{
    protected $_validators = array();
    protected $_errors = array();
    
    /**
     * Add Validator
     */
    public function addValidator(AbstractValidator $validator)
    {
        $this->_validators[] = $validator;
        return $this;
    }
    
    /**
     * Get all validators
     */
    public function getValidators()
    {
        return !empty($this->_validators) ? $this->_validators : null;
    }
    // validate inputted data
    public function validate()
    {
        $validators = $this->getValidators();
        if (null !== $validators) {
            foreach ($validators as $validator) {
                if (!$validator->validate()) {
                    $this->_errors[] = $validator->getFormattedError();
                }
            }
        }
        return empty($this->_errors) ? true : false;
    }
}