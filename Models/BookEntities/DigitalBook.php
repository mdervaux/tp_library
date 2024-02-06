<?php
require_once 'Book.entity.php';
class DigitalBook extends Book
{
    public int $fileSize;

    public function __construct(
        string $title,
        string $author,
        int $price,
        int $fileSize=0)
    {
        parent::__construct($title, $author, $price);
        $this->fileSize=$fileSize;
    }

    /**
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    public function printDigitalBook():string
    {
        $string = "{$this->title}, {$this->author}, Filesize : {$this->getFileSize()}";
        return print $string;
    }

}