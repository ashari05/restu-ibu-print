<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Data Produk</h2>
    </x-slot>

    <div class="p-6">

        {{-- Alert sukses --}}
        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('products.create') }}" 
           class="bg-blue-500 text-white px-4 py-2 rounded mb-3 inline-block">
           + Tambah Produk
        </a>

        <div class="bg-white p-4 rounded shadow">
            <table class="w-full border">
                <tr class="bg-gray-200">
                    <th class="p-2">Nama</th>
                    <th class="p-2">Kategori</th>
                    <th class="p-2">Harga</th>
                    <th class="p-2">Aksi</th>
                </tr>

                @foreach($products as $p)
                <tr class="border">
                    <td class="p-2">{{ $p->nama_produk }}</td>
                    <td class="p-2">{{ $p->kategori }}</td>
                    <td class="p-2">Rp {{ number_format($p->harga) }}</td>
                    <td class="p-2">
                        <a href="{{ route('products.edit', $p->id) }}" 
                           class="bg-yellow-400 px-2 py-1 rounded">Edit</a>

                        <form action="{{ route('products.destroy', $p->id) }}" 
                              method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus?')" 
                                    class="bg-red-500 text-white px-2 py-1 rounded">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </table>
        </div>

    </div>
</x-app-layout>