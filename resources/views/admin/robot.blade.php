<div class="w-full fixed h-screen bg-black bg-opacity-50 z-10 hidden" id="screen"></div>
@extends('app.app')

@section('title', 'robot')

@section('content')
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
                                <a type="button" id="createProductModalButton"
                                    class="flex items-center justify-center bg-blue-800 text-white bg-primary-400 hover:bg-primary-100 rounded-full focus:ring-4 focus:ring-primary-300 font-medium text-xs px-4 py-2 dark:bg-primary-400 dark:hover:bg-primary-400 focus:outline-none dark:focus:ring-primary-400 mr-[1rem] cursor-pointer">
                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                    Tambah Robot
                                </a>
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
                                        Tipe
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-center border-b border-[#607FBB] ml-14 w-24">
                                        Baterai
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-center border-b border-[#607FBB] ml-14 w-24">
                                        ID Robot
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-center border-b border-[#607FBB] ml-14 w-24">
                                        Warna
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-center border-b border-[#607FBB] ml-14 w-24">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 0; ?>
                                @foreach ($robot as $r)
                                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-center font-medium text-gray-900">
                                            {{ ++$no }}</td>
                                        <td
                                            class="text-sm text-gray-900 font-light text-center px-6 py-4 whitespace-nowrap">
                                            {{ $r->nama }}
                                        </td>
                                        <td
                                            class="text-sm text-gray-900 font-light text-center px-6 py-4 whitespace-nowrap">
                                            {{ $r->tipe }}
                                        </td>
                                        <td
                                            class="text-sm text-gray-900 font-light px-6 py-4 text-center whitespace-nowrap">
                                            {{ $r->baterai }}
                                        </td>
                                        <td
                                            class="text-sm text-gray-900 font-light px-6 py-4 text-center whitespace-nowrap">
                                            {{ $r->nama_posisi }}
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <div class="w-7 h-7 inline-block rounded-full"
                                                style="background-color: {{ $r->warna }}"></div>
                                        </td>
                                        <form action="{{ route('admin.robot.destroy', $r->id) }}" method="POST">
                                            <td class="flex px-6 py-2 ">
                                                <a href="#" class="edit-btn my-5 mx-3 cursor-pointer"
                                                    data-id="{{ $r->id }}" data-nama="{{ $r->nama }}"
                                                    data-tipe="{{ $r->tipe }}" data-baterai="{{ $r->baterai }}"
                                                    data-nama_posisi="{{ $r->nama_posisi }}"
                                                    data-warna="{{ $r->warna }}">
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
        class="fixed z-20 w-[40%] h-[80%] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-white hidden rounded-md shadow-lg overflow-hidden">
        <form action="{{ route('admin.robot.store') }}" method="POST">
            @csrf
            <div class="text-xl font-medium text-gray-900 px-6 py-4 text-left">
                Form Robot
            </div>
            <hr class="w-30 h-px mx-5 mr-[20] bg-[#18517C]">
            <div class="my-5 mx-10">
                <input name="nama" type="text"
                    id="nama"class="bg-gray-50 my-3 border-gray-300 text-sm w-full p-2.5 rounded-lg border"
                    placeholder="Nama" required="">
                <input name="tipe" type="text"
                    id="tipe"class="bg-gray-50 my-3 border-gray-300 text-sm w-full p-2.5 rounded-lg border"
                    placeholder="Tipe" required="">
                <input name="baterai" type="text"
                    id="baterai"class="bg-gray-50 my-3 border-gray-300 text-sm w-full p-2.5 rounded-lg border"
                    placeholder="baterai" required="">
                <select name="nama_posisi" id="nama_posisi"
                    class="bg-gray-50 my-3 border-gray-300 text-sm w-full p-2.5 rounded-lg border" required>
                    <option value="" disabled selected hidden>Pilih Nama Posisi</option>
                    @foreach ($checkpoint as $cp)
                        <option value="{{ $cp->nama_posisi }}">{{ $cp->nama_posisi }}</option>
                    @endforeach
                </select>
                <div class="flex justify-center items-center mx-5">
                    <input id="warna" name="warna"
                        class="bg-gray-50 my-3 border-gray-300 text-sm w-70 p-2.5 rounded-lg border text-center cont"
                        required="">
                    <input id="colorInput" class=" mx-5 w-12 h-12 border-2 cursor-pointer" type="color" name="warna">
                </div>
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
        class="fixed z-20 w-[40%] h-[80%] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-white hidden rounded-md shadow-lg overflow-hidden">
        <form action="{{ route('admin.robot.update', $r->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="edit_id" id="edit_id">
            <div class="text-xl font-medium text-gray-900 px-6 py-4 text-left">
                Edit Robot
            </div>
            <hr class="w-30 h-px mx-5 mr-[20] bg-[#18517C]">
            <div class="my-5 mx-10">
                <input name="nama" type="text"
                    id="edit_nama"class="bg-gray-50 my-3 border-gray-300 text-sm w-full p-2.5 rounded-lg border"
                    value="{{ old('nama', $r->nama) }}" required="">
                <input name="tipe" type="text"
                    id="edit_tipe"class="bg-gray-50 my-3 border-gray-300 text-sm w-full p-2.5 rounded-lg border"
                    value="{{ old('tipe', $r->tipe) }}" required="">
                <input name="baterai" type="text"
                    id="edit_baterai"class="bg-gray-50 my-3 border-gray-300 text-sm w-full p-2.5 rounded-lg border"
                    value="{{ old('baterai', $r->baterai) }}" required="">
                <select name="nama_posisi" id="edit_nama_posisi"
                    class="bg-gray-50 my-3 border-gray-300 text-sm w-full p-2.5 rounded-lg border" required>
                    <option value="" disabled selected hidden>Pilih Nama Posisi</option>
                    @foreach ($checkpoint as $cp)
                        <option value="{{ $cp->nama_posisi }}">{{ $cp->nama_posisi }}</option>
                    @endforeach
                </select>
                <div class="flex justify-center items-center mx-5">
                    <input id="edit_warna"
                        class="bg-gray-50 my-3 border-gray-300 text-sm w-70 p-2.5 rounded-lg border text-center cont"
                        required="" value="{{ $r->warna }}">
                    <input id="edit_colorInput" class="mx-5 w-12 h-12 border-2 cursor-pointer" type="color"
                        value="{{ $r->warna }}">
                </div>
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
                    Update
            </div>
            </button>
        </form>
    </div>
@endsection
</body>

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
                        const data_nama = this.getAttribute('data-nama');
                        const tipe = this.getAttribute('data-tipe');
                        const baterai = this.getAttribute('data-baterai');
                        const nama_posisi = this.getAttribute('data-nama_posisi');
                        const warna = this.getAttribute('data-warna');


                        // Set nilai-nilai dalam form edit
                        document.querySelector("#edit_id").value = id;
                        document.querySelector("#edit_nama").value = nama;
                        document.querySelector("#edit_tipe").value = tipe;
                        document.querySelector("#edit_baterai").value = baterai;
                        document.querySelector("#edit_nama_posisi").value = nama_posisi;
                        document.querySelector("#edit_warna").value = warna;


                        // Set action URL for the form
                        if (editForm) {
                            editForm.action = `/admin/robot/${id}`;
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
                    const url = `/admin/robot/${id}`;

                    fetch(url, {
                            method: 'PUT',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                                'Accept': 'application/json',
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                nama: formData.get('nama'),
                                tipe: formData.get('tipe'),
                                baterai: formData.get('baterai'),
                                nama_posisi: formData.get('nama_posisi'),
                                warna: formData.get('warna')


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

        var savedColor = '{{ $r->warna }}';

        // Set nilai input type color saat modal edit dibuka
        document.getElementById('edit_colorInput').value = savedColor;

        // Update color picker and background when text input changes
        document.getElementById('warna').addEventListener('input', function(event) {
            var color = event.target.value;
            if (/^#[0-9A-F]{6}$/i.test(color)) { // Validate hex color
                document.getElementById('colorInput').value = color;
            }
        });

        // Update color picker and background when text input changes
        document.getElementById('edit_warna').addEventListener('input', function(event) {
            var color = event.target.value;
            if (/^#[0-9A-F]{6}$/i.test(color)) { // Validate hex color
                document.getElementById('edit_colorInput').value = color;
            }
        });
        // Update text input and background when color picker changes
        document.getElementById('colorInput').addEventListener('input', function(event) {
            var color = event.target.value;
            document.getElementById('warna').value = color;
        });

        document.getElementById('edit_colorInput').addEventListener('input', function(event) {
            var color = event.target.value;
            document.getElementById('edit_warna').value = color;
        });

        // Initialize background color on page load
        window.addEventListener('DOMContentLoaded', (event) => {
            var initialColor = '#ffffff'; // Default color
            document.getElementById('warna').value = initialColor;
            document.getElementById('colorInput').value = initialColor;
        });
    </script>
@endsection

</html>
