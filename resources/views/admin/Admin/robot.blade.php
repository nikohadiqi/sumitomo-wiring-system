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
                <div class="font-inter text-[#18517C] text-xl w-1/2 p-4 text-center "> Admin</div>
            </div>
            <hr class="w-48 h-px mx-auto border-0 bg-[#18517C]">
            <div class=" flex items-center justify-center px-4">
                <img class="w-7 " src={{ url('/img/operator.png') }} alt="PBL">
                <a href="{{route('admin.operator')}}" class="font-inter text-[#18517C] text-xl w-1/2 p-4 text-center "> Operator</a>
            </div>
            <div class=" flex items-center justify-center pl-9">
                <img class="w-7 " src={{ url('/img/checkpoint.png') }} alt="PBL">
                <a href="{{route('admin.checkpoint')}}" class="font-inter text-[#18517C] text-xl p-4 text-center ">Check Point</a>
            </div>
            <div class=" flex items-center justify-center px-4">
                <img class="w-7 " src={{ url('/img/robot.png') }} alt="PBL">
                <a href="{{route('admin.robot')}}" class="font-inter text-[#18517C] text-xl w-1/2 p-4 text-center "> Robot</a>
            </div>
        </div>
        {{-- MainBar --}}
        <div class="w-full h-screen">
            <div class="flex items-center justify-center w-full h-[5rem]">
                <p
                    class="font-inter text-[#F5F5F5] text-4xl underline underline-offset-8 italic font-semibold w-1/2 p-4 text-center">
                    ROBOT</p>
            </div>
            <!-- component -->
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden rounded-2xl">
                            <table class="w-full ">
                                <div
                                    class="bg-white w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0 h-[5rem] ">
                                    <button type="button" id="createProductModalButton"
                                        data-modal-target="createProductModal" data-modal-toggle="createProductModal"
                                        class="flex items-center justify-center bg-blue-800 text-white bg-primary-400 hover:bg-primary-100 rounded-full focus:ring-4 focus:ring-primary-300 font-medium text-xs px-4 py-2 dark:bg-primary-400 dark:hover:bg-primary-400 focus:outline-none dark:focus:ring-primary-400 mr-[1rem]">
                                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                        </svg>
                                        Add product
                                    </button>
                                </div>
                                <thead class="bg-white border-b border-0">
                                    <tr>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-b border-[#607FBB] ml-14 w-24">
                                            No
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-b border-[#607FBB] ml-14 w-24">
                                            Nama
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-b border-[#607FBB] ml-14 w-24">
                                            Tipe
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-b border-[#607FBB] ml-14 w-24">
                                            Baterai
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-b border-[#607FBB] ml-14 w-24">
                                            Nomor Seri
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-b border-[#607FBB] ml-14 w-24">
                                            Warna
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-left border-b border-[#607FBB] ml-14 w-24">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Mark
                                        </td>
                                        <td class="flex text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Otto
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Otto
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Otto
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <input id="" type="color" class=" rounded-full" />
                                        </td>
                                        <td class="flex px-6 py-2 ">
                                            <a href="#" class="my-5 mx-3">
                                                <img class="w-5 my-2 items-center justify-center"
                                                    src={{ url('/img/pencil2.png') }} alt="PBL">
                                            </a>
                                            <a href="#" class="my-5 mx-3">
                                                <img class="w-5 my-2 items-center justify-center"
                                                    src={{ url('/img/bin.png') }} alt="PBL">
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

<script>
    const colorPicker = document.getElementById("nativeColorPicker1");
    const changeColorBtn = document.getElementById("burronNativeColor");

    changeColorBtn.style.backgroundColor = colorPicker.value;
    colorPicker.addEventListener("input", () => {
        changeColorBtn.style.backgroundColor = colorPicker.value;
    });
</script>

</html>
