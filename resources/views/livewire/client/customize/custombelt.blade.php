<div class="bg-white w-full h-full">
    <div class="flex flex-col md:flex-row">
      <div class="canvas-wraper w-full md:h-[83vh] h-[40vh] flex items-center justify-center overflow-hidden">
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

            {{-- Custom Text --}}
            @if ($customtextbox == true)
                <div class="right-text absolute top-[47%] md:top-[46%] left-[36%] w-[26%] object-contain">
                    <span class="absolute bottom-4 left-4 text-[1.5vh] md:text-[3vh] font-bold" style="color: {{$customTextColor}}">{{$customtext}}</span>
                </div>
            @endif
        </figure>
      </div>
      <!-- toolbar -->
      <div class="w-full h-[80vh] overflow-y-auto p-3">
          <h3 class="mb-6 text-gray-900 text-2xl font-bold mt-5">Customize Options</h3>
          <div x-data="{ activeTab: 1 }">

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

                            {{-- Leather Option --}}
                            <div class="relative field-group border p-4 rounded-xl">
                                <fieldset x-data="{leather: null}">
                                    <legend>Leather Option</legend>
                                    <div class="mt-4 grid grid-cols-2 gap-3">
                                      <label for="small"
                                        class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                        :aria-checked="leather == 's'"
                                        :class="leather == 's' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                        <input x-model="leather" id="small" type="radio" name="leather-choice" value="s" class="sr-only" aria-labelledby="leather-choice-0-label">
                                        <p id="leather-choice-0-label">
                                          Classic (Steerhide)
                                        </p>
                                      </label>

                                      <label for="medium"
                                        class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                        :aria-checked="leather == 'm'"
                                        :class="leather == 'm' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                        <input x-model="leather" id="medium" type="radio" name="leather-choice" value="m" class="sr-only"
                                          aria-labelledby="leather-choice-0-label">
                                        <p id="leather-choice-0-label">
                                          Premier (Kip Leather)
                                        </p>
                                      </label>
                                    </div>
                                  </fieldset>
                            </div>

                            {{-- Throwing Hand --}}
                            <div class="relative field-group border p-4 rounded-xl">
                                <fieldset x-data="{hand: null}">
                                    <legend>Throwing Hand</legend>
                                    <div class="mt-4 grid grid-cols-2 gap-3">
                                      <label for="left"
                                        class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                        :aria-checked="hand == 's'"
                                        :class="hand == 's' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                        <input x-model="hand" id="left" type="radio" name="hand-choice" value="s" class="sr-only" aria-labelledby="hand-choice-0-label">
                                        <p id="hand-choice-0-label">
                                          Left
                                        </p>
                                      </label>

                                      <label for="right"
                                        class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                        :aria-checked="hand == 'm'"
                                        :class="hand == 'm' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                        <input x-model="hand" id="right" type="radio" name="hand-choice" value="m" class="sr-only"
                                          aria-labelledby="hand-choice-0-label">
                                        <p id="hand-choice-0-label">
                                          Right
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

                            {{-- Position --}}
                            <div class="relative field-group border p-4 rounded-xl">
                                <fieldset x-data="{position: null}">
                                    <legend>Position</legend>
                                    <div class="mt-4 grid grid-cols-3 gap-3">
                                      <label for="softball"
                                        class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                        :aria-checked="position == 'softball'"
                                        :class="position == 'softball' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                        <input x-model="position" id="softball" type="radio" name="position-choice" value="softball" class="sr-only" aria-labelledby="position-choice-0-label">
                                        <p id="position-choice-0-label">
                                          First Base Mitt
                                        </p>
                                      </label>

                                      <label for="baseball"
                                        class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                        :aria-checked="position == 'baseball'"
                                        :class="position == 'baseball' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                        <input x-model="position" id="baseball" type="radio" name="position-choice" value="baseball" class="sr-only"
                                          aria-labelledby="position-choice-0-label">
                                        <p id="position-choice-0-label">
                                          Catcher Mitt
                                        </p>
                                      </label>

                                      <label for="baseball"
                                        class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                        :aria-checked="position == 'baseball'"
                                        :class="position == 'baseball' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                        <input x-model="position" id="baseball" type="radio" name="position-choice" value="baseball" class="sr-only"
                                          aria-labelledby="position-choice-0-label">
                                        <p id="position-choice-0-label">
                                          Infield/Outfield Gloves
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
                        {{-- Belt Color --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Belt Color</h3>
                            <div class="grid grid-cols-5 gap-3">
                                @foreach ($colors as $color)
                                    <button class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('beltcolor', '{{$color}}')">
                                        <span class="h-12 w-full rounded-lg shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        {{-- Loop Color --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Loop Color</h3>
                            <div class="grid grid-cols-5 gap-3">
                                @foreach ($colors as $color)
                                    <button class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('loopcolor', '{{$color}}')">
                                        <span class="h-12 w-full rounded-lg shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>
                        {{-- Stich Color --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Stich Color</h3>
                            <div class="grid grid-cols-5 gap-3">
                                @foreach ($colors as $color)
                                    <button class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('stichcolor', '{{$color}}')">
                                        <span class="h-12 w-full rounded-lg shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>
                        {{-- Logo color --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Logo Color</h3>
                            <div class="grid grid-cols-5 gap-3">
                                @foreach ($colors as $color)
                                    <button class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('logocolor', '{{$color}}')">
                                        <span class="h-12 w-full rounded-lg shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        {{-- Right Starp Custom Text --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Add right starp text</h3>
                            <div class="grid grid-cols-2 items-center gap-6 my-4">
                                <div>
                                    <input type="checkbox" id="hs-basic-usage" class="relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 before:inline-block before:size-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200" wire:model.live='customtextbox'>
                                    <label for="hs-basic-usage" class="sr-only">switch</label>
                                </div>
                                <div class="w-full">
                                    <h3>Text(7|12)</h3>
                                    <input type="text" class="w-full p-2" placeholder="Enter text" wire:model.live="customtext" maxlength="12" minlength="7" />
                                </div>
                            </div>

                            <h4 class="font-bold mt-6">Text Color</h4>
                            <div class="grid md:grid-cols-10 grid-cols-5 gap-2">
                                @foreach ($colors as $color)
                                    <button
                                        class="flex flex-col cursor-pointer items-center justify-center"
                                        x-on:click="$wire.set('customTextColor', '{{$color}}')"
                                    >
                                        <span class="md:h-14 h-10 w-full rounded-full shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
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
