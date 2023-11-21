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

<body>
    <div id="sidebar" class="flex flex-col gap-10 bg-sidebarColor h-screen w-80">
        <div id="logo" class="ml-10 mt-7">
            <h1 class="font-bold text-4xl text-white"> Logo </h1>
        </div>

        <div id="sidebar_link" class="flex flex-col gap-2">
            <a href="" class="text-white no-underline hover:underline mx-7 py-2 flex gap-5 items-center bg-transparent hover:bg-white/10 duration-300 active:bg-white/30 rounded">
                <x-ri-dashboard-line class="w-8 h-8 ml-3"/>
                Dashboard 
            </a>
            <a href="" class="text-white no-underline hover:underline mx-7 py-2 flex gap-5 items-center bg-transparent hover:bg-white/10 duration-300 active:bg-white/30 rounded">
                <x-ri-truck-line class="w-8 h-8 ml-3"/>
                Inventory
            </a>
            <a href="" class="text-white no-underline hover:underline mx-7 py-2 flex gap-5 items-center bg-transparent hover:bg-white/10 duration-300 active:bg-white/30 rounded">
                <x-ri-coins-line class="w-8 h-8 ml-3"/>
                Expenses
            </a>
            <a href="" class="text-white no-underline hover:underline mx-7 py-2 flex gap-5 items-center bg-transparent hover:bg-white/10 duration-300 active:bg-white/30 rounded">
                <x-untitledui-activity-heart class="w-8 h-8 ml-3"/>
                Activity 
            </a>
            <a href="" class="text-white no-underline hover:underline mx-7 py-2 flex gap-5 items-center bg-transparent hover:bg-white/10 duration-300 active:bg-white/30 rounded"> 
                <x-healthicons-f-money-bag class="w-8 h-8 ml-3"/>
                Setoran 
            </a>
            <a href="" class="text-white no-underline hover:underline mx-7 py-2 flex gap-5 items-center bg-transparent hover:bg-white/10 duration-300 active:bg-white/30 rounded"> 
                <x-healthicons-f-security-worker class="w-8 h-8 ml-3"/>
                SOP 
            </a>
            <a href="" class="text-white no-underline hover:underline mx-7 py-2 flex gap-5 items-center bg-transparent hover:bg-white/10 duration-300 active:bg-white/30 rounded"> 
                <x-ri-restaurant-line class="w-8 h-8 ml-3"/>
                Cabang 
            </a>
        </div>
    </div>
</body>

</html>
