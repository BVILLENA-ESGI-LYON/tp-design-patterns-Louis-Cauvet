<?php

namespace EsgiIw\TpDesignPattern\Alert\Factory;

use App\Attribute\AsEntity;
use App\Repository\UserRepository;
use App\Service\DB\Entity;

interface AlertContentFactory {
    public function createAlertContent();
}