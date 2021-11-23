<?php

namespace Alayubi\JsonApiError\ClientError;

use Alayubi\JsonApiError\AbstractError;

class NotFoundError extends AbstractError
{
    /**
     * Set the object with setter.
     * 
     * @return this
     */
    public function makeError()
    {
        $this->setStatus('404')
            ->setTitle('Not Found')
            ->setDetail('The server can not find the requested resource.')
            ->setDontIncludeNullValue(true);

        return $this;
    }
}
