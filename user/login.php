<?php
// লগইন সফল হলে সেশন শুরু করুন
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // JSON ফাইল থেকে ডেটা লোড করুন
    $data = file_get_contents("regdata.json");
    $users = json_decode($data, true);

    $loggedIn = false;

    // ব্যবহারকারীর তথ্য চেক করুন
    foreach ($users as $user) {
        if ($user["username"] === $username && $user["password"] === $password) {
            $loggedIn = true;

            // লগইন সফল হলে সেশনে ব্যবহারকারীর নাম স্টোর করুন
            $_SESSION["username"] = $username;
            break;
        }
    }

    if ($loggedIn) {
        // লগইন সফল হলে ব্যবহারকারীকে ড্যাশবোর্ডে পাঠানো
     header("Location: dashboard.php?password=" . urlencode($password));
    } else {
       echo "<script>window.open('errorlog.html','_self')</script>";
    }
}
?>