@extends('app.app')

@section('title', 'CheckPoint')

@section('content')
    {{-- MainBar --}}
    <div class="w-full h-screen">
        <div class="flex items-center justify-center w-full h-[5rem]">
            <p
                class="font-inter text-[#F5F5F5] text-4xl underline underline-offset-8 italic font-semibold w-1/2 p-4 text-center">
                CHECK POINT</p>
        </div>
        <!-- component -->
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden rounded-2xl">
                        <table class="w-full ">
                            <div
                                class="bg-white w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0 h-[5rem] ">
                                <button type="button" id="createProductModalButton" data-modal-target="createProductModal"
                                    data-modal-toggle="createProductModal"
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
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-center border-b border-[#607FBB] ml-14 w-24">
                                        No
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-center border-b border-[#607FBB] ml-14 w-24">
                                        Nama
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-center border-b border-[#607FBB] ml-14 w-24">
                                        Status
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-center border-b border-[#607FBB] ml-14 w-24">
                                        Aksi
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-center border-b border-[#607FBB] ml-14 w-24">
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 0; ?>
                                @foreach ($checkpoint as $cp)
                                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-center font-medium text-gray-900">
                                            {{ ++$no }}</td>
                                        <td
                                            class="text-sm text-gray-900 text-center font-light px-6 py-4 whitespace-nowrap">
                                            {{ $cp->nama_posisi }}
                                        </td>
                                        <td
                                            class="text-sm text-gray-900 text-center font-light px-6 py-4 whitespace-nowrap">
                                            {{ $cp->status }}
                                        </td>
                                        <td <td class="text-sm text-gray-900 font-light text-center px-6 py-4 whitespace-nowrap">
                                            <input type="checkbox" id="status-checkbox-{{ $cp->id }}"
                                                onchange="toggleStatus({{ $cp->id }})"
                                                class="appearance-none w-[3rem] focus:outline-none checked:bg-blue-300 h-5 bg-gray-300 rounded-full before:inline-block before:rounded-full before:bg-blue-500 before:h-5 before:w-5 checked:before:translate-x-full shadow-inner transition-all duration-300 before:ml-0.5"
                                                {{ $cp->status === 'menyala' ? 'checked' : '' }} />
                                        </td>
                                        <td class="flex text-gray-900 px-6 py-2 ">
                                            <a href="#" class="my-5 mx-3">
                                                <img class="w-5 my-2 items-center justify-center"
                                                    src={{ url('/img/pencil2.png') }} alt="PBL">
                                            </a>
                                            <a href="#" class="my-5 mx-3">
                                                <img class="w-5 my-2 items-center justify-center"
                                                    src={{ url('/img/bin.png') }} alt="PBL">
                                            </a>
                                @endforeach
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
function toggleStatus(id) {
    const checkbox = document.getElementById(`status-checkbox-${id}`);
    const status = checkbox.checked ? 'menyala' : 'mati';

    fetch(`/admin/checkpoint/toggle-status/${id}`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ status })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log('Status updated:', data.status);
        } else {
            console.error('Failed to update status');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
</script>

</body>

</html>
