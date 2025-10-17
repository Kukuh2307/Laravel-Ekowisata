<!-- sejarah -->
<section class="relative py-20 bg-white overflow-hidden" id="sejarah">
    <!-- Parallax Background -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-black/40 z-10"></div>
        @if($sejarahSection && $sejarahSection->image)
            <img src="{{ asset('storage/' . $sejarahSection->image) }}" 
                 loading="lazy" 
                 alt="Background Sejarah" 
                 class="w-full h-full object-cover transform scale-105 parallax-bg"
                 data-speed="0.3">
        @else
            <!-- Fallback background image -->
            <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                 loading="lazy" 
                 alt="Background Forest" 
                 class="w-full h-full object-cover transform scale-105 parallax-bg"
                 data-speed="0.3">
        @endif
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="300">
            <h2 class="text-4xl md:text-5xl font-heading font-black text-white mb-4 drop-shadow-lg font-2">
                SEJARAH <span class="text-emerald-600">JEMBANGAN</span>
            </h2>
            <p class="text-white/90 text-lg max-w-2xl mx-auto drop-shadow">
                Mengenal lebih dalam perjalanan panjang Jembangan Ekowisata dari masa ke masa
            </p>
            <div class="w-24 h-1 bg-emerald-600 mx-auto mt-6"></div>
        </div>

        @if($sejarahSection)
            <div class="max-w-4xl mx-auto" data-aos="flip-up" data-aos-delay="600">
                <!-- Main History Content -->
                <div class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl p-8 md:p-12 mb-12 border border-white/20">
                    <div class="prose prose-lg max-w-none">
                        <h3 class="text-2xl md:text-3xl font-heading font-bold text-gray-800 mb-6">
                            {{ $sejarahSection->title ?? 'Asal Usul Jembangan Ekowisata' }}
                        </h3>

                        @if($sejarahSection->description)
                            <div class="text-gray-700 leading-relaxed text-lg space-y-6">
                                {!! nl2br(e($sejarahSection->description)) !!}
                            </div>
                        @else
                            <!-- Default content jika tidak ada description -->
                            <p class="text-gray-700 leading-relaxed mb-6 text-lg">
                                Jembangan Ekowisata memiliki sejarah panjang yang bermula dari komunitas lokal yang peduli terhadap pelestarian alam. Pada awalnya, kawasan ini merupakan hutan lindung yang dikelola oleh masyarakat adat setempat.
                            </p>

                            <p class="text-gray-700 leading-relaxed mb-6 text-lg">
                                Pada tahun 1998, sekelompok pemuda setempat mulai menyadari potensi wisata alam yang dimiliki oleh kawasan Jembangan. Dengan semangat gotong royong, mereka mulai membangun jalur trekking sederhana dan membersihkan area sekitar sumber air alami.
                            </p>

                            <div class="bg-emerald-50 rounded-xl p-6 my-8 border-l-4 border-emerald-600">
                                <p class="text-gray-800 italic text-lg leading-relaxed">
                                    "Dari sekadar hutan biasa, kami transformasi menjadi destinasi wisata edukasi yang membanggakan. Semua berawal dari cinta kami pada alam dan keinginan untuk melestarikannya untuk generasi mendatang."
                                </p>
                                <p class="text-emerald-600 font-semibold mt-4">- Pendiri Jembangan Ekowisata</p>
                            </div>

                            <h4 class="text-xl font-heading font-bold text-gray-800 mt-8 mb-4">
                                Perkembangan Menjadi Destinasi Wisata
                            </h4>

                            <p class="text-gray-700 leading-relaxed mb-6 text-lg">
                                Pada tahun 2005, Jembangan secara resmi ditetapkan sebagai kawasan ekowisata oleh pemerintah daerah. Hal ini menjadi momentum penting dalam pengembangan infrastruktur dan fasilitas pendukung.
                            </p>

                            <p class="text-gray-700 leading-relaxed mb-6 text-lg">
                                Kolaborasi dengan berbagai pihak seperti Kementerian Pendidikan, Pemerintah Kabupaten Kediri, dan Universitas Nusantara PGRI Kediri semakin memperkuat posisi Jembangan sebagai destinasi wisata edukasi yang terpercaya.
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        @else
            <!-- Tampilan jika tidak ada data sejarah -->
            <div class="max-w-4xl mx-auto" data-aos="flip-up" data-aos-delay="600">
                <div class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl p-8 md:p-12 mb-12 border border-white/20">
                    <div class="prose prose-lg max-w-none">
                        <h3 class="text-2xl md:text-3xl font-heading font-bold text-gray-800 mb-6">
                            Asal Usul Jembangan Ekowisata
                        </h3>

                        <p class="text-gray-700 leading-relaxed mb-6 text-lg">
                            Jembangan Ekowisata memiliki sejarah panjang yang bermula dari komunitas lokal yang peduli terhadap pelestarian alam. Pada awalnya, kawasan ini merupakan hutan lindung yang dikelola oleh masyarakat adat setempat.
                        </p>

                        <p class="text-gray-700 leading-relaxed mb-6 text-lg">
                            Pada tahun 1998, sekelompok pemuda setempat mulai menyadari potensi wisata alam yang dimiliki oleh kawasan Jembangan. Dengan semangat gotong royong, mereka mulai membangun jalur trekking sederhana dan membersihkan area sekitar sumber air alami.
                        </p>

                        <div class="bg-emerald-50 rounded-xl p-6 my-8 border-l-4 border-emerald-600">
                            <p class="text-gray-800 italic text-lg leading-relaxed">
                                "Dari sekadar hutan biasa, kami transformasi menjadi destinasi wisata edukasi yang membanggakan. Semua berawal dari cinta kami pada alam dan keinginan untuk melestarikannya untuk generasi mendatang."
                            </p>
                            <p class="text-emerald-600 font-semibold mt-4">- Pendiri Jembangan Ekowisata</p>
                        </div>

                        <h4 class="text-xl font-heading font-bold text-gray-800 mt-8 mb-4">
                            Perkembangan Menjadi Destinasi Wisata
                        </h4>

                        <p class="text-gray-700 leading-relaxed mb-6 text-lg">
                            Pada tahun 2005, Jembangan secara resmi ditetapkan sebagai kawasan ekowisata oleh pemerintah daerah. Hal ini menjadi momentum penting dalam pengembangan infrastruktur dan fasilitas pendukung.
                        </p>

                        <p class="text-gray-700 leading-relaxed mb-6 text-lg">
                            Kolaborasi dengan berbagai pihak seperti Kementerian Pendidikan, Pemerintah Kabupaten Kediri, dan Universitas Nusantara PGRI Kediri semakin memperkuat posisi Jembangan sebagai destinasi wisata edukasi yang terpercaya.
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>