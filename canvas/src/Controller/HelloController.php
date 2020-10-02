<?php


namespace App\Controller;

use App\Model\Book;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController{
    public function _HelloBook(){
        $book = new Book (12, 'label', 'isbn', 'categorie');
        return $this->json($book);
    }
}