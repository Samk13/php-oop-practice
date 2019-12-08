<?php 

echo <<<EOH

 ______     ______     __    __        ______     ______     ______     __     _____    
/\  ___\   /\  __ \   /\ "-./  \      /\  __ \   /\  == \   /\  == \   /\ \   /\  __-.  
\ \___  \  \ \  __ \  \ \ \-./\ \     \ \  __ \  \ \  __<   \ \  __<   \ \ \  \ \ \/\ \ 
 \/\_____\  \ \_\ \_\  \ \_\ \ \_\     \ \_\ \_\  \ \_\ \_\  \ \_____\  \ \_\  \ \____- 
  \/_____/   \/_/\/_/   \/_/  \/_/      \/_/\/_/   \/_/ /_/   \/_____/   \/_/   \/____/ 
     
  
EOH;

class User {
    public $userName;
    public $email;
    public $role;

    public function __construct($userName , $email){
        $this->userName = $userName;
        $this->email = $email;
    }
    public function __destruct(){
        echo "the user: $this->userName  is DELETED!";
    }

    public function addFriend(){
        return "$this->userName added as a freind";
    }
    public function message(){
      return "$this->email set a new message";
    }

    //getter
    public function getName(){
        return $this->userName;
    }
    //setter 
    public function setName($input){
        return $this->UserName = $input;
    }
}


 $user1 = new User('Sam',"sam@gmail.com");

 var_dump($user1);
 echo $user1->userName;




?>
