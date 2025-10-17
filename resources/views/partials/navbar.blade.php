<!-- Navbar -->
<nav class="fixed w-full z-50 transition-all duration-300 bg-transparent backdrop-blur-sm" id="navbar">
  <div class="container mx-auto px-6 py-4">
    <div class="flex items-center justify-between sm:pr-[4.5rem]">
      <!-- Logo -->
      <div class="flex items-center space-x-3">
        <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center shadow-lg">
          <i class="fas fa-mountain text-emerald-600 text-2xl"></i>
        </div>
        <span class="text-2xl font-heading font-black text-white tracking-wider">EKOWISATA TEMPUREJO</span>
      </div>

      <!-- Desktop Menu -->
      <div class="hidden md:flex items-center space-x-8 font-3 relative">
        <a href="{{ route('home') }}" class="nav-link text-white font-medium hover:text-gray-300">Home</a>

        <a href="{{ route('home') }}#mitra" class="block text-white font-medium hover:text-gray-600 py-2">Mitra</a>

        <a href="{{ route('home') }}#paket" class="nav-link text-white font-medium hover:text-gray-300">Paket</a>
        <a href="{{ route('home') }}#fasilitas" class="nav-link text-white font-medium hover:text-gray-300">Fasilitas</a>
        <a href="{{ route('home') }}#kontak" class="nav-link text-white font-medium hover:text-gray-300">Kontak Kami</a>

        <!-- Dropdown Menu -->
        <div class="relative">
          <button id="dropdownButton" class="flex items-center text-white font-medium hover:text-gray-300 focus:outline-none">
            Lainnya
            <i id="dropdownIcon" class="fas fa-chevron-down ml-2 text-sm transition-transform duration-300"></i>
          </button>

          <!-- Dropdown List -->
          <div id="dropdownMenu" class="hidden absolute bg-white rounded-lg shadow-lg mt-2 py-2 w-48 right-0 z-50 font-3">
            <a href="{{ route('sejarah') }}" class="block px-4 py-2 text-gray-700 hover:bg-emerald-100">Sejarah</a>
            <a href="{{ route('artikel') }}" class="block px-4 py-2 text-gray-700 hover:bg-emerald-100">Artikel</a>
            <a href="{{ route('foto-gallery') }}" class="block px-4 py-2 text-gray-700 hover:bg-emerald-100">Foto Gallery</a>
            <a href="{{ route('produk') }}" class="block px-4 py-2 text-gray-700 hover:bg-emerald-100">Produk</a>
            <a href="{{ route('poster') }}" class="block px-4 py-2 text-gray-700 hover:bg-emerald-100">Poster</a>
          </div>
        </div>
      </div>

      <!-- Hamburger Menu -->
      <button class="md:hidden text-white focus:outline-none" id="hamburger">
        <i class="fas fa-bars text-2xl"></i>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div class="hidden md:hidden mt-4 pb-4 space-y-3 font-3" id="mobileMenu">
      <a href="{{ route('home') }}" class="block text-white font-medium hover:text-gray-600 py-2">Home</a>
      <a href="{{ route('home') }}#mitra" class="block text-white font-medium hover:text-gray-600 py-2">Mitra</a>
      <a href="{{ route('sejarah') }}#sejarah" class="block text-white font-medium hover:text-gray-600 py-2">Sejarah</a>
      <a href="{{ route('home') }}#paket" class="block text-white font-medium hover:text-gray-600 py-2">Paket</a>
      <a href="{{ route('produk') }}" class="block text-white font-medium hover:text-gray-600 py-2">Produk</a>
      <a href="{{ route('home') }}#fasilitas" class="block text-white font-medium hover:text-gray-600 py-2">Fasilitas</a>
      <a href="{{ route('artikel') }}" class="block text-white font-medium hover:text-gray-600 py-2">Artikel</a>
      <a href="{{ route('home') }}#dokumentasi" class="block text-white font-medium hover:text-gray-600 py-2">Dokumentasi</a>
      <a href="{{ route('poster') }}" class="block text-white font-medium hover:text-gray-600 py-2">Poster</a>
      <a href="{{ route('foto-gallery') }}" class="block text-white font-medium hover:text-gray-600 py-2">Foto Gallery</a>
      <a href="{{ route('home') }}#kontak" class="block text-white font-medium hover:text-gray-600 py-2">Kontak Kami</a>
    </div>
  </div>
</nav>
