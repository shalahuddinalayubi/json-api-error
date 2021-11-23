<?php

namespace Alayubi\JsonApiError\ClientError;

use Alayubi\JsonApiError\AbstractError;

class NotAcceptableError extends AbstractError
{
    /**
     * Set the object with setter.
     * 
     * @return this
     */
    public function makeError()
    {
        $this->setStatus('406')
            ->setTitle('Not Acceptable')
            ->setDetail('Content negotiation does not find any content that conforms to the criteria given by the user agent.')
            ->setDontIncludeNullValue(true);

        return $this;
    }
}
