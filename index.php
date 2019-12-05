<?php

class User {
    // properties and methodes 
    private $userName;
    protected $email;
    public $role= 'member';

    public function __construct($userName, $email){
        $this->userName = $userName;
        $this->email = $email;

    }

    // methods 

    public function addFreind(){
        
        return "$this->email added a new freind";
    }
    public function message(){
        return "$this->email".' sent a new message';
    }

    //getters 

    public function getEmail(){
        return $this->email;
    }

    public function getUser(){
        return $this->userName;
    }

    //setters


    public function setEmail($email){
        if(strpos($email, '@') > -1){
            $this->email = $email;
        }
    }

}

// child class 

class AdminUser extends User {

    public  $level;

    public function __construct($userName,$email,$level){
        $this->level = $level;
        parent::__construct($userName,$email);
    }

    // method protected 
    public function message(){
        return "$this->email , an admin, sent this message";
    }


}


$user1 = new User('Sam','sam@gmail.com');
$user2 = new User('Linnea','linnea@gmail.com');
$user3 = new AdminUser('admin','admin@gmail.com',5);



//set email 
$user3->setEmail('adminadmin@gmail.com') . '<br>';
//show email
echo $user1->getEmail() . '<br>';
echo $user3->getUser() . '<br>';
echo $user3->getEmail() . '<br>';
echo $user3->level . '<br>';
echo $user3->message() . '<br>';










?>