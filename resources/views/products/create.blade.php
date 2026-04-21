<x-app-layout>
<x-slot name="header">
    <h2>Tambah Produk</h2>
</x-slot>

<div class="p-6">

    {{-- Error --}}
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 mb-3 rounded">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('products.store') }}">
    @csrf

    <div class="mb-3">
        <input name="nama_produk" class="w-full border p-2" placeholder="Nama Produk">
    </div>

    <div class="mb-3">
        <input name="kategori" class="w-full border p-2" placeholder="Kategori">
    </div>

    <div class="mb-3">
        <input name="harga" class="w-full border p-2" placeholder="Harga">
    </div>

    <div class="mb-3">
        <textarea name="deskripsi" class="w-full border p-2"></textarea>
    </div>

    <button class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
    <a href="/products" class="ml-2">Kembali</a>

    </form>

</div>
</x-app-layout>