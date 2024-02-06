<?php
class Book
{
    public string $title;
    public string $author;

    public function __construct(
        string $title,
        string $author,
        )
    {
        $this->title=$title;
        $this->author=$author;
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
}