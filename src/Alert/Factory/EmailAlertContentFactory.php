<?php

namespace EsgiIw\TpDesignPattern\Alert\Factory;

use App\Attribute\AsEntity;
use App\Repository\UserRepository;
use App\Service\DB\Entity;
use EsgiIw\TpDesignPattern\Alert\EmailAlertContent;

class EmailAlertContentFactory implements AlertContentFactory {

    public function createAlertContent() : EmailAlertContent
    {
        return new EmailAlertContent();
    }
}
