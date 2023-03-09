<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/user')]
class UserAdminController extends AbstractController
{
    #[Route('/', name: 'app_user_admin_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user_admin/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'app_user_admin_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user_admin/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}', name: 'app_user_admin_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_user_admin_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/recherche/by-email')]
    public function rechercheParSociete(Request $request, UserRepository $userRepository): Response
    {
        $searchValue = $request->get('search-value');
        if ($searchValue != null) {
            $users = $userRepository->findUserByEmail($searchValue);

            if ($users) {
                return new JsonResponse($users);
            } else {
                return new JsonResponse(null);
            }
        } else {
            return new JsonResponse(null);
        }
    }

    #[Route('/sort/by-field')]
    public function sortByField(Request $request, UserRepository $userRepository): Response
    {
        $searchValue = $request->get('sort-value');
        if ($searchValue != null) {

            $users = [];

            if ($searchValue == 1) {
                $users = $userRepository->orderByEmail();
            } else if ($searchValue == 2) {
                $users = $userRepository->orderByNom();
            } else if ($searchValue == 3) {
                $users = $userRepository->orderByPrenom();
            } else {
                $users = $userRepository->orderByNumero();
            }

            if ($users) {
                return new JsonResponse($users);
            } else {
                return new JsonResponse(null);
            }
        } else {
            return new JsonResponse(null);
        }
    }

}
