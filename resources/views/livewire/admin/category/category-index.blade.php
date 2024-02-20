<div class="">
    <!-- Header -->
    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
    <div>
    <h2 class="text-xl font-semibold text-gray-800">Categories</h2>
    <p class="text-sm text-gray-600">Manage, add, edit & delete category.</p>
    </div>
        <div>
            <div class="inline-flex gap-x-2">
                <livewire:admin.category.category-create />
            </div>
        </div>
    </div>
    <!-- End Header -->

    <livewire:admin.category.category-edit />
    <livewire:admin.category.category-delete />
    <livewire:admin.category.category-table />
    </div>
