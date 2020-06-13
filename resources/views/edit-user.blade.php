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
<h2 class="text-center">Edit user!</h2>
    <div class="contact-form text-center">
    <form action="{{ route('thank') }}" method="post">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" value="{{ $user->name }}" name="name"><br>

        <label for="name">Email:</label><br>
        <input type="email" id="email" value="{{ $user->email }}" name="email"><br>

        <input type="submit" value="Update" class="button">
    </form>
    </div>
</div>

</body>
</html>
