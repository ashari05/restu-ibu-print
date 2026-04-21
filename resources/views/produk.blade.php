<!DOCTYPE html>
<html>
<head>
    <title>Produk - Restu Ibu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>

@include('partials.navbar')

<section class="py-14">
  <div class="max-w-6xl mx-auto px-4">
    
    <div class="flex items-center justify-between mb-8">
      <h1 class="text-2xl md:text-3xl font-bold">Produk</h1>

      <a href="{{ url('/kategori') }}" 
         class="px-3 py-1.5 rounded-lg bg-sky-600 text-white text-sm font-semibold">
         Lihat Kategori
      </a>
    </div>

    @if($products->isEmpty())
      <div class="p-6 border bg-white rounded-2xl">
        Belum ada produk
      </div>
    @else
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

        @foreach($products as $p)

        <article class="rounded-2xl overflow-hidden border bg-white hover:shadow transition">

          <a href="#">
            <img
              src="{{ asset('assets/images/' . ($p->gambar ?? 'produk-default.jpg')) }}"
              class="w-full aspect-[4/6] object-cover"
            >
          </a>

          <div class="p-4">
            <h3 class="font-semibold">
              {{ $p->nama_produk }}
            </h3>

            @if($p->harga)
              <p class="text-sm font-semibold mt-1">
                Rp {{ number_format($p->harga) }}
              </p>
            @endif

          </div>

        </article>

        @endforeach

      </div>
    @endif

  </div>
</section>

@include('partials.footer')

</body>
</html>