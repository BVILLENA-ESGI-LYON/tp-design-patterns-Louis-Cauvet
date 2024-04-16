<?php

namespace EsgiIw\TpDesignPattern\Logger;

use App\Attribute\AsEntity;
use App\Repository\UserRepository;
use App\Service\DB\Entity;

interface LoginAlertInterface {
    public function log(string $type, string $message): void;
}