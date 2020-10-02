<?php


namespace App\Model;


class Book
{
    private int $id;
    private string $label;
    private string $isbn;
    private string $category;

    public function __construct(int $pId, string $pLabel, string $pIsbn, string $pCategory)
    {
        $this->id = $pId;
        $this->label = $pLabel;
        $this->isbn = $pIsbn;
        $this->category = $pCategory;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @return string
     */
    public function getIsbn(): string
    {
        return $this->isbn;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }
}