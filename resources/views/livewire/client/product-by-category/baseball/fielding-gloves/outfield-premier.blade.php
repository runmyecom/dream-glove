<div>
    <section class="max-w-7xl mx-auto py-12">
        <h2 class="font-bold md:text-[2em] text-[2em] text-center">Baseball > Fielding Gloves > Outfield > Premier</h2>
        {{-- <p class="text-center mb-12">Experience sophistication with every piece - where elegance meets functionality in a <br/> perfect blend of style and practicality.</p> --}}
        <div class="grid md:grid-cols-4 gap-5">
            <div class="card">
                <a href="{{ route('customize-gloves') }}" class="image bg-gray-100 p-5 rounded-xl overflow-hidden shadow md:h-[40vh] h-[30vh] flex items-center justify-center relative group cursor-pointer">
                    <img src="/builder/dream-gloves-1.png" alt="" class="group-hover:scale-125 transition duration-700 ease-in-out rounded-lg">

                    <button class="bg-white shadow-xl rounded-full h-10 w-10 items-center justify-center absolute top-4 right-4 text-gray-700 hidden group-hover:flex transition duration-300 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5M12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5s5 2.24 5 5s-2.24 5-5 5m0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3s3-1.34 3-3s-1.34-3-3-3"/></svg>
                    </button>
                    <button class="bg-white shadow-xl rounded-full h-10 w-10 items-center justify-center absolute top-16 right-4 text-gray-700 hidden group-hover:flex transition duration-300 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 256 256"><path fill="currentColor" d="M96 216a16 16 0 1 1-16-16a16 16 0 0 1 16 16m88-16a16 16 0 1 0 16 16a16 16 0 0 0-16-16m47.65-125.65l-28.53 92.71A23.89 23.89 0 0 1 180.18 184H84.07A24.11 24.11 0 0 1 61 166.59L24.82 40H8a8 8 0 0 1 0-16h16.82a16.08 16.08 0 0 1 15.39 11.6L48.32 64H224a8 8 0 0 1 7.65 10.35M213.17 80H52.89l23.49 82.2a8 8 0 0 0 7.69 5.8h96.11a8 8 0 0 0 7.65-5.65Z"/></svg>
                    </button>
                </a>
                <h3 class="text-xl mt-2 font-bold">Customize Your Dream Glove</h3>
                <h4>$210.00 – $265.00</h4>
            </div>

            @foreach ($products as $product)
                <div class="card">
                    <a href="{{ route('single-product', $product->slug) }}" class="image bg-gray-100 p-5 rounded-xl overflow-hidden shadow md:h-[40vh] h-[30vh] flex items-center justify-center relative group cursor-pointer">
                        @php
                            $images = App\Models\ProductImages::where('product_unique_id', $product->unique_id)->get();
                        @endphp
                        <img src="{{ asset('uploads/all/' . $images[0]->image) }}" alt="" class="group-hover:scale-125 transition duration-700 ease-in-out">

                        <button class="bg-white shadow-xl rounded-full h-10 w-10 items-center justify-center absolute top-4 right-4 text-gray-700 hidden group-hover:flex transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5M12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5s5 2.24 5 5s-2.24 5-5 5m0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3s3-1.34 3-3s-1.34-3-3-3"/></svg>
                        </button>
                        <button class="bg-white shadow-xl rounded-full h-10 w-10 items-center justify-center absolute top-16 right-4 text-gray-700 hidden group-hover:flex transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 256 256"><path fill="currentColor" d="M96 216a16 16 0 1 1-16-16a16 16 0 0 1 16 16m88-16a16 16 0 1 0 16 16a16 16 0 0 0-16-16m47.65-125.65l-28.53 92.71A23.89 23.89 0 0 1 180.18 184H84.07A24.11 24.11 0 0 1 61 166.59L24.82 40H8a8 8 0 0 1 0-16h16.82a16.08 16.08 0 0 1 15.39 11.6L48.32 64H224a8 8 0 0 1 7.65 10.35M213.17 80H52.89l23.49 82.2a8 8 0 0 0 7.69 5.8h96.11a8 8 0 0 0 7.65-5.65Z"/></svg>
                        </button>
                    </a>
                    <h3 class="text-xl mt-2 font-bold">{{ $product->name }}</h3>
                    <h4>${{ $product->mrp }}</h4>
                </div>
            @endforeach
        </div>
    </section>
</div>
