<?php 
require_once 'subscriber.class.php';
$subscriber = new Subscriber();

$email = filter_input(INPUT_POST, 'email');

$subscriber->setEmail($email);
$result = $subscriber->save_subscriber();
echo json_encode($result);