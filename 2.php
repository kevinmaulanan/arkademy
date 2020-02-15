<?php

     function ValidUsername($username)
     {
          return preg_match('/^[a-z]{5,9}$/',$username) ;
     }

     function ValidPassword($password) {
          return preg_match('/(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%]){8,}/',$password) ;
     }

     $username="kevin";
     $password="Maulana27#";

     if (ValidUsername("$username")) 
     {
         echo "Valid Username: " . $username ;
     } 
     else
     {
     	echo "InValid Username :" . $username;
     }

     echo "<br>";

     if (ValidPassword("$password")) 
     {
         echo "Valid Password: " . $password ;
     } 
     else
     {
     	echo "Invalid Password: " . $password;
     }
?>