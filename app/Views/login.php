<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="./src/css/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kodchasan:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Kodchasan', sans-serif;
        }

        body {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class=" flex items-center justify-center h-[100vh] " style=" background-image: url('./src/img/bg.png'); background-size: cover; background-position: center;">
    <div class="flex flex-col bg-[#004225] p-[2rem] w-[90%] md:w-[30%] rounded-xl min-w-[30rem]">
        <div class="mx-auto z-30 my-5">
            <img src="./src/img/logo.svg" alt="logo" id="logo">
            <h1 class="text-center font-bold text-3xl text-white mb-5">KEBOONKU</h1>
        </div>
        <img src="./src/img/growscan.png" alt="growscan" class="w-[5rem] my-3" id="logo">
        <form action="" class="text-white flex flex-col gap-5">
            <div class="flex flex-col gap-2">
                <label for="username">Username</label>
                <input class="p-2 text-black rounded-xl" type="text" id="username" name="username">
            </div>
            <div class="flex flex-col gap-2">
                <label for="password">Password</label>
                <input class="p-2 text-black rounded-xl" type="text" id="username">
            </div>
            <div class="flex flex-col gap-5 items-center pt-5 justify-center">
                <a href="./signup" class="hover:text-green-400"> Don't have an account ? Sign Up</a>
                <a href="#" class="bg-green-500 text-white font-bold rounded-lg block w-full p-3 text-center hover:bg-green-800 transition">SignIn</a>
            </div>

        </form>
    </div>

</body>

</html>