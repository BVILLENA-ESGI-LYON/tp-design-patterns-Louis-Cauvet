<?php

namespace EsgiIw\TpDesignPattern\Alert\Factory;

use App\Attribute\AsEntity;
use App\Repository\UserRepository;
use App\Service\DB\Entity;
use EsgiIw\TpDesignPattern\Alert\EmailAlertContent;
use EsgiIw\TpDesignPattern\Alert\SmsAlertContent;

class SmsAlertContentFactory implements AlertContentFactory {

    public function createAlertContent() : SmsAlertContent
    {
        return new SmsAlertContent();
    }
}
