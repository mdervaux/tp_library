<?php
class BookFactory {
    public static function createBook($book){
        switch ($book->sizze) {
            case $book->filesize:
                return new DigitalBook();
                break;
            
            case $book->weight:
                return new PhysicalBook();
                break;

                throw new Exception("Le formatn'est pas valide");
        }
    }
}