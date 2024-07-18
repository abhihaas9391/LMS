<?php
session_start();
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LearnStream - Role</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="#" rel="icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        :root {
            --primary: #b34688;
            --light: #F0FBFC;
            --light: #f0e4de;
            --dark: #181d38;
        }
        .error {
            border-color: red;
        }
        .option-container {
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            margin-top: 180px;
        }
        .option {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 20px;
            padding: 40px;
            margin: 20px;
            text-align: center;
            width: 200px;
            background-color: #f9f9f9;
            transition: background-color 0.2s;
            font-size: 20px;
            font-family: 'Nunito', sans-serif;
        }
        .option:hover {
            background-color: #E8C5E5;
        }
        .form-group {
            margin-top: 20px;
            text-align: center;
        }
        .sampath {
            position: absolute;
            top: 77%;
            left: 46.5%;
            border-radius: 10px;
        }
        .btn2 {
            font-family: 'Nunito', sans-serif;
            transition: .5s;
        }
        .btn2 {
            background: linear-gradient(to right, #ad5389, #3c1053);
            border: 0.2 solid black;
            color: #EEEEEE;
            border-radius: 10px;
            font-size: 20px;
            padding: 5px 11px;
        }
        .btn2 a {
            text-decoration: none;
            color: #fff;
        }
        .btn2:hover {
            background: transparent;
            color: black;
            border: 1px solid rgb(19, 19, 19);
        }
        .btn2:hover a {
            color: var(--primary) !important;
        }
        .btn2-light {
            background-color: var(--light);
        }
        .btn2-light:hover {
            background: transparent;
            color: var(--light) !important;
            border: 1px solid var(--light);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="#" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <p class="m-0 fw-bold" style="font-size: 25px;">Learn<span style="color: #b34688;">Stream</span></p>
        </a>
    </nav>

    <div class="option-container">
        <form id="roleForm" method="post" style="display: flex">
            <label class="option">
                <div class="form-group">
                    <br><p>Student</p>
                    <input type="radio" name="role" value="student" required>
                </div>
            </label>
            <label class="option">
                <div class="form-group">
                    <br><p>Teacher</p>
                    <input type="radio" name="role" value="teacher" required>
                </div>
            </label>
            <label class="option">
                <div class="form-group">
                    <br><p>Admin</p>
                    <input type="radio" name="role" value="teacher" required>
                </div>  
            </label>
        </form>
        <div class="sampath">
            <button type="button" class="btn2" onclick="proceed()">Proceed</button>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/form.js"></script>
    <script>
        function proceed() {
            const form = document.getElementById('roleForm');
            const selectedRole = form.querySelector('input[name="role"]:checked').value;
            
            if (selectedRole === 'student') {
                window.location.href = 'home.php';
            } else if (selectedRole === 'teacher') {
                window.location.href = 'teacherprofile.php';
            }
        }
    </script>
</body>

</html>
