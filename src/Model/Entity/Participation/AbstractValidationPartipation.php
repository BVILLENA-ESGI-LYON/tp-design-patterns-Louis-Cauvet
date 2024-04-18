<?php

namespace EsgiIw\TpDesignPattern\Model\Entity\Participation;

use App\Attribute\AsEntity;
use App\Repository\EventRepository;
use App\Service\DB\Entity;

abstract class AbstractValidationPartipation {

    public function startValidation(Participation $participation)
    {
        $this->checkPlacesNumber($participation);
        $this->checkMedicalCertificate($participation);
        $this->sendValidation($participation);
    }

    abstract protected function checkPlacesNumber(Participation $participation) : void;

    abstract protected function checkMedicalCertificate(Participation $participation) : void;

    abstract protected function sendValidation(Participation $participation) : void;

}