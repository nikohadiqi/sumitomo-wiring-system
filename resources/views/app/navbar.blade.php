<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<style>
    html, body {
        height: 100%;
    }
</style>

<body class="bg-[#607FBB]">
    {{-- Navbar --}}
    <nav class="flex  bg-white pl-10  justify-between ">
        <div class="flex items-center py-3 mr-52">
            <img class=" w-16 object-contain" src={{ url('/img/LogoPolibatam.png') }} alt="LogoPolibatam">
            <img class="object-cover" src={{ url('/img/PBL.png') }} alt="PBL">
        </div>
        <div class="w-80 relative left-16 ml-10 h-auto bg-[#7488C5]"
            style="clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%);"></div>
        <div class="w-1/2 h-auto flex items-center justify-between bg-[#486FBC]">
            <div class=" flex items-left justify-center px-4 my-6 ml-[18rem] text-right">
                <img class="w-7 h-7 mt-1" src={{ url('/img/icon_profile-01.png') }} alt="PBL">
                <a href="/logout" class="font-inter text-[#F5F5F5] text-2xl mx-3">LogOut</a>
            </div>
        </div>
    </nav>
