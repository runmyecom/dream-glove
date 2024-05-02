<div class="flex">

    <section class="max-w-7xl mx-auto w-full">
        <div class="w-full py-12">
            @if($product)
                <div class="grid md:grid-cols-2 gap-12">
                    <div class="card">
                        {{-- @php
                            $images = App\Models\ProductImages::where('product_unique_id', $product->unique_id)->get();
                        @endphp

                        <figure class="shadow-xl rounded-xl p-1 mb-3">
                            <img src="{{ asset('uploads/all/' . $images[$selectedKey]->image) }}" alt="{{$product->name}}" class="h-[60vh] w-full object-cover rounded-lg">
                        </figure>

                        <div class="grid grid-cols-5 gap-2">
                            @foreach ($images as $key => $item)
                                <img src="{{ asset('uploads/all/' . $item->image) }}" alt="" class="w-full h-20 rounded-lg object-cover shadow-xl cursor-pointer" wire:click="changeImage({{ $key }})"  />
                            @endforeach
                        </div> --}}
                        <figure class="shadow-xl rounded-xl p-1 mb-3">
                            <img src="{{ $product->thumbnail }}" alt="{{$product->name}}" class="h-[60vh] w-full object-cover rounded-lg">
                        </figure>
                    </div>
                    <div class="w-full">
                        <section class="mt-5">
                            <div class="text-2xl">{{ $product->name }}</div>
                        </section>
                        <hr class="my-5" />
                        <section>
                            <div>
                                <span class="text-[1.8em]">${{ $product->mrp }}</span>
                            </div>
                            <div class="mt-6">
                                <h2 class="font-bold">Belt Size</h2>
                                <select name="gloveSize" class="mt-3">
                                    <option selected disabled>Select Option</option>
                                    <option value="">30</option>
                                    <option value="">32</option>
                                    <option value="">34</option>
                                    <option value="">36</option>
                                    <option value="">38</option>
                                    <option value="">40</option>
                                    <option value="">42</option>
                                </select>
                            </div>
                        </section>

                        <section class="mt-12">
                            <p>{{ $product->description }}</p>
                        </section>

                        <section>
                            <div class="flex products-center gap-6">
                                <button class="text-center px-6 rounded-lg border hover:bg-gray-800 hover:text-white h-10 flex items-center gap-2 group" wire:click="addToCart( {{ $product->id }} )">
                                    <x-icons.cart class="h-5 w-5 text-gray-700 group-hover:text-white" />
                                    Add to cart
                                </button>
                            </div>
                        </section>
                    </div>
                </div>
            @endif
        </div>
    </section>
</div>
