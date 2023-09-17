<?php

namespace LyzFramework\Routing\Examples;

use LyzFramework\Routing\Domain\GetMapping;
use LyzFramework\Routing\Domain\RequestMapping;

#[RequestMapping('example')]
class ExempleController
{
    #[GetMapping]
    public function get()
    {
    }
}