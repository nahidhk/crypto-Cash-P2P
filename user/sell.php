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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $userid ?></title>
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
                UserID: <?php echo $userid  ?><br>
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
                <td></td>
                <td><?php echo $bdtAmount  ?></td>
                <td><?php echo $fee ?></td>
                <td><?php echo $rbdt ?></td>
            </tr>
        </table>




    </blockquote>
    <center>
        <button onclick="window.location.href='login.asp'">
            Skip</button><button title="ctrl+P" onclick="print();document.getElementById('ssw').style.display='none';">Print</button>
    </center>
    <br><br><br><br><br><br><br><br><br>
    <center>

        <div id="ssw" style="border: 1px solid blue;padding: 10px;width: 300px;">
            <h1>Help Line</h1>
            <hr>
            <p>Customer Care : +880 9638631634
            </p>
            <p>Sabbir CEO : +880173849412 </p>
            <p>Nahidul Manager : +8801877357091</p>
            <p>Email Manager : cryptocashp2p@gmail.com</p>
        </div>
    </center>

</body>
<script>alert("Please wait five minutes or more. If you still don't get what you owe then contact any of our operators again.")</script>
</html>












