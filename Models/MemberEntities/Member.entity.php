<?php
require_once("Role.enum.php");
class Member
{
    public string $name;
    public string $mail;
    private string $password;

    public role $role;



    public function __constuctor(string $name, string $mail, string $password)
    {
        $this->name = $name;
        $this->mail = $mail;
        $this->password = $password;
    }
    

   public function getName(): string
   {
    return $this->name;
   }
   public function getMail(): string
   {
    return $this->mail;
   }
   public function getPassword(): string
   {
    return $this->password;
   }
}