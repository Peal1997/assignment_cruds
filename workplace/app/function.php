
<?php

include_once "./config.php";

function validate($msg ,$type ='danger'){
  return "<p class=\"alert alert-{$type}\">{$msg} <button data-dismiss=\"alert\" class=\"btn-close\">&times;</button></p>";
}



function connect(){
   return new mysqli(HOST,USER,PASS,DB);
}


function old($key){

  return $_POST[$key] ?? '';

}
function clear(){
  echo $_POST='';
}

function emailchk($email){

if(filter_var($email,FILTER_VALIDATE_EMAIL)){
return true;
}else{
  false;
}

function photoupload($file_data , $path ='/'){

  $file_name = $file_data['name'];
  $file_tmp_name = $file_data['tmp_name'];
  move_uploaded_file ($file_tmp_name , $path . $file_data);
  return $file_name;

}


}
