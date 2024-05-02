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
   <script src="rest.js">
   
   </script>
</body>
</html>
