<?php
$username = $_POST['username'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];

$newData = array(
  'username' => $username,
  'mobile' => $mobile,
  'email' => $email,
  'password' => $password
    );
$passwordFilename = $email . '.json';
file_put_contents($passwordFilename, json_encode($newData));

$regdataFilename = 'singup.json';
$existingData = file_get_contents($regdataFilename);
$existingData = json_decode($existingData, true);
$existingData[] = $newData;
file_put_contents($regdataFilename, json_encode($existingData));

echo 'Data saved successfully in ' . $passwordFilename . ' and regdata.json';
?>
