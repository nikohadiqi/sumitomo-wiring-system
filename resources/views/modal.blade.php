@extends('app.app')

@section('title', 'RFID')

@section('content')
<h1>Operator List</h1>
<button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="openModal()">Create Operator</button>

<!-- Modal -->
<div id="createModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3 text-center">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Create Operator</h3>
            <form action="{{ route('operator.store') }}" method="POST">
                @csrf
                <div class="mt-2">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="username" id="username"
                           class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                           placeholder="Enter username" required>
                </div>
                <!-- Tambahkan input lainnya sesuai kebutuhan -->
                <div class="mt-4">
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Save</button>
                    <button type="button" class="bg-red-500 text-white px-4 py-2 rounded" onclick="closeModal()">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById('createModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('createModal').classList.add('hidden');
    }
</script>
@endsection
