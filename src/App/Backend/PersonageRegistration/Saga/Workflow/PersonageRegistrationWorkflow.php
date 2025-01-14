<?php

namespace App\Backend\PersonageRegistration\Saga\Workflow;

use App\Backend\PersonageRegistration\Saga\Activity\PersonageRegistrationActivityInterface;
use App\Shared\Transfer\Personage\RegistrationTransfer;
use Carbon\CarbonInterval;
use Temporal\Activity\ActivityOptions;
use Temporal\Workflow;

class PersonageRegistrationWorkflow implements PersonageRegistrationWorkflowInterface
{
    public function registration(RegistrationTransfer $registrationTransfer): \Generator
    {
        return yield Workflow::newActivityStub(
            PersonageRegistrationActivityInterface::class,
            ActivityOptions::new()
                ->withScheduleToStartTimeout(CarbonInterval::seconds(10))
                ->withScheduleToCloseTimeout(CarbonInterval::minute())
        )
            ->registration($registrationTransfer);
    }
}
