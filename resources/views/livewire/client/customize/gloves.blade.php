<div class="bg-white w-full h-full">
    <div class="flex flex-col md:flex-row">
      <div class="canvas-wraper w-full md:h-[83vh] h-[40vh] flex items-center justify-center overflow-hidden">
        <figure class="relative">
            {{-- <img src="/builder/dream-gloves-1.png" class="md:h-[85vh] h-[40vh] object-contain"> --}}
            <div class="relative">
                <div class="carousel max-w-xl flex">
                    <!-- Carousel items -->
                    <div class="carousel-item relative">
                        <img src="/builder/dream-gloves/Style-1-a.webp" alt="Carousel Image 1" class="md:h-[85vh] h-[40vh] object-contain w-full">
                        <x-builders.dreamglove.bindingone class="absolute bottom-[6.6%] left-[24.4%] h-[40%] w-[44.7%]" :color="$bindingcolor" />
                        <x-builders.dreamglove.wristtwo class="absolute bottom-[11.5%] right-[46.4%] w-[21%]" :color="$wristcolor" />
                        <x-builders.dreamglove.homeplate class="absolute bottom-[27.5%] right-[45.3%] w-[10.6%]" :color="$homeplatecolor" />
                        <x-builders.dreamglove.logoright class="absolute bottom-[28.9%] right-[47.9%] h-[7.8%]" :color="$logocolor" />
                        <x-builders.dreamglove.logoleft class="absolute bottom-[14%] left-[32.8%] h-[9%]" :color="$logocolor" />

                        <span class="font-bold absolute top-[40%] right-[31%] -rotate-[64deg] w-[120px] h-6 overflow-clip" style="color: {{$customTextColor}}">{{$customText}}</span>

                        @if ($custombrand)
                            <img src="{{ $custombrand->temporaryUrl() }}" class="absolute -rotate-[68deg] bottom-[26.5%] right-[45%] w-[62px] object-contain">
                        @endif
                    </div>
                    <div class="carousel-item relative">
                        <img src="/builder/dream-gloves/Style-1-b.webp" alt="Carousel Image 2" class="md:h-[85vh] h-[40vh] object-contain w-full">
                        <x-builders.dreamglove.bindingtwo class="absolute bottom-[3.6%] left-[33.5%] h-[20%] w-[23%]" :color="$bindingcolor" />
                        <x-builders.dreamglove.bindingthree class="absolute bottom-[14%] left-[14.8%] h-[20.5%] w-[60%]" :color="$bindingcolor" />
                        <x-builders.dreamglove.fingerpad class="absolute bottom-[34.2%] right-[40.7%] w-[13%]" :color="$fingerpadcolor" />
                        <x-builders.dreamglove.text class="absolute top-[24%] right-[40.4%] h-[22%]" :color="$textcolor" />
                        <x-builders.dreamglove.wristone class="absolute bottom-[12%] left-[30%] h-[16%]" :color="$wristcolor" />
                        <x-builders.dreamglove.logotop class="absolute bottom-[13.3%] left-[41.9%] h-[10%]" :color="$logocolor" />
                    </div>
                    <div class="carousel-item relative">
                        <img src="/builder/dream-gloves/Style-1-c.webp" alt="Carousel Image 3" class="md:h-[85vh] h-[40vh] object-contain w-full">
                    </div>
                </div>

                <!-- Carousel controls -->
                <div class="absolute inset-y-0 left-0 flex items-center justify-start pl-4">
                    <button
                        class="carousel-control-prev bg-gray-800 hover:bg-gray-700 text-white rounded-full p-2 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center justify-end pr-4">
                    <button
                        class="carousel-control-next bg-gray-800 hover:bg-gray-700 text-white rounded-full p-2 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>
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
                            <div class="w-full field-group border p-4 rounded-xl">
                                <h3>Custom Text <small>(maximum 15 characters)</small></h3>
                                <div class="flex w-full items-center justify-center gap-5">
                                    <x-input wire:model.live='customText' maxlength="15" class="w-full" />
                                    <input type="color" wire:model.live="customTextColor" class="h-10 w-24">
                                </div>
                            </div>

                            <div class="w-full field-group border p-4 rounded-xl">
                                <h3>Custom Flag</h3>
                                <input type="file" wire:model="custombrand">
                            </div>

                            {{-- Leather Option --}}
                            <div class="relative field-group border p-4 rounded-xl">
                                <fieldset x-data="{leather: null}">
                                    <legend>Leather Option</legend>
                                    <div class="mt-4 grid grid-cols-3 gap-3">
                                        <label for="lite"
                                            class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                            :aria-checked="leather == 's'"
                                            :class="leather == 's' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                            <input x-model="leather" id="lite" type="radio" name="leather-choice" value="s" class="sr-only" aria-labelledby="leather-choice-0-label">
                                            <p id="leather-choice-0-label">
                                            Lite
                                            </p>
                                        </label>

                                        <label for="classic"
                                            class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                            :aria-checked="leather == 's'"
                                            :class="leather == 's' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                            <input x-model="leather" id="classic" type="radio" name="leather-choice" value="s" class="sr-only" aria-labelledby="leather-choice-0-label">
                                            <p id="leather-choice-0-label">
                                            Classic (Steerhide)
                                            </p>
                                        </label>

                                        <label for="premier"
                                            class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium sm:flex-1 cursor-pointer focus:outline-none checked:bg-indigo-600 checked:border-transparent checked:text-white checked:hover:bg-indigo-700"
                                            :aria-checked="leather == 'm'"
                                            :class="leather == 'm' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                            <input x-model="leather" id="premier" type="radio" name="leather-choice" value="m" class="sr-only"
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
                        {{-- Binding Color --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Binding-One Color</h3>
                            <div class="grid grid-cols-5 gap-3">
                                @foreach ($colors as $color)
                                    <button class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindingcolor', '{{$color}}')">
                                        <span class="h-12 w-full rounded-lg shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        {{-- FingerPad Color --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Finger Pad</h3>
                            <div class="grid grid-cols-5 gap-3">
                                @foreach ($colors as $color)
                                    <button class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('fingerpadcolor', '{{$color}}')">
                                        <span class="h-12 w-full rounded-lg shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>
                        {{-- homeplatecolor Color --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Home Plate</h3>
                            <div class="grid grid-cols-5 gap-3">
                                @foreach ($colors as $color)
                                    <button class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('homeplatecolor', '{{$color}}')">
                                        <span class="h-12 w-full rounded-lg shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>
                        {{-- logo color Color --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Logo</h3>
                            <div class="grid grid-cols-5 gap-3">
                                @foreach ($colors as $color)
                                    <button class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('logocolor', '{{$color}}')">
                                        <span class="h-12 w-full rounded-lg shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>
                        {{-- Text Color --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Text Color</h3>
                            <div class="grid grid-cols-5 gap-3">
                                @foreach ($colors as $color)
                                    <button class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('textcolor', '{{$color}}')">
                                        <span class="h-12 w-full rounded-lg shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
                                    </button>
                                @endforeach
                            </div>
                        </div>
                        {{-- wristcolor --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Wrist</h3>
                            <div class="grid grid-cols-5 gap-3">
                                @foreach ($colors as $color)
                                    <button class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '{{$color}}')">
                                        <span class="h-12 w-full rounded-lg shadow-xl border flex items-center justify-center" style="background: {{$color}}"></span>
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

<script>
    const carousel = document.querySelector('.carousel');
    const prevButton = document.querySelector('.carousel-control-prev');
    const nextButton = document.querySelector('.carousel-control-next');

    prevButton.addEventListener('click', () => {
        carousel.scrollBy({
            left: -carousel.offsetWidth,
            behavior: 'smooth'
        });
    });

    nextButton.addEventListener('click', () => {
        carousel.scrollBy({
            left: carousel.offsetWidth,
            behavior: 'smooth'
        });
    });
</script>
