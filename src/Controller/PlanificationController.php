<?php

namespace App\Controller;

use App\Entity\Calendar;
use App\Form\CalendarType;
use App\Repository\CalendarRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
#[Route('/planification')]
class PlanificationController extends AbstractController
{
    #[Route('/', name: 'app_planification_index', methods: ['GET'])]
    public function index(CalendarRepository $calendarRepository): Response
    {
        return $this->render('planification/index.html.twig', [
            'calendars' => $calendarRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_planification_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CalendarRepository $calendarRepository, ValidatorInterface $validator): Response
    {
        $calendar = new Calendar();
        $form = $this->createForm(CalendarType::class, $calendar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

        $errors = $validator->validate($calendar, null, ['DateValidation']);

        if (count($errors) > 0) {
            $errorMessages = [];

            foreach ($errors as $error) {
                $errorMessages[] = $error->getMessage();
            }

            return new Response(implode("\n", $errorMessages), 400);
        }

        // do something with valid entity
        // ...

        return new Response('Entity is valid', 200);
            $calendarRepository->save($calendar, true);

            return $this->redirectToRoute('app_planification_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('planification/new.html.twig', [
            'calendar' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_planification_show', methods: ['GET'])]
    public function show(Calendar $calendar): Response
    {
        return $this->render('planification/show.html.twig', [
            'calendar' => $calendar,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_planification_edit')]
 
    public function modifier(Request $request , ManagerRegistry $doctrine, Calendar $calendar,ValidatorInterface $validator): Response
    {
        $form = $this->createForm(CalendarType::class, $calendar);
        $form->handleRequest($request);
        
        if ($form->IsSubmitted() && $form->isValid()) {
            $errors = $validator->validate($calendar, null, ['DateValidation']);

        if (count($errors) > 0) {
            $errorMessages = [];

            foreach ($errors as $error) {
                $errorMessages[] = $error->getMessage();
            }

            return new Response(implode("\n", $errorMessages), 400);
        }
            $em = $doctrine->getManager();
            // persist = ajouter
            $em->persist($calendar);
            // flush = push
            $em->flush();
    
            return $this->redirectToRoute('app_planification_index');
        }

        return $this->renderForm('planification/edit.html.twig', [
            
            'calendar' => $form,


        ]);
    }
    
    #[Route('supprimer/{id}', name: 'app_planification_delete')]

    public function app_planification_delete($id , ManagerRegistry $doctrine): Response
{
    $em=$doctrine->getManager();
    $calendar =$doctrine->getRepository(Calendar::class);
    $calendar =  $calendar->find($id);
    $em->remove($calendar);
$em->flush();
return $this->redirectToRoute('app_planification_index');

}
}
