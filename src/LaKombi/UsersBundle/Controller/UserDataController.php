<?php
namespace LaKombi\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use LaKombi\UsersBundle\Form\Type\UserDataType;
use LaKombi\UsersBundle\Entity\UserData;

class UserDataController extends Controller
{
    /**
     * @Route("/user/{userId}", name="user_show")
     * @Template()
    */
    public function userAction($userId)
    {
        if (!$user = $this->get('lakombi.userdata_manager')->loadUser($userId)) {
            throw new NotFoundHttpException($this->get('translator')->trans('This user does not exist.'));
        }
    
        return array('user' => $user);
    }

	/**
 	* @Route("/add-user", name="user_add")
 	* @Template()
 	*/
    public function addUserAction()
    {
    	$request = $this->get('request'); // On récupère l'objet request via le service container
  	    $user = new UserData(); // On créé notre objet User vierge
    
	    $form = $this->get('form.factory')->create(new UserDataType(), $user); // On bind l'objet Desk à notre formulaire DeskType
    
    		if ('POST' == $request->getMethod()) { // Si on a posté le formulaire
        		$form->bindRequest($request); // On bind les données du form
        		if ($form->isValid()) { // Si le formulaire est valide
            
            		$this->get('lakombi.userdata_manager')->saveUserData($user); // On utilise notre Manager pour gérer la sauvegarde de l'objet
            
		            // On envoi une 'flash' pour indiquer à l'utilisateur que le bureau est ajouté
        		    $this->get('session')->setFlash('notice', 
	                $this->get('translator')->trans('User added')
            		);
            
		            // On redirige vers la page de modification du user
        		    return new RedirectResponse($this->generateUrl('user_edit', array(
                	'userId' => $user->getId()
            		)));
        		}
    	}

    	return array('form' => $form->createView(), 'user' => $user); // On passe à Twig l'objet form et notre objet user
	}
	
	/**
     * @Route("/edit-user/{userId}", name="user_edit")
     */
    public function editUserAction($userId)
    {
        $request = $this->get('request');
        
        // On vérifie que l'ID du bureau existe
        if (!$user = $this->get('lakombi.userdata_manager')->loadUserData($userId)) {
            throw new NotFoundHttpException(
                $this->get('translator')->trans('This user does not exist.')
            );
        }
        
        // On bind le bureau récupéré depuis la BDD au formulaire pour modification
        $form = $this->get('form.factory')->create(new UserDataType(), $user);
        
        // Si l'utilisateur soumet le formulaire
        if ('POST' == $request->getMethod()) {
            $form->bindRequest($request);
            if ($form->isValid()) {
                
                $this->get('lakombi.userdata_manager')->saveUserData($user);
                
                $this->get('session')->setFlash('notice',
                    $this->get('translator')->trans('User updated.')
                );
                
                return new RedirectResponse($this->generateUrl('user_edit', array(
                    'userId' => $user->getId()
                )));
            }
        }

        return $this->render('LaKombiUsersBundle:User:addUser.html.twig',array('form' => $form->createView(), 'user' => $user)); // On change le template par défaut et on réutilise celui de add qui est le même
    }
    
	/**
 	* @Route("/add-user/news", name="add_user_news")
 	* @Template()
 	*/
    public function addUserNewsAction()
    {
    	$request = $this->get('request'); // On récupère l'objet request via le service container
  	    $user = new UserData(); // On créé notre objet User vierge
    
	    $form = $this->get('form.factory')->create(new UserDataType(), $user); // On bind l'objet Desk à notre formulaire DeskType
    
    		if ('POST' == $request->getMethod()) { // Si on a posté le formulaire
        		$form->bindRequest($request); // On bind les données du form
        		if ($form->isValid()) { // Si le formulaire est valide
            
            		$this->get('lakombi.userdata_manager')->saveUserData($user); // On utilise notre Manager pour gérer la sauvegarde de l'objet
            
		            // On envoi une 'flash' pour indiquer à l'utilisateur que le bureau est ajouté
        		    $this->get('session')->setFlash('notice', 
	                $this->get('translator')->trans('User added')
            		);
            
		            // On redirige vers la page de modification du user
        		    return new RedirectResponse($this->generateUrl('user_edit', array(
                	'userId' => $user->getId()
            		)));
        		}
    	}
    }
}
