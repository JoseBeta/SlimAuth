<?php

namespace App\Validation;

use Respect\Validation\Validator as Respect;
use Respect\Validation\Exceptions\ValidationException;
use Respect\Validation\Exceptions\NestedValidationException;

class FillValidator{
    protected $errors;
    
    public function validate(array $validationFields, array $rules){
        foreach ($rules as $field => $rule){
            try {
                $rule->setName(ucfirst($field))->assert($validationFields[$field]);
                $this->errors[$field] = true;
            }catch(NestedValidationException $e){
                $this->errors[$field] = false;
            }
        }
        
        $_SESSION['fillErrors'] = $this->errors;        
        return  $this;
    }
}