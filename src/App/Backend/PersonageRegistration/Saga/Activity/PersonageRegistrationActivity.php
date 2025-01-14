<?php

declare(strict_types=1);

namespace App\Backend\PersonageRegistration\Saga\Activity;

use App\Shared\Transfer\Personage\RegistrationTransfer;

class PersonageRegistrationActivity implements PersonageRegistrationActivityInterface
{
    public function registration(RegistrationTransfer $registrationTransfer): bool
    {
        return true;
    }
}
