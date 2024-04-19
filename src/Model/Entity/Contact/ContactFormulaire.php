<?php

namespace EsgiIw\TpDesignPattern\Model\Entity\Contact;

class ContactFormulaire implements ContactInterface
{
    public function getNomPersonne(): string
    {
        return  "Jean Michel";
    }

    public function getMessage(): string
    {
        return "J'ai envoyé un message via le formulaire de contact";
    }
}