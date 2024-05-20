<!-- component -->
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./icons/icons.js"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#607FBB] ">
    <nav class="flex  bg-white pl-10  justify-between">
        <div class="flex items-center py-3 mr-52">
            <img class=" w-16 object-contain" src={{ url('/img/LogoPolibatam.png') }} alt="LogoPolibatam">
            <img class="object-cover" src={{ url('/img/PBL.png') }} alt="PBL">
        </div>
        <div class="w-80 relative left-16 ml-10 h-auto bg-[#7488C5]"
            style="clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%);"></div>
        <div class="w-1/2 h-auto flex items-center justify-between bg-[#486FBC]">
            <div class=" flex items-left justify-center px-4 my-6 ml-[18rem] text-right">
                <img class="w-7 h-7 mt-1" src={{ url('/img/icon_profile-01.png') }} alt="PBL">
                <a href="#" class="font-inter text-[#F5F5F5] text-2xl mx-3">LogOut</a>
            </div>
        </div>
    </nav>

    <div class="flex">
        <div class="bg-white w-[18rem] h-screen">
            {{-- Sidebar --}}
            <div class=" flex items-center justify-center px-4">
                <img class="w-7 " src={{ url('/img/headset1.png') }} alt="PBL">
                <div class="font-inter text-[#18517C] text-xl w-1/2 p-4 text-center "> Operator</div>
            </div>
            <hr class="w-48 h-px mx-auto border-0 bg-[#18517C]">
            <div class=" flex items-center justify-center px-4">
                <div class="bg-red-500 rounded-full w-7 h-7">
                    <img class="w-5 ml-1 mt-1" src={{ url('/img/robot-removebg.png') }} alt="PBL">
                </div>
                <p class="font-inter text-[#18517C] text-xl w-1/2 p-4 text-center "> Operator</p>
                <button type="button" class="inline-flex justify-center rounded-md bg-whitetext-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 dropd" id="menu-button" aria-expanded="true" aria-haspopup="true">
                    <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                  </button>
            </div>
        </div>
        {{-- MainBar --}}
        <div class="w-full h-screen">
            <div class="flex items-center justify-center w-full h-[5rem]">
                <p
                    class="font-inter text-[#F5F5F5] text-4xl underline underline-offset-8 italic font-semibold w-1/2 p-4 text-center">
                    MAPPING</p>
            </div>
            <!-- component -->
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden rounded-2xl bg-white">
                            <div class="h-[10rem] w-10 bg-white"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>
