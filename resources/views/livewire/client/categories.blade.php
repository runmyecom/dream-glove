<div>
    <nav class="flex justify-center">

        <ul class="flex flex-wrap items-center font-medium text-sm">
            <li
                class="p-4 lg:px-8 relative flex items-center space-x-1"
                x-data="{ open: false }"
                @mouseenter="open = true"
                @mouseleave="open = false"
            >
                @if ($categories)
                @foreach ($categories as $category)
                    <a
                        class="text-slate-800 hover:text-slate-900"
                        href="#0"
                        :aria-expanded="open"
                    >{{ $category->name }}</a>
                    <button
                        class="shrink-0 p-1"
                        :aria-expanded="open"
                        @click.prevent="open = !open"
                    >
                        <span class="sr-only">Show submenu for "Flyout Menu"</span>
                        <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                            <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
                        </svg>
                    </button>
                    <!-- 2nd level menu -->
                    <ul
                        class="origin-top-right absolute top-full left-1/2 -translate-x-1/2 min-w-[240px] bg-white border border-slate-200 p-2 rounded-lg shadow-xl [&[x-cloak]]:hidden"
                        x-show="open"
                        x-transition:enter="transition ease-out duration-200 transform"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-out duration-200"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        x-cloak
                        @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)"
                    >
                        <li>
                            <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                                <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                                    <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="9" height="12">
                                        <path d="M8.724.053A.5.5 0 0 0 8.2.1L4.333 3H1.5A1.5 1.5 0 0 0 0 4.5v3A1.5 1.5 0 0 0 1.5 9h2.833L8.2 11.9a.5.5 0 0 0 .8-.4V.5a.5.5 0 0 0-.276-.447Z" />
                                    </svg>
                                </div>
                                <span class="whitespace-nowrap">Priority Ratings</span>
                            </a>
                        </li>
                        <li>
                            <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                                <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                                    <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                        <path d="M11.953 4.29a.5.5 0 0 0-.454-.292H6.14L6.984.62A.5.5 0 0 0 6.12.173l-6 7a.5.5 0 0 0 .379.825h5.359l-.844 3.38a.5.5 0 0 0 .864.445l6-7a.5.5 0 0 0 .075-.534Z" />
                                    </svg>
                                </div>
                                <span class="whitespace-nowrap">Insights</span>
                            </a>
                        </li>
                        <li>
                            <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                                <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                                    <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                        <path d="M6 0a6 6 0 1 0 0 12A6 6 0 0 0 6 0ZM2 6a4 4 0 0 1 4-4v8a4 4 0 0 1-4-4Z" />
                                    </svg>
                                </div>
                                <span class="whitespace-nowrap">Item Mirror</span>
                            </a>
                        </li>
                        <li>
                            <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                                <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                                    <svg class="fill-indigo-500" xmlns="http://www.w3.org/2000/svg" width="11" height="11">
                                        <path d="M10.866.134a.458.458 0 0 0-.481-.106L.302 3.695a.458.458 0 0 0-.014.856l4.4 1.76 1.76 4.4c.07.175.24.29.427.29h.007a.458.458 0 0 0 .424-.302L10.973.615a.458.458 0 0 0-.107-.48Z" />
                                    </svg>
                                </div>
                                <span class="whitespace-nowrap">Support Center</span>
                            </a>
                        </li>
                    </ul>
                @endforeach
                @endif
            </li>
        </ul>

    </nav>

</div>


