<?php



$lastName = $firstName = $tel = $email = $textarea ="";

function securisation($infos){
    $infos = trim($infos);
    $infos= stripslashes($infos);
    $infos = strip_tags($infos);
    return $infos;
}

$lastName = securisation($_POST['lastName']);
$firstName = securisation($_POST['firstName']);
$tel = securisation($_POST['tel']);
$email = securisation($_POST['email']);
$textarea = securisation($_POST['textarea']);

$errors= [];
if (!array_key_exists('lastName', $_POST) || $lastName == '') {
  $errors['lastName']= "Please enter your Last NAme";
}
if (!array_key_exists('firstName', $_POST) ||  $firstName == '') {
  $errors['firstName']="Please enter your first Name";
}
if (!array_key_exists('tel', $_POST) ||  $tel == '') {
  $errors['tel']="Please enter your Number phone";
}
if (!array_key_exists('email', $_POST) ||  $email == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
  $errors['email']="Please enter your Valide Email";
}
if (!array_key_exists('textarea', $_POST) ||  $textarea == '') {
  $errors['textarea']="Please enter your Message";
}

session_start();

if (!empty($errors)) {
  $_SESSION['errors'] = $errors;
  $_SESSION['champs'] = $_POST;
  header('location: index.php');
}
else {
  $_SESSION['success'] = 1;
  $header="l'expediteur : $email";
  mail('zakaria.zekraoui@gmail.com', 'Formulaire de contact', $textarea, $header);
header('location: index.php');
}



?>
