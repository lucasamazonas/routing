<?php

namespace LyzFramework\Routing\Domain;

use Attribute;

#[Attribute]
class RequestMapping
{
    protected string $originClassAnnotation;

    protected string $methodOriginClassAnnotation;

    public function __construct(
        protected string         $path = "",
        protected ?RequestMethod $method = null,
        protected string         $name = "",
    )
    {
    }

    public function getOriginClassAnnotation(): string
    {
        return $this->originClassAnnotation;
    }

    public function setOriginClassAnnotation(string $originClassAnnotation): void
    {
        $this->originClassAnnotation = $originClassAnnotation;
    }

    public function getMethodOriginClassAnnotation(): string
    {
        return $this->methodOriginClassAnnotation;
    }

    public function setMethodOriginClassAnnotation(string $methodOriginClassAnnotation): void
    {
        $this->methodOriginClassAnnotation = $methodOriginClassAnnotation;
    }

}