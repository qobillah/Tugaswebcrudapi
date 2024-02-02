<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/boostrap/4.3.1/css/boostrap.min.css">
    <title>Login Page</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-ml-6">
                <h2 class="mb-4">login</h2>
                <form id="loginform">
                    <div class="form-group">
                        <label form="username">username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="username">username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                        <div>
                            <button type="button" class="btn btn-primary" onclick="login()">login</button>
                </form>
            </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>

    Function login(){

        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        const formData =new FormData();
        formData.append('user', username);
        formData.append('pwd',password);

        axios,post('')
    }
</html>