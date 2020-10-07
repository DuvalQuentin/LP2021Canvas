<?php


namespace App\Controller;

use App\Model\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BookController extends AbstractController
{
    public function getBookAction(): Response
    {
        return $this->json($this->generateOneBook());
    }

    public function patchBookAction(Request $request): Response
    {
        $book = $this->patchFromRequest($request, $this->generateOneBook());

        return $this->json($book);
    }

    public function addBookAction(Request $request): Response
    {
        $book = $this->createFromRequest($request);

        return $this->json($book);
    }

    private function patchFromRequest(Request $request, Book $book): Book
    {
        $book->setId($request->get('id'));
        $book->setLabel($request->get('label'));
        $book->setIsbn($request->get('isbn'));
        $book->setCategory($request->get('category'));

        return $book;
    }

    private function createFromRequest(Request $request): Book
    {
        return new Book($request->get('id'), $request->get('label'), $request->get('isbn'), $request->get('category'));
    }

    private function generateOneBook(): Book {
        return new Book(1, 'Necronomicon', '978-2-35294-675-5', '2');
    }
}