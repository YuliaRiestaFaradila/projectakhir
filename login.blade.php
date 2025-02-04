<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        :root {
            --redFire: #f44336;
            --fontAsap: 'Asap', sans-serif;
            --greenSeaweed: #2e7d32;
            --blueQueen: #1565c0;
        }

        body {
            background-color: #ff004f;
            font-family: var(--fontAsap);
        }

        .login {
            overflow: hidden;
            background-color: black;
            padding: 40px 30px 30px 30px;
            border-radius: 10px;
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            transform: translate(-50%, -50%);
            transition: transform 300ms, box-shadow 300ms;
            box-shadow: 5px 10px 10px rgba(46, 125, 50, 0.2);
        }

        .login::before,
        .login::after {
            content: '';
            position: absolute;
            width: 600px;
            height: 600px;
            border-top-left-radius: 40%;
            border-top-right-radius: 45%;
            border-bottom-left-radius: 35%;
            border-bottom-right-radius: 40%;
            z-index: -1;
        }

        .login::before {
            left: 40%;
            bottom: -130%;
            background-color: rgba(21, 101, 192, 0.15);
            animation: wawes 6s infinite linear;
        }

        .login::after {
            left: 35%;
            bottom: -125%;
            background-color: rgba(46, 125, 50, 0.2);
            animation: wawes 7s infinite;
        }

        .login > input {
            font-family: var(--fontAsap);
            display: block;
            border-radius: 5px;
            font-size: 16px;
            background: white;
            width: 100%;
            border: 0;
            padding: 10px 10px;
            margin: 15px -10px;
        }

        .login > button {
            font-family: var(--fontAsap);
            cursor: pointer;
            color: #fff;
            font-size: 16px;
            text-transform: uppercase;
            width: 80px;
            border: 0;
            padding: 10px 0;
            margin-top: 10px;
            margin-left: -5px;
            border-radius: 5px;
            background-color: #ff004f;
            transition: background-color 300ms;
        }

        .login > button:hover {
            background-color: #B60038; /* Darken by 5% */
        }

        @keyframes wawes {
            from {
                transform: rotate(0);
            }
            to {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
<form class="login" action="{{ route('postlogin') }}" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

</body>
</html>
