<?php

namespace EsgiIw\TpDesignPattern\Model\Entity\Contact;

class ContactFactory {
    public static function createContact($typeContact)
    {
        switch ($typeContact) {
            case "formulaire":
                return new ContactFormulaire();
                break;
            case "email":
                return new ContactEmail();
                break;
            default:
                throw new \Exception("Type de contact inconnu");
        }
    }
}