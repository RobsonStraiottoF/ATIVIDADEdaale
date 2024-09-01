<?php
class Login {
    private $email;
    private $password;
  
    public function __construct($email, $password) {
      $this->email = $email;
      $this->password = $password; 
  
    }

    public function getEmail() {
      return $this->email;
    }
  
    public function getPassword() {
      return $this->password; 
    }
  }
  
  $usuario = new Login("robson.straiotto@gmail.com", 3344);
  
  
  echo "Email: " . $usuario->getEmail() . "<br>";
  echo "Senha: " . $usuario->getPassword() . "<br>";