<!-- Dokumentasi Section dengan Fixed Height -->
<section class="py-20 bg-white" id="dokumentasi">
    <div class="container mx-auto px-6" data-aos="fade-up" data-aos-delay="300">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-heading font-black text-gray-800 mb-4 font-2">
                DOKUMENTASI <span class="text-emerald-600">KEGIATAN</span>
            </h2>
            <div class="w-24 h-1 bg-emerald-600 mx-auto"></div>
        </div>

        @if($dokumentasiSections->count() > 0)
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
                @foreach($dokumentasiSections as $index => $dokumentasi)
                    @php
                        $isEven = $index % 2 == 0;
                        $animation = $isEven ? 'fade-right' : 'fade-left';
                        
                        // Format tanggal dalam Bahasa Indonesia
                        $months = [
                            'January' => 'Januari', 'February' => 'Februari', 'March' => 'Maret',
                            'April' => 'April', 'May' => 'Mei', 'June' => 'Juni',
                            'July' => 'Juli', 'August' => 'Agustus', 'September' => 'September',
                            'October' => 'Oktober', 'November' => 'November', 'December' => 'Desember'
                        ];
                        $englishMonth = $dokumentasi->created_at->format('F');
                        $indonesianMonth = $months[$englishMonth] ?? $englishMonth;
                        $formattedDate = $dokumentasi->created_at->format('d') . ' ' . $indonesianMonth . ' ' . $dokumentasi->created_at->format('Y');
                    @endphp

                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group h-[400px]" 
                         data-aos="{{ $animation }}" 
                         data-aos-delay="{{ ($index % 2 + 1) * 300 }}">
                        
                        <div class="grid md:grid-cols-5 gap-0 h-full">
                            <!-- Image untuk index genap di kiri, ganjil di kanan -->
                            @if($isEven)
                                <!-- Image Left -->
                                <div class="md:col-span-2 overflow-hidden">
                                    @if($dokumentasi->image)
                                        <img src="{{ asset('storage/' . $dokumentasi->image) }}" 
                                             alt="{{ $dokumentasi->title }}" 
                                             loading="lazy" 
                                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                    @else
                                        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                            <i class="fas fa-image text-4xl text-gray-400"></i>
                                        </div>
                                    @endif
                                </div>
                                <!-- Content Right -->
                                <div class="md:col-span-3 p-8 flex flex-col h-full">
                                    <p class="text-gray-400 text-sm mb-3 font-medium">{{ $formattedDate }}</p>
                                    <h3 class="text-2xl font-heading font-bold text-gray-800 mb-4 group-hover:text-emerald-600 transition-colors line-clamp-2 leading-tight">
                                        {{ $dokumentasi->title }}
                                    </h3>
                                    @if($dokumentasi->description)
                                        <div class="flex-grow overflow-hidden">
                                            <p class="text-gray-600 leading-relaxed line-clamp-4 h-24">
                                                {{ $dokumentasi->description }}
                                            </p>
                                        </div>
                                    @else
                                        <div class="flex-grow"></div>
                                    @endif
                                </div>
                            @else
                                <!-- Content Left -->
                                <div class="md:col-span-3 p-8 order-2 md:order-1 flex flex-col h-full">
                                    <p class="text-gray-400 text-sm mb-3 font-medium">{{ $formattedDate }}</p>
                                    <h3 class="text-2xl font-heading font-bold text-gray-800 mb-4 group-hover:text-emerald-600 transition-colors line-clamp-2 leading-tight">
                                        {{ $dokumentasi->title }}
                                    </h3>
                                    @if($dokumentasi->description)
                                        <div class="flex-grow overflow-hidden">
                                            <p class="text-gray-600 leading-relaxed line-clamp-4 h-24">
                                                {{ $dokumentasi->description }}
                                            </p>
                                        </div>
                                    @else
                                        <div class="flex-grow"></div>
                                    @endif
                                </div>
                                <!-- Image Right -->
                                <div class="md:col-span-2 overflow-hidden order-1 md:order-2">
                                    @if($dokumentasi->image)
                                        <img src="{{ asset('storage/' . $dokumentasi->image) }}" 
                                             alt="{{ $dokumentasi->title }}" 
                                             loading="lazy" 
                                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                    @else
                                        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                            <i class="fas fa-image text-4xl text-gray-400"></i>
                                        </div>
                                    @endif
                                </div>
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
                    Belum Ada Dokumentasi
                </h3>
                <p class="text-gray-500 max-w-md mx-auto">
                    Dokumentasi kegiatan akan segera tersedia. Silakan kembali lagi nanti.
                </p>
            </div>
        @endif
    </div>
</section>