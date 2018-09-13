<?php
  class Library{
    function __construct(){
      $this->db = new PDO('mysql:host=localhost;dbname=crud;','root','resistance');
    }

    function register($uname,$email,$name,$passwd,$reason){
      $data = $this->db->query("INSERT INTO dataUser (uname,email,name,passwd,reason)
                                VALUES ('$uname','$email','$name','$passwd','$reason')");

      if(!$data){
        return "False";
      }else {
        return "True";
      }
    }

    function
    function autentikasi($uname,$passwd){
      $login = $this->db->query("SELECT * FROM dataUser WHERE uname='$uname' && passwd='$passwd'");

      // pengujian
      if(!$login){
        return "False";
      }else {
        return "True";
      }
    }



  }
?>
