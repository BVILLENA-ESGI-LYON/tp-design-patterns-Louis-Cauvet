<?php

namespace EsgiIw\TpDesignPattern\Logger\Factory;

use App\Attribute\AsEntity;
use App\Repository\UserRepository;
use App\Service\DB\Entity;
use EsgiIw\TpDesignPattern\Logger\EmailLoginAlert;


class EmailLoginAlertFactory extends LoginAlertFactory {
    public function getLoginAlertInterface(): EmailLoginAlert
    {
        return new EmailLoginAlert();
    }
}