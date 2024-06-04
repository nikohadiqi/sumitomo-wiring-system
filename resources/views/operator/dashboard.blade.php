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
                        <div class="overflow-hidden rounded-2xl bg-white">
                            <div class="h-[10rem] w-10 bg-white"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
</body>

</html>
