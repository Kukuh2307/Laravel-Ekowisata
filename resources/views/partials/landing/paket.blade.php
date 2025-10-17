<!-- Paket Ekowisata Section -->
<section class="py-20 bg-white" id="paket">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="300">
            <h2 class="text-4xl md:text-5xl font-heading font-black text-gray-800 mb-4 font-2">
                PAKET EKOWISATA <span class="text-emerald-600">JEMBANGAN</span>
            </h2>
            <div class="w-24 h-1 bg-emerald-600 mx-auto mt-6"></div>
        </div>

        @if($paketSections->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                @foreach($paketSections as $index => $paket)
                    @php
                        // Tentukan animasi berdasarkan index
                        $animation = $index % 2 == 0 ? 'fade-right' : 'fade-left';
                        $delay = 300;
                        
                        // Tentukan badge type (Popular/Hot Deal)
                        $badgeType = $index == 0 ? 'popular' : 'hot';
                        $badgeText = $index == 0 ? 'Popular' : 'Hot Deal';
                        $badgeColor = $index == 0 ? 'bg-emerald-600' : 'bg-red-500';
                        $badgeIcon = $index == 0 ? 'fas fa-star' : 'fas fa-fire';
                    @endphp

                    <div class="bg-gray-50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group" 
                         data-aos="{{ $animation }}" 
                         data-aos-delay="{{ $delay }}">
                        
                        <!-- Image Container -->
                        <div class="relative overflow-hidden h-64">
                            @if($paket->image)
                                <img src="{{ asset('storage/' . $paket->image) }}" 
                                     alt="{{ $paket->title }}" 
                                     loading="lazy" 
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            @else
                                <!-- Fallback image berdasarkan index -->
                                @if($index == 0)
                                    <img src="{{ asset('images/silo.jpg') }}" 
                                         loading="lazy" 
                                         alt="Silo & Seed Story" 
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                @else
                                    <img src="{{ asset('images/soren.jpg') }}" 
                                         loading="lazy" 
                                         alt="Soren Adventure" 
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                @endif
                            @endif
                            
                            <!-- Badge -->
                            <div class="absolute top-4 right-4 {{ $badgeColor }} text-white px-4 py-2 rounded-full font-bold text-sm">
                                <i class="{{ $badgeIcon }} mr-1"></i> {{ $badgeText }}
                            </div>
                        </div>
                        
                        <!-- Content Container -->
                        <div class="p-8">
                            <!-- Title and Price -->
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-2xl font-heading font-bold text-gray-800 font-1">{{ $paket->title }}</h3>
                                <span class="text-emerald-600 font-bold text-xl">
                                    {{ 'Rp ' . number_format($paket->price, 0, ',', '.') }}
                                </span>
                            </div>
                            
                            <!-- Description -->
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                {{ $paket->description }}
                            </p>
                            
                            <!-- Facilities List -->
                            <ul class="space-y-3 mb-6">
                                @if($paket->facilities)
                                    @foreach(explode("\n", $paket->facilities) as $facility)
                                        @if(trim($facility))
                                            <li class="flex items-center text-gray-700">
                                                <i class="fas fa-check-circle text-emerald-600 mr-3 flex-shrink-0"></i>
                                                <span>{{ trim($facility) }}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                @else
                                    <!-- Default facilities jika tidak ada data -->
                                    @if($index == 0)
                                        <li class="flex items-center text-gray-700">
                                            <i class="fas fa-check-circle text-emerald-600 mr-3"></i> Mini game, Warming up
                                        </li>
                                        <li class="flex items-center text-gray-700">
                                            <i class="fas fa-check-circle text-emerald-600 mr-3"></i> Materi Kompos
                                        </li>
                                        <li class="flex items-center text-gray-700">
                                            <i class="fas fa-check-circle text-emerald-600 mr-3"></i> Snack
                                        </li>
                                        <li class="flex items-center text-gray-700">
                                            <i class="fas fa-check-circle text-emerald-600 mr-3"></i> Membuat komposter botol bekas
                                        </li>
                                        <li class="flex items-center text-gray-700">
                                            <i class="fas fa-check-circle text-emerald-600 mr-3"></i> Makan siang & penutup
                                        </li>
                                    @else
                                        <li class="flex items-center text-gray-700">
                                            <i class="fas fa-check-circle text-emerald-600 mr-3"></i> Mini game, Warming up
                                        </li>
                                        <li class="flex items-center text-gray-700">
                                            <i class="fas fa-check-circle text-emerald-600 mr-3"></i> Penjelajahan di arboretum, koleksi daun
                                        </li>
                                        <li class="flex items-center text-gray-700">
                                            <i class="fas fa-check-circle text-emerald-600 mr-3"></i> Snack & materi ecoprint
                                        </li>
                                        <li class="flex items-center text-gray-700">
                                            <i class="fas fa-check-circle text-emerald-600 mr-3"></i> Membuat ecoprint dari koleksi daun
                                        </li>
                                        <li class="flex items-center text-gray-700">
                                            <i class="fas fa-check-circle text-emerald-600 mr-3"></i> Makan siang & penutup
                                        </li>
                                    @endif
                                @endif
                            </ul>
                            
                            <!-- Action Button -->
                            <button class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-4 rounded-lg transition-all duration-300 hover:shadow-lg">
                                Pesan Sekarang
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Tampilan jika tidak ada data paket -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                <!-- Default Package 1 -->
                <div class="bg-gray-50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group" data-aos="fade-right" data-aos-delay="300">
                    <div class="relative overflow-hidden h-64">
                        <img src="{{ asset('images/silo.jpg') }}" loading="lazy" alt="Silo & Seed Story" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-emerald-600 text-white px-4 py-2 rounded-full font-bold">
                            <i class="fas fa-star mr-1"></i> Popular
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-2xl font-heading font-bold text-gray-800 font-1">Silo & Seed Story</h3>
                            <span class="text-emerald-600 font-bold text-xl">30K</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Menawarkan kesempatan untuk mempelajari teknologi penyimpanan hasil pertanian, seperti biji-bijian dan pakan ternak di dalam silo. 
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-emerald-600 mr-3"></i> Mini game, Warming up
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-emerald-600 mr-3"></i> Materi Kompos
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-emerald-600 mr-3"></i> Snack
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-emerald-600 mr-3"></i> Membuat komposter botol bekas
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-emerald-600 mr-3"></i> Makan siang & penutup
                            </li>
                        </ul>
                        <button class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-4 rounded-lg transition-all duration-300 hover:shadow-lg">
                            Pesan Sekarang
                        </button>
                    </div>
                </div>

                <!-- Default Package 2 -->
                <div class="bg-gray-50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group" data-aos="fade-left" data-aos-delay="300">
                    <div class="relative overflow-hidden h-64">
                        <img src="{{ asset('images/soren.jpg') }}" loading="lazy" alt="Soren Adventure" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-full font-bold">
                            <i class="fas fa-fire mr-1"></i> Hot Deal
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-2xl font-heading font-bold text-gray-800 font-1">Soren Adventure</h3>
                            <span class="text-emerald-600 font-bold text-xl">50K</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Paket Soren di Jembangan Ekowisata mengajak Anda untuk mengubah limbah organik sisa tumbuhan menjadi sumber daya berguna.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-emerald-600 mr-3"></i> Mini game, Warming up
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-emerald-600 mr-3"></i> Penjelajahan di arboretum, koleksi daun
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-emerald-600 mr-3"></i> Snack & materi ecoprint
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-emerald-600 mr-3"></i> Membuat ecoprint dari koleksi daun
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-emerald-600 mr-3"></i> Makan siang & penutup
                            </li>
                        </ul>
                        <button class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-4 rounded-lg transition-all duration-300 hover:shadow-lg">
                            Pesan Sekarang
                        </button>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>