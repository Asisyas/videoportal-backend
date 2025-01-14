<?php

namespace Micro\Temporal;

use Micro\Plugin\Temporal\Workflow\DataConverter\DataConverterFactoryInterface;
use Micro\Temporal\Workflow\DataConverter\DataConverterFactory;

class TemporalPlugin extends \Micro\Plugin\Temporal\TemporalPlugin
{
    protected function createDataConverterFactory(): DataConverterFactoryInterface
    {
        return new DataConverterFactory();
    }
}
