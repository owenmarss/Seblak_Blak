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
    <div id="login_container" class="bg-white flex flex-col gap-8 items-center justify-center w-96 pt-8 pb-20 shadow-lg rounded-lg">
        <div id="login_logo">
            <h1 class="font-bold text-3xl text-sidebarColor"> Login </h1>
        </div>

        <form action="/login/auth" id="login_form" class="flex flex-col gap-5" method="POST">
            @csrf
            <div id="username_form" class="flex flex-col gap-1.5">
                <label for="email"> Email: </label>
                <input type="email" name="email" id="email" class="border-solid border border-inputColor/20 shadow pl-1 py-0.5 rounded">
            </div>

            <div id="password_form" class="flex flex-col gap-1.5">
                <label for="password"> Password: </label>
                <input type="password" name="password" id="password" class="border-solid border border-inputColor/20 shadow pl-1 py-0.5 rounded">
            </div>

            <div id="button_form" class="ml-auto mt-6">
                <button type="submit" class="bg-sidebarColor font-semibold text-lg text-white tracking-wide px-3 py-1 rounded-md hover:underline"> Login </button>
            </div>
        </form>
    </div>
</body>

</html>
