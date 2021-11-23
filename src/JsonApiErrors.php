<?php

namespace Alayubi\JsonApiError;

use Alayubi\JsonApiError\AbstractError;
use Alayubi\JsonApiError\Exceptions\InstanceNotAbstractError;

class JsonApiErrors
{
    /**
     * Array of AbstractError.
     * 
     * @var array
     */
    private $errors = [];

    /**
     * Add an error.
     * 
     * @param mixed $error
     * @return this
     */
    public function addError($error)
    {
        if ($error instanceof AbstractError) {
            array_push($this->errors, $error->getError());
        } else if (is_array($error)) {
            foreach ($error as $key => $value) {
                if ($value instanceof AbstractError) {
                    array_push($this->errors, $value->getError());
                } else {
                    throw new InstanceNotAbstractError();
                }
            }
        } else {
            throw new InstanceNotAbstractError();
        }

        return $this;
    }

    /**
     * Get the errors.
     * 
     * @return array
     */
    public function getErrors()
    {
        return ['errors' => $this->errors];
    }
}
