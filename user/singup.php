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

// পাসওয়ার্ড নামে JSON ফাইল তৈরি করা
$passwordFilename = $email . '.json';
file_put_contents($passwordFilename, json_encode($newData));

// "regdata.json" ফাইলে ডাটা সেভ করা
$regdataFilename = 'singup.json';
$existingData = file_get_contents($regdataFilename);
$existingData = json_decode($existingData, true);
$existingData[] = $newData;
file_put_contents($regdataFilename, json_encode($existingData));

echo 'Data saved successfully in ' . $passwordFilename . ' and regdata.json';
?>
