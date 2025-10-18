<!-- Artikel Section -->
<section class="py-20 bg-white" id="artikel">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-heading font-black text-gray-800 mb-4 font-2">
                ARTIKEL <span class="text-emerald-600">TERBARU</span>
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Jelajahi wawasan, cerita, dan panduan menarik seputar ekowisata, alam, dan kearifan lokal dari kami.
            </p>
            <div class="w-24 h-1 bg-emerald-600 mx-auto mt-6"></div>
        </div>

        @if($artikelSections->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach($artikelSections as $index => $artikel)
                    <div class="bg-white rounded-3xl overflow-hidden shadow-sm group hover:shadow-lg transition-all duration-300 border flex flex-col h-full" 
                         data-aos="fade-up" 
                         data-aos-delay="{{ ($index + 1) * 200 }}">
                        
                        <!-- Image Container -->
                        <div class="h-64 overflow-hidden flex-shrink-0">
                            @if($artikel->image)
                                <img src="{{ asset('storage/' . $artikel->image) }}" 
                                     alt="{{ $artikel->title }}" 
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                            @else
                                <!-- Fallback image -->
                                <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                    <i class="fas fa-newspaper text-4xl text-gray-400"></i>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Content Container -->
                        <div class="p-6 flex flex-col flex-grow">
                            <!-- Title dengan line clamp untuk membatasi 2 baris -->
                            <h3 class="text-2xl font-bold text-gray-800 mb-3 line-clamp-2 leading-tight min-h-[3.5rem]">
                                {{ $artikel->title }}
                            </h3>
                            
                            <!-- Description dengan line clamp untuk membatasi 3 baris -->
                            <p class="text-gray-600 mb-4 leading-relaxed line-clamp-3 flex-grow">
                                {{ Str::limit($artikel->description, 150) }}
                            </p>
                            
                            <!-- Read More Link -->
                            <a href="#" class="font-semibold text-emerald-600 hover:text-emerald-700 transition-colors mt-auto">
                                Baca Selengkapnya &rarr;
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Tampilan jika tidak ada data artikel -->
            <div class="text-center py-12" data-aos="fade-up">
                <div class="w-32 h-32 mx-auto mb-6 rounded-full bg-gray-100 flex items-center justify-center">
                    <i class="fas fa-newspaper text-5xl text-gray-400"></i>
                </div>
                <h3 class="text-2xl font-heading font-bold text-gray-600 mb-4">
                    Belum Ada Artikel
                </h3>
                <p class="text-gray-500 max-w-md mx-auto">
                    Artikel terbaru akan segera tersedia. Silakan kembali lagi nanti.
                </p>
            </div>
        @endif
        
        <!-- View All Articles Button (Optional) -->
        @if($artikelSections->count() > 0)
            <div class="text-center mt-12" data-aos="fade-up">
                <a href="{{ route('artikel  ') }}" class="inline-flex items-center px-8 py-4 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-lg transition-colors duration-300">
                    <span>Lihat Semua Artikel</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        @endif
    </div>
</section>