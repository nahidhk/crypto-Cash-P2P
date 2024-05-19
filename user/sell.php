<?php
// Set the timezone to Asia/Dhaka
date_default_timezone_set('Asia/Dhaka');

// Retrieve form data
$pyment = isset($_POST['pyment']) ? $_POST['pyment'] : '';
$userid = isset($_POST['userid']) ? $_POST['userid'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$ethodm = isset($_POST['method']) ? $_POST['method'] : '';
$account = isset($_POST['account']) ? $_POST['account'] : '';
$usdAmount = isset($_POST['USD-Ammount']) ? $_POST['USD-Ammount'] : '';
$bdtAmount = isset($_POST['BDT-Ammount']) ? $_POST['BDT-Ammount'] : '';
$fee = isset($_POST['fee']) ? $_POST['fee'] : '';
$rbdt = isset($_POST['rbdt']) ? $_POST['rbdt'] : '';
$tokenname = isset($_POST['tokenname']) ? $_POST['tokenname'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$transaction = isset($_POST['transaction']) ? $_POST['transaction'] : '';

// Get current date and time
$currentDateTime = date("Y-m-d H:i:s");

// Prepare data to be saved
$newData = [
    'pyment' => $pyment,
    'userid' => $userid,
    'email' => $email,
    'phone' => $phone,
    'method' => $method,
    'account' => $account,
    'usdAmount' => $usdAmount,
    'bdtAmount' => $bdtAmount,
    'fee' => $fee,
    'rbdt' => $rbdt,
    'tokenname' => $tokenname,
    'address' => $address,
    'transaction' => $transaction,
    'datetime' => $currentDateTime  // Add current date and time to the data
];

// Escape special characters in the data
$newData = array_map('htmlspecialchars', $newData);

// Convert data to JSON format
$newDataJSON = json_encode($newData);

// Check if JSON encoding was successful
if ($newDataJSON === false) {
    // Handle JSON encoding error
    echo "Error encoding data to JSON!";
} else {
    // Append new data to existing data in $phone.json
    $phoneFilename = $phone . '.json';
    $existingPhoneData = file_get_contents($phoneFilename);
    $existingPhoneDataArray = json_decode($existingPhoneData, true) ?: [];
    $existingPhoneDataArray[] = $newData;
    $updatedPhoneDataJSON = json_encode($existingPhoneDataArray);
    file_put_contents($phoneFilename, $updatedPhoneDataJSON);

    // Append new data to existing data in sell.json
    $sellFilename = 'sell.json';
    $existingSellData = file_get_contents($sellFilename);
    $existingSellDataArray = json_decode($existingSellData, true) ?: [];
    $existingSellDataArray[] = $newData;
    $updatedSellDataJSON = json_encode($existingSellDataArray);
    file_put_contents($sellFilename, $updatedSellDataJSON);

    // Append new data to existing data in sell.json
    $buysellFilename = 'buysell.json';
    $existingbuySellData = file_get_contents($buysellFilename);
    $existingbuySellDataArray = json_decode($existingbuySellData, true) ?: [];
    $existingbuySellDataArray[] = $newData;
    $updatedbuySellDataJSON = json_encode($existingbuySellDataArray);
    file_put_contents($buysellFilename, $updatedbuySellDataJSON);
    // Optionally, you can echo a success message or redirect the user to a thank you page

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $currentDateTime ?></title>
</head>
<style>
    table,
    td,
    th {
        padding: 6px;
        text-align: center;
        border: 1px solid black;
    }

    table {
        border-collapse: collapse;
        width: 180px;
    }

    .top {
        float: left;
        margin: 10px;
    }

    .xbit {

        height: 80px;
    }



#btnbox{
    position: fixed;
    bottom: 10px;
}
button {
    
  align-self: center;
  background-color: #fff;
  background-image: none;
  background-position: 0 90%;
  background-repeat: repeat no-repeat;
  background-size: 4px 3px;
  border-radius: 15px 225px 255px 15px 15px 255px 225px 15px;
  border-style: solid;
  border-width: 2px;
  box-shadow: rgba(0, 0, 0, .2) 15px 28px 25px -18px;
  box-sizing: border-box;
  color: #41403e;
  cursor: pointer;
  display: inline-block;
  font-family: Neucha, sans-serif;
  font-size: 1rem;
  line-height: 23px;
  outline: none;
  padding: .75rem;
  text-decoration: none;
  transition: all 235ms ease-in-out;
  border-bottom-left-radius: 15px 255px;
  border-bottom-right-radius: 225px 15px;
  border-top-left-radius: 255px 15px;
  border-top-right-radius: 15px 225px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

button:hover {
  box-shadow: rgba(0, 0, 0, .3) 2px 8px 8px -5px;
  transform: translate3d(0, 2px, 0);
}

button:focus {
  box-shadow: rgba(0, 0, 0, .3) 2px 8px 4px -6px;
}

.popup{
    border-radius: 6px;
    height: auto;
    padding-top: 10px;
    padding-bottom: 10px;
    width: 300px;
    /* background-color: #fffa1f; */
    position: absolute;
    backdrop-filter: blur(10px);
    /* box-shadow: 0 0 10px 0 red; */
    top: 50%;
    left: 50%;
    transform: translate(-50% ,-50%);
    box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
    border: 1px solid black;
}
    @media only screen and (max-width: 600px) {
        .xbit {
            height: 300px;
        }
    }
</style>

<body>
    <center>
        <h1>Crypto Cash P2P</h1>
        <p>The crypto buy and sell this www.cryptocashp2p.top in bangladesh</p>
        <p>Phone: +880 9638631634 &nbsp;&nbsp;&nbsp;Email: cryptocashp2p@gmail.com &nbsp;&nbsp;&nbsp; Website:
            www.cryptocashp2p.top</p>
    </center>
    <blockquote>
        <p>
            <b>
                Date: <?php echo $currentDateTime ?><br>
                UserEmail: <?php echo $email ?><br>
                Client Name: <span id="cname"></span><br>
                Phone: <?php echo $phone ?>

            </b>
        </p>
    </blockquote>
    <!-- hay data  -->
    <section class="xbit">
        <center>
            <div class="top">
                <table>
                    <tr>
                        <td>Account Number: <?php echo $account ?></td>
                    </tr>
                    <tr>
                        <th>Methoad : <?php echo $ethodm ?></th>
                    </tr>
                </table>
            </div>


            <div class="top">
                <table>
                    <tr>
                        <td>Token Name: <?php echo $tokenname  ?></td>
                    </tr>
                    <tr>
                        <th>Transaction Id: <?php echo $transaction ?></th>
                    </tr>
                </table>
            </div>

            <div class="top">
                <table>
                    <tr>
                        <td>Pyment Address: <?php echo $address ?></td>
                    </tr>
                    <tr>
                        <th>Select Pyment: <?php echo $pyment ?></th>
                    </tr>
                </table>
            </div>
        </center>

    </section>
    <h2 style="text-align: center;"><?php echo $pyment ?></h2>
    <hr>
    <blockquote>
        <br><br>
        <table style="width: 100%;">
            <tr style="padding: 5px;background-color: rgb(206, 206, 206);">
                <th>Pyment Crypto</th>
                <th>usdAmount</th>
                <th>Rate</th>
                <th>bdtAmount</th>
                <th>Fee</th>
                <th>Receive Ammount </th>

            </tr>
            <tr>
                <td>You Have <?php echo $pyment ?> Crypto <?php echo $usdAmount ?> USD</td>
                <td><?php echo $usdAmount ?></td>
                <td><span id="sellaps"></span></td>
                <td><?php echo $bdtAmount  ?></td>
                <td><?php echo $fee ?></td>
                <td><?php echo $rbdt ?></td>
            </tr>
        </table>




    </blockquote>

    <center><div id="btnbox">
        <button class="animate__tada animate__animated" onclick="window.location.href='login.html'">
            Skip</button><button class="animate__tada animate__animated" title="ctrl+P" onclick="print();document.getElementById('ssw').style.display='none';">Print</button></div>
    </center>
    <br><br><br><br><br><br><br><br><br>
    <center>

        <div id="ssw" class="popup">
            <h1>Help Line</h1>
            <hr>
            <p>Customer Care : +880 9638631634
            </p>
            <p>Sabbir CEO : +880173849412 </p>
            <p>Nahidul Manager : +8801877357091</p>
            <p>Email Manager : cryptocashp2p@gmail.com</p>
            <br>
            <button onclick="aptmet()">
                Close
            </button>
        </div>
    </center>

</body>
<script>
    alert("Please wait five minutes or more. If you still don't get what you owe then contact any of our operators again.");
    function aptmet(){
        document.getElementById("ssw").style.display="none";
        document.getElementById("btnbox").style.display="block";

}
// setTimeout(aptmet,4000);
function rate(){
    var rate = sessionStorage.getItem("sell");
    var cname = sessionStorage.getItem("username");
    document.getElementById("sellaps").innerHTML=rate;
    document.getElementById("cname").innerHTML=cname;
 
}
setTimeout(rate,4100);
</script>

</html>





<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $userEmail = $_POST["email"];
    // Assuming you have a password stored securely, otherwise never send passwords via email
    
    // Send confirmation email
    $to = $userEmail;
    $subject = "Dear client you have crypto cash p2p just sell now!";
    $message = "
    <center>
    <h1>Crypto Cash P2P</h1>
    <p>The crypto buy and sell this www.cryptocashp2p.top in bangladesh</p>
    <p>Phone: +880 9638631634 &nbsp;&nbsp;&nbsp;Email: cryptocashp2p@gmail.com &nbsp;&nbsp;&nbsp; Website:
        www.cryptocashp2p.top</p>
</center>
<blockquote>
    <p>
        <b>
            Date: $currentDateTime <br>
            UserEmail: $email <br>
            Client Name: <span id='cname'>$userid</span><br>
            Phone: $phone 

        </b>
    </p>
</blockquote>
<!-- hay data  -->
<section class='xbit'>
    <center>
        <div class='top'>
            <table>
                <tr>
                    <td>Account Number:  $account </td>
                </tr>
                <tr>
                    <th>Methoad : $ethodm </th>
                </tr>
            </table>
        </div>


        <div class='top'>
            <table>
                <tr>
                    <td>Token Name: $tokenname  </td>
                </tr>
                <tr>
                    <th>Transaction Id:  $transaction </th>
                </tr>
            </table>
        </div>

        <div class='top'>
            <table>
                <tr>
                    <td>Pyment Address:  $address </td>
                </tr>
                <tr>
                    <th>Select Pyment:  $pyment </th>
                </tr>
            </table>
        </div>
    </center>

</section>
<h2 style='text-align: center;'> $pyment </h2>
<hr>
<blockquote>
    <br><br>
    <table style='width: 100%;'>
        <tr style='padding: 5px;background-color: rgb(206, 206, 206);'>
            <th>Pyment Crypto</th>
            <th>usdAmount</th>
            <th>Rate</th>
            <th>bdtAmount</th>
            <th>Fee</th>
            <th>Receive Ammount </th>

        </tr>
        <tr>
            <td>You Have  $pyment  Crypto $usdAmount USD</td>
            <td>$usdAmount </td>
            <td><span>only print show</span></td>
            <td>$bdtAmount  </td>
            <td> $fee </td>
            <td>$rbdt </td>
        </tr>
    </table>




</blockquote>

    ";
    $headers = "From: cryptocashp2p@cryptocashp2p.top\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Send email
    mail($to, $subject, $message, $headers);

    // Respond to the client-side
  
}
?>
