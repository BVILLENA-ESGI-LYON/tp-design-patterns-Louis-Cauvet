<?php

namespace EsgiIw\TpDesignPattern\Model\Mailer;

use App\Attribute\AsEntity;
use App\Repository\UserRepository;
use App\Service\DB\Entity;

readonly class Mailer {
    public function __construct (
        public array $recipients,
        public string $subject,
        public string $body,
        public ?array $copy = null,
        public ?array $attachments = null
    ){}
}