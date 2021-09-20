<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Accueil extends AbstractController
{

  private $articleRepo;

  public function __construct(ArticleRepository $articleRepo)
  {
    $this->articleRepo = $articleRepo;
  }

  /**
   * @Route("/", name="root")
   */
  public function index(): Response
  {

    $article = new Article();
    $article->setTitre("Article à la con")
            ->setAuteur("Mamadou Lô")
            ->setDateCreation(new \DateTime())
            ->setImageCouverture("http://placehold.it/450x290")
            ->setContenu("
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga qui libero pariatur voluptatum esse eaque eos fugit, sint expedita nostrum architecto possimus velit ullam iure eum sunt quidem nobis cumque.
            Eligendi perspiciatis quasi soluta, nostrum harum, omnis quo similique ex quidem laboriosam expedita quis voluptatum sit beatae blanditiis dolor error molestiae labore vel mollitia odio aut eius debitis corrupti? Placeat.
            Illum, qui rem. Dicta quos ad excepturi impedit blanditiis earum dolores, id delectus enim sapiente laborum nihil cum repudiandae perspiciatis ipsum dolorum repellendus voluptas. Exercitationem deserunt velit sit itaque ea?
            Molestias, hic est distinctio velit nobis corporis asperiores nostrum maxime quos odit nisi maiores, placeat incidunt a et totam, tempora nam ut beatae veritatis vel minus! Perferendis qui soluta blanditiis!
            Ea dicta quaerat vero ut esse iure reiciendis excepturi porro minus ab nostrum, accusamus aut perspiciatis labore minima odio amet molestias sequi voluptatum ad illo reprehenderit id. Facere, atque blanditiis.
            Perferendis architecto dignissimos quos, corporis doloremque quaerat! Magnam repellat quo explicabo repellendus voluptatum, est temporibus reiciendis voluptas ipsum quisquam expedita quos, sunt impedit, ipsam atque provident nobis! Suscipit, possimus tempora.
            Unde officiis natus cupiditate corrupti nisi eos quibusdam. Totam, tenetur accusamus, qui fuga eligendi commodi culpa sit hic fugit similique nulla? Amet quibusdam autem iusto, ut minima eligendi aliquid incidunt!
            Omnis quo, vitae dolor consectetur dicta provident consequuntur adipisci. Saepe, ab magnam! Quae corporis illum ducimus modi expedita voluptatum recusandae sint ad laudantium quia alias, neque in necessitatibus ipsum ea?
            Consequuntur dolores deleniti excepturi soluta asperiores blanditiis magnam hic quos iusto corrupti. Quod iure dignissimos aliquam beatae possimus a commodi similique laboriosam, fugiat voluptate doloremque nesciunt hic, ipsa assumenda natus!
            Laborum, quibusdam voluptates? Dolorem asperiores magnam aperiam, accusamus delectus pariatur quasi, id hic recusandae autem quas. Tenetur nostrum doloribus dicta tempora, quisquam ipsum porro neque ad, nobis libero praesentium accusantium?
            Inventore optio quisquam neque unde iure nihil nesciunt harum voluptatibus? Dignissimos tempore, ipsam numquam modi sequi minima nesciunt reprehenderit quae. Ipsa corrupti cumque excepturi soluta iste blanditiis totam, aut delectus.
            Deserunt itaque ab rem repudiandae laudantium vitae magnam recusandae nulla ea omnis pariatur quas tempora, quaerat harum minima libero aliquid sed, suscipit alias! Ut libero eaque consequuntur necessitatibus ullam. Ipsam.
            Numquam accusamus ducimus, dignissimos ipsum recusandae nihil, facilis veniam vero provident distinctio nam sunt dolores adipisci repudiandae et dolorum quibusdam odio cupiditate tenetur molestiae libero, esse praesentium. Similique, reiciendis soluta!
            Enim id ab, velit ad aliquid harum eaque inventore officiis totam voluptate dolore adipisci, deleniti alias nam vero ipsa tenetur aperiam nemo temporibus debitis est magnam illo! Amet, quasi asperiores.
            Aliquam dolores aliquid corrupti iure eum cupiditate cum repellendus excepturi. Numquam debitis nemo in eum laboriosam fuga nam, vel neque minima a. Molestias quis vero, ullam quibusdam esse eius voluptatum.
            Veniam atque neque, numquam consequatur ipsa odio at blanditiis ducimus, fuga optio obcaecati minus, explicabo voluptatem cumque? Natus dolorum optio, ea, in voluptas ratione doloribus perferendis odio tempora consequatur tenetur?
            Provident, at repellendus ea recusandae voluptatum amet voluptatibus vero nam culpa cumque ut quia minus ipsum quaerat non, ullam dolorum laborum expedita labore! Ipsum, quia? Cumque maxime autem corporis est.
            Ab eveniet aspernatur perspiciatis a nesciunt alias, dignissimos vel ullam reprehenderit eos blanditiis repellat, praesentium facilis ea quam soluta inventore dolor quo sapiente recusandae fugit modi! Ea animi quia deleniti.
            Possimus unde, quia amet voluptate eius assumenda totam voluptates repellendus voluptatem deleniti nobis debitis illo placeat! Ad similique atque assumenda molestiae dicta aliquam adipisci fuga rem. Sit delectus provident molestiae.
            Quos est unde nobis temporibus praesentium. Voluptatum molestias esse autem omnis, repellat hic dicta quasi modi recusandae saepe ipsum aut deleniti perspiciatis eligendi, beatae quis maxime ipsam! Alias, quisquam sed!
            ");

    // $entityManager = $this->getDoctrine()->getManager();
    // $entityManager->persist($article);
    // $entityManager->flush();

    $data = $this->articleRepo->findAll();

    return $this->render("accueil/accueil.html.twig", [
      'title' => "Accueil",
      'articleData' => $data
    ]);
  }
}