<?php

namespace Pixelpro\miCMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


class DefaultController extends Controller
{
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('PixelpromiCMSBundle:Post')->findAll();
        return $this->render('PixelpromiCMSBundle:Default:index.html.twig', array('post'=>$post));
      }


      public function showAction($id)
      {
          $em = $this->getDoctrine()->getManager();
          $ppost = $em->getRepository('PixelpromiCMSBundle:Post')->find($id);
          return $this->render('PixelpromiCMSBundle:Default:show.html.twig', array('ppost'=>$ppost));
        }

      public function langAction(Request $request){
        return $this->redirectToRoute("pixelpromi_cms_homepage");
      }

}
