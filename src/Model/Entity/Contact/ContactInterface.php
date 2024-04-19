<?php

namespace EsgiIw\TpDesignPattern\Model\Entity\Contact;


interface ContactInterface
{
    public function getNomPersonne(): string;

    public function getMessage(): string;
}