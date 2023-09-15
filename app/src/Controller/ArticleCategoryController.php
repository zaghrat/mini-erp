<?php

namespace App\Controller;

use App\Entity\ArticleCategory;
use App\Entity\User;
use App\Form\ArticleCategoryType;
use App\Repository\ArticleCategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/article-category-management')]
class ArticleCategoryController extends AbstractController
{
    #[Route('/list', name: 'app_article_category')]
    public function list(): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        return $this->render('article_category/list.html.twig', [
            'categories' => $user->getCompany()->getArticleCategories(),
        ]);
    }

    #[Route('/new', name: 'app_article_category_new_entry', methods: ["GET", "POST"])]
    public function newClient(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();
        $category = new ArticleCategory();
        $category->setCompany($company);

        $form = $this->createForm(ArticleCategoryType::class, $category);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var ArticleCategory $category */
            $category = $form->getData();
            $category->setCompany($company);
            $company->addArticleCategory($category);

            $entityManager->persist($category);
            $entityManager->persist($company);
            $entityManager->flush();

            $this->addFlash(
                'success',
                sprintf("Article category %s has been added!", $category->getName())
            );
        }

        return $this->renderForm('article_category/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/edit/{id}', name: 'app_article_category_edit_entry', methods: ["GET", "POST"])]
    public function editClient(
        int $id,
        EntityManagerInterface $entityManager,
        Request $request,
        ArticleCategoryRepository $articleCategoryRepository
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();
        $category = new ArticleCategory();
        $category->setCompany($company);

        $category = $articleCategoryRepository->findOneBy(['id' => $id, 'company' => $company]);

        $form = $this->createForm(ArticleCategoryType::class, $category);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var ArticleCategory $category */
            $category = $form->getData();
            $category->setCompany($company);

            $entityManager->persist($category);
            $entityManager->flush();

            $this->addFlash(
                'success',
                sprintf("Article Category %s changes have been saved!", $category->getName())
            );
        }

        return $this->renderForm('article_category/edit.html.twig', [
            'form'  =>  $form,
            'client' => $category,
        ]);
    }

    #[Route(path: '/delete/{id}', methods: "GET")]
    public function confirmDelete(int $id, ArticleCategoryRepository $repository): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();
        $category = $repository->findOneBy(['id' => $id, 'company' => $company]);

        return $this->render('article_category/confirm_delete.html.twig', ['category' => $category]);
    }

    #[Route(path: '/delete/{id}', methods: "DELETE")]
    public function deleteClient(
        int $id,
        ArticleCategoryRepository $repository,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();

        $category = $repository->findOneBy(['id' => $id, 'company' => $company]);
        if ($category instanceof ArticleCategory) {
            $company->removeArticleCategory($category);
            $entityManager->persist($company);
            $entityManager->remove($category);
            $entityManager->flush();

            $this->addFlash(
                'success',
                sprintf("Article Category %s has been deleted!", $category->getName())
            );
        }

        return new JsonResponse();
    }
}
