<?php

namespace LaKombi\UsersBundle\Manager;

use Doctrine\ORM\EntityManager;
use LaKombi\UsersBundle\Manager\BaseManager;
use LaKombi\UsersBundle\Entity\UserData;
// use LaKombi\UsersBundle\Entity\UserCat;

class UserDataManager extends BaseManager
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function loadUser($userId) {
        return $this->getRepository()
                ->findOneBy(array('id' => $userId));
    }

    /**
    * Save User entity
    *
    * @param User $user 
    */
    public function saveUserData(UserData $user)
    {
        $this->persistAndFlush($user);
    }

    public function getPreviousUser($userId) {
        return $this->getRepository()
                ->getAdjacentUser($userId, false)
                ->getQuery()
                ->setMaxResults(1)
                ->getOneOrNullResult();
    }

    public function getNextUser($userId) {
        return $this->getRepository()
                ->getAdjacentUser($userId, true)
                ->getQuery()
                ->setMaxResults(1)
                ->getOneOrNullResult();
    }

//    public function isAuthorized(Desk $desk, $memberId)
//    {
//        return ($desk->getMember()->getId() == $memberId) ?
//                true:
//                false;
//    }

    public function getPreviousAndNextUser($user)
    {
        return array(
            'prev' => $this->getPreviousUser($user->getId()),
            'user' => $user,
            'next' => $this->getNextUser($user->getId()),
        );
    }

    public function getRepository()
    {
        return $this->em->getRepository('LaKombiUsersBundle:UserData');
    }

}
