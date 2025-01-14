<?php

namespace App\Backend\PersonageRegistration\Saga\Workflow;

use App\Shared\Transfer\Personage\RegistrationTransfer;
use Micro\Plugin\Temporal\Workflow\WorkflowInterface;
use Temporal\Workflow\WorkflowMethod;

#[\Temporal\Workflow\WorkflowInterface]
interface PersonageRegistrationWorkflowInterface extends WorkflowInterface
{
    #[WorkflowMethod('Personage.Registration')]
    public function registration(RegistrationTransfer $registrationTransfer): \Generator;
}
