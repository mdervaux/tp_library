<?php
class MemberFactory {
    public static function createMember($role, $name, $mail, $password) {
        switch ($role) {
            case Role::ADMIN:
                return new Admin($name, $mail, $password);
            case Role::MEMBER:
                return new Member($name, $mail, $password);
            default:
                throw new Exception("Invalid role: $member->role");
        }
    }
}