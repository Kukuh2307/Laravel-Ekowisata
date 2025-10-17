<!-- Produk Herbal -->
<section class="py-20 bg-gray-50" id="produk">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-heading font-black text-gray-800 mb-4 font-2">
                PRODUK <span class="text-emerald-600">HERBAL</span>
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Nikmati keaslian ramuan tradisional Indonesia yang diracik dengan bahan alami pilihan untuk menjaga kesehatan dan kebugaran tubuh Anda.
            </p>
            <div class="w-24 h-1 bg-emerald-600 mx-auto mt-6"></div>
        </div>

        @if($produkSections->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10">
                @foreach($produkSections as $index => $produk)
                    @php
                        // Tentukan animasi berdasarkan index
                        $animations = [
                            'fade-right',
                            'fade-up',
                            'fade-left', 
                            'fade-up',
                            'fade-right'
                        ];
                        $animation = $animations[$index % count($animations)] ?? 'fade-up';
                        $delay = ($index % 5) * 200;
                    @endphp

                    <div class="bg-white rounded-3xl overflow-hidden shadow-sm group hover:shadow-lg transition-all duration-300 flex flex-col h-full" 
                         data-aos="{{ $animation }}" 
                         data-aos-delay="{{ $delay }}">
                        
                        <!-- Image Container -->
                        <div class="h-64 overflow-hidden flex-shrink-0">
                            @if($produk->image)
                                <img src="{{ asset('storage/' . $produk->image) }}" 
                                     alt="{{ $produk->title }}" 
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                            @else
                                <!-- Fallback image -->
                                <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                    <i class="fas fa-leaf text-4xl text-gray-400"></i>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Content Container -->
                        <div class="p-6 flex flex-col flex-grow">
                            <!-- Title -->
                            <h3 class="text-2xl font-bold text-gray-800 mb-3 text-center line-clamp-2 leading-tight min-h-[3.5rem]">
                                {{ $produk->title }}
                            </h3>
                            
                            <!-- Description dengan line clamp -->
                            <div class="flex-grow mb-4">
                                <p class="text-gray-600 leading-relaxed line-clamp-4 text-center">
                                    {{ $produk->description }}
                                </p>
                            </div>
                            
                            <!-- Price -->
                            @if($produk->price)
                                <div class="text-center mt-auto">
                                    <span class="text-2xl font-bold text-emerald-600">
                                        {{ 'Rp ' . number_format($produk->price, 0, ',', '.') }}
                                    </span>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Tampilan jika tidak ada data produk -->
            <div class="text-center py-12" data-aos="fade-up">
                <div class="w-32 h-32 mx-auto mb-6 rounded-full bg-gray-100 flex items-center justify-center">
                    <i class="fas fa-leaf text-5xl text-gray-400"></i>
                </div>
                <h3 class="text-2xl font-heading font-bold text-gray-600 mb-4">
                    Belum Ada Produk
                </h3>
                <p class="text-gray-500 max-w-md mx-auto">
                    Produk herbal akan segera tersedia. Silakan kembali lagi nanti.
                </p>
            </div>
        @endif
    </div>
</section>