<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Mahasiswa
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm rounded-lg">
                <form action="{{ route('mahasiswa.update', $mahasiswa) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <input type="text" name="nim" value="{{ old('nim', $mahasiswa->nim) }}" class="w-full mb-3 border rounded p-2" required>
                    <input type="text" name="nama" value="{{ old('nama', $mahasiswa->nama) }}" class="w-full mb-3 border rounded p-2" required>
                    <input type="text" name="program_studi" value="{{ old('program_studi', $mahasiswa->program_studi) }}" class="w-full mb-3 border rounded p-2" required>
                    <input type="email" name="email" value="{{ old('email', $mahasiswa->email) }}" class="w-full mb-3 border rounded p-2" required>
                    <input type="text" name="angkatan" value="{{ old('angkatan', $mahasiswa->angkatan) }}" class="w-full mb-3 border rounded p-2" required>

                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>