<div class="h-screen bg-gray-100 pt-20">
    <h1 class="mb-10 text-center text-2xl font-bold">Cart Items</h1>
    @if ($this->total != '0')
        <div class="mx-auto max-w-5xl justify-center md:flex md:space-x-6 xl:px-0 px-6">
            <div class="rounded-lg md:w-2/3">
                @foreach ($cartitems as $item)
                    <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start">
                        @php
                            $images = App\Models\ProductImages::where('product_unique_id', $item->product->unique_id)->get();
                        @endphp
                        <figure class="shadow-xl rounded-xl h-16 overflow-hidden p-1">
                            <img src="{{$item->product->thumbnail}}" alt="{{$item->product->name}}" class="w-full rounded-lg sm:w-20 h-16 object-cover">
                        </figure>

                        <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                            <div class="mt-5 sm:mt-0">
                            <h2 class="font-bold text-gray-900">{{Str::limit($item->product->name, 75)}}</h2>
                            <p class="mt-1 text-sm text-gray-700">₹{{ $item->product->mrp * $item->quantity }}</p>
                            </div>
                            <div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                            <div class="flex items-center border-gray-100">
                                <button class="cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-gray-800 hover:text-blue-50" wire:click="decrementQty({{ $item->id }})"> - </button>
                                <input class="h-8 w-8 border border-gray-100 bg-white text-center text-xs outline-none" type="number" value="{{ $item->quantity }}" min="1" readonly />
                                <button class="cursor-pointer rounded-r bg-gray-100 py-1 px-3 duration-100 hover:bg-gray-800 hover:text-blue-50" wire:click="incrementQty({{ $item->id }})"> + </button>
                            </div>
                            <div class="flex items-center">
                                <button wire:click="removeItem({{$item->id}})" class="text-sm hover:text-red-500 border rounded-lg px-3 py-1 hover:border-red-500">
                                    remove
                                </button>
                            </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Sub total -->
            <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">
                <div class="mb-2 flex justify-between">
                    <p class="text-gray-700">Subtotal</p>
                    <p class="text-gray-700">₹{{ $sub_total }}</p>
                </div>
                <div class="flex justify-between">
                    <p class="text-gray-700">Shipping</p>
                    <p class="text-gray-700">{{ $tax }}</p>
                </div>
                <hr class="my-4" />
                <div class="flex justify-between">
                    <p class="text-lg font-bold">Total</p>
                    <div class="">
                        <p class="mb-1 text-lg font-bold">₹{{ $this->total }}</p>
                        <p class="text-sm text-gray-700">including VAT</p>
                    </div>
                </div>
                <a href="{{ route('checkout') }}">
                    <button class="w-full mt-6 rounded-md bg-gray-900 py-1.5 font-medium text-blue-50 hover:bg-gray-700">Check out</button>
                </a>
            </div>

        </div>
    @else
        <div class="card text-center">
            <h4>No items in cart to checkout</h4>
            <a href="/" class="bg-gray-900 px-4 py-2 rounded-lg text-white">
                <button class="mt-6">Shop now</button>
            </a>
        </div>
    @endif

    <section class="xl:px-0 px-6 max-w-5xl mx-auto mt-12">
        <div class="bg-gray-200 p-12 w-full flex items-center justify-between gap-5 rounded-xl">
            <div>
                <h3 class="font-bold">Continue Shopping</h3>
                <p class="text-sm text-gray-700">Discover more products that are perfect for gift, for your wardrobe, or a unique addition to your collection.</p>
            </div>
            <a href="/" class="bg-gray-900 text-white py-2 px-5 rounded-lg text-sm">Continue Shopping</a>
        </div>
    </section>

  </div>


