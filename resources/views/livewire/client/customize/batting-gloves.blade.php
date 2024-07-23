<div class="bg-white w-full h-full">
    <div class="flex flex-col md:flex-row">
      <div class="canvas-wraper w-full md:h-[83vh] h-[40vh] flex items-center justify-center overflow-hidden">
        <figure class="relative">
            <img src="/builder/bating-gloves.png" class="w-full h-full object-contain">

            <x-builders.battinglove.palm class="absolute top-[4%] left-[2.8%] w-[96%]" :color="$palmcolor" />
            <x-builders.battinglove.leather class="absolute top-[4%] left-[3.2%] h-[70%] object-contain" :color="$leathercolor" />
            <x-builders.battinglove.mesh class="absolute top-[3.5%] left-[0.4%] h-[91%] w-[81%] object-contain" :color="$meshcolor" />
            <x-builders.battinglove.binding class="absolute top-[14.7%] left-[10.9%] w-[34%] object-contain" :color="$binding" />
            <x-builders.battinglove.wristband class="absolute bottom-[7.1%] left-[15.6%] w-[61%] object-contain" :color="$wristbandcolor" />
            <x-builders.battinglove.strap class="absolute bottom-[9.6%] left-[16.5%] w-[20.2%] object-contain" :color="$strap" />
            <x-builders.battinglove.strapbinding class="absolute bottom-[7.4%] left-[14.4%] w-[22.3%] object-contain" :color="$strapbinding" />
            <x-builders.battinglove.logooutline class="absolute bottom-[8.9%] left-[1.5%] h-[38.8%] w-[88%] object-contain" :color="$logooutline" />
            <x-builders.battinglove.toplogo class="absolute bottom-[33.5%] left-[23.2%] h-[12.8%] object-contain" :color="$toplogocolor" />
            <x-builders.battinglove.bottomlogo class="absolute bottom-[11%] left-[26%] h-[10%] object-contain" :color="$bottomlogocolor" />
            <x-builders.battinglove.rightlogo class="absolute bottom-[10%] right-[32%] h-[7%] object-contain" :color="$rightlogocolor" />
            <x-builders.battinglove.patches class="absolute bottom-[25.3%] right-[21.1%] w-[28.3%] object-contain" :color="$patches" />
            <x-builders.battinglove.stiching class="absolute top-[14%] left-[3.4%] w-[56%] object-contain" :color="$stiching" />

            {{-- Right Custom Text --}}
            @if ($righttextbox == true)
                <div class="right-text absolute bottom-[9.6%] left-[16.5%] w-[20.2%] object-contain">
                    <x-builders.battinglove.strap class="" :color="$righttextbg" />
                    <span class="absolute bottom-5 left-5 text-sm font-bold" style="color: {{$rightTextColor}}">{{$righttext}}</span>
                </div>
            @endif

            {{-- Left Custom Text --}}
            @if ($lefttextbox == true)
                <div class="right-text absolute bottom-[7.1%] left-[15.6%] w-[61%] object-contain">
                    <x-builders.battinglove.wristband class="" :color="$lefttextbg" />
                    <span class="absolute bottom-6 right-5 text-sm font-bold" style="color: {{$leftTextColor}}">{{$lefttext}}</span>
                </div>
            @endif

        </figure>
      </div>
      <!-- toolbar -->
      <div class="w-full h-[80vh] overflow-y-auto p-3">
          <h3 class="mb-6 text-gray-900 text-2xl font-bold mt-5">Customize Options</h3>
          <div x-data="{ activeTab: 2 }">

            <!-- Buttons -->
            <div class="flex">
                <div
                    role="tablist"
                    class="max-[480px]:max-w-[180px] inline-flex flex-wrap justify-center bg-slate-200 rounded-[20px] p-1 mb-4"
                    @keydown.right.prevent.stop="$focus.wrap().next()"
                    @keydown.left.prevent.stop="$focus.wrap().prev()"
                    @keydown.home.prevent.stop="$focus.first()"
                    @keydown.end.prevent.stop="$focus.last()"
                >
                    <!-- Button #1 -->
                    <button
                        id="tab-1"
                        class="flex-1 text-sm font-medium h-8 px-4 rounded-2xl whitespace-nowrap focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
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
                        class="flex-1 text-sm font-medium h-8 px-4 rounded-2xl whitespace-nowrap focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
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

                            {{-- Choose Model --}}
                            <div class="relative field-group border p-4 rounded-xl">
                                <fieldset x-data="{leather: null}">
                                    <legend>Choose Model</legend>
                                    <div class="mt-4 grid grid-cols-2 gap-3">
                                      <label for="small"
                                        class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                        :aria-checked="leather == 's'"
                                        :class="leather == 's' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                        <input x-model="leather" id="small" type="radio" name="leather-choice" value="s" class="sr-only" aria-labelledby="leather-choice-0-label">
                                        <p id="leather-choice-0-label">
                                          As
                                        </p>
                                      </label>

                                      <label for="medium"
                                        class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                        :aria-checked="leather == 'm'"
                                        :class="leather == 'm' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                        <input x-model="leather" id="medium" type="radio" name="leather-choice" value="m" class="sr-only"
                                          aria-labelledby="leather-choice-0-label">
                                        <p id="leather-choice-0-label">
                                          Wave
                                        </p>
                                      </label>
                                    </div>
                                  </fieldset>
                            </div>

                            {{-- Sport --}}
                            <div class="relative field-group border p-4 rounded-xl">
                                <fieldset x-data="{sport: null}">
                                    <legend>Sport</legend>
                                    <div class="mt-4 grid grid-cols-2 gap-3">
                                      <label for="softball"
                                        class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                        :aria-checked="sport == 'softball'"
                                        :class="sport == 'softball' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                        <input x-model="sport" id="softball" type="radio" name="sport-choice" value="softball" class="sr-only" aria-labelledby="sport-choice-0-label">
                                        <p id="sport-choice-0-label">
                                          Softball
                                        </p>
                                      </label>

                                      <label for="baseball"
                                        class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                        :aria-checked="sport == 'baseball'"
                                        :class="sport == 'baseball' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                        <input x-model="sport" id="baseball" type="radio" name="sport-choice" value="baseball" class="sr-only"
                                          aria-labelledby="sport-choice-0-label">
                                        <p id="sport-choice-0-label">
                                          Baseball
                                        </p>
                                      </label>
                                    </div>
                                  </fieldset>
                            </div>

                            {{-- Youth Size --}}
                            <div class="relative field-group border p-4 rounded-xl">
                                <fieldset x-data="{sport: null}">
                                    <legend>Youth Size</legend>
                                    <div class="mt-4 grid grid-cols-2 gap-3">
                                      <label for="softball"
                                        class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                        :aria-checked="sport == 'softball'"
                                        :class="sport == 'softball' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                        <input x-model="sport" id="softball" type="radio" name="sport-choice" value="softball" class="sr-only" aria-labelledby="sport-choice-0-label">
                                        <p id="sport-choice-0-label">
                                          Yes
                                        </p>
                                      </label>

                                      <label for="baseball"
                                        class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                        :aria-checked="sport == 'baseball'"
                                        :class="sport == 'baseball' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                        <input x-model="sport" id="baseball" type="radio" name="sport-choice" value="baseball" class="sr-only"
                                          aria-labelledby="sport-choice-0-label">
                                        <p id="sport-choice-0-label">
                                          No
                                        </p>
                                      </label>
                                    </div>
                                  </fieldset>
                            </div>

                            {{-- Size First Base --}}
                            <div class="relative field-group border p-4 rounded-xl">
                                <fieldset x-data="{sport: null}">
                                    <legend>Size First Base</legend>
                                    <div class="mt-4 grid grid-cols-3 gap-3">
                                      <label for="softball"
                                        class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                        :aria-checked="sport == 'softball'"
                                        :class="sport == 'softball' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                        <input x-model="sport" id="softball" type="radio" name="sport-choice" value="softball" class="sr-only" aria-labelledby="sport-choice-0-label">
                                        <p id="sport-choice-0-label">
                                          12.25
                                        </p>
                                      </label>

                                      <label for="baseball"
                                        class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                        :aria-checked="sport == 'baseball'"
                                        :class="sport == 'baseball' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                        <input x-model="sport" id="baseball" type="radio" name="sport-choice" value="baseball" class="sr-only"
                                          aria-labelledby="sport-choice-0-label">
                                        <p id="sport-choice-0-label">
                                          12.5
                                        </p>
                                      </label>

                                      <label for="baseball"
                                        class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                        :aria-checked="sport == 'baseball'"
                                        :class="sport == 'baseball' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                        <input x-model="sport" id="baseball" type="radio" name="sport-choice" value="baseball" class="sr-only"
                                          aria-labelledby="sport-choice-0-label">
                                        <p id="sport-choice-0-label">
                                          12.75
                                        </p>
                                      </label>

                                      <label for="baseball"
                                        class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                        :aria-checked="sport == 'baseball'"
                                        :class="sport == 'baseball' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                        <input x-model="sport" id="baseball" type="radio" name="sport-choice" value="baseball" class="sr-only"
                                          aria-labelledby="sport-choice-0-label">
                                        <p id="sport-choice-0-label">
                                          13
                                        </p>
                                      </label>

                                      <label for="baseball"
                                        class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                        :aria-checked="sport == 'baseball'"
                                        :class="sport == 'baseball' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                        <input x-model="sport" id="baseball" type="radio" name="sport-choice" value="baseball" class="sr-only"
                                          aria-labelledby="sport-choice-0-label">
                                        <p id="sport-choice-0-label">
                                          13.25
                                        </p>
                                      </label>

                                      <label for="baseball"
                                        class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                        :aria-checked="sport == 'baseball'"
                                        :class="sport == 'baseball' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                        <input x-model="sport" id="baseball" type="radio" name="sport-choice" value="baseball" class="sr-only"
                                          aria-labelledby="sport-choice-0-label">
                                        <p id="sport-choice-0-label">
                                          13.5
                                        </p>
                                      </label>
                                    </div>
                                  </fieldset>
                            </div>
                        </div>
                    </article>

                    <!-- Panel #2 -->
                    <article
                        id="tabpanel-2"
                        class="w-full bg-white rounded-2xl shadow-xl min-[480px]:flex items-stretch focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 flex flex-col"
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
                        {{-- Palm Color --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Palm Color</h3>
                            <div class="grid grid-cols-10 gap-2">
                                @foreach ($colors as $color)
                                    <button class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('palmcolor', '{{$color}}')">
                                        <span class="h-14 w-full rounded-full shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        {{-- Palm Color --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Leather Color</h3>
                            <div class="grid grid-cols-10 gap-2">
                                @foreach ($colors as $color)
                                    <button class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('leathercolor', '{{$color}}')">
                                        <span class="h-14 w-full rounded-full shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>
                        {{-- Mesh Color --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Mesh Color</h3>
                            <div class="grid grid-cols-10 gap-2">
                                @foreach ($colors as $color)
                                    <button class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('meshcolor', '{{$color}}')">
                                        <span class="h-14 w-full rounded-full shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        {{-- Binding --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Binding</h3>
                            <div class="grid grid-cols-10 gap-2">
                                @foreach ($colors as $color)
                                    <button class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('binding', '{{$color}}')">
                                        <span class="h-14 w-full rounded-full shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        {{-- WristBand Color --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Wrist Band Color</h3>
                            <div class="grid grid-cols-10 gap-2">
                                @foreach ($colors as $color)
                                    <button class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristbandcolor', '{{$color}}'), $wire.set('lefttextbg', '{{$color}}')">
                                        <span class="h-14 w-full rounded-full shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        {{-- Strap --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Strap</h3>
                            <div class="grid grid-cols-10 gap-2">
                                @foreach ($colors as $color)
                                    <button
                                        class="flex flex-col cursor-pointer items-center justify-center"
                                        x-on:click="$wire.set('strap', '{{$color}}'), $wire.set('righttextbg', '{{$color}}')"
                                    >
                                        <span class="h-14 w-full rounded-full shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        {{-- Strap Binding --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Strap Binding</h3>
                            <div class="grid grid-cols-10 gap-2">
                                @foreach ($colors as $color)
                                    <button
                                        class="flex flex-col cursor-pointer items-center justify-center"
                                        x-on:click="$wire.set('strapbinding', '{{$color}}')"
                                    >
                                        <span class="h-14 w-full rounded-full shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        {{-- Logo Color --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Logo Color</h3>
                            <div class="grid grid-cols-10 gap-2">
                                @foreach ($colors as $color)
                                    <button
                                        class="flex flex-col cursor-pointer items-center justify-center"
                                        x-on:click="$wire.set('toplogocolor', '{{$color}}'), $wire.set('bottomlogocolor', '{{$color}}'), $wire.set('rightlogocolor', '{{$color}}')"
                                    >
                                        <span class="h-14 w-full rounded-full shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        {{-- Logo Outline --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Logo Outline</h3>
                            <div class="grid grid-cols-10 gap-2">
                                @foreach ($colors as $color)
                                    <button
                                        class="flex flex-col cursor-pointer items-center justify-center"
                                        x-on:click="$wire.set('logooutline', '{{$color}}')"
                                    >
                                        <span class="h-14 w-full rounded-full shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        {{-- Patches --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Patches</h3>
                            <div class="grid grid-cols-10 gap-2">
                                @foreach ($colors as $color)
                                    <button
                                        class="flex flex-col cursor-pointer items-center justify-center"
                                        x-on:click="$wire.set('patches', '{{$color}}')"
                                    >
                                        <span class="h-14 w-full rounded-full shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        {{-- Stitches --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Stitches</h3>
                            <div class="grid grid-cols-10 gap-2">
                                @foreach ($colors as $color)
                                    <button
                                        class="flex flex-col cursor-pointer items-center justify-center"
                                        x-on:click="$wire.set('stiching', '{{$color}}')"
                                    >
                                        <span class="h-14 w-full rounded-full shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        {{-- Right Starp Custom Text --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Add right starp text</h3>
                            <div class="grid grid-cols-2 items-center gap-6 my-4">
                                <div>
                                    <input type="checkbox" id="hs-basic-usage" class="relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 before:inline-block before:size-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200" wire:model.live='righttextbox'>
                                    <label for="hs-basic-usage" class="sr-only">switch</label>
                                </div>
                                <div class="w-full">
                                    <h3>Text(7|12)</h3>
                                    <input type="text" class="w-full p-2" placeholder="Enter text" wire:model.live="righttext" maxlength="12" minlength="7" />
                                </div>
                            </div>

                            <h4 class="font-bold mt-6">Text Color</h4>
                            <div class="grid grid-cols-10 gap-2">
                                @foreach ($colors as $color)
                                    <button
                                        class="flex flex-col cursor-pointer items-center justify-center"
                                        x-on:click="$wire.set('rightTextColor', '{{$color}}')"
                                    >
                                        <span class="h-14 w-full rounded-full shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        {{-- Left Starp Custom Text --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Add Left starp text</h3>
                            <div class="grid grid-cols-2 items-center gap-6 my-4">
                                <div>
                                    <input type="checkbox" id="hs-basic-usage" class="relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 before:inline-block before:size-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200" wire:model.live='lefttextbox'>
                                    <label for="hs-basic-usage" class="sr-only">switch</label>
                                </div>
                                <div class="w-full">
                                    <h3>Text(7|12)</h3>
                                    <input type="text" class="w-full p-2" placeholder="Enter text" wire:model.live="lefttext" maxlength="12" minlength="7" />
                                </div>
                            </div>

                            <h4 class="font-bold mt-6">Text Color</h4>
                            <div class="grid grid-cols-10 gap-2">
                                @foreach ($colors as $color)
                                    <button
                                        class="flex flex-col cursor-pointer items-center justify-center"
                                        x-on:click="$wire.set('leftTextColor', '{{$color}}')"
                                    >
                                        <span class="h-14 w-full rounded-full shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
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
