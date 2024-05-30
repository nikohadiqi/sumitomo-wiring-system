@extends('app.app')

@section('title', 'Operator')

@section('content')
        {{-- MainBar --}}
        <div class="w-full h-screen">
            <div class="flex items-center justify-center w-full h-[5rem]">
                <p
                    class="font-inter text-[#F5F5F5] text-4xl underline underline-offset-8 italic font-semibold w-1/2 p-4 text-center">
                    OPERATOR</p>
            </div>
            <!-- component -->
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-x-auto rounded-2xl">
                            <table class="w-full table-fixed">
                                <div
                                    class="bg-white w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0 h-[5rem] ">
                                    <a type="button" id="createProductModalButton" href={{route ('admin.create')}}
                                        data-modal-target="createProductModal" data-modal-toggle="createProductModal"
                                        class="flex items-center justify-center bg-blue-800 text-white bg-primary-400 hover:bg-primary-100 rounded-full focus:ring-4 focus:ring-primary-300 font-medium text-xs px-4 py-2 dark:bg-primary-400 dark:hover:bg-primary-400 focus:outline-none dark:focus:ring-primary-400 mr-[1rem]">
                                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                        </svg>
                                        Add product
                                    </a>
                                </div>
                                <thead class="bg-white border-b border-0">
                                    <tr>
                                        <th scope="col "
                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-center border-b border-[#607FBB] ml-14 w-24">
                                            No
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-center border-b border-[#607FBB] ml-14 w-24">
                                            Username
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-center border-b border-[#607FBB] ml-14 w-24">
                                            ID Operator
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 px-6 py-4  border-b border-[#607FBB] ml-14 w-24 text-center">
                                            Tanggal Lahir
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 px-8 py-4  border-b border-[#607FBB] ml-14 w-24 text-center">
                                            Alamat
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-center border-b border-[#607FBB] ml-14 w-24">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no=0; ?>
                                    @foreach($operator as $p)
                                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-center font-medium text-gray-900">
                                            {{ ++$no}}</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 text-center whitespace-nowrap">
                                            {{ $p->username }}
                                        </td>
                                        <td class="text-sm text-center text-gray-900 font-light px-6 py-4 whitespace-nowrap truncate">
                                            {{ $p->id_operator }} 
                                        </td>
                                        <td class="text-sm text-center text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $p->tanggal_lahir}}
                                            
                                        </td>
                                        <td class="text-sm text-center text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $p->alamat }}
                                        </td>
                                        <form action="{{ route('operator.destroy',$p->id) }}" method="POST">
                                        <td class="flex px-6 py-2 ">
                                        
                                            <a href={{route ('operator.edit', $p->id)}} class="my-5 mx-3">
                                                <img class="w-5 my-2 items-center justify-center"
                                                    src={{ url('/img/pencil2.png') }} alt="PBL">
                                            </a>
                                            @csrf
                                            @method("DELETE")
                                            <button  class="my-5 mx-3">
                                                <img class="w-5 my-2 items-center justify-center"
                                                    src={{ url('/img/bin.png') }} alt="PBL">
                                            </button>
                                        </td>
                                        </form>
                                    </tr>
                                    
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
</body>

</html>
