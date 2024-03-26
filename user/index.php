<!--
<?php
if(isset($_GET['email'])) {
    $email = $_GET['email'];
    $jsonFilePath = $email . '.json';

    if(file_exists($jsonFilePath)) {
        $jsonData = file_get_contents($jsonFilePath);

        if($jsonData !== false) {
            // JSON ডেটা পার্স করুন
            $decodedData = json_decode($jsonData, true);

            if($decodedData !== null) {
                // JSON ডেটা সঠিকভাবে ডিকোড হয়েছে

              
                ?>
                
    
<?php
            } else {

echo "<script>window.location.href='user/login.html'</script>"; // যদি শর্ত পূর্ণ না হয়, তবে 'not.html' ফাইলটি ইনক্লুড করা হবে
             
 // যদি শর্ত পূর্ণ না হয়, তবে 'not.html' ফাইলটি ইনক্লুড করা হবে
          
            }
        } else { 
echo "<script>window.location.href='user/login.html'</script>" ;// যদি শর্ত পূর্ণ না হয়, তবে 'not.html' ফাইলটি ইনক্লুড করা হবে
       
        }
    } else {

      
          echo "<script>window.location.href='user/singup.html'</script>";

    }
} else {

   echo "<script>window.location.href='user/login.html'</script>";

}
?>

-->
