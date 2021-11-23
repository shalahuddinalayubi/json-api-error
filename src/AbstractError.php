<?php

namespace Alayubi\JsonApiError;

abstract class AbstractError
{
    /**
     * A unique identifier for this particular occurrence of the problem.
     * 
     * @var string
     */
    private $id = null;

    /**
     * Links that leads to further details about this particular occurrence of problem.
     * 
     * @var array
     */
    private $links = [];

    /**
     * The HTTP status code applicable to this problem, expressed as a string value.
     * 
     * @var string
     */
    private $status = null;

    /**
     * An application-specific error code, expressed as a string value.
     * 
     * @var string
     */
    private $code = null;

    /**
     * A short, human-readable summary of the problem.
     * 
     * @var string
     */
    private $title = null;

    /**
     * A human-readable explanation specific to this occurrence of the problem.
     * 
     * @var string
     */
    private $detail = null;

    /**
     * An object containing references to the source of the error.
     * 
     * @var array
     */
    private $source = [];

    /**
     * A meta object containing non-standard meta-information about the error.
     * 
     * @var array
     */
    private $meta = [];

    /**
     * Indicates the value will be included or not.
     * 
     * @var bool
     */
    protected $dontIncludeNullValue = false;

    /**
     * Construct.
     */
    public function __construct()
    {
        $this->makeError();
    }

    /**
     * Set the id.
     * 
     * @param string $id.
     * @return this
     */
    public function setId(string $id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get the id.
     * 
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the links.
     * 
     * @param string $about.
     * @return this
     */
    public function setLinks(string $about)
    {
        $this->links['about'] = $about;
        return $this;
    }

    /**
     * Get the links.
     * 
     * @return array
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Set the status.
     * 
     * @param string $status.
     * @return this
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get the status.
     * 
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the code.
     * 
     * @param string $code.
     * @return this
     */
    public function setCode(string $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Get the code.
     * 
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the title.
     * 
     * @param string $title.
     * @return this
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get the title.
     * 
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the detail.
     * 
     * @param string $detail.
     * @return this
     */
    public function setDetail(string $detail)
    {
        $this->detail = $detail;
        return $this;
    }

    /**
     * Get the detail.
     * 
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set the source.
     * 
     * @param string $pointer.
     * @param string $parameter.
     * @return this
     */
    public function setSource(string $pointer = '', string $parameter = '')
    {
        $this->source['pointer'] = $pointer;
        $this->source['parameter'] = $parameter;
        return $this;
    }

    /**
     * Get the source.
     * 
     * @return array
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set the meta.
     * 
     * @param array $meta.
     * @return this
     */
    public function setMeta(array $meta)
    {
        $this->meta = $meta;
        return $this;
    }

    /**
     * Get the meta.
     * 
     * @return array
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * Set the dont include null value.
     * 
     * @param bool $dontIncludeNullvalue
     * @return this
     */
    public function setDontIncludeNullValue(bool $dontIncludeNullValue)
    {
        $this->dontIncludeNullValue = $dontIncludeNullValue;
        return $this;
    }

    /**
     * Get the dont include null value.
     * 
     * @return bool
     */
    public function getDontIncludeNullValue()
    {
        return $this->dontIncludeNullValue;
    }

    /**
     * Make the error into one array.
     * 
     * @return array
     */
    public function getError()
    {
        $error = [
            'id' => $this->getId(),
            'links' => $this->getLinks(),
            'status' => $this->getStatus(),
            'code' => $this->getCode(),
            'title' => $this->getTitle(),
            'detail' => $this->getDetail(),
            'source' => $this->getSource(),
            'meta' => $this->getMeta(),
        ];

        if ($this->getDontIncludeNullValue()) {
            foreach($error as $key => $value) {
                if (empty($value)) {
                    unset($error[$key]);
                }
            }
        }

        return $error;
    }

    /**
     * Set the object with setter.
     * 
     * @return this
     */
    public abstract function makeError();
}
