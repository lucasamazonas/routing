<?php

namespace LyzFramework\Routing\Domain;

use Attribute;

#[Attribute]
class PatchMapping extends RequestMapping
{

    public function __construct(string $path = "", string $name = "")
    {
        parent::__construct($path, RequestMethod::PATCH, $name);
    }

}