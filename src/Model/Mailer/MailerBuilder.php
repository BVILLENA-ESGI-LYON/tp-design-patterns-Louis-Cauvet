<?php

namespace EsgiIw\TpDesignPattern\Model\Mailer;

use App\Attribute\AsEntity;
use App\Repository\UserRepository;
use App\Service\DB\Entity;

class MailerBuilder {
    private array $recipients;
    private ?array $copy = null;
    private ?array $attachments = null;

    public function __construct(
        private string $subject,
        private string $body,
        private string $recipient,
    ){
        $this->recipients = array($recipient);
    }

    public function addRecipient(string $newRecipient):static
    {
        array_push($this->recipients, $newRecipient);

        return $this;
    }

    public function addCopy(string $toCopy):static
    {
        if($this->copy === null){
            $this->copy = array();
        }
        array_push($this->copy, $toCopy);

        return $this;
    }

    public function addAttachment(string $attachment):static
    {
        if($this->attachments === null){
            $this->attachments = array();
        }
        array_push($this->attachments, $attachment);

        return $this;
    }

    public function getResult():Mailer
    {
        return new Mailer(
            $this->recipients,
            $this->subject,
            $this->body,
            $this->copy,
            $this->attachments,
        );
    }
}