<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Mahasiswa
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm rounded-lg">

                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf

                    <input
                        type="text"
                        name="nim"
                        placeholder="NIM"
                        class="w-full mb-3 border rounded p-2"
                        required
                    >

                    <input
                        type="text"
                        name="nama"
                        placeholder="Nama"
                        class="w-full mb-3 border rounded p-2"
                        required
                    >

                    <input
                        type="text"
                        name="program_studi"
                        placeholder="Program Studi"
                        class="w-full mb-3 border rounded p-2"
                        required
                    >

                    <input
                        type="email"
                        name="email"
                        placeholder="Email"
                        class="w-full mb-3 border rounded p-2"
                        required
                    >

                    <input
                        type="text"
                        name="angkatan"
                        placeholder="Angkatan"
                        class="w-full mb-3 border rounded p-2"
                        required
                    >

                    <button
                        type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded"
                    >
                        Simpan
                    </button>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>