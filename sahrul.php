<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" id="username">
        <input type="password" id="password">
        <button type="button" onclick="login()">login</button>
    </form>
    <script>
        function login(){
            let username = document.getElementById('username').value;
            let password = document.getElementById('password').value;
            if(username === "sahrul" && password === "n"){
                alert("login berhasil");
            } else {
                alert("login gagal");
            }
        }
    </script>
</body>
</html>

