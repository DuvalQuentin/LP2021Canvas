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

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * @param string $isbn
     */
    public function setIsbn(string $isbn): void
    {
        $this->isbn = $isbn;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category): void
    {
        $this->category = $category;
    }


}