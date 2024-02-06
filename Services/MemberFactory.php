<?php
class MemberFactory {
    public static function createMember($member) {
        switch ($role) {
            case $member->admin:
                return new Admin();
            case $member->member:
                return new Member();
            default:
                throw new Exception("Invalid role: $member->role");
        }
    }
}

class Admin {
    // Admin class implementation
}

class User {
    // User class implementation
}

class Guest {
    // Guest class implementation
}
