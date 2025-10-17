<!-- Hero Section with Slider -->
<section class="relative h-screen overflow-hidden" id="home">
    
    @foreach($heroSlides as $index => $slide)
        <!-- Slide {{ $index + 1 }} -->
        <div class="hero-slide {{ $index === 0 ? 'active' : '' }} absolute inset-0">
            @if($slide->image)
                <img src="{{ asset('storage/' . $slide->image) }}" alt="{{ $slide->title }}" class="w-full h-full object-cover">
            @else
                <!-- Fallback image jika tidak ada gambar -->
                <img src="{{ asset('images/slide-1.jpg') }}" alt="Default Image" class="w-full h-full object-cover">
            @endif
            
            <div class="overlay-texture absolute inset-0"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center text-white px-6 max-w-4xl">
                    <h1 class="text-5xl md:text-7xl font-heading font-black mb-6 tracking-tight leading-tight uppercase">
                        {{ $slide->title }}
                    </h1>
                    @if($slide->description)
                        <p class="text-lg md:text-xl mb-8 font-light max-w-2xl mx-auto leading-relaxed">
                            {{ $slide->description }}
                        </p>
                    @endif
                    <button class="btn-cta bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-10 py-4 rounded-lg text-lg inline-flex items-center space-x-2">
                        <span>Baca Selengkapnya</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Navigation Arrows -->
    @if($heroSlides->count() > 1)
        <button class="absolute left-6 top-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white w-14 h-14 rounded-full flex items-center justify-center transition-all z-10" id="prevBtn">
            <i class="fas fa-chevron-left text-xl"></i>
        </button>
        <button class="absolute right-6 top-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white w-14 h-14 rounded-full flex items-center justify-center transition-all z-10" id="nextBtn">
            <i class="fas fa-chevron-right text-xl"></i>
        </button>

        <!-- Dots Indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 pb-[6rem] flex space-x-3 z-10" id="dotsContainer">
            @foreach($heroSlides as $index => $slide)
                <div class="slider-dot {{ $index === 0 ? 'active' : '' }}" data-index="{{ $index }}"></div>
            @endforeach
        </div>
    @endif

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