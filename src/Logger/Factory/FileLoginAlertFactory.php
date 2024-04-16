<?php

namespace EsgiIw\TpDesignPattern\Logger\Factory;

use App\Attribute\AsEntity;
use App\Repository\UserRepository;
use App\Service\DB\Entity;
use EsgiIw\TpDesignPattern\Logger\FileLoginAlert;


class FileLoginAlertFactory extends LoginAlertFactory {
    public function getLoginAlertInterface(): FileLoginAlert
    {
        return new FileLoginAlert();
    }
}