<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Mahasiswa
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if(auth()->user()->role === 'admin')
                <a href="{{ route('mahasiswa.create') }}"
                   class="inline-block mb-4 px-4 py-2 bg-blue-600 text-white rounded">
                    + Tambah Mahasiswa
                </a>
            @endif

            <div class="bg-white p-6 shadow-sm rounded-lg">
                <table class="w-full border">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-2">NIM</th>
                            <th class="border p-2">Nama</th>
                            <th class="border p-2">Program Studi</th>
                            <th class="border p-2">Email</th>
                            <th class="border p-2">Angkatan</th>

                            @if(auth()->user()->role === 'admin')
                                <th class="border p-2">Aksi</th>
                            @endif
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($mahasiswas as $mahasiswa)
                            <tr>
                                <td class="border p-2">
                                    {{ $mahasiswa->nim }}
                                </td>

                                <td class="border p-2">
                                    {{ $mahasiswa->nama }}
                                </td>

                                <td class="border p-2">
                                    {{ $mahasiswa->program_studi }}
                                </td>

                                <td class="border p-2">
                                    {{ $mahasiswa->email }}
                                </td>

                                <td class="border p-2">
                                    {{ $mahasiswa->angkatan }}
                                </td>

                                @if(auth()->user()->role === 'admin')
                                    <td class="border p-2">
                                        <a href="{{ route('mahasiswa.edit', $mahasiswa) }}"
                                           class="text-blue-600">
                                            Edit
                                        </a>

                                        <form action="{{ route('mahasiswa.destroy', $mahasiswa) }}"
                                              method="POST"
                                              class="inline">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="text-red-600 ml-3"
                                                    onclick="return confirm('Hapus data mahasiswa?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="border p-4 text-center">
                                    Belum ada data mahasiswa.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>