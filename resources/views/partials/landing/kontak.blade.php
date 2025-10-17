<!-- Contact Section -->
<section class="py-20 bg-gray-50" id="kontak">
    <div class="container mx-auto px-6" data-aos="fade-up" data-aos-delay="300">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-heading font-black text-gray-800 mb-4 font-2">
                KONTAK <span class="text-emerald-600">KAMI</span>
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Jika anda memiliki pertanyaan, saran, atau masukan, jangan ragu untuk menghubungi kami
            </p>
            <div class="w-24 h-1 bg-emerald-600 mx-auto mt-6"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
            <!-- Contact Info -->
            <div class="space-y-8">
                <!-- Alamat -->
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-emerald-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-map-marker-alt text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-heading font-bold text-gray-800 mb-2">Alamat</h3>
                        <p class="text-gray-600">
                            @if($kontakSection && $kontakSection->address)
                                {!! nl2br(e($kontakSection->address)) !!}
                            @else
                                Ds.Tempurejo Kec.Wates<br>Kediri
                            @endif
                        </p>
                    </div>
                </div>

                <!-- Telepon -->
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-emerald-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-phone text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-heading font-bold text-gray-800 mb-2">Telepon</h3>
                        <p class="text-gray-600">
                            @if($kontakSection && $kontakSection->phone)
                                {{ $kontakSection->phone }}
                            @else
                                0889-7611-3334
                            @endif
                        </p>
                    </div>
                </div>

                <!-- Email -->
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-emerald-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-envelope text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-heading font-bold text-gray-800 mb-2">Email</h3>
                        <p class="text-gray-600">
                            @if($kontakSection && $kontakSection->email)
                                {{ $kontakSection->email }}
                            @else
                                desatempurejo729@gmail.com
                            @endif
                        </p>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="flex space-x-4 pt-4">
                    <!-- Facebook -->
                    @if($kontakSection && $kontakSection->facebook)
                        <a href="{{ $kontakSection->facebook }}" target="_blank" class="w-12 h-12 bg-gray-800 hover:bg-emerald-600 rounded-lg flex items-center justify-center transition-colors">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                    @else
                        <a href="https://www.facebook.com/groups/192891362028968/" target="_blank" class="w-12 h-12 bg-gray-800 hover:bg-emerald-600 rounded-lg flex items-center justify-center transition-colors">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                    @endif

                    <!-- Instagram -->
                    @if($kontakSection && $kontakSection->instagram)
                        <a href="{{ $kontakSection->instagram }}" target="_blank" class="w-12 h-12 bg-gray-800 hover:bg-emerald-600 rounded-lg flex items-center justify-center transition-colors">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                    @else
                        <a href="https://www.instagram.com/desa_tempurejo/" target="_blank" class="w-12 h-12 bg-gray-800 hover:bg-emerald-600 rounded-lg flex items-center justify-center transition-colors">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                    @endif

                    <!-- Twitter -->
                    @if($kontakSection && $kontakSection->twitter)
                        <a href="{{ $kontakSection->twitter }}" target="_blank" class="w-12 h-12 bg-gray-800 hover:bg-emerald-600 rounded-lg flex items-center justify-center transition-colors">
                            <i class="fab fa-twitter text-white"></i>
                        </a>
                    @else
                        <a href="#" class="w-12 h-12 bg-gray-800 hover:bg-emerald-600 rounded-lg flex items-center justify-center transition-colors">
                            <i class="fab fa-twitter text-white"></i>
                        </a>
                    @endif

                    <!-- YouTube -->
                    @if($kontakSection && $kontakSection->youtube)
                        <a href="{{ $kontakSection->youtube }}" target="_blank" class="w-12 h-12 bg-gray-800 hover:bg-emerald-600 rounded-lg flex items-center justify-center transition-colors">
                            <i class="fab fa-youtube text-white"></i>
                        </a>
                    @else
                        <a href="#" class="w-12 h-12 bg-gray-800 hover:bg-emerald-600 rounded-lg flex items-center justify-center transition-colors">
                            <i class="fab fa-youtube text-white"></i>
                        </a>
                    @endif
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <form class="space-y-6">
                    <div>
                        <input type="text" placeholder="Nama Lengkap" class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-600">
                    </div>
                    <div>
                        <input type="email" placeholder="Alamat Email" class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-600">
                    </div>
                    <div>
                        <input type="text" placeholder="Subjek Pesan" class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-600">
                    </div>
                    <div>
                        <textarea placeholder="Isi Pesan" rows="5" class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-600"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-4 rounded-lg transition-all duration-300 hover:shadow-lg">
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>