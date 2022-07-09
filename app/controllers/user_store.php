<?php

use app\models\User;
use app\classes\Validation;
use app\models\Transaction;

$validation = new Validation;
$validate = $validation->validate($_POST);

$transaction = new Transaction;

$transaction->transactions(function() use ($transaction, $validate) {
  $transaction->model(User::class)->insert($validate);
});