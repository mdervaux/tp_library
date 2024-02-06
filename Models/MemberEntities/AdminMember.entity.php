<?php

require_once 'Member.entity.php';
class AdminMember extends Member
{

    public function addUser(Member $member): Member{
        // TODO par Antoine et pas quelqun d'autre 
        return ($member);
    }
}