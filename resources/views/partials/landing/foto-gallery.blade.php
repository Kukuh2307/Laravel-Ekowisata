<!-- Gallery Section dengan Masonry Layout -->
<section class="py-20 bg-white" id="foto-gallery">
    <div class="container mx-auto px-6">
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
                @foreach($fotoSections as $index => $foto)
                    @php
                        // Untuk variasi tinggi (opsional)
                        $heightClass = 'aspect-square';
                        if ($index % 7 === 0) {
                            $heightClass = 'aspect-[4/3]';
                        } elseif ($index % 5 === 0) {
                            $heightClass = 'aspect-[3/4]';
                        }
                    @endphp

                    <div class="overflow-hidden rounded-lg {{ $heightClass }} group relative">
                        @if($foto->image)
                            <img src="{{ asset('storage/' . $foto->image) }}" 
                                 alt="{{ $foto->title ?? 'Gallery Foto' }}" 
                                 loading="lazy" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 cursor-pointer">
                        @else
                            <div class="w-full h-full bg-gray-200 flex flex-col items-center justify-center text-gray-400 p-4">
                                <i class="fas fa-image text-3xl mb-2"></i>
                                <span class="text-sm text-center">Gambar Tidak Tersedia</span>
                            </div>
                        @endif
                        
                        <!-- Overlay dengan title -->
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-end justify-start p-3">
                            @if($foto->title)
                                <p class="text-white text-sm font-medium transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 opacity-0 group-hover:opacity-100 line-clamp-2">
                                    {{ $foto->title }}
                                </p>
                            @else
                                <p class="text-white text-sm font-medium transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 opacity-0 group-hover:opacity-100">
                                    Gallery Foto
                                </p>
                            @endif
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