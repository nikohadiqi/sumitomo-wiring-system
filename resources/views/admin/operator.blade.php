<div class="w-full fixed h-screen bg-black bg-opacity-50 z-10 hidden" id="screen"></div>
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
                                <a type="button" id="createProductModalButton"
                                    class="flex items-center justify-center bg-blue-800 text-white bg-primary-400 hover:bg-primary-100 rounded-full focus:ring-4 focus:ring-primary-300 font-medium text-xs px-4 py-2 dark:bg-primary-400 dark:hover:bg-primary-400 focus:outline-none dark:focus:ring-primary-400 mr-[1rem] cursor-pointer">
                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                    Tambah Operator
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
                                <?php $no = 0; ?>
                                @foreach ($user as $p)
                                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-center font-medium text-gray-900">
                                            {{ ++$no }}</td>
                                        <td
                                            class="text-sm text-gray-900 font-light px-6 py-4 text-center whitespace-nowrap">
                                            {{ $p->username }}
                                        </td>
                                        <td
                                            class="text-sm text-center text-gray-900 font-light px-6 py-4 whitespace-nowrap truncate">
                                            {{ $p->id_operator }}
                                        </td>
                                        <td
                                            class="text-sm text-center text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $p->tanggal_lahir }}

                                        </td>
                                        <td class="text-sm text-justify text-gray-900 font-light whitespace-nowra">
                                            {{ $p->alamat }}
                                        </td>
                                        <form action="{{ route('admin.operator.destroy', $p->id) }}" method="POST">
                                            <td class="flex px-6 py-2 ">
                                                <a href="#" class="edit-btn my-5 mx-3 cursor-pointer"
                                                    data-id="{{ $p->id }}" data-username="{{ $p->username }}"
                                                    data-id_operator="{{ $p->id_operator }}"
                                                    data-tanggal_lahir="{{ $p->tanggal_lahir }}"
                                                    data-alamat="{{ $p->alamat }}">
                                                    <img class="w-5 my-2 items-center justify-center"
                                                        src="{{ url('/img/pencil2.png') }}" alt="Edit">
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="my-5 mx-3">
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
    {{-- Modal Create --}}

    <div id="OpenModalCreate"
        class="fixed z-20 w-[40%] h-[95%] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-white hidden rounded-md shadow-lg overflow-hidden">
        <form action="{{ route('admin.operator.store') }}" method="POST">
            @csrf
            <div class="text-xl font-medium text-gray-900 px-6 py-4 text-left">
                Form Operator
            </div>
            <hr class="w-30 h-px mx-5 mr-[20] bg-[#18517C]">
            <div class="my-5 mx-10">
                <input name="username" type="text"
                    id="username"class="bg-gray-50 my-3 border-gray-300 text-sm w-full p-2.5 rounded-lg border"
                    placeholder="Username" required="">
                <input name="password" type="password"
                    id="password"class="bg-gray-50 my-3 border-gray-300 text-sm w-full p-2.5 rounded-lg border"
                    placeholder="password" required="">
                <select name="role" type="text"
                    id="role"class="bg-gray-50 my-3 border-gray-300 text-sm w-full p-2.5 rounded-lg border"
                    placeholder="Username" required="">
                    <option value="operator">Operator</option>
                    <option value="admin">Admin</option>
                    <input name="id_operator" type="text"
                        id="id_operator"class="bg-gray-50 my-3  border-gray-300 text-sm w-full  p-2.5 rounded-lg border"
                        placeholder="ID Operator" required="">
                    <input name="tanggal_lahir" type="date"
                        id="tanggal_lahir"class="bg-gray-50 my-3  border-gray-300 text-sm w-full  p-2.5 rounded-lg border"
                        placeholder="Tanggal Lahir" required="">
                    <textarea name="alamat" id="alamat"class="bg-gray-50 my-3 border-gray-300 text-sm w-full  p-2.5 rounded-lg border"
                        placeholder="Alamat" required=""></textarea>
            </div>
            <hr class="w-full h-px bg-[#18517C]">
            <div class="flex justify-center items-center mx-[50%] my-3">
                <button type="button"
                    class="bg-blue-500 hover:bg-blue-700 mx-2 text-white font-bold py-2 px-4 rounded-full"
                    id="createModalCancelButton">
                    Cancel
                </button>
                <button type="submit"F
                    class="bg-blue-500 hover:bg-blue-700 mx-2 text-white font-bold py-2 px-4 rounded-full">
                    Simpan
                </button>
            </div>
        </form>
    </div>

    {{-- Modal Edit --}}
    <div id="OpenModalEdit"
        class="fixed z-20 w-[40%] h-[83%] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-white hidden rounded-md shadow-lg overflow-hidden">
        <form id="editForm" method="POST" action="{{ route('admin.operator.update', $p->id) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="edit_id" id="edit_id">
            <div class="text-xl font-medium text-gray-900 px-6 py-4 text-left">
                Form Operator
            </div>
            <hr class="w-30 h-px mx-5 mr-[20] bg-[#18517C]">
            <div class="my-5 mx-10">
                <input name="username" type="text" id="edit_username"
                    class="bg-gray-50 my-3 border-gray-300 text-sm w-full p-2.5 rounded-lg border" required>
                <input name="password" type="password" id="edit_password"
                    class="bg-gray-50 my-3 border-gray-300 text-sm w-full p-2.5 rounded-lg border"
                    placeholder="Password Baru" required>
                <input name="id_operator" type="text" id="edit_id_operator"
                    class="bg-gray-50 my-3 border-gray-300 text-sm w-full p-2.5 rounded-lg border" required>
                <input name="tanggal_lahir" type="date" id="edit_tanggal_lahir"
                    class="bg-gray-50 my-3 border-gray-300 text-sm w-full p-2.5 rounded-lg border" required>
                <textarea name="alamat" id="edit_alamat"
                    class="bg-gray-50 my-3 border-gray-300 text-sm w-full p-2.5 rounded-lg border" required></textarea>
            </div>
            <hr class="w-full h-px bg-[#18517C]">
            <div class="flex justify-center items-center mx-[50%] my-3">
                <button type="button"
                    class="bg-blue-500 hover:bg-blue-700 mx-2 text-white font-bold py-2 px-4 rounded-full"
                    id="editModalCancelButton">
                    Cancel
                </button>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 mx-2 text-white font-bold py-2 px-4 rounded-full">
                    Update
                </button>
            </div>
        </form>
    </div>

@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const createButton = document.querySelector("#createProductModalButton");
            const editButtons = document.querySelectorAll(".edit-btn");
            const OpenModalCreate = document.querySelector("#OpenModalCreate");
            const OpenModalEdit = document.querySelector("#OpenModalEdit");
            const screen = document.querySelector("#screen");
            const editModalCancelButton = document.querySelector("#editModalCancelButton");
            const createModalCancelButton = document.querySelector("#createModalCancelButton");
            const editForm = document.querySelector("#editForm");

            const toggleVisibility = (elementsToShow, elementsToHide) => {
                elementsToShow.forEach(element => {
                    if (element && element.classList.contains("hidden")) {
                        element.classList.add("block");
                        element.classList.remove("hidden");
                    }
                });
                elementsToHide.forEach(element => {
                    if (element && element.classList.contains("block")) {
                        element.classList.add("hidden");
                        element.classList.remove("block");
                    }
                });
            };

            if (editButtons.length) {
                editButtons.forEach(button => {
                    button.addEventListener('click', function(e) {
                        e.preventDefault();

                        // Ambil data dari tombol edit yang ditekan
                        const id = this.getAttribute('data-id');
                        const username = this.getAttribute('data-username');
                        const id_operator = this.getAttribute('data-id_operator');
                        const tanggal_lahir = this.getAttribute('data-tanggal_lahir');
                        const alamat = this.getAttribute('data-alamat');

                        // Set nilai-nilai dalam form edit
                        document.querySelector("#edit_id").value = id;
                        document.querySelector("#edit_username").value = username;
                        document.querySelector("#edit_id_operator").value = id_operator;
                        document.querySelector("#edit_tanggal_lahir").value = tanggal_lahir;
                        document.querySelector("#edit_alamat").value = alamat;

                        // Set action URL for the form
                        if (editForm) {
                            editForm.action = `/admin/operator/${id}`;
                        }

                        // Tampilkan modal edit
                        toggleVisibility([OpenModalEdit, screen], [OpenModalCreate]);
                    });
                });
            }

            if (editForm) {
                editForm.addEventListener('submit', function(e) {
                    e.preventDefault();

                    const formData = new FormData(editForm);
                    const id = document.querySelector("#edit_id").value;
                    const url = `/admin/operator/${id}`;

                    fetch(url, {
                            method: 'PUT',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                                'Accept': 'application/json',
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                username: formData.get('username'),
                                password: formData.get('password'),
                                id_operator: formData.get('id_operator'),
                                tanggal_lahir: formData.get('tanggal_lahir'),
                                alamat: formData.get('alamat')
                            })
                        })
                        .then(response => {
                            if (!response.ok) {
                                return response.json().then(err => {
                                    throw new Error(err.message || 'Error updating data');
                                });
                            }
                            return response.json();
                        })
                        .then(data => {
                            console.log('Success:', data);
                            toggleVisibility([], [OpenModalEdit, screen]);
                            location.reload();
                        })
                        .catch((error) => {
                            console.error('Error updating data:', error);
                        });
                });
            }

            if (createButton) {
                createButton.addEventListener('click', () => {
                    console.log("Create button clicked");
                    toggleVisibility([OpenModalCreate, screen], [OpenModalEdit]);
                });
            }

            if (editModalCancelButton) {
                editModalCancelButton.addEventListener('click', function() {
                    // Sembunyikan modal edit dan overlay screen
                    toggleVisibility([], [OpenModalEdit, screen]);
                });
            }

            if (createModalCancelButton) {
                createModalCancelButton.addEventListener('click', function() {
                    // Sembunyikan modal create dan overlay screen
                    toggleVisibility([], [OpenModalCreate, screen]);
                });
            }

            if (screen) {
                screen.addEventListener('click', () => {
                    console.log("Screen clicked");
                    toggleVisibility([], [OpenModalCreate, OpenModalEdit, screen]);
                });
            }
        });
    </script>
@endsection


</body>

</html>
