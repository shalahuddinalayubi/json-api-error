<?php

namespace Alayubi\JsonApiError;

use Alayubi\JsonApiError\JsonApiErrors;

class JsonApiErrorFactory
{
    /**
     * Create new instance.
     * 
     * @param mixed $error
     * @return Alayubi\JsonApiError\JsonApiErrors
     */
    public static function create($error = null)
    {
        $jsonApiErrors = new JsonApiErrors();

        if (! is_null($error)) {
            $jsonApiErrors->addError($error);
        }

        return $jsonApiErrors;
    }
}
