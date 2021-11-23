<?php

namespace Alayubi\JsonApiError\ClientError;

use Alayubi\JsonApiError\AbstractError;

class BadRequestError extends AbstractError
{
    /**
     * Set the object with setter.
     * 
     * @return this
     */
    public function makeError()
    {
        $this->setStatus('400')
            ->setTitle('Bad Request')
            ->setDetail('The server could not understand the request due to invalid syntax.')
            ->setDontIncludeNullValue(true);

        return $this;
    }
}
