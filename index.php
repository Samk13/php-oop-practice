<?php

class User {
    // properties and methodes 
    private $userName;
    private $email;

    public function __construct($userName, $email){
        $this->userName = $userName;
        $this->email = $email;
    }
    public function addFreind(){
        
        return "$this->email added a new freind";
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


$user1 = new User('Sam','sam@gmail.com');
$user2 = new User('Linnea','linnea@gmail.com');

echo $user1->getUser() . '<br>';

//set email 
$user1->setEmail('samdf@gmail.com') . '<br>';
//show email
echo $user1->getEmail() . '<br>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php OOP</title>
</head>
<body>
    
</body>
</html>