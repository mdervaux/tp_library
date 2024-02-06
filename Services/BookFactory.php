<?php
class BookFactory {
    public static function createBook($book){
        switch ($type) {
            case $book->digital:
                return new DigitalBook();
                break;
            
            case $book->physical:
                return new PhysicalBook();
                break;

                throw new Exception("Le formatn'est pas valide");
        }
    }
}