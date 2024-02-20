@props(['category'])

<div x-data="{ drop_ : false }">
    <button
        class="text-zinc-800 rounded px-3 py-1 text-sm"
        x-on:click="drop_ = ! drop_"
    >{{ $category->name }}</button>
    <div class="relative">
        <div
            class="bg-white shadow rounded-md p-3 min-w-[220px] top-1 w-full absolute z-10 -right-[185px]"
            x-show="drop_"
            x-cloak
            @click.away="drop_ = false" x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95">
            <ul class="[&>li]:text-gray-900 [&>li]:text-sm [&>li]:cursor-pointer [&>li]:px-2 [&>li]:py-1 [&>li]:rounded-md [&>li]:transition-all hover:[&>li]:bg-gray-50 active:[&>li]:bg-gray-50 active:[&>li]:scale-[0.99]">
                @foreach ($category->children as $child)
                    <li><x-category-item :category="$child" /></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
