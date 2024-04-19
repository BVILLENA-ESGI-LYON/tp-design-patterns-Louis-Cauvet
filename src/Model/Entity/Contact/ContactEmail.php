<?php

namespace EsgiIw\TpDesignPattern\Model\Entity\Contact;

class ContactEmail implements ContactInterface
{
    public function getNomPersonne(): string
    {
        return  "Lucas";
    }

    public function getMessage(): string
    {
        return "J'ai envoyé un message de contact par mail";
    }
}