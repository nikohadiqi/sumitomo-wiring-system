@extends('app.app')

@section('title', 'RFID')

@section('content')
        {{-- MainBar --}}
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
                        Status
                    </th>

                </tr>
            </thead>

            <tbody>
                <?php $no=0; ?>
                @foreach($RFID as $O)
                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ ++$O }}</td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$O->uid}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$O->label}}
                    </td>

                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
@endsection