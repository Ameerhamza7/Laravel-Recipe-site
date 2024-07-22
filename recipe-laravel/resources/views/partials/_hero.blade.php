{{--Hero--}}
{{-- <div class="relative h-[25rem] mb-5">
    <img src="/images/hero.jpg" class=" h-full w-full object-cover bg-no-repeat" alt="">
    <button class="absolute top-0">Add Recipe</button>
</div> --}}

<div class="relative h-[25rem] flex items-center justify-center bg-cover bg-center" style="background-image: url('/images/hero.jpg');">
    <div class="absolute inset-0 bg-[#000000] opacity-35"></div> <!-- Optional overlay for better text visibility -->
    <div class="relative z-10 text-center text-white">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to Our Website</h1>
        <p class="text-lg md:text-2xl mb-6">Discover the best recipes and cooking tips.</p>
        <a href="/listings/create">
            <button class="bg-[#ff9833] hover:bg-[#fca650] transition-all duration-[0.08s] ease-in text-white font-semibold py-3 px-6 rounded-full animate-scale">Add Recipe</button>
        </a>
    </div>
</div>

<style>
     @keyframes scaleAnimation {
            0%, 80%, 100% {
                transform: scale(1);
            }
            90% {
                transform: scale(1.10);
            }
        }

        .animate-scale {
            animation: scaleAnimation 8s infinite;
            /* animation-delay: 5s infinite;    */
        }
</style>

