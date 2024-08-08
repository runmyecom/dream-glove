<div class="bg-white w-full h-full">
    <div class="flex flex-col md:flex-row">
      <div class="canvas-wraper w-full md:h-[83vh] h-[50vh] flex items-center justify-center overflow-hidden relative">
        <figure class="relative">
            <img src="/builder/belt.png" class="w-full h-full object-contain">

            <x-builders.belt.loop class="absolute top-[40.3%] right-[40%] w-[8.5%] h-[20%]" :color="$loopcolor" />

            <x-builders.belt.beltcolorone class="absolute top-[40.7%] -left-[34.8%] h-[18%] w-full" :color="$beltcolor" />
            <x-builders.belt.beltcolortwo class="absolute top-[45.9%] -left-[9.17%] h-[14.3%] w-full" :color="$beltcolor" />
            <x-builders.belt.beltcolorthree class="absolute top-[44.9%] left-[26.6%] h-[14.5%] w-full" :color="$beltcolor" />
            <x-builders.belt.beltcolorfour class="absolute top-[42.5%] left-[28.1%] h-[3.2%] w-full" :color="$beltcolor" />

            <x-builders.belt.stich class="absolute bottom-[42.4%] right-[35.4%] w-full h-[15.5%]" :color="$stichcolor" />
            <x-builders.belt.stichtwo class="absolute bottom-[40.2%] right-[9.4%] w-full h-[13.3%]" :color="$stichcolor" />
            <x-builders.belt.stichthree class="absolute bottom-[39.5%] left-[6%] w-full h-[15.3%]" :color="$stichcolor" />
            <x-builders.belt.stichfour class="absolute bottom-[41.2%] left-[26.5%] w-full h-[13%]" :color="$stichcolor" />

            <x-builders.belt.logo class="absolute top-[48%] right-[15.2%] w-[8%]" :color="$logocolor" />

            {{-- Inner Text --}}
            @if ($customtextbox == true)
                <div class="right-text absolute top-[38%] md:top-[39%] left-[32%] md:left-[34%] w-[28%] object-contain text-center">
                    <span class="text-[1.4vh] md:text-[3vh] font-bold" style="color: {{$customTextColor}}; font-family: {{$customTextFont}}">{{$customtext}}</span>
                </div>
            @endif

            {{-- Outer text --}}
            <div class="right-text absolute md:bottom-[47%] bottom-[46%] left-[6.5%] w-[26%] object-contain rotate-[10deg]">
                <span class="text-[1.1vh] md:text-[2.5vh] font-bold" style="color: {{$outerTextColor}}; font-family: {{$outerTextFont}}">{{$outertext}}</span>
            </div>
        </figure>

        <img src="/builder/belt-chart.jpeg" class="absolute bottom-0 md:w-[450px] w-[70vw]" >
      </div>
      <!-- toolbar -->
      <div class="w-full h-[80vh] overflow-y-auto p-3">
          <h3 class="mb-6 text-gray-900 text-2xl font-bold mt-5">Customize Options</h3>
          <div x-data="{ activeTab: 1 }">

            <!-- Buttons -->
            <div class="flex">
                <div
                    role="tablist"
                    class="max-[480px]:max-w-[350px] inline-flex flex-wrap justify-center bg-slate-200 rounded-[20px] p-1 mb-4"
                    @keydown.right.prevent.stop="$focus.wrap().next()"
                    @keydown.left.prevent.stop="$focus.wrap().prev()"
                    @keydown.home.prevent.stop="$focus.first()"
                    @keydown.end.prevent.stop="$focus.last()"
                >
                    <!-- Button #1 -->
                    <button
                        id="tab-1"
                        class="flex-1 text-sm font-medium h-8 px-6 rounded-2xl whitespace-nowrap focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
                        :class="activeTab === 1 ? 'bg-white text-slate-900' : 'text-slate-600 hover:text-slate-900'"
                        :tabindex="activeTab === 1 ? 0 : -1"
                        :aria-selected="activeTab === 1"
                        aria-controls="tabpanel-1"
                        @click="activeTab = 1"
                        @focus="activeTab = 1"
                    >Base Options</button>
                    <!-- Button #2 -->
                    <button
                        id="tab-2"
                        class="flex-1 text-sm font-medium h-8 px-6 rounded-2xl whitespace-nowrap focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
                        :class="activeTab === 2 ? 'bg-white text-slate-900' : 'text-slate-600 hover:text-slate-900'"
                        :tabindex="activeTab === 2 ? 0 : -1"
                        :aria-selected="activeTab === 2"
                        aria-controls="tabpanel-2"
                        @click="activeTab = 2"
                        @focus="activeTab = 2"
                    >Colors</button>
                </div>
            </div>

            <!-- Tab panels -->
            <div class="w-full">
                <div class="relative flex flex-col">

                    <!-- Panel #1 -->
                    <article
                        id="tabpanel-1"
                        class="w-full"
                        role="tabpanel"
                        tabindex="0"
                        aria-labelledby="tab-1"
                        x-show="activeTab === 1"
                        x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 transform order-first"
                        x-transition:enter-start="opacity-0 -translate-y-8"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-300 transform absolute"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-12"
                    >
                        <div class="mb-2 space-y-5">

                            {{-- Belts Size --}}
                            <div class="relative field-group border p-4 rounded-xl">
                                <fieldset x-data="{leather: null}">
                                    <legend>Belts Size</legend>
                                    <div class="mt-4">
                                        <select class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-gray-500 focus:ring-gray-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <option selected="">Choose an option</option>
                                            @foreach ($sizes as $size)
                                                <option value="{{$size}}">{{$size}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                  </fieldset>
                            </div>
                        </div>
                    </article>

                    <!-- Panel #2 -->
                    <article
                        id="tabpanel-2"
                        class="w-full gap-5 min-[480px]:flex items-stretch focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 flex flex-col"
                        role="tabpanel"
                        tabindex="0"
                        aria-labelledby="tab-2"
                        x-show="activeTab === 2"
                        x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 transform order-first"
                        x-transition:enter-start="opacity-0 -translate-y-8"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-300 transform absolute"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-12"
                    >
                        {{-- Belt Color --}}
                        <div class="w-full p-5 bg-white rounded-2xl shadow-xl">
                            <h3 class="border-b mb-3 pb-1">Belt Color</h3>
                            <div class="grid md:grid-cols-10 grid-cols-5 gap-2">
                                @foreach ($colors as $color)
                                    <button class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('beltcolor', '{{$color}}')">
                                        <span class="md:h-12 h-8 w-full rounded-lg shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        {{-- Loop Color --}}
                        <div class="w-full p-5 bg-white rounded-2xl shadow-xl">
                            <h3 class="border-b mb-3 pb-1">Loop Color</h3>
                            <div class="grid md:grid-cols-10 grid-cols-5 gap-2">
                                @foreach ($colors as $color)
                                    <button class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('loopcolor', '{{$color}}')">
                                        <span class="md:h-12 h-8 w-full rounded-lg shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>
                        {{-- Stich Color --}}
                        <div class="w-full p-5 bg-white rounded-2xl shadow-xl">
                            <h3 class="border-b mb-3 pb-1">Stich Color</h3>
                            <div class="grid md:grid-cols-10 grid-cols-5 gap-2">
                                @foreach ($colors as $color)
                                    <button class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('stichcolor', '{{$color}}')">
                                        <span class="md:h-12 h-8 w-full rounded-lg shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>
                        {{-- Logo color --}}
                        <div class="w-full p-5 bg-white rounded-2xl shadow-xl">
                            <h3 class="border-b mb-3 pb-1">Logo Color</h3>
                            <div class="grid md:grid-cols-10 grid-cols-5 gap-2">
                                @foreach ($colors as $color)
                                    <button class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('logocolor', '{{$color}}')">
                                        <span class="md:h-12 h-8 w-full rounded-lg shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        {{-- Outer Text --}}
                        <div class="w-full p-5 bg-white rounded-2xl shadow-xl">
                            <h3 class="border-b mb-3 pb-1">Outer Text</h3>
                            <div class="grid grid-cols-1 items-center gap-6 my-4">
                                <div class="w-full">
                                    <h3>Text(7|12)</h3>
                                    <div class="flex gap-4 items-center">
                                        <input type="text" class="w-full p-2 rounded-lg" placeholder="Enter text" wire:model.live="outertext" maxlength="12" minlength="7" />
                                        <div class="flex items-center gap-2">
                                            <button
                                                class="border border-gray-900 rounded-full h-11 w-11 font-bold text-sm"
                                                x-on:click="$wire.set('outerTextFont', '')"
                                            >Abc</button>
                                            <button
                                                class="border border-gray-900 rounded-full h-11 w-11 font-bold text-sm font-dancing"
                                                x-on:click="$wire.set('outerTextFont', 'Dancing Script')"
                                            >Abc</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Color --}}
                            <h4 class="font-bold mt-6">Outer Text Color</h4>
                            <div class="grid md:grid-cols-10 grid-cols-5 gap-2">
                                @foreach ($colors as $color)
                                    <button
                                        class="flex flex-col cursor-pointer items-center justify-center"
                                        x-on:click="$wire.set('outerTextColor', '{{$color}}')"
                                    >
                                        <span class="md:h-12 h-8 w-full rounded-xl shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        {{-- Inside Text --}}
                        <div class="w-full p-5 bg-white rounded-2xl shadow-xl">
                            <div class="flex items-center justify-between gap-6 border-b mb-3 pb-1">
                                <h3 class="">Add inside text (+$5)</h3>
                                <div class="flex items-center gap-2">
                                    <label class="font-bold">Enable</label>
                                    <input type="checkbox" id="hs-basic-usage" class="relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 before:inline-block before:size-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200" wire:model.live='customtextbox'>
                                    <label for="hs-basic-usage" class="sr-only">switch</label>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 items-center gap-6 my-4">
                                <div class="w-full">
                                    <h3>Text(7|12)</h3>
                                    <div class="flex gap-4 items-center w-full">
                                        <input type="text" class="w-full p-2" placeholder="Enter text" wire:model.live="customtext" maxlength="12" minlength="7" />
                                        <div class="flex items-center gap-2">
                                            <button
                                                class="border border-gray-900 rounded-full h-11 w-11 font-bold text-sm"
                                                x-on:click="$wire.set('customTextFont', '')"
                                            >Abc</button>
                                            <button
                                                class="border border-gray-900 rounded-full h-11 w-11 font-bold text-sm font-dancing"
                                                x-on:click="$wire.set('customTextFont', 'Dancing Script')"
                                            >Abc</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h4 class="font-bold mt-6">Text Color</h4>
                            <div class="grid md:grid-cols-10 grid-cols-5 gap-2">
                                @foreach ($colors as $color)
                                    <button
                                        class="flex flex-col cursor-pointer items-center justify-center"
                                        x-on:click="$wire.set('customTextColor', '{{$color}}')"
                                    >
                                        <span class="md:h-12 h-8 w-full rounded-xl shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                    </article>

                </div>
            </div>

        </div>
      </div>
    </div>
</div>
