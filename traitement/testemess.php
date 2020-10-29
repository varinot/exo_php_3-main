
<?php
function hello() {
return "hello";
};
    
function testevalide($validation, $mess){
    var_dump($validation);
    
    if($_POST['identifiant'] === $validation[0])
    {
        $mess[0]="id correct " .$_POST['identifiant'] ;
    }
    else{ 
          $mess[0]="id incorrect ";
        }
    
    if($_POST['motpasse'] === $validation[1])
    {
        $mess[1]="mot de passe correct " .$_POST['motpasse'] ;
       }
    else{  
        $mess[1]="mot de passe incorrect"; 
    }
    if($_POST['nom'] === $validation[2])
    {
        $mess[2]="nom correct " .$_POST['nom'];
    }
    else{   
        $mess[2]="nom incorrect";
    }    
    if($_POST['age'] === $validation[3])
    {
        $mess[3]="age correct " .$_POST['age'];         
      }
    else{     
            $mess[3]="age incorrect";          
            }
    };
?>