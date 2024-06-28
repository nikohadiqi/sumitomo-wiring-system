
<div class="flex h-screen">
    <div class="bg-white w-[18rem] h-full">
        {{-- Sidebar --}}
        <div class=" flex items-center justify-center px-4 ">
            <img class="w-7 " src={{ url('/img/headset1.png') }} alt="PBL">
            <div class="font-inter text-[#18517C] text-xl w-1/2 p-4 text-center "> Admin</div>
        </div>
        <hr class="w-48 h-px mx-auto border-0 bg-[#18517C]">
        <div class=" flex items-center justify-center px-4">
            <img class="w-7 " src={{ url('/img/operator.png') }} alt="PBL">
            <a href="{{route('admin.operator.index')}}" class="font-inter text-[#18517C] text-xl w-1/2 p-4 text-center "> Operator</a>
        </div>
        <div class=" flex items-center justify-center pl-9">
            <img class="w-7 " src={{ url('/img/checkpoint.png') }} alt="PBL">
            <a href="{{route('admin.checkpoint.index')}}" class="font-inter text-[#18517C] text-xl p-4 text-center ">Check Point</a>
        </div>
        <div class=" flex items-center justify-center px-4">
            <img class="w-7 " src={{ url('/img/robot.png') }} alt="PBL">
            <a href="{{route('admin.robot.index')}}" class="font-inter text-[#18517C] text-xl w-1/2 p-4 text-center "> Robot</a>
        </div>
    </div>