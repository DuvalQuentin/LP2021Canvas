<?php


namespace App\Controller;

use App\Model\Book;
use App\Normalizer\BookNormalizer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController
{
    public function _Get()
    {
        $book = new Book (7, 'B126A12', '945-613-5-47-5', 'Aventures');
        return $this->json($book);
        //$bookNormalization = new BookNormalizer();
        //return new Response($bookNormalization->normalize($book));
    }

    public function _Post(Request $request)
    {
        $id = $request->get('id');
        $label = $request->get('label');
        $isbn = $request->get('isbn');
        $category = $request->get('category');

        if(empty($id) || empty($label) || empty($isbn) || empty($category))
        {
            return new \Exception("il manque des informations.");
        }

        return $this->json(new Book($id, $label, $isbn, $category));
    }

    public function _Patch(Request $request)
    {
        $book = new Book (7, 'B126A12', '945-613-5-47-5', 'Aventures');

        $id = $request->get('id');
        $label = $request->get('label');
        $isbn = $request->get('isbn');
        $category = $request->get('category');

        if(!empty($id))
        {
            $book->setId($id);
        }
        if(!empty($label))
        {
            $book->setLabel($label);
        }
        if(!empty($isbn))
        {
            $book->setIsbn($isbn);
        }
        if(!empty($category))
        {
            $book->setCategory($category);
        }

        return $this->json(new Book($id, $label, $isbn, $category));
    }
}