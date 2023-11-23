<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body class="bg-backgroundColor flex items-center justify-center h-screen">
    <div id="login_container" class="bg-white flex flex-col gap-5 items-center justify-center w-2/5 pt-6 pb-20 shadow-md rounded-md">
        <div id="login_logo">
            <h1 class="font-bold text-2xl"> Login </h1>
        </div>

        <form action="" id="login_form" class="flex flex-col gap-3">
            <div id="username_form" class="flex flex-col gap-2">
                <label for="username"> Username: </label>
                <input type="text" name="username" id="username" class="border-solid border border-inputColor/20 shadow pl-1 py-0.5 rounded">
            </div>

            <div id="password_form" class="flex flex-col gap-2">
                <label for="password"> Password: </label>
                <input type="password" name="password" id="password" class="border-solid border border-inputColor/20 shadow pl-1 py-0.5 rounded">
            </div>
        </form>
    </div>
</body>

</html>
