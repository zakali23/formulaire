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

echo 'Bonjour Monsieur :'.$LastNAme.'</br>';
?>
