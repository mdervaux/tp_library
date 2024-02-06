<?php

require_once("../BookEntities/Book.entity.php");
require_once("../MemberEntities/Member.entity.php");
Class Borrow {

    public DateTime $date;
    public Member $member;
    public Book $book;



}