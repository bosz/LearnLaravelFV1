<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .button{
            margin-top: 10px;
        }

        .contact-form{

        }

        .container{
            margin: auto;
            padding-top: 20px;
        }

        .text-center{
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
<h2 class="text-center">Contact Us!</h2>
    <div class="contact-form text-center">
    <form action="{{route('thank')}}" method="post">
        @csrf
        <label for="name">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>

        <label for="name">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br>

        <label for="name">Phone Number:</label><br>
        <input type="text" id="lname" name="phone"><br>

        <label for="name">Email:</label><br>
        <input type="text" id="lname" name="email"><br>

        <label for="name">Message:</label><br>
        <textarea id="message" name="message"></textarea><br>

        <input type="submit" value="Submit" class="button">
    </form>
    </div>
</div>

</body>
</html>
