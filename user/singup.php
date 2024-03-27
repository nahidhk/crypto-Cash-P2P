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
    // Retrieve form data
    $userEmail = $_POST["email"];
    // Assuming you have a password stored securely, otherwise never send passwords via email
    
    // Send confirmation email
    $to = $userEmail;
    $subject = "Your Email Verify";
    $message = "
    
    <center>
    <h1 style='background-color: darkturquoise; padding: 10px;color: #fff;'>Crypto Cash P2P</h1>
    <p>Welcome, you have just registered. Now you login and do your daily exchange. And stay with us.</p>
    <h2 style='background-color: mediumorchid;padding: 20px;border-radius: 100px; color:#fff;'>Hello, $username</h2>
    
    <div style='height: 250px;width: 90%;background-color: tan;border-radius: 10px;box-shadow: 0 0 10px 0 black;'>
    <br><br><br>
    <table style='border-collapse: collapse;border: 1px solid red; width: 90%;'>
      <tr style='border: 1px solid red;'>
        <th style='border: 1px solid red;padding: 5px;background-color: gray;color: #fff;'>username:</th>
        <td style='border: 1px solid red; padding: 5px;'>$username</td>
      </tr>
      <tr style='border: 1px solid red;'>
        <th style='border: 1px solid red;padding: 5px;background-color: gray;color: #fff;'>Email:</th>
        <td style='border: 1px solid red; padding: 5px;'>$email</td>
      </tr>
    <tr style='border: 1px solid red;'>
      <th style='border: 1px solid red;padding: 5px;background-color: gray;color: #fff;'>Phone:</th>
      <td style='border: 1px solid red; padding: 5px;'>$mobile</td>
    </tr>  
    </table>
      <br><br>
      <a href='https://cryptocashp2p.top/user/login.html' style='background-color:#4680ff;color: #fff;padding: 10px;border-radius:5px;text-decoration: none;'>Verify</a>
      
    </div>
    <p>copyright &copy; Crypto Cash P2P</p>
    
    </center>
    ";
    $headers = "From: cryptocashp2p@cryptocashp2p.top\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Send email
    mail($to, $subject, $message, $headers);

    // Respond to the client-side
    echo "<script>window.location.href='/v'</script>";
}
?>
