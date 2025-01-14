<?php

namespace Micro\Temporal\Workflow\DataConverter;

use Micro\Plugin\Temporal\Workflow\DataConverter\DataConverterFactoryInterface;
use Micro\Temporal\Workflow\DataConverter\Payload\GrpcConverter;
use Temporal\DataConverter\BinaryConverter;
use Temporal\DataConverter\DataConverter;
use Temporal\DataConverter\DataConverterInterface;
use Temporal\DataConverter\JsonConverter;
use Temporal\DataConverter\NullConverter;
use Temporal\DataConverter\ProtoJsonConverter;

class DataConverterFactory implements DataConverterFactoryInterface
{
    public function create(): DataConverterInterface
    {
        return new DataConverter(
            new GrpcConverter(),
            new JsonConverter(),
            new NullConverter(),
            new BinaryConverter(),
            new ProtoJsonConverter(),
        );
    }
}
