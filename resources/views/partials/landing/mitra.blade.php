<!-- Mitra -->
<section class="py-20 bg-gray-50" id="mitra">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-heading font-black text-gray-800 mb-4 font-2">
                MITRA <span class="text-emerald-600">KAMI</span>
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto ">
                Kami bekerja sama dengan berbagai mitra terpercaya untuk memberikan pengalaman terbaik bagi Anda
            </p>
            <div class="w-24 h-1 bg-emerald-600 mx-auto mt-6"></div>
        </div>

        @if($mitraSections->count() > 0)
            @php
                // Tentukan grid layout berdasarkan jumlah mitra
                $mitraCount = $mitraSections->count();
                $gridClass = 'grid-cols-1';
                
                if ($mitraCount == 2) {
                    $gridClass = 'grid-cols-1 md:grid-cols-2';
                } elseif ($mitraCount >= 3) {
                    $gridClass = 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3';
                }
            @endphp

            <div class="grid {{ $gridClass }} gap-8">
                @foreach($mitraSections as $index => $mitra)
                    @php
                        // Tentukan animasi berdasarkan posisi
                        $animations = ['fade-right', 'fade-down', 'fade-left'];
                        $animation = $animations[$index % count($animations)];
                        $delay = ($index % 3 + 1) * 300;
                    @endphp

                    <div class="text-center group" 
                         data-aos="{{ $animation }}" 
                         data-aos-delay="{{ $delay }}">
                        
                        <div class="w-64 h-64 rounded-full flex items-center justify-center mx-auto mb-2 group-hover:scale-110 transition-transform duration-300 p-4 shadow-sm bg-white">
                            @if($mitra->icon)
                                <img src="{{ asset('storage/' . $mitra->icon) }}" 
                                     alt="{{ $mitra->title }}" 
                                     class="w-full h-full object-contain rounded-full"
                                     loading="lazy">
                            @else
                                <div class="w-full h-full rounded-full bg-gray-200 flex items-center justify-center">
                                    <i class="fas fa-handshake text-4xl text-gray-400"></i>
                                </div>
                            @endif
                        </div>
                        
                        <h3 class="text-xl -mt-[3rem] relative font-heading font-bold text-gray-800 mb-3">
                            {{ $mitra->title }}
                        </h3>
                        
                        @if($mitra->description)
                            <p class="text-gray-600 mt-2 px-4 text-sm leading-relaxed">
                                {{ $mitra->description }}
                            </p>
                        @endif
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12" data-aos="fade-up">
                <div class="w-32 h-32 mx-auto mb-6 rounded-full bg-gray-100 flex items-center justify-center">
                    <i class="fas fa-handshake text-5xl text-gray-400"></i>
                </div>
                <h3 class="text-2xl font-heading font-bold text-gray-600 mb-4">
                    Belum Ada Mitra
                </h3>
                <p class="text-gray-500 max-w-md mx-auto">
                    Informasi mitra akan segera tersedia. Silakan kembali lagi nanti.
                </p>
            </div>
        @endif
    </div>
</section>