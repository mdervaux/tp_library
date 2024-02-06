<?php
class MemberFactory {
    public static function createMember($role) {
        switch ($role) {
            case Role::ADMIN:
                return new Admin();
            case $member->member:
                return new Member();
            default:
                throw new Exception("Invalid role: $member->role");
        }
    }
}