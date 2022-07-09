<?php 

use app\models\User;
use app\classes\Validation;

$user = new User;
$validation = new Validation;

$validate = $validation->validate($_POST);

$editado = $user->update(['id' => $validate->id], $validate);

if ($editado) {
  header('location:/');
}