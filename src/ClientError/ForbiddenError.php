<?php

namespace Alayubi\JsonApiError\ClientError;

use Alayubi\JsonApiError\AbstractError;

class ForbiddenError extends AbstractError
{
    /**
     * Set the object with setter.
     * 
     * @return this
     */
    public function makeError()
    {
        $this->setStatus('403')
            ->setTitle('Forbidden')
            ->setDetail('The client does not have access rights to the content.')
            ->setDontIncludeNullValue(true);

        return $this;
    }
}
