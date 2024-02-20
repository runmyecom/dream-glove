<!-- Table Section -->
<div class="min-w-full">
    <!-- Table -->
    <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
    <tr>
    <th scope="col" class="ps-6 py-3 text-start">#</th>
    <th scope="col" class="px-6 py-3 text-start" @click="$wire.sortField('name')">
    <div class="flex items-center gap-x-2">
    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
    Name
    </span>
    </div>
    </th>
          <th scope="col" class="px-6 py-3 text-start">
            <div class="flex items-center gap-x-2">
              <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                Slug
              </span>
            </div>
          </th>

          <th scope="col" class="px-6 py-3 text-start">
            <div class="flex items-center gap-x-2">
              <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                Created
              </span>
            </div>
          </th>

          <th scope="col" class="px-6 py-3 text-end"></th>
        </tr>
      </thead>

      <tbody class="divide-y divide-gray-200">
          @isset($categories)
              @foreach ($categories as $category)
              <tr>
                    <td class="h-px w-px whitespace-nowrap">
                        <span class="ps-6 py-3">{{ $loop->iteration }}.</span>
                    </td>
                    <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-3">
                            <span class="text-sm text-gray-600">{{ $category->name }}</span>
                        </div>
                    </td>
                    <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-3">
                            <span class="text-sm text-gray-600">{{ $category->slug }}</span>
                        </div>
                    </div>
                    </td>
                    <td class="h-px w-px whitespace-nowrap">
                    <div class="px-6 py-3">
                        <span class="text-sm text-gray-600">{{ $category->created_at }}</span>
                    </div>
                    </td>
                    <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                            <div class="flex items-center gap-2">
                                <button type="button" class="" @click="$dispatch('dispatch-category-table-edit', { id: '{{ $category->id }}' })">
                                    <x-icons.edit class="w-5 h-5" />
                                </button>
                                <button type="button" class="" @click="$dispatch('dispatch-category-table-delete', { id: '{{ $category->id }}', name: '{{ $category->name }}' })">
                                    <x-icons.delete class="w-5 h-5" />
                                </button>
                            </div>
                        </div>
                    </td>
              </tr>
              @endforeach
          @endisset
      </tbody>
    </table>
    <!-- End Table -->

    <!-- Footer -->
    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
      <select wire:model.live="paginate" class="py-2 px-3 pe-9 block w-20 border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none ">
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="25">25</option>
          <option value="50">50</option>
          <option value="100">100</option>
      </select>
      <div class="w-full">
          {{ $categories->onEachSide(1)->links() }}
      </div>
    </div>
    </div>
    <!-- End Table Section -->
