<?php
namespace FriendzHub\SocialBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use  FriendzHub\SocialBundle\Entity\Newsfeeds;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use FriendzHub\SocialBundle\Helper\CommonMethods;
use  FriendzHub\SocialBundle\Entity\Registration;

class DefaultController extends Controller
{    
    
    public function indexAction($name)
    {
        return $this->render('FriendzHubSocialBundle:Default:index.html.twig', array('name' => $name));
    }
    //============================================================================================
        public function homeNewsAction(Request $request)
    {      
		 $repository = $this->getDoctrine()->getRepository('FriendzHubSocialBundle:Newsfeeds'); 
		 $Newsfeedss = $repository->findall();
		 
        return $this->render('FriendzHubSocialBundle:News:news.html.twig', array(
		'Newsfeedss' => $Newsfeedss
		));
    }
    //============================================================================================
     public function postAction(){
        $sessionUser = CommonMethods::getSession();
        $post = null;
        $error = 0;
        $errorMsg = '';
        $success = 0;
         
        $status = $this->get('request')->get('status');  
        $Newsfeeds = new Newsfeeds();
        $Newsfeeds->setNewsitem($status);
        $Newsfeeds->setOwner($sessionUser['username']);
        $Newsfeeds->setUserid($sessionUser['session']);
        $em = $this->getDoctrine()->getManager();      
        $em->persist($Newsfeeds);
		 $em->flush();
          return $this->redirect($this->generateUrl('friendz_hub_social_News'));
        }
    //============================================================================================
    public function regAction(Request $request) {

        $data = null;
        $error = 0;
        $errorMsg = '';
        $success = 0;
        $sessionUser = CommonMethods::getSession();
        if (isset($sessionUser['username'])) {

            return $this->redirect($this->generateUrl('friendz_hub_social_user', array('name' => $sessionUser['username'])));
        }
        if ($request->getMethod() == 'POST') {
            $requestData = $request->request->all();

            if (CommonMethods::validateRegister($requestData) == 0) {
                $error = 1;
                $errorMsg = 'Rgistration Fail';
                return $this->render('FriendzHubSocialBundle:News:reg.html.twig', array('data' => $data, 'error' => $error, 'errorMsg' => $errorMsg, 'success' => $success));
            }

            $userRepository = $this->getDoctrine()->getRepository('FriendzHubSocialBundle:Registration');
            $existingUser = $userRepository->findOneByUsername($requestData['username']);

            if (isset($existingUser)) {
                $error = 1;
                $errorMsg = 'Username "' . $existingUser->getUsername() . '" is alrady exist.';
                return $this->render('FriendzHubSocialBundle:News:reg.html.twig', array('data' => $data, 'error' => $error, 'errorMsg' => $errorMsg, 'success' => $success));
            }
            $user = new \FriendzHub\SocialBundle\Entity\Registration();
            $user->setUsername($requestData['username']);
            $user->setFirstName($requestData['firstname']);
            $user->setLastName($requestData['lastname']);
            $user->setPassword($requestData['password']);
            $user->setGender($requestData['gender']);
               

            $em = $this->getDoctrine()->getManager();

            $em->persist($user);
            $em->flush();
            $success = 1;
            return $this->render('FriendzHubSocialBundle:News:reg.html.twig', array('data' => $data, 'error' => $error, 'errorMsg' => $errorMsg, 'success' => $success));
        }
        return $this->render('FriendzHubSocialBundle:News:reg.html.twig', array('data' => $data, 'error' => $error, 'errorMsg' => $errorMsg, 'success' => $success));
    }
    //============================================================================================
      public function loginAction(Request $request) {

        $user = null;
        $error = 0;
        $errorMsg = '';
        $sessionUser = CommonMethods::getSession();
        if (isset($sessionUser['username'])) {

            return $this->redirect($this->generateUrl('friendz_hub_social_user', array('name' => $sessionUser['username'])));
        }

        if ($request->getMethod() == 'POST') {
            $requestData = $request->request->all();
            if (CommonMethods::validateLogin($requestData) == 0) {
                $error = 1;
                $errorMsg = 'Something went wrong.Please refresh the page and login.';
                return $this->render('FriendzHubSocialBundle:News:login.html.twig', array('data' => $user, 'error' => $error, 'errorMsg' => $errorMsg));
            }

            $userRepository = $this->getDoctrine()->getRepository('FriendzHubSocialBundle:Registration');
            $user = $userRepository->findOneByUsername($requestData['username']);

            if (isset($user) && $user->getPassword() == $requestData['password']) {
                $sessionUser['session']->set('username', $user->getUsername());
                $sessionUser['session']->set('name', $user->getFirstName() . ' ' . $user->getLastName());
                return $this->redirect($this->generateUrl('friendz_hub_social_user', array('name' => $user->getUsername())));
            } else {
                $error = 1;
                $errorMsg = 'Username or Password is not found';
            }
        }
        return $this->render('FriendzHubSocialBundle:News:login.html.twig', array('data' => $user, 'error' => $error, 'errorMsg' => $errorMsg));
    }
    //============================================================================================
    public function userAction($name) {

        $sessionUser = CommonMethods::getSession();
        if (isset($sessionUser['username']) == 0) {
            return $this->redirect($this->generateUrl('friendz_hub_social_login'));
        } else if ($sessionUser['username'] != $name) {
            return $this->redirect($this->generateUrl('friendz_hub_social_user', array('name' => $sessionUser['username'])));
        }

        $userRepository = $this->getDoctrine()->getRepository('FriendzHubSocialBundle:Registration');
        $postRepository = $this->getDoctrine()->getRepository('FriendzHubSocialBundle:Newsfeeds');
        $user = $userRepository->findOneByUsername($sessionUser['username']);
        $posts = $postRepository->findBy(array('owner' => $user->getUserId()));
        return $this->render('FriendzHubSocialBundle:News:login.html.twig', array('posts' => CommonMethods::postsToArray($posts), 'name' => $sessionUser['name']));
    }
    public function logoutAction() {
        $session = new Session();
        $session->clear();
        $session->invalidate();
        return $this->redirect($this->generateUrl('friendz_hub_social_login'));
    }
   //=============================================================================================
     public function profileAction($name, Request $request)
    { 
        $em = $this->getDoctrine()->getManager();
                    $sessionUser = CommonMethods::getSession();
        if (isset($sessionUser['username']) == 0) {
              return $this->redirect($this->generateUrl('friendz_hub_social_login'));
        } 
                    $entities=$this->getDoctrine()   //get all posts
                      ->getRepository('FriendzHubSocialBundle:Registration')
                      ->findAll(); 
return $this->render('FriendzHubSocialBundle:News:user.html.twig',array('entities' => $entities,'username' => $sessionUser['username']));
    }
    //========================================================================================================
    public function updateAction(Request $request,$name){ 


               $sessionUser =$name;
                 if($request->getMethod()=='POST'){


            $userRegistration = new Registration();
                 
            $firstname = $request->request->get('firstname');
            $username = $request->request->get('username');
            $lastname = $request->request->get('lastname');
            $gender = $request->request->get('gender');
            $password = $request->request->get('password');
            $userRegistration->setFirstName($firstname);
            $userRegistration-> setUserName($username);
            $userRegistration-> setLastName($lastname);
            $userRegistration-> setGender($gender);
            $userRegistration-> setPassword($password);
            $em=$this->getDoctrine()->getManager();
            $em->persist($userRegistration);
            $em->flush();
            return $this->redirect($this->generateUrl('friendz_hub_social_profile',array('name'=>$sessionUser)));
        }
        
        return $this->render('FriendzHubSocialBundle:News:update.html.twig',array('username'=>$sessionUser));
    }
}


}

