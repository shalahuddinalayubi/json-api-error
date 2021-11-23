<?php

namespace Alayubi\JsonApiError\ClientError;

use Alayubi\JsonApiError\AbstractError;

class ConflictError extends AbstractError
{
    /**
     * Set the object with setter.
     * 
     * @return this
     */
    public function makeError()
    {
        $this->setStatus('409')
            ->setTitle('Conflict')
            ->setDetail('The request conflict with the current state of the server.')
            ->setDontIncludeNullValue(true);

        return $this;
    }
}
