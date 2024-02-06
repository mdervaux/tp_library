<?php
class Book
{
    public string $title;
    public string $author;
    public int $price;

    public function __construct(
        string $title,
        string $author,
        int $price,
        )
    {
        $this->title=$title;
        $this->author=$author;
        $this->price=$price;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    // Maintenant cette méthode est commune aux deux classes Physical et DigitalBook
    // par le principe de l'héritage grâce au mot clé extends
    public function getPriceAsCurrency(){
        return "$".$this->getPrice()/100;
    }
}