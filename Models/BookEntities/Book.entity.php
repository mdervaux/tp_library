<?php
class Book implements ArrayAccess
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

    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->offsetExists($offset) ? $this->data[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        if ($offset !== null) {
            $this->data[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
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