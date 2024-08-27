<x-app-layout>
    <div class="w-full">
        <a href="{{route('customize-gloves')}}">
            <img src="/images/hero.jpeg" alt="" class="h-full w-full object-cover">
        </a>

        <!-- Featured Products -->
        <section class="p-6 md:p-12">
            <h2 class="font-bold md:text-[3em] text-[2.5em] text-center">Featured Products</h2>
            <p class="text-center mb-12">Experience sophistication with every piece - where elegance meets functionality in a <br/> perfect blend of style and practicality.</p>
            <div class="grid md:grid-cols-4 gap-5">
                <div class="card">
                    <div class="image bg-gray-100 rounded-xl overflow-hidden shadow h-[48vh] flex items-center justify-center relative group cursor-pointer">
                        <img src="/thumb/Dream-AS-Mint-Gold.jpeg" alt="" class="group-hover:scale-125 transition duration-700 ease-in-out w-full h-full object-cover">
                        <button class="bg-white shadow-xl rounded-full h-10 w-10 items-center justify-center absolute top-4 right-4 text-gray-700 hidden group-hover:flex transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5M12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5s5 2.24 5 5s-2.24 5-5 5m0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3s3-1.34 3-3s-1.34-3-3-3"/></svg>
                        </button>
                        <button class="bg-white shadow-xl rounded-full h-10 w-10 items-center justify-center absolute top-16 right-4 text-gray-700 hidden group-hover:flex transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 256 256"><path fill="currentColor" d="M96 216a16 16 0 1 1-16-16a16 16 0 0 1 16 16m88-16a16 16 0 1 0 16 16a16 16 0 0 0-16-16m47.65-125.65l-28.53 92.71A23.89 23.89 0 0 1 180.18 184H84.07A24.11 24.11 0 0 1 61 166.59L24.82 40H8a8 8 0 0 1 0-16h16.82a16.08 16.08 0 0 1 15.39 11.6L48.32 64H224a8 8 0 0 1 7.65 10.35M213.17 80H52.89l23.49 82.2a8 8 0 0 0 7.69 5.8h96.11a8 8 0 0 0 7.65-5.65Z"/></svg>
                        </button>
                    </div>
                    <h3 class="text-xl mt-2 font-bold">Dream AS Mint/Gold</h3>
                    <h4>$25.00 - $35.00</h4>
                </div>
                <div class="card">
                    <div class="image bg-gray-100 rounded-xl overflow-hidden shadow h-[48vh] flex items-center justify-center relative group cursor-pointer">
                        <img src="/thumb/Dream-Belt-Black.png" alt="" class="group-hover:scale-125 transition duration-700 ease-in-out h-full w-full object-cover">
                        <button class="bg-white shadow-xl rounded-full h-10 w-10 items-center justify-center absolute top-4 right-4 text-gray-700 hidden group-hover:flex transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5M12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5s5 2.24 5 5s-2.24 5-5 5m0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3s3-1.34 3-3s-1.34-3-3-3"/></svg>
                        </button>
                        <button class="bg-white shadow-xl rounded-full h-10 w-10 items-center justify-center absolute top-16 right-4 text-gray-700 hidden group-hover:flex transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 256 256"><path fill="currentColor" d="M96 216a16 16 0 1 1-16-16a16 16 0 0 1 16 16m88-16a16 16 0 1 0 16 16a16 16 0 0 0-16-16m47.65-125.65l-28.53 92.71A23.89 23.89 0 0 1 180.18 184H84.07A24.11 24.11 0 0 1 61 166.59L24.82 40H8a8 8 0 0 1 0-16h16.82a16.08 16.08 0 0 1 15.39 11.6L48.32 64H224a8 8 0 0 1 7.65 10.35M213.17 80H52.89l23.49 82.2a8 8 0 0 0 7.69 5.8h96.11a8 8 0 0 0 7.65-5.65Z"/></svg>
                        </button>
                    </div>
                    <h3 class="text-xl mt-2 font-bold">Dream Belt Black</h3>
                    <h4>$55.00</h4>
                </div>
                <div class="card">
                    <div class="image bg-gray-100 rounded-xl overflow-hidden shadow h-[48vh] flex items-center justify-center relative group cursor-pointer">
                        <img src="/thumb/Dream-Sliding-Mitt-Smiley-Melt.png" alt="" class="group-hover:scale-125 transition duration-700 ease-in-out h-full w-full object-cover">
                        <button class="bg-white shadow-xl rounded-full h-10 w-10 items-center justify-center absolute top-4 right-4 text-gray-700 hidden group-hover:flex transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5M12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5s5 2.24 5 5s-2.24 5-5 5m0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3s3-1.34 3-3s-1.34-3-3-3"/></svg>
                        </button>
                        <button class="bg-white shadow-xl rounded-full h-10 w-10 items-center justify-center absolute top-16 right-4 text-gray-700 hidden group-hover:flex transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 256 256"><path fill="currentColor" d="M96 216a16 16 0 1 1-16-16a16 16 0 0 1 16 16m88-16a16 16 0 1 0 16 16a16 16 0 0 0-16-16m47.65-125.65l-28.53 92.71A23.89 23.89 0 0 1 180.18 184H84.07A24.11 24.11 0 0 1 61 166.59L24.82 40H8a8 8 0 0 1 0-16h16.82a16.08 16.08 0 0 1 15.39 11.6L48.32 64H224a8 8 0 0 1 7.65 10.35M213.17 80H52.89l23.49 82.2a8 8 0 0 0 7.69 5.8h96.11a8 8 0 0 0 7.65-5.65Z"/></svg>
                        </button>
                    </div>
                    <h3 class="text-xl mt-2 font-bold">Dream Sliding Mitt Smiley Melt</h3>
                    <h4>$85.00</h4>
                </div>
                <div class="card">
                    <div class="image bg-gray-100 rounded-xl overflow-hidden shadow h-[48vh] flex items-center justify-center relative group cursor-pointer">
                        <img src="/thumb/Dream-AS-Baby-Blue-Yellow.jpeg" alt="" class="group-hover:scale-125 transition duration-700 ease-in-out object-cover h-full w-full">
                        <button class="bg-white shadow-xl rounded-full h-10 w-10 items-center justify-center absolute top-4 right-4 text-gray-700 hidden group-hover:flex transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5M12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5s5 2.24 5 5s-2.24 5-5 5m0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3s3-1.34 3-3s-1.34-3-3-3"/></svg>
                        </button>
                        <button class="bg-white shadow-xl rounded-full h-10 w-10 items-center justify-center absolute top-16 right-4 text-gray-700 hidden group-hover:flex transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 256 256"><path fill="currentColor" d="M96 216a16 16 0 1 1-16-16a16 16 0 0 1 16 16m88-16a16 16 0 1 0 16 16a16 16 0 0 0-16-16m47.65-125.65l-28.53 92.71A23.89 23.89 0 0 1 180.18 184H84.07A24.11 24.11 0 0 1 61 166.59L24.82 40H8a8 8 0 0 1 0-16h16.82a16.08 16.08 0 0 1 15.39 11.6L48.32 64H224a8 8 0 0 1 7.65 10.35M213.17 80H52.89l23.49 82.2a8 8 0 0 0 7.69 5.8h96.11a8 8 0 0 0 7.65-5.65Z"/></svg>
                        </button>
                    </div>
                    <h3 class="text-xl mt-2 font-bold">Dream AS Baby Blue/ Yellow</h3>
                    <h4>$25.00 – $35.00</h4>
                </div>
            </div>
        </section>

        {{-- Categories grid --}}
        <div class="grid md:grid-cols-3">
            <div class="relative group overflow-hidden cursor-pointer">
                <img src="/images/pro_1.png" alt="" class="w-full h-[60vh] object-contain  group-hover:scale-125 transition duration-700 ease-in-out">
                <div class="absolute top-0 left-0 right-0 bottom-0 flex flex-col items-center justify-center bg-red-600/50">
                    <span class=" text-white font-bold md:text-[3em] text-[2.5em]">Batting <br/> Gloves</span>
                    <a class="opacity-0 group-hover:opacity-100 bg-gray-900/75 backdrop-blur-md text-white px-5 py-2 rounded-lg" href="{{route('customize-batting-gloves-types')}}">Customize now</a>
                </div>
            </div>
            <div class="relative group overflow-hidden cursor-pointer">
                <img src="/images/gloves.png" alt="" class="w-full h-[60vh] object-contain  group-hover:scale-125 transition duration-700 ease-in-out">
                <div class="absolute top-0 left-0 right-0 bottom-0 flex flex-col items-center justify-center bg-indigo-600/50">
                    <span class=" text-white font-bold md:text-[3em] text-[2.5em]">Custom <br/> Gloves</span>
                    <a class="opacity-0 group-hover:opacity-100 bg-gray-900/75 backdrop-blur-md text-white px-5 py-2 rounded-lg" href="{{route('customize-gloves')}}">Customize now</a>
                </div>
            </div>
            <div class="relative group overflow-hidden cursor-pointer">
                <img src="/images/pro_4.png" alt="" class="w-full h-[60vh] object-contain  group-hover:scale-125 transition duration-700 ease-in-out">
                <div class="absolute top-0 left-0 right-0 bottom-0 flex flex-col items-center justify-center bg-yellow-600/50">
                    <span class=" text-white font-bold md:text-[3em] text-[2.5em]">Custom <br/> Belts</span>
                    <a class="opacity-0 group-hover:opacity-100 bg-gray-900/75 backdrop-blur-md text-white px-5 py-2 rounded-lg" href="{{route('customize-belts')}}">Customize now</a>
                </div>
            </div>
        </div>

        {{-- Our Category --}}
        <section class="md:p-12 p-6">
            <h2 class="font-bold text-[3em] text-center">Our Top Category</h2>
            <p class="text-center mb-12">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut ducimus tempore illo <br/> dolorem, exercitationem, sapiente eaque.</p>
            <div class="flex flex-col md:flex-row gap-5 md:h-screen">
                <div class="md:w-[40%] w-full">
                    <figure class="rounded-2xl overflow-hidden w-full shadow-lg h-full relative group">
                        <img src="/thumb/Black-Golden-Gloves.jpeg" class="md:h-full h-[40vh] w-full object-cover">
                        <div class="absolute inset-0 bg-black/75 flex items-center justify-center flex-col cursor-pointer transition-all duration-700 ease-in-out opacity-0 group-hover:opacity-100">
                            <h3 class="text-white text-[3.5em] font-bold">Batting gloves</h3>
                            <a href="{{route('baseball-batting-gloves-adult')}}" class="bg-gray-50 text-sm rounded px-3 py-1">View all</a>
                        </div>
                    </figure>
                </div>
                <div class="md:w-[60%] w-full flex flex-col gap-5">
                    <figure class="rounded-2xl overflow-hidden w-full shadow-lg h-[50%] relative group">
                        <img src="/thumb/Custom-Glove.jpeg" class="h-full w-full object-cover">
                        <div class="absolute inset-0 bg-black/75 flex items-center justify-center flex-col cursor-pointer transition-all duration-700 ease-in-out opacity-0 group-hover:opacity-100">
                            <h3 class="text-white text-[3em] font-bold">Custom Gloves</h3>
                            <a href="{{route('customize-gloves')}}" class="bg-gray-50 text-sm rounded px-3 py-1">View all</a>
                        </div>
                    </figure>
                    <div class="grid grid-cols-2 gap-5 h-[50%]">
                        <figure class="rounded-2xl overflow-hidden w-full shadow-lg h-full relative group">
                            <img src="/thumb/belt-red.png" class="h-full w-full object-cover">
                            <div class="absolute inset-0 bg-black/75 flex items-center justify-center flex-col cursor-pointer transition-all duration-700 ease-in-out opacity-0 group-hover:opacity-100">
                                <h3 class="text-white text-[2em] font-bold">Belt</h3>
                                <a href="{{route('apparel-belts')}}" class="bg-gray-50 text-sm rounded px-3 py-1">View all</a>
                            </div>
                        </figure>
                        <figure class="rounded-2xl overflow-hidden w-full shadow-lg h-full relative group">
                            <img src="/thumb/accessories.jpeg" class="h-full w-full object-cover">
                            <div class="absolute inset-0 bg-black/75 flex items-center justify-center flex-col cursor-pointer transition-all duration-700 ease-in-out opacity-0 group-hover:opacity-100">
                                <h3 class="text-white text-[2em] font-bold">Accessories</h3>
                                <a href="{{route('accessories')}}" class="bg-gray-50 text-sm rounded px-3 py-1">View all</a>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <!-- Subscribe -->
        <section class="p-6 md:p-12">
            <div class="bg-zinc-200 rounded-xl w-full h-full grid md:grid-cols-3 md:gap-8 gap-4 items-center justify-between px-6 md:px-12">
                <figure class="flex items-center justify-center">
                    <img src="/images/pro_3.png" alt="" class="h-[30vh] md:h-full">
                </figure>
                <div>
                    <h3 class="uppercase text-zinc-600">JOIN OUR NEWSLETTER</h3>
                    <h2 class="text-zinc-900 font-bold md:text-[2.6em] text-[2.2em]">Get Discount up to <br/> 50% off Today!</h2>
                </div>
                <div class="w-full">
                    <input type="text" placeholder="Enter your email here" class="outline-none ring-0 border-0 border-b w-full bg-zinc-200 focus:outline-none focus:ring-0 focus:border-b focus:border-zinc-900 px-0 py-3">
                    <button class="w-full p-4 rounded text-white bg-zinc-900 mt-8">Subscribe</button>
                </div>
            </div>
        </section>

        <x-footer />
    </div>
</x-app-layout>
