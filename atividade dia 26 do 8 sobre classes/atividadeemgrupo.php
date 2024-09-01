<?php
// o grupo não decidiu oque cada um vai ficar portanto fiz uma qualquer que esteja haver com a api para demonstrar que sou capaz
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