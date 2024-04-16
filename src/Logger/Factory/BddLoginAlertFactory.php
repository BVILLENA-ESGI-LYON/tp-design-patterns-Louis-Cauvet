<?php

namespace EsgiIw\TpDesignPattern\Logger\Factory;

use App\Attribute\AsEntity;
use App\Repository\UserRepository;
use App\Service\DB\Entity;
use EsgiIw\TpDesignPattern\Logger\BddLoginAlert;


class BddLoginAlertFactory extends LoginAlertFactory {
    public function getLoginAlertInterface(): BddLoginAlert
    {
        return new BddLoginAlert();
    }
}