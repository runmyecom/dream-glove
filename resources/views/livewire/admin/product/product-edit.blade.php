<form wire:submit="updateProduct">
    <div class="header-section flex items-center justify-between p-6">
        <a href="/products" class="flex items-center gap-1">
            <x-icons.arrowleft class="w-5 h-5" />
            back
        </a>
        <div class="flex items-center gap-2">
            <x-button class="ms-3" wire:loading.attr="disabled" type="submit">
                Update Product
            </x-button>
        </div>
    </div>

    <hr class="border border-dashed" />

    <!-- Basic Details -->
    <section class="p-6">
        <h3 class="mb-6 font-bold">General information*</h3>
        <div class="grid grid-cols-3 gap-6">
            <!-- Product name -->
            <div class="">
                <label class="text-gray-500 text-sm font-semibold">Product Name*</label>
                <x-input placeholder="Product name" wire:model="name" id="name" class="w-full" />
                <span class="text-xs text-red-200">
                    @error('name'){{ $message }} @enderror
                </span>
            </div>
            <!-- MRP -->
            <div>
                <label class="text-gray-500 text-sm font-semibold">MRP</label>
                <x-input placeholder="Product Price" wire:model="mrp" class="w-full" />
            </div>
            <!-- Thumbnail -->
            <div>
                <label class="text-gray-500 text-sm font-semibold">Thumbnail</label>
                <x-input placeholder="Thumbnail URL" wire:model="thumbnail" class="w-full" />
            </div>
        </div>
    </section>

    <hr class="border border-dashed my-2" />

    <section class="p-6">
        <!-- Product Description -->
        <div class="">
            <label class="text-gray-500 text-sm font-semibold">Product Description*</label>
            <textarea rows="5" class="w-full rounded-lg border-gray-200" wire:model="description"></textarea>
        </div>
    </section>

    <hr class="border border-dashed my-2" />

    <section class="p-6">
        <!-- Bullet Points -->
        <label class="text-gray-500 text-sm font-semibold">Bullet Points</label>
        <div class="grid grid-cols-2 gap-5 items-center w-full">
            <x-input placeholder="bullet 1" wire:model="bullet_1" />
            <x-input placeholder="bullet 2" wire:model="bullet_2" />
            <x-input placeholder="bullet 3" wire:model="bullet_3" />
            <x-input placeholder="bullet 4" wire:model="bullet_4" />
            <x-input placeholder="bullet 5" wire:model="bullet_5" />
            <x-input placeholder="bullet 6" wire:model="bullet_6" />
        </div>
    </section>

    <hr class="border border-dashed my-2" />

    <section class="p-6">
        <!-- Images -->
        <label class="text-gray-500 text-sm font-semibold">Images</label>
        <section class="my-3 border rounded-lg overflow-hidden p-1">
            <input type="file" wire:model="images" multiple>
            @error('form.images.*') <span class="error">{{ $message }}</span> @enderror
        </section>
        <div class="grid grid-cols-8 gap-3 items-center w-full">
            @if ($productImages)
                @foreach ($productImages as $pimage)
                <figure class="relative">
                    <img src="{{ asset('uploads/all/' . $pimage->image) }}" alt="" class="w-full h-28 rounded-lg object-cover" />
                    <button wire:click.prevent="deleteImage({{ $pimage->id }})" class="absolute top-1 right-1 bg-white p-1 rounded">
                        <x-icons.close class="w-3 h-3 text-red-600" />
                    </button>
                </figure>
                @endforeach
            @endif
        </div>
    </section>
</form>
