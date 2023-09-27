<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\User;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Ramsey\Uuid\Uuid;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/article-management')]
class ArticleController extends AbstractController
{
    #[Route('/list', name: 'app_article_management_list')]
    public function list(ArticleRepository $articleRepository): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        return $this->render('article/list.html.twig', [
            'articles' => $articleRepository->findBy(['company' => $user->getCompany()]),
        ]);
    }

    #[Route('/new', name: 'app_article_management_new_entry')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();
        $article = new Article();
        $article->setCompany($company);

        $form = $this->createForm(ArticleType::class, $article, ['companyId' => $company->getId()]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Article $article */
            $article = $form->getData();
            $article->setGuid(Uuid::uuid4());
            $company->addArticle($article);

            $entityManager->persist($article);
            $entityManager->persist($company);
            $entityManager->flush();

            $this->addFlash(
                'success',
                sprintf("Article %s has been added!", $article->getName())
            );

            return $this->redirectToRoute('app_article_management_list');
        }

        return $this->render('article/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/edit/{gid}', name: 'app_article_management_edit_entry')]
    public function edit(string $gid, Request $request, EntityManagerInterface $entityManager, ArticleRepository $articleRepository): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();
        $article = $articleRepository->findOneBy(['guid' => $gid]);
        $form = $this->createForm(ArticleType::class, $article, ['companyId' => $company->getId()]);


        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Article $article */
            $article = $form->getData();
            $article->setCompany($company);

            $entityManager->persist($article);
            $entityManager->flush();

            $this->addFlash(
                'success',
                sprintf("Article Category %s changes have been saved!", $article->getName())
            );

            return $this->redirectToRoute('app_article_management_list');
        }

        return $this->render('article/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
