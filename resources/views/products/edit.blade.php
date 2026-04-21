<x-app-layout>
<x-slot name="header">
    <h2>Edit Produk</h2>
</x-slot>

<div class="p-6">

    <form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <input name="nama_produk" value="{{ $product->nama_produk }}" class="w-full border p-2">
    </div>

    <div class="mb-3">
        <input name="kategori" value="{{ $product->kategori }}" class="w-full border p-2">
    </div>

    <div class="mb-3">
        <input name="harga" value="{{ $product->harga }}" class="w-full border p-2">
    </div>

    <div class="mb-3">
        <textarea name="deskripsi" class="w-full border p-2">{{ $product->deskripsi }}</textarea>
    </div>

    <button class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>

    </form>

</div>
</x-app-layout>