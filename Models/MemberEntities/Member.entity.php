<?php
require_once("Role.enum.php");
class Member implements Observer
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
    
    public function update(Subject $subject)
    {
        echo "The book " . $subject->title . " by " . $subject->author . " is now available for " . $subject->price . " dollars.<br>";
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