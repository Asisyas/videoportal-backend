<?php

namespace Micro\Temporal\Listener;

use Micro\Component\EventEmitter\EventInterface;
use Micro\Component\EventEmitter\EventListenerInterface;
use Micro\Kernel\App\Business\Event\ApplicationReadyEventInterface;
use Micro\Plugin\Temporal\Facade\TemporalFacadeInterface;

final readonly class ApplicationStartListener implements EventListenerInterface
{
    public function __construct(
        private TemporalFacadeInterface $temporalFacade,
    ) {
    }

    /**
     * @param ApplicationReadyEventInterface $event
     */
    public function on(EventInterface $event): void
    {
        $rrMode = getenv('RR_MODE');
        if ('temporal' !== $rrMode) {
            return;
        }

        $this->temporalFacade->createWorker()->run();
    }

    public static function supports(EventInterface $event): bool
    {
        return $event instanceof ApplicationReadyEventInterface;
    }
}
