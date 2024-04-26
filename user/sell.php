<?php
// Set the timezone to Asia/Dhaka
date_default_timezone_set('Asia/Dhaka');

// Retrieve form data
$pyment = isset($_POST['pyment']) ? $_POST['pyment'] : '';
$userid = isset($_POST['userid']) ? $_POST['userid'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$method = isset($_POST['method']) ? $_POST['method'] : '';
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
    echo "Data saved successfully!";
}
?>
