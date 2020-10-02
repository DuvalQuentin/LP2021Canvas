<?php
//src/Controller/HelloController.php
namespace App\Controller;

use App\Model\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends AbstractController
{
    public function _HelloBook()
    {
        $unBook = new Book(1,'olala ce livr est vraiment...', 'super !', 'psychologie');
        return new Response(
            json_encode($unBook)
        );
    }
}