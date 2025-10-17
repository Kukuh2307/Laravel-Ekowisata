<!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <!-- About -->
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-emerald-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-mountain text-white text-xl"></i>
                        </div>
                        <span class="text-xl font-heading font-black">EKOWISATA TEMPUREJO</span>
                    </div>
                    <p class="text-gray-400 leading-relaxed">
                        Jembangan Ekowisata adalah destinasi wisata alam yang menggabungkan petualangan, edukasi, dan pelestarian lingkungan.
                    </p>
                </div>
                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-heading font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors duration-300">Home</a></li>
                        <li><a href="{{ route('home') }}#mitra }}" class="text-gray-400 hover:text-white transition-colors duration-300">Mitra</a></li>
                        <li><a href="{{ route('sejarah') }}" class="text-gray-400 hover:text-white transition-colors duration-300">Sejarah</a></li>
                        <li><a href="{{ route('home') }}#paket" class="text-gray-400 hover:text-white transition-colors duration-300">Paket Ekowisata</a></li>
                        <li><a href="{{ route('produk') }}" class="text-gray-400 hover:text-white transition-colors duration-300">Produk</a></li>
                        <li><a href="{{ route('home') }}#fasilitas" class="text-gray-400 hover:text-white transition-colors duration-300">Fasilitas</a></li>
                        <li><a href="{{ route('home') }}#dokumentasi" class="text-gray-400 hover:text-white transition-colors duration-300">Dokumentasi</a></li>
                        <li><a href="{{ route('poster') }}" class="text-gray-400 hover:text-white transition-colors duration-300">Poster</a></li>
                        <li><a href="{{ route('foto-gallery') }}" class="text-gray-400 hover:text-white transition-colors duration-300">Foto Gallery</a></li>
                        <li><a href="{{ route('home') }}#kontak" class="text-gray-400 hover:text-white transition-colors duration-300">Kontak Kami</a></li>
                    </ul>
                </div>
                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-heading font-bold mb-4">Contact Info</h3>
                    <p class="text-gray-400">Jl. Raya Jembangan, Desa Tempurejo, Kec. Jembangan, Kabupaten Kediri, Jawa Timur 64221</p>
                </div>
                <!-- Newsletter -->
                <div>
                    <h3 class="text-lg font-heading font-bold mb-4">Berita Terbaru</h3>
                    <p class="text-gray-400 mb-4">Subscribe untuk mendapatkan informasi terbaru.</p>
                    <form class="flex">
                        <input type="email" placeholder="Your email" class="w-full px-4 py-2 rounded-l-lg focus:outline-none">
                        <button disabled type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded-r-lg transition-colors duration-300">
                                Subscribe
                            </button>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-6 text-center text-gray-500">
                &copy; 2024 Jembangan Ekowisata. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Script tambahan -->
    @vite('resources/js/custom.js')
</body>

</html>