<?php
// লগইন সফল হলে সেশন শুরু করুন
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // JSON ফাইল থেকে ডেটা লোড করুন
    $data = file_get_contents("singup.json");
    $users = json_decode($data, true);

    $loggedIn = false;

    // ব্যবহারকারীর তথ্য চেক করুন
    foreach ($users as $user) {
        if ($user["email"] === $email && $user["password"] === $password) {
            $loggedIn = true;

            // লগইন সফল হলে সেশনে ব্যবহারকারীর নাম স্টোর করুন
            $_SESSION["email"] = $email;
            break;
        }
    }

    if ($loggedIn) {
        // লগইন সফল হলে ব্যবহারকারীকে ড্যাশবোর্ডে পাঠানো
     header("Location: dashboard.php?password=" . urlencode($email));
    } else {
       echo "<script>window.open('errorlog.html','_self')</script>";
    }
}
?>