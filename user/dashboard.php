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

include('not.html'); // যদি শর্ত পূর্ণ না হয়, তবে 'not.html' ফাইলটি ইনক্লুড করা হবে
             
 // যদি শর্ত পূর্ণ না হয়, তবে 'not.html' ফাইলটি ইনক্লুড করা হবে
          
            }
        } else { 
include('not.html'); // যদি শর্ত পূর্ণ না হয়, তবে 'not.html' ফাইলটি ইনক্লুড করা হবে
       
        }
    } else {

      
          echo "<script>window.open('not.html','_self')</script>";

    }
} else {

   echo "<script>window.open('nologin.html','_self')</script>";

}
?>