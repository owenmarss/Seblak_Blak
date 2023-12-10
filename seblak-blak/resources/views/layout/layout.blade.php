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
    
    <title> Seblak-Blak | {{$title}} </title>
</head>
<body>
    {{-- <form action="/logout" method="post">
        @csrf
        <button type="submit" class="w-100 boxShadow px-4 py-2 rounded text-light bg-empat">
            Log Out
        </button>
    </form> --}}

    <div id="sidebar" class="fixed md:flex flex-col 4xs:hidden gap-5 bg-white h-screen w-64 shadow-md">
        <div id="logo_sidebar" class="ml-10 mt-5">
            <img src="{{url('img/Seblak-blak Transparent.png')}}" class="w-44" alt="">
            {{-- <img src="public/img/Seblak-blak Transparent.png" alt="inilogo"> --}}
            {{-- <h1 class="font-bold text-4xl text-white"> Logo </h1> --}}
        </div>

        <div id="sidebar_link" class="flex flex-col gap-1">
            <a href="/"
                class="text-secondary no-underline hover:underline mx-7 py-2 flex gap-5 items-center bg-transparent hover:bg-backgroundColor duration-300 active:bg-white/30 rounded">
                <x-ri-dashboard-line class="w-8 h-8 ml-3" />
                Dashboard
            </a>

            <a href=""
                class="text-secondary no-underline hover:underline mx-7 py-2 flex gap-5 items-center bg-transparent hover:bg-backgroundColor duration-300 active:bg-white/30 rounded">
                <x-healthicons-f-money-bag class="w-8 h-8 ml-3" />
                Setoran
            </a>

            <a href=""
                class="text-secondary no-underline hover:underline mx-7 py-2 flex gap-5 items-center bg-transparent hover:bg-backgroundColor duration-300 active:bg-white/30 rounded">
                <x-ri-coins-line class="w-8 h-8 ml-3" />
                Pengeluaran
            </a>

            <a href=""
                class="text-secondary no-underline hover:underline mx-7 py-2 flex gap-5 items-center bg-transparent hover:bg-backgroundColor duration-300 active:bg-white/30 rounded">
                <x-ri-truck-line class="w-8 h-8 ml-3" />
                Penyimpanan
            </a>

            <a href=""
                class="text-secondary no-underline hover:underline mx-7 py-2 flex gap-5 items-center bg-transparent hover:bg-backgroundColor duration-300 active:bg-white/30 rounded">
                {{-- <x-untitledui-activity-heart class="w-8 h-8 ml-3" /> --}}
                <x-clarity-users-solid class="w-8 h-8 ml-3" />
                Users
            </a>

            <a href="/sop-directory"
                class="text-secondary no-underline hover:underline mx-7 py-2 flex gap-5 items-center bg-transparent hover:bg-backgroundColor duration-300 active:bg-white/30 rounded">
                <x-healthicons-f-security-worker class="w-8 h-8 ml-3" />
                SOP
            </a>

            <a href="/cabang"
                class="text-secondary no-underline hover:underline mx-7 py-2 flex gap-5 items-center bg-transparent hover:bg-backgroundColor duration-300 active:bg-white/30 rounded">
                <x-ri-restaurant-line class="w-8 h-8 ml-3" />
                Cabang
            </a>
        </div>
    </div>

    <nav id="navbar" class="fixed md:w-right md:left-64 2xs:w-full flex items-center justify-between px-8 h-16 border-b shadow-md bg-white">
        <div id="breadcrumbs" class="flex xs:gap-3 md:gap-5">
            <h1 class="font-light hover:text-lightBlue cursor-pointer"> Home </h1>
            <h1 class="font-light"> / </h1>
            <h1 class="font-light hover:text-lightBlue cursor-pointer"> Sub Page 1 </h1>
            <h1 class="font-light"> / </h1>
            <h1 class="font-light hover:text-lightBlue cursor-pointer"> Sub Page 2 </h1>
        </div>

        <div id="profile" class="flex gap-1 cursor-pointer group">
            <x-far-user-circle class="w-8 text-secondary" />
            <x-ri-arrow-down-s-line id="arrowDown" class="w-6 text-secondary transition duration-500 group-hover:rotate-180" />
        </div>
    </nav>

    @yield('main')
</body>
</html>