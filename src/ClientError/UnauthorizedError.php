<?php

namespace Alayubi\JsonApiError\ClientError;

use Alayubi\JsonApiError\AbstractError;

class UnauthorizedError extends AbstractError
{
    /**
     * Set the object with setter.
     * 
     * @return this
     */
    public function makeError()
    {
        $this->setStatus('401')
            ->setTitle('Unauthorized')
            ->setDetail('Client must authenticate itself to get the requested response.')
            ->setDontIncludeNullValue(true);

        return $this;
    }
}
