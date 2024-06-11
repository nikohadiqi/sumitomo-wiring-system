@extends('app.app')

@section('title', 'Operator')

@section('content')
        {{-- MainBar --}}
        <div class=" h-screen">
            <div class="flex items-center justify-center w-full h-[5rem]">
                <p
                    class="font-inter text-[#F5F5F5] text-4xl underline underline-offset-8 italic font-semibold w-1/2 p-4 text-center">
                    MAPPING</p>
            </div>
            <!-- component -->
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden rounded-2xl bg-white grid grid-cols-4">
                            <div class="flex flex-col py-9 items-center">
                                <div class="relative  w-fit z-20">
                                    <img src="{{ url('/img/Subtract.svg')}}" alt="test" class="w-10">
                                    <div class="w-6 h-6 bg-[#000] rounded-full absolute left-1/2 top-[35%] -translate-x-1/2 -translate-y-1/2"></div>
                                </div>
                                <div class="bg-slate-500 grid place-items-center w-7 h-7 relative -top-2 z-10 text-white rounded-full">
                                    <p>1</p>
                                </div>
                                <div class="w-full relative -top-[1.4rem] h-[2px] -left-0 bg-slate-500" style="clip-path: inset(0 0 0 50%);"></div>
                            </div>
                            <div class="flex flex-col py-9 items-center">
                                <div class="relative  w-fit z-20">
                                    <img src="{{ url('/img/Subtract.svg')}}" alt="test" class="w-10">
                                    <div class="w-6 h-6 bg-[#000] rounded-full absolute left-1/2 top-[35%] -translate-x-1/2 -translate-y-1/2"></div>
                                </div>
                                <div class="bg-slate-500 grid place-items-center z-10 w-7 h-7 relative -top-2 text-white rounded-full">
                                    <p>2</p>
                                </div>
                                <div class="w-full relative -top-[1.4rem] h-[2px] bg-slate-500"></div>
                            </div>
                            <div class="flex flex-col py-9 items-center">
                                <div class="relative  w-fit z-20">
                                    <img src="{{ url('/img/Subtract.svg')}}" alt="test" class="w-10">
                                    <div class="w-6 h-6 bg-[#000] rounded-full absolute left-1/2 top-[35%] -translate-x-1/2 -translate-y-1/2"></div>
                                </div>
                                <div class="bg-slate-500 grid place-items-center z-10 w-7 h-7 relative -top-2 text-white rounded-full">
                                    <p>3</p>
                                </div>
                                <div class="w-full relative -top-[1.4rem] h-[2px] bg-slate-500"></div>
                            </div>
                            <div class="flex flex-col py-9 items-center">
                                <div class="relative  w-fit z-20">
                                    <img src="{{ url('/img/Subtract.svg')}}" alt="test" class="w-10">
                                    <div class="w-6 h-6 bg-[#000] rounded-full absolute left-1/2 top-[35%] -translate-x-1/2 -translate-y-1/2"></div>
                                </div>
                                <div class="bg-slate-500 grid place-items-center z-10 w-7 h-7 relative -top-2 text-white rounded-full">
                                    <p>4</p>
                                </div>
                                <div class="w-full relative -top-[1.4rem] h-[2px] -left-0 bg-slate-500" style="clip-path: inset(0 50% 0 0);"></div>
                                <div class="w-[75%] relative top-[3.4rem] h-[2px] bg-slate-500 rotate-90 "></div>
                            </div>
                            <div class="flex flex-col py-9 items-center">
                                <div class="relative  w-fit z-20">
                                    <img src="{{ url('/img/Subtract.svg')}}" alt="test" class="w-10">
                                    <div class="w-6 h-6 bg-[#000] rounded-full absolute left-1/2 top-[35%] -translate-x-1/2 -translate-y-1/2"></div>
                                </div>
                                <div class="bg-slate-500 grid place-items-center z-10 w-7 h-7 relative -top-2 text-white rounded-full">
                                    <p>5</p>
                                </div>
                                <div class="w-full relative -top-[1.4rem] h-[2px] bg-slate-500"></div>
                               
                            </div>
                            <div class="flex flex-col py-9 items-center">
                                <div class="relative  w-fit z-20">
                                    <img src="{{ url('/img/Subtract.svg')}}" alt="test" class="w-10">
                                    <div class="w-6 h-6 bg-[#000] rounded-full absolute left-1/2 top-[35%] -translate-x-1/2 -translate-y-1/2"></div>
                                </div>
                                <div class="bg-slate-500 grid place-items-center z-10 w-7 h-7 relative -top-2 text-white rounded-full">
                                    <p>6</p>
                                </div>
                                <div class="w-full relative -top-[1.4rem] h-[2px] bg-slate-500"></div>
                            </div>
                            <div class="flex flex-col py-9 items-center">
                                <div class="relative  w-fit z-20">
                                    <img src="{{ url('/img/Subtract.svg')}}" alt="test" class="w-10">
                                    <div class="w-6 h-6 bg-[#000] rounded-full absolute left-1/2 top-[35%] -translate-x-1/2 -translate-y-1/2"></div>
                                </div>
                                <div class="bg-slate-500 grid place-items-center z-10 w-7 h-7 relative -top-2 text-white rounded-full">
                                    <p>7</p>
                                </div>
                                <div class="w-full relative -top-[1.4rem] h-[2px] bg-slate-500"></div>
                            </div>
                            <div class="flex flex-col py-9 items-center">
                                <div class="relative  w-fit z-20">
                                    <img src="{{ url('/img/Subtract.svg')}}" alt="test" class="w-10">
                                    <div class="w-6 h-6 bg-[#000] rounded-full absolute left-1/2 top-[35%] -translate-x-1/2 -translate-y-1/2"></div>
                                </div>
                                <div class="bg-slate-500 grid place-items-center z-10 w-7 h-7 relative -top-2 text-white rounded-full">
                                    <p>8</p>
                                </div>
                                <div class="w-full relative -top-[1.4rem] h-[2px] bg-slate-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
</body>

</html>
