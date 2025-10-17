    <!-- Hero Section with Slider -->
    <section class="relative h-screen overflow-hidden" id="home">
        <!-- Slide 1 -->
        <div class="hero-slide active absolute inset-0">
            <!-- <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?q=80&w=2070" alt="Mountain Adventure" class="w-full h-full object-cover"> -->
            <img src="{{ asset('images/slide-1.jpg') }}" alt="slide-1" class="w-full h-full object-cover">
            <div class="overlay-texture absolute inset-0"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center text-white px-6 max-w-4xl">
                    <h1 class="text-5xl md:text-7xl font-heading font-black mb-6 tracking-tight leading-tight uppercase">
                        SELAMAT DATANG <br> DI EKOWISATA TEMPUREJO
                    </h1>
                    <p class="text-lg md:text-xl mb-8 font-light max-w-2xl mx-auto leading-relaxed">
                        Explorasi tempat wisata edukasi yang menyajikan pengalaman belajar dan bermain di alam terbuka
                    </p>
                    <button class="btn-cta bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-10 py-4 rounded-lg text-lg inline-flex items-center space-x-2">
                            <span>Baca Selengkapnya </span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="hero-slide absolute inset-0">
            <!-- <img src="https://images.unsplash.com/photo-1519904981063-b0cf448d479e?q=80&w=2070" alt="Forest Trail" class="w-full h-full object-cover"> -->
             <img src="{{ asset('images/slide-2.jpg') }}" alt="slide-2" class="w-full h-full object-cover">
            <div class="overlay-texture absolute inset-0"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center text-white px-6 max-w-4xl">
                    <h1 class="text-5xl md:text-7xl font-heading font-black mb-6 tracking-tight leading-tight uppercase">
                        SELAMAT DATANG <br> DI EKOWISATA TEMPUREJO
                    </h1>
                    <p class="text-lg md:text-xl mb-8 font-light max-w-2xl mx-auto leading-relaxed">
                        Tempat wisata edukasi yang menyajikan pengalaman belajar dan bermain di alam terbuka
                    </p>
                    <button class="btn-cta bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-10 py-4 rounded-lg text-lg inline-flex items-center space-x-2">
                            <span>Baca Selengkapnya </span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="hero-slide absolute inset-0">
            <!-- <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?q=80&w=2070" alt="Mountain Peak" class="w-full h-full object-cover"> -->
                <img src="{{ asset('images/slide-3.jpg') }}" alt="slide-3" class="w-full h-full object-cover">
            <div class="overlay-texture absolute inset-0"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center text-white px-6 max-w-4xl">
                    <h1 class="text-5xl md:text-7xl font-heading font-black mb-6 tracking-tight leading-tight uppercase">
                        SELAMAT DATANG <br> DI EKOWISATA TEMPUREJO
                    </h1>
                    <p class="text-lg md:text-xl mb-8 font-light max-w-2xl mx-auto leading-relaxed">
                        Tempat wisata edukasi yang menyajikan pengalaman belajar dan bermain di alam terbuka
                    </p>
                    <button class="btn-cta bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-10 py-4 rounded-lg text-lg inline-flex items-center space-x-2">
                            <span>Baca Selengkapnya </span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                </div>
            </div>
        </div>


        <!-- Navigation Arrows -->
        <button class="absolute left-6 top-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white w-14 h-14 rounded-full flex items-center justify-center transition-all z-10" id="prevBtn">
                <i class="fas fa-chevron-left text-xl"></i>
            </button>
        <button class="absolute right-6 top-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white w-14 h-14 rounded-full flex items-center justify-center transition-all z-10" id="nextBtn">
                <i class="fas fa-chevron-right text-xl"></i>
            </button>

        <!-- Dots Indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 pb-[6rem] flex space-x-3 z-10" id="dotsContainer">
            <div class="slider-dot active" data-index="0"></div>
            <div class="slider-dot" data-index="1"></div>
            <div class="slider-dot" data-index="2"></div>
        </div>

        <!-- Decorative Bottom Wave -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden">
            <svg viewBox="0 0 1440 125" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full h-auto block relative top-[1px]">
                <!-- Filter untuk efek kuas -->
                <filter id="brush" x="0" y="0">
                    <feTurbulence type="fractalNoise" baseFrequency="0.02" numOctaves="3" result="noise" />
                    <feDisplacementMap in="SourceGraphic" in2="noise" scale="15" />
                </filter>
            
                <!-- Wave path dengan filter -->
                <path class="translate-y-2" d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V125H0Z"
                        fill="#f9fafb" stroke="none" filter="url(#brush)" />
                </svg>
        </div>
    </section>