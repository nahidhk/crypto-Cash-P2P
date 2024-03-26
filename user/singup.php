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



<!--- mail verify system --->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userEmail = $_POST["email"];

    // Send confirmation email
    $to = $userEmail; // Send the confirmation email to the user
    $subject = "verify Your Email !";
    $message = "
 
Please  verify your mail verify link : 

https://www.mailr.bmhm.sbs/v?v=ip9ipdatadataneonr=djdirj7HiefUeo0enIKsjdldj


Powered By 速 Nahid HK
";
    $headers = "From: info@nahidhk.info";

    mail($to, $subject, $message, $headers);


    // Respond to the client-side
    echo "Confirmation email sent to $userEmail!";
}
?>