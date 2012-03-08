<?php
namespace LaKombi\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use LaKombi\UsersBundle\Entity\UserData;

class DefaultController extends Controller
{    
    /**
     * @Route("/test/", name="test")
     */
    public function testAction()
    {
    $user = new UserData();
    $user->setSurname("Jeremy");
    $user->setNickname("j1v3");
    $user->setCity("Vez");
    $user->setIsValid(true);
    
    echo "Création de l'utilsateur ".$user->getSurname()." dont le pseudo est ".$user->getNickname()." et qui réside à ".$user->getSurname();
    
    $em = $this->getDoctrine()->getEntityManager();
    $em->persist($user);
    $em->flush();
    
    echo "L'utilisateur a été enregistré en BDD avec l'ID: ".$user->getId();
    
    exit;
}


}
