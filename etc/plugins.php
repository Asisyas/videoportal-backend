<?php

return [
    // Separate system plugins from application plugins.
    Micro\Plugin\Configuration\Helper\ConfigurationHelperPlugin::class,
    Micro\Plugin\Console\ConsolePlugin::class,
    Micro\Plugin\Http\HttpPackPlugin::class,
    Micro\Plugin\Logger\Monolog\MonologPlugin::class,
    Micro\Plugin\Doctrine\DoctrinePlugin::class,
    Micro\Plugin\Serializer\SerializerPlugin::class,
    Micro\Plugin\DTO\DTOPlugin::class,
    Micro\Plugin\Http\HttpRoadrunnerPlugin::class,
    Micro\Temporal\TemporalPlugin::class,
];