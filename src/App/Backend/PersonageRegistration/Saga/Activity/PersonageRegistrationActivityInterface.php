<?php

namespace App\Backend\PersonageRegistration\Saga\Activity;

use App\Shared\Transfer\Personage\RegistrationTransfer;
use Micro\Plugin\Temporal\Activity\ActivityInterface;

#[\Temporal\Activity\ActivityInterface(prefix: 'Personage.')]
interface PersonageRegistrationActivityInterface extends ActivityInterface
{
    public function registration(RegistrationTransfer $registrationTransfer): bool;
}
