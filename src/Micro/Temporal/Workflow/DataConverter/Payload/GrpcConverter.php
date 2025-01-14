<?php

namespace Micro\Temporal\Workflow\DataConverter\Payload;

use Google\Protobuf\Internal\Message;
use Temporal\Api\Common\V1\Payload;
use Temporal\DataConverter\Converter;
use Temporal\DataConverter\Type;

class GrpcConverter extends Converter
{
    public function getEncodingType(): string
    {
        return 'grpc';
    }

    /**
     * @param Message $value
     */
    public function toPayload($value): ?Payload
    {
        if (!$value instanceof Message) {
            return null;
        }

        return $this->create(json_encode(
            [
                $value::class,
                $value->serializeToString(),
            ]
        ));
    }

    public function fromPayload(Payload $payload, Type $type)
    {
        $payload = json_decode($payload->getData(), true);
        $className = $payload[0];
        $encoded = $payload[1];

        /** @var Message $class */
        $class = new $className();
        $class->mergeFromString($encoded);

        return $class;
    }
}
