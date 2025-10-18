<!-- Gallery Section -->
<section class="py-20 bg-white" id="foto-gallery">
    <div class="container mx-auto px-6">
        <!-- Header -->
        <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="300">
            <h2 class="text-4xl md:text-5xl font-heading font-black text-gray-800 mb-4 font-2">
                FOTO <span class="text-emerald-600">GALLERY</span>
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Eksplorasi keindahan Jembangan melalui koleksi foto-foto menakjubkan dari berbagai kegiatan dan pemandangan alam
            </p>
            <div class="w-24 h-1 bg-emerald-600 mx-auto mt-6"></div>
        </div>

        @if($fotoSections->count() > 0)
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" data-aos="flip-up" data-aos-delay="400">
                @foreach($fotoSections as $foto)
                    <div class="relative overflow-hidden rounded-xl aspect-square group bg-gray-100">
                        @if($foto->image)
                            <img src="{{ asset('storage/' . $foto->image) }}"
                                 alt="{{ $foto->title ?? 'Gallery Foto' }}"
                                 loading="lazy"
                                 class="w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-110">
                        @else
                            <div class="w-full h-full flex flex-col items-center justify-center text-gray-400">
                                <i class="fas fa-image text-3xl mb-2"></i>
                                <span class="text-sm">Gambar Tidak Tersedia</span>
                            </div>
                        @endif

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/50 transition-all duration-300 flex items-end p-3">
                            <p class="text-white text-sm font-medium opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                {{ $foto->title ?? 'Gallery Foto' }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12" data-aos="fade-up">
                <div class="w-32 h-32 mx-auto mb-6 rounded-full bg-gray-100 flex items-center justify-center">
                    <i class="fas fa-images text-5xl text-gray-400"></i>
                </div>
                <h3 class="text-2xl font-heading font-bold text-gray-600 mb-4">
                    Belum Ada Foto Gallery
                </h3>
                <p class="text-gray-500 max-w-md mx-auto">
                    Foto gallery akan segera tersedia. Silakan kembali lagi nanti.
                </p>
            </div>
        @endif
    </div>
</section>
