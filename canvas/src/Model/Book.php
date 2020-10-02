<?php


namespace App\Model;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Book
{
    public int $id;
    public string $label;
    public string $isbn;
    public string $category;

    public function __construct($id, $label, $isbn, $category){
        $this->id =  $id;
        $this->label =  $label;
        $this->isbn =  $isbn;
        $this->category =  $category;

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public function getCategory(): string
    {
        return $this->category;
    }



}