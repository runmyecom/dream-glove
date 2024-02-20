<div class="">
    <!-- Header -->
    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
    <div>
    <h2 class="text-xl font-semibold text-gray-800">Products</h2>
    <p class="text-sm text-gray-600">Manage, add, edit & delete products.</p>
    </div>
        <div>
            <div class="inline-flex gap-x-2">
                <a href="{{ route('product.create') }}" class="flex items-center gap-1 border rounded-lg text-sm px-3 py-1.5">
                    <x-icons.add class="w-4 h-4 text-gray-700" />
                    Create Product
                </a>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <livewire:admin.product.product-delete />
    <livewire:admin.product.product-table />
    </div>
