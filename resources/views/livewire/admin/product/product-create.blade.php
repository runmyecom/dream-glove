<form wire:submit="save">
    <div class="header-section flex items-center justify-between p-6">
        <a href="/products" class="flex items-center gap-1">
            back
        </a>
        <div class="flex items-center gap-2">
            <button class="text-sm bg-indigo-600 text-white font-semibold px-4 h-10 rounded-lg flex items-center gap-2 justify-center" type="submit">
                Publish product
                <div wire:loading>
                    <x-icons.loading class="w-5 h-5" />
                </div>
            </button>
        </div>
    </div>

    <hr class="border border-dashed" />

    <!-- Basic Details -->
    <section class="p-6">
        <h3 class="mb-6 font-bold">General information*</h3>

        <!-- Product name -->
        <div class="col-span-12 mb-6">
            <x-label for="form.category_name" value="Select Category" />
            <select wire:model="form.category_name" class="w-full rounded-lg border-gray-300">
                <option disabled value="">Select Category</option>
                <option value="clearance">Clearance</option>
                <option value="accessories">Accessories</option>
                <option value="apparel-belts">Apparel > Belts</option>
                <option value="apparel-clothing">Apparel > Clothing</option>
                <option value="baseball-guard">Baseball > Guard</option>
                <option value="baseball-batting-gloves-adult">Baseball > Batting Gloves > Adult</option>
                <option value="baseball-batting-gloves-youth">Baseball > Batting Gloves > Youth</option>
                <option value="baseball-fielding-gloves-infield-classic">Baseball > Fielding GLoves > Infield > Classic</option>
                <option value="baseball-fielding-gloves-infield-premier">Baseball > Fielding GLoves > Infield > Premier</option>
                <option value="baseball-fielding-gloves-outfield-classic">Baseball > Fielding GLoves > Outfield > Classic</option>
                <option value="baseball-fielding-gloves-outfield-premier">Baseball > Fielding GLoves > Outfield > Premier</option>
            </select>
        </div>

        <div class="grid grid-cols-3 gap-6">
            <!-- Product name -->
            <div class="">
                <label for="name" class="text-gray-500 text-sm font-semibold">Product Name*</label>
                <x-input placeholder="Product name" wire:model="form.name" id="name" class="w-full" />
                <span class="text-xs text-red-200">
                    @error('form.name'){{ $message }} @enderror
                </span>
            </div>
            <!-- MRP -->
            <div>
                <label class="text-gray-500 text-sm font-semibold">MRP</label>
                <x-input placeholder="Product Price" wire:model="form.mrp" class="w-full" />
            </div>
            <!-- Thumbnail -->
            <div>
                <label class="text-gray-500 text-sm font-semibold">Thumbnail</label>
                <x-input placeholder="Thumbnail URL" wire:model="form.thumbnail" class="w-full" />
            </div>
        </div>

    </section>

    <hr class="border border-dashed my-2" />

    <section class="p-6">
        <!-- Product Description -->
        <div class="">
            <label for="title" class="text-gray-500 text-sm font-semibold">Product Description*</label>
            <textarea rows="5" class="w-full rounded-lg border-gray-200" wire:model="form.description"></textarea>
        </div>
    </section>

    <hr class="border border-dashed my-2" />

    <section class="p-6">
        <!-- Bullet Points -->
        <label for="title" class="text-gray-500 text-sm font-semibold">Bullet Points</label>
        <div class="grid grid-cols-2 gap-5 items-center w-full">
            <x-input placeholder="bullet 1" wire:model="form.bullet_1" />
            <x-input placeholder="bullet 2" wire:model="form.bullet_2" />
            <x-input placeholder="bullet 3" wire:model="form.bullet_3" />
            <x-input placeholder="bullet 4" wire:model="form.bullet_4" />
            <x-input placeholder="bullet 5" wire:model="form.bullet_5" />
            <x-input placeholder="bullet 6" wire:model="form.bullet_6" />
        </div>


    </section>

    <hr class="border border-dashed my-2" />

    <!-- Media -->
    <section class="p-6">
        <h3 class="mb-2 font-bold">Image Gallery</h3>
        <input type="file" wire:model="form.images" multiple>
        @error('form.images.*') <span class="error">{{ $message }}</span> @enderror
    </section>

</form>
