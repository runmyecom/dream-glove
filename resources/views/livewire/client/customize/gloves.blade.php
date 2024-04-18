<div class="bg-white w-full h-full">
    <div class="grid md:grid-cols-2">
      <div class="canvas-wraper w-full md:h-[83vh] h-[40vh] flex items-center justify-center overflow-hidden">
        <figure class="relative h-full">
            <div class="carousel h-full">
                <!-- Carousel items -->
                <div class="carousel-item relative h-full">
                    <img src="/builder/dream-gloves/Style-1-a.webp" alt="Carousel Image 1" class="w-full h-full object-contain">

                    <x-builders.dreamglove.bindingone class="absolute bottom-[10.2%] left-[13%] w-[65%]" :color="$bindingcolor" />
                    <x-builders.dreamglove.wristtwo class="absolute bottom-[11.5%] right-[43.7%] w-[31.5%]" :color="$wristcolor" />
                    <x-builders.dreamglove.homeplate class="absolute bottom-[27.6%] left-[42%] w-[15%]" :color="$homeplatecolor" />
                    <x-builders.dreamglove.logoright class="absolute bottom-[29%] right-[47.3%] w-[9.5%] z-10" :color="$logocolor" />
                    <x-builders.dreamglove.logoleft class="absolute bottom-[14%] left-[25%] w-[9.6%] z-10" :color="$logocolor" />

                    <div class="font-bold absolute top-[40.5%] right-[19.8%] -rotate-[62deg] h-[4%] text-[0.55rem] md:text-[1rem] overflow-clip w-[34%] flex items-center justify-center" style="color: {{$customTextColor}};text-transform: {{$customTextTransform}}">{{$customText}}</div>

                    @if ($custombrand)
                        <img src="{{ $custombrand->temporaryUrl() }}" class="absolute -rotate-[68deg] bottom-[25.5%] right-[40.6%] w-[80px] object-contain">
                    @endif
                </div>
                <div class="carousel-item relative h-full">
                    <img src="/builder/dream-gloves/Style-1-b.webp" alt="Carousel Image 2" class="w-full h-full object-contain">

                    <x-builders.dreamglove.bindingtwo class="absolute bottom-[11%] left-[24.8%] w-[35%]" :color="$bindingcolor" />
                    <x-builders.dreamglove.bindingthree class="absolute bottom-[14.3%] left-[17.8%] w-[48.4%]" :color="$bindingcolor" />
                    <x-builders.dreamglove.fingerpad class="absolute bottom-[34.2%] right-[36.5%] w-[18.8%]" :color="$fingerpadcolor" />
                    <x-builders.dreamglove.text class="absolute top-[24%] right-[35.9%] h-[22%]" :color="$textcolor" />
                    <x-builders.dreamglove.wristone class="absolute bottom-[12.3%] left-[21.4%] w-[43.5%]" :color="$wristcolor" />
                    <x-builders.dreamglove.logotop class="absolute bottom-[13.3%] left-[38.2%] h-[10%] z-10" :color="$logocolor" />
                </div>
                <div class="carousel-item relative">
                    <img src="/builder/dream-gloves/Style-1-c.webp" alt="Carousel Image 3" class="md:h-[85vh] h-[40vh] object-contain w-full">
                </div>
            </div>

            <!-- Carousel controls -->
            {{-- <div class="absolute inset-y-0 -left-16 flex items-center justify-start pl-4">
                <button
                    class="carousel-control-prev bg-gray-800/50 hover:bg-gray-700 text-white rounded-full p-2 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
            </div>
            <div class="absolute inset-y-0 -right-16 flex items-center justify-end pr-4">
                <button
                    class="carousel-control-next bg-gray-800/50 hover:bg-gray-700 text-white rounded-full p-2 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div> --}}
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
                                <div class="flex w-full items-center justify-center gap-2">
                                    <x-input wire:model.live='customText' maxlength="15" class="w-full" />
                                    <button class="w-16 border rounded h-10 flex items-center justify-center" wire:click="$set('customTextTransform', 'uppercase' )">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"><path fill="currentColor" d="M17.5 18q-.425 0-.712-.288T16.5 17v-5.2l-.9.9q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7l2.6-2.6q.3-.3.7-.3t.7.3l2.6 2.6q.275.275.275.7t-.275.7t-.7.275t-.7-.275l-.9-.9V17q0 .425-.287.713T17.5 18M5.9 15.175l-.8 2.25q-.1.275-.325.425t-.5.15q-.475 0-.737-.387T3.45 16.8L6.9 7.6q.1-.275.35-.437T7.775 7h.675q.275 0 .525.163t.35.437l3.45 9.225q.175.425-.087.8t-.713.375q-.275 0-.512-.162t-.338-.438l-.775-2.225zm.575-1.6H9.75l-1.625-4.55h-.1z"/></svg>
                                    </button>
                                    <button class="h-10 w-16 bg-black">
                                        <input type="color" wire:model.live="customTextColor" class="h-full">
                                    </button>
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
