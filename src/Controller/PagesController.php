<?php


namespace App\Controller;

use App\Entity\ArticleWiki;
use App\Repository\ArticleWikiRepository;
use App\Entity\ArticleFemaleCiv;
use App\Repository\ArticleFemaleCivRepository;
use App\Entity\ArticleMaleCiv;
use App\Repository\ArticleMaleCivRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver; 
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PagesController extends AbstractController
{
	/**

	* @Route("/", name="home")

	*/
	public function home()
	{

        return $this->render('pages/home.html.twig');
	}

    /**

    * @Route("/pagebutton", name="pagebutton")

    */
    public function pagebutton()
    {

        return $this->render('pages/pagebutton.html.twig');
    }

    /**

    * @Route("/about", name="about")

    */
    public function about()
    {

        return $this->render('pages/about.html.twig');
    }

     /**

    * @Route("/stats", name="stats")

    */
    public function stats()
    {
        $articlewiki = $this->getDoctrine()
                ->getRepository(ArticleWiki::class)
                ->findAll();

        $listArticleMaleImprove = $this->getDoctrine()
                ->getRepository(ArticleMaleCiv::class)
                ->listArticleMaleImprove();

        $listArticleMaleCreate = $this->getDoctrine()
                ->getRepository(ArticleMaleCiv::class)
                ->listArticleMaleCreate();

        $listArticleFemaleImprove = $this->getDoctrine()
                ->getRepository(ArticleFemaleCiv::class)
                ->listArticleFemaleImprove();

        $listArticleFemaleCreate = $this->getDoctrine()
                ->getRepository(ArticleFemaleCiv::class)
                ->listArticleFemaleCreate();

        return $this->render('pages/stats.html.twig', ['articles' => $articlewiki, 'malescreate' => $listArticleMaleCreate, 'malesimprove' => $listArticleMaleImprove, 'femalescreate' => $listArticleFemaleCreate, 'femalesimprove' => $listArticleFemaleImprove,]);
    }

    /**

    * @Route("/help", name="help")

    */
    public function help()
    {

        return $this->render('pages/help.html.twig');
    }

    /**

	* @Route("/numberform", name="numberform")

	*/
	public function numberform(Request $request, ArticleWikiRepository $articlewikiRepository): Response
    {

        $form = $this->createFormBuilder()
            ->add('rechercher', IntegerType::class, ['label' => false, 'attr' => 
            	['class' => 'form-control',
            	'id' => 'inputNumber']])
            ->add('save', SubmitType::class, ['attr' => 
            	['class' => 'btn btn-primary'],
            	'label' => 'Afficher'])
            ->getForm(); 

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $array_data = $form->getData();

            $data = $array_data['rechercher'];

            $value = intval($data);

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();

            //return $this->redirectToRoute('task_success');

            $articlewiki = $this->getDoctrine()
				->getRepository(ArticleWiki::class)
				->findArticleByNumber($value);

			return $this->render('pages/articlenumber.html.twig', ['articles' => $articlewiki]);


	    }
	    else{

	    	//return $this->redirectToRoute('task_success');

            $articlewiki = $this->getDoctrine()
				->getRepository(ArticleWiki::class)
				->findAll();

	    	return $this->render('pages/numberform.html.twig', [
            'form' => $form->createView(), 'articles' => $articlewiki]);

	    }
    }

    /**

	* @Route("/letterform", name="letterform")

	*/
	public function letterform(Request $request, ArticleWikiRepository $articlewikiRepository): Response
    {

        $form = $this->createFormBuilder()
            ->add('rechercher', TextType::class, ['label' => false, 'attr' => 
            	['class' => 'form-control', 
            	'placeholder' => 'Rechercher un article à améliorer par une lettre alphabétique',
                'pattern' => '[a-zA-Z]',
                'title' => 'Saisir uniquement une lettre alphabétique majuscule ou minuscule',
            	'id' => 'inputNumber']])
            ->add('save', SubmitType::class, ['attr' => 
            	['class' => 'btn btn-primary'],
            	'label' => 'Afficher'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $array_data = $form->getData();

            $data = $array_data['rechercher'];

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();

            //return $this->redirectToRoute('task_success');

            $articlewiki = $this->getDoctrine()
				->getRepository(ArticleWiki::class)
				->findArticleByLetter($data);

			return $this->render('pages/articleletter.html.twig', ['articles' => $articlewiki, 'data' => $data]);


	    }
	    else{

	    	return $this->render('pages/letterform.html.twig', [
            'form' => $form->createView()]);

	    }

    }

     /**

    * @Route("/genreform", name="genreform")

    */
     public function genreform() {

        return $this->render('pages/genreform.html.twig');

     }

     /**

    * @Route("/listmale", name="listmale")

    */
    public function listmale() {

        $listAllArticleMale = $this->getDoctrine()
                ->getRepository(ArticleMaleCiv::class)
                ->listAllArticleMale();

        $listArticleMaleImprove = $this->getDoctrine()
                ->getRepository(ArticleMaleCiv::class)
                ->listArticleMaleImprove();

        $listArticleMaleCreate = $this->getDoctrine()
                ->getRepository(ArticleMaleCiv::class)
                ->listArticleMaleCreate();

        return $this->render('pages/listmale.html.twig', ['allmales' => $listAllArticleMale, 'malescreate' => $listArticleMaleCreate, 'malesimprove' => $listArticleMaleImprove]);
    }

     /**

    * @Route("/listfemale", name="listfemale")

    */
     public function listfemale() {

        $listAllArticleFemale = $this->getDoctrine()
                ->getRepository(ArticleFemaleCiv::class)
                ->listAllArticleFemale();

        $listArticleFemaleImprove = $this->getDoctrine()
                ->getRepository(ArticleFemaleCiv::class)
                ->listArticleFemaleImprove();

        $listArticleFemaleCreate = $this->getDoctrine()
                ->getRepository(ArticleFemaleCiv::class)
                ->listArticleFemaleCreate();

        return $this->render('pages/listfemale.html.twig', ['allfemales' => $listAllArticleFemale, 'femalescreate' => $listArticleFemaleCreate, 'femalesimprove' => $listArticleFemaleImprove]);

     }
	
} 