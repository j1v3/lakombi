<?php
namespace LaKombi\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use LaKombi\MainBundle\Entity\Enquiry;
use LaKombi\MainBundle\Form\EnquiryType;
use LaKombi\MainBundle\Controller\DefaultController;

class MainController extends Controller
{
	
	public function homeAction()
	{
    	return $this->render('LaKombiMainBundle:Main:home.html.twig');
	}

	public function newsAction()
	{
    	return $this->render('LaKombiMainBundle:Main:news.html.twig');
	}

	public function aboutAction()
	{
    	return $this->render('LaKombiMainBundle:Main:about.html.twig');
	}

	public function contactAction()
	{
   	 	$enquiry = new Enquiry();
    	$form = $this->createForm(new EnquiryType(), $enquiry);
	
	    $request = $this->getRequest();
	    
    		if ($request->getMethod() == 'POST') {
       		$form->bindRequest($request);
		
        		if ($form->isValid()) {

   			     	$message = \Swift_Message::newInstance()
   	     	    	->setSubject('Contact depuis LaKombi.com')
           		    ->setFrom('contact@lakombi.com')
                    ->setTo($this->container->getParameter('lakombi_main.emails.contact_email'))
                    ->setBody($this->renderView('LaKombiMainBundle:Main:contactMail.txt.twig', array('enquiry' => $enquiry)));
			        $this->get('mailer')->send($message);

			        $this->get('session')->setFlash('contact-notice', 'Votre message a été envoyé. Merci !');

		        // Redirect - This is important to prevent users re-posting
		        // the form if they refresh the page
		        return $this->redirect($this->generateUrl('LaKombiMainBundle_contact'));
    		    }
    		}

    	return $this->render('LaKombiMainBundle:Main:contact.html.twig', array(
    		    'form' => $form->createView()
    	));
	}
}
