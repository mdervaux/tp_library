<?php

require_once 'Member.entity.php';
class AdminMember extends Member
{
    public function addUser($member): Member{

        return ($member);
    }
}