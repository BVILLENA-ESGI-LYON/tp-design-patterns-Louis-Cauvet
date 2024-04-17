<?php

namespace EsgiIw\TpDesignPattern\Model\Controller;

use App\Attribute\AsEntity;
use App\Repository\EventRepository;
use App\Service\DB\Entity;
use EsgiIw\TpDesignPattern\Model\Entity\User\User;

class UserController
{
    private array $tabUsers;

    public function __construct($tabUsers) {
        $this->tabUsers = $tabUsers;
    }

    public function getTabUsers() : array
    {
        return $this->tabUsers;
    }

    public function getUser(int $idUser) : User
    {
        $result = null;
        foreach ($this->tabUsers as $user){
            if($user->getId() === $idUser) {
                $result = $user;
            }
        }
        return $result;
    }

    public function deleteUser(int $idUser)
    {
        foreach ($this->tabUser as $user){
            if($user->getId() === $idUser) {
                $indexUser = array_search($user, $this->tabUsers);
                unset($this->tabUsers[$indexUser]);
            }
        }
    }

}