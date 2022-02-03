<?php
/**
 * age calculator function
 */
function agecal($name,$year){
  
$age = 2021 - $year;
$alert_type ='';
switch(checkuserstatus( $age)){
case 'Bachca':
    $alert_type = 'success';
    break;
case 'Kisor':
    $alert_type = 'primary';
    break;
case 'Jubok':
    $alert_type = 'info';
    break;
case 'Boyosko':
    $alert_type = 'warning';
    break;
case 'Briddho':
    $alert_type = 'danger';
    break;
case 'Jin/Bhoot':
    $alert_type = 'dark';
    break;    

}

return  "<p class =\"alert alert-{$alert_type}\">Hi {$name}, You are {$age} years old and you are ". checkuserstatus($age) . "</p>";


}
/**
 * check a user 
 */
function checkuserstatus( $age){
    if( $age >= 0 && $age < 9){
        return "Bachca";

    }
    else if( $age > 9 && $age < 18){
    return "Kisor";
}
else if( $age > 18 && $age < 35){
    return "Jubok";
}
else if( $age > 35 && $age < 50){
    return "Boyosko";
}
else if( $age >= 50 && $age < 150){
    return "Briddho";
}
else if( $age > 150 && $age < 1500){
    return "Jin/Bhoot";
}
}

?>