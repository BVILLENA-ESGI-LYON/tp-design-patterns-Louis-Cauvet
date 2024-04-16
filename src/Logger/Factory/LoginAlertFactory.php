<?php

namespace EsgiIw\TpDesignPattern\Logger\Factory;

use App\Attribute\AsEntity;
use App\Repository\UserRepository;
use App\Service\DB\Entity;
use EsgiIw\TpDesignPattern\Logger\LoginAlertInterface;

abstract class LoginAlertFactory {
    abstract public function getLoginAlertInterface(): LoginAlertInterface;

    public function logError(string $message): void {
        $this
            ->getLoginAlertInterface()
            ->log(type: 'error', message: "[".date('Y-m-d H:i:s') . "] {$message}");
    }
}