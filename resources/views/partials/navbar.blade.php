<header class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b">
  <nav class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">

    <!-- Brand -->
    <a href="{{ url('/') }}" class="flex items-center gap-2 font-semibold">
      <img src="{{ asset('assets/images/ridp.png') }}" class="h-8 w-8 object-contain">
      <span>Restu Ibu</span>
    </a>

    <!-- Menu Desktop -->
    <ul class="hidden md:flex gap-6 text-sm">
      <li>
        <a href="{{ url('/') }}" 
           class="{{ request()->is('/') ? 'text-sky-600 font-bold' : 'hover:text-sky-600' }}">
           Beranda
        </a>
      </li>

      <li>
        <a href="{{ url('/kategori') }}" 
           class="{{ request()->is('kategori') ? 'text-sky-600 font-bold' : 'hover:text-sky-600' }}">
           Kategori
        </a>
      </li>

      <li>
        <a href="{{ url('/produk') }}" 
           class="{{ request()->is('produk') ? 'text-sky-600 font-bold' : 'hover:text-sky-600' }}">
           Produk
        </a>
      </li>

      <li>
        <a href="{{ url('/testimoni') }}" 
           class="{{ request()->is('testimoni') ? 'text-sky-600 font-bold' : 'hover:text-sky-600' }}">
           Testimoni
        </a>
      </li>

      <li>
        <a href="{{ url('/kontak') }}" 
           class="{{ request()->is('kontak') ? 'text-sky-600 font-bold' : 'hover:text-sky-600' }}">
           Tentang Kami
        </a>
      </li>

      @auth
      <li>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button class="hover:text-red-600 font-semibold">
            Logout ({{ Auth::user()->name }})
          </button>
        </form>
      </li>
      @endauth
    </ul>

  </nav>
</header>