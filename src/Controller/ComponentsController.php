<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Category;
use App\Entity\Service;

class ComponentsController extends AbstractController
{

    public function fillNavigator()
    {

      $categories = $this->getDoctrine()
             ->getRepository(Category::class)
             ->findAll();

      $services = $this->getDoctrine()->getRepository(Service::class)->findAll();

        return $this->render('frontend/components/stacknavigator.html.twig', [
            'categories' => $categories,
            'services' => $services
        ]);
    }

    public function fillFooter(){

      $categories = $this->getDoctrine()
             ->getRepository(Category::class)
             ->findAll();

      $services = $this->getDoctrine()->getRepository(Service::class)->findAll();

      return $this->render('frontend/components/footer.html.twig', [
          'categories' => $categories,
          'services' => $services
      ]);
    }

   public function fillProductCategories(){
     $categories = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findAll();

       return $this->render('frontend/components/navcategories.html.twig', [
           'categories' => $categories
       ]);
   }



}
