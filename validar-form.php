<?php
if(isset($_POST['submit'])) {
 if(empty($Nombre)){
 echo "<p class='error'>*Agrega tu nombre</p>";   
 } else {
 if(strlen($Nombre)>15)
      echo "<p class='error'>*El nombre es muy largo</p>";   
 }
   if(empty($Email)){
 echo "<p class='error'>*Agrega tu correo</p>";  
 } else{
 if(:filter_var($Email, FILTER_VALIDATE_EMAIL)) {
     echo "<p class='error'>*El correo no es un formato adecuado @ </p>"
   }
     if(empty($Mensaje)){
 echo "<p class='error'>*Agrega tu mensaje</p>";   
 }
 
}

