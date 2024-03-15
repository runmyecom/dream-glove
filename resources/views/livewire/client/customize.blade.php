<div class="bg-white w-full h-full">
    <div class="flex flex-col md:flex-row gap-12">
      <div class="canvas-wraper w-full md:h-[83vh] h-[40vh] flex items-center justify-center overflow-hidden">
        <figure class="h-full w-full relative">
            <img src="/builder/gloves.png" class="w-full h-full object-contain">
            {{-- <img src="/builder/text.svg" class="absolute top-[26.6vh] left-[13.8vw] w-9"> --}}
            <x-builders.brandtext class="absolute -top-[6px] left-[13.88vw] w-[32px] h-full" :color="$brandtextcolor" />
            <x-builders.bind class="absolute bottom-[10vh] left-[12.7vw] w-[162px]" :color="$bindcolor" />
            <x-builders.laces class="absolute top-[5vh] left-[10.1vw] h-[62vh]" :color="$lacescolor" />
            <x-builders.wrist class="absolute bottom-[7vh] left-[13.6vw] h-[12vh]" :color="$wristcolor" />
            <x-builders.brandlogo class="absolute bottom-[8.5vh] left-[16.7vw] w-[64px]" :color="$brandlogocolor" />
        </figure>
      </div>
      <!-- toolbar -->
      <div class="w-full h-[80vh] overflow-y-auto p-3 border-t">
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
                        {{-- Brand Text Color --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Brand Text</h3>
                            <div class="grid grid-cols-6 gap-5">
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#ffffff')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #ffffff"></span>
                                    <span class="text-xs mt-1">White</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#3d444b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #3d444b"></span>
                                    <span class="text-xs mt-1">Bone</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#a2a5a4')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #a2a5a4"></span>
                                    <span class="text-xs mt-1">Grey</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#ffd101')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #ffd101"></span>
                                    <span class="text-xs mt-1">Yellow</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#f3e601')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #f3e601"></span>
                                    <span class="text-xs mt-1">Lime</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#d62598')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #d62598"></span>
                                    <span class="text-xs mt-1">Pink</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#ea733d')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #ea733d"></span>
                                    <span class="text-xs mt-1">Orange</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#e10800')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #e10800"></span>
                                    <span class="text-xs mt-1">Red</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#dea900')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #dea900"></span>
                                    <span class="text-xs mt-1">Tan 1</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#db8a06')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #db8a06"></span>
                                    <span class="text-xs mt-1">Tan 2</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#a7662b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #a7662b"></span>
                                    <span class="text-xs mt-1">Caramel</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#5c4738')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #5c4738"></span>
                                    <span class="text-xs mt-1">Light Brwon</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#543a3b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #543a3b"></span>
                                    <span class="text-xs mt-1">Dark Brwon</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#36573b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #36573b"></span>
                                    <span class="text-xs mt-1">Green</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#5a6833')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #5a6833"></span>
                                    <span class="text-xs mt-1">Army Green</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#98d55c')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #98d55c"></span>
                                    <span class="text-xs mt-1">Sweet Lime</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#003ca2')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #003ca2"></span>
                                    <span class="text-xs mt-1">Royal Blue</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#00b097')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #00b097"></span>
                                    <span class="text-xs mt-1">Teal</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#3a3a59')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #3a3a59"></span>
                                    <span class="text-xs mt-1">Navy</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#5f9bc6')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #5f9bc6"></span>
                                    <span class="text-xs mt-1">Baby Blue</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#2e1373')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #2e1373"></span>
                                    <span class="text-xs mt-1">Purple</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#3d444b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #3d444b"></span>
                                    <span class="text-xs mt-1">Charcoal Grey</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandtextcolor', '#000000')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #000000"></span>
                                    <span class="text-xs mt-1">Black</span>
                                </div>
                            </div>
                        </div>

                        {{-- Bind Color --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Bind Color</h3>
                            <div class="grid grid-cols-6 gap-5">
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#ffffff')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #ffffff"></span>
                                    <span class="text-xs mt-1">White</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#3d444b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #3d444b"></span>
                                    <span class="text-xs mt-1">Bone</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#a2a5a4')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #a2a5a4"></span>
                                    <span class="text-xs mt-1">Grey</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#ffd101')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #ffd101"></span>
                                    <span class="text-xs mt-1">Yellow</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#f3e601')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #f3e601"></span>
                                    <span class="text-xs mt-1">Lime</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#d62598')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #d62598"></span>
                                    <span class="text-xs mt-1">Pink</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#ea733d')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #ea733d"></span>
                                    <span class="text-xs mt-1">Orange</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#e10800')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #e10800"></span>
                                    <span class="text-xs mt-1">Red</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#dea900')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #dea900"></span>
                                    <span class="text-xs mt-1">Tan 1</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#db8a06')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #db8a06"></span>
                                    <span class="text-xs mt-1">Tan 2</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#a7662b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #a7662b"></span>
                                    <span class="text-xs mt-1">Caramel</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#5c4738')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #5c4738"></span>
                                    <span class="text-xs mt-1">Light Brwon</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#543a3b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #543a3b"></span>
                                    <span class="text-xs mt-1">Dark Brwon</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#36573b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #36573b"></span>
                                    <span class="text-xs mt-1">Green</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#5a6833')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #5a6833"></span>
                                    <span class="text-xs mt-1">Army Green</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#98d55c')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #98d55c"></span>
                                    <span class="text-xs mt-1">Sweet Lime</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#003ca2')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #003ca2"></span>
                                    <span class="text-xs mt-1">Royal Blue</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#00b097')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #00b097"></span>
                                    <span class="text-xs mt-1">Teal</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#3a3a59')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #3a3a59"></span>
                                    <span class="text-xs mt-1">Navy</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#5f9bc6')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #5f9bc6"></span>
                                    <span class="text-xs mt-1">Baby Blue</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#2e1373')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #2e1373"></span>
                                    <span class="text-xs mt-1">Purple</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#3d444b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #3d444b"></span>
                                    <span class="text-xs mt-1">Charcoal Grey</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('bindcolor', '#000000')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #000000"></span>
                                    <span class="text-xs mt-1">Black</span>
                                </div>
                            </div>
                        </div>

                        {{-- Logo Color --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Logo Color</h3>
                            <div class="grid grid-cols-6 gap-5">
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#ffffff')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #ffffff"></span>
                                    <span class="text-xs mt-1">White</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#3d444b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #3d444b"></span>
                                    <span class="text-xs mt-1">Bone</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#a2a5a4')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #a2a5a4"></span>
                                    <span class="text-xs mt-1">Grey</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#ffd101')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #ffd101"></span>
                                    <span class="text-xs mt-1">Yellow</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#f3e601')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #f3e601"></span>
                                    <span class="text-xs mt-1">Lime</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#d62598')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #d62598"></span>
                                    <span class="text-xs mt-1">Pink</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#ea733d')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #ea733d"></span>
                                    <span class="text-xs mt-1">Orange</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#e10800')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #e10800"></span>
                                    <span class="text-xs mt-1">Red</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#dea900')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #dea900"></span>
                                    <span class="text-xs mt-1">Tan 1</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#db8a06')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #db8a06"></span>
                                    <span class="text-xs mt-1">Tan 2</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#a7662b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #a7662b"></span>
                                    <span class="text-xs mt-1">Caramel</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#5c4738')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #5c4738"></span>
                                    <span class="text-xs mt-1">Light Brwon</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#543a3b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #543a3b"></span>
                                    <span class="text-xs mt-1">Dark Brwon</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#36573b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #36573b"></span>
                                    <span class="text-xs mt-1">Green</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#5a6833')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #5a6833"></span>
                                    <span class="text-xs mt-1">Army Green</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#98d55c')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #98d55c"></span>
                                    <span class="text-xs mt-1">Sweet Lime</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#003ca2')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #003ca2"></span>
                                    <span class="text-xs mt-1">Royal Blue</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#00b097')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #00b097"></span>
                                    <span class="text-xs mt-1">Teal</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#3a3a59')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #3a3a59"></span>
                                    <span class="text-xs mt-1">Navy</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#5f9bc6')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #5f9bc6"></span>
                                    <span class="text-xs mt-1">Baby Blue</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#2e1373')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #2e1373"></span>
                                    <span class="text-xs mt-1">Purple</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#3d444b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #3d444b"></span>
                                    <span class="text-xs mt-1">Charcoal Grey</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('brandlogocolor', '#000000')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #000000"></span>
                                    <span class="text-xs mt-1">Black</span>
                                </div>
                            </div>
                        </div>

                        {{-- Laces Color --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Laces Color</h3>
                            <div class="grid grid-cols-6 gap-5">
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#ffffff')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #ffffff"></span>
                                    <span class="text-xs mt-1">White</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#3d444b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #3d444b"></span>
                                    <span class="text-xs mt-1">Bone</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#a2a5a4')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #a2a5a4"></span>
                                    <span class="text-xs mt-1">Grey</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#ffd101')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #ffd101"></span>
                                    <span class="text-xs mt-1">Yellow</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#f3e601')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #f3e601"></span>
                                    <span class="text-xs mt-1">Lime</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#d62598')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #d62598"></span>
                                    <span class="text-xs mt-1">Pink</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#ea733d')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #ea733d"></span>
                                    <span class="text-xs mt-1">Orange</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#e10800')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #e10800"></span>
                                    <span class="text-xs mt-1">Red</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#dea900')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #dea900"></span>
                                    <span class="text-xs mt-1">Tan 1</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#db8a06')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #db8a06"></span>
                                    <span class="text-xs mt-1">Tan 2</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#a7662b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #a7662b"></span>
                                    <span class="text-xs mt-1">Caramel</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#5c4738')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #5c4738"></span>
                                    <span class="text-xs mt-1">Light Brwon</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#543a3b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #543a3b"></span>
                                    <span class="text-xs mt-1">Dark Brwon</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#36573b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #36573b"></span>
                                    <span class="text-xs mt-1">Green</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#5a6833')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #5a6833"></span>
                                    <span class="text-xs mt-1">Army Green</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#98d55c')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #98d55c"></span>
                                    <span class="text-xs mt-1">Sweet Lime</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#003ca2')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #003ca2"></span>
                                    <span class="text-xs mt-1">Royal Blue</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#00b097')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #00b097"></span>
                                    <span class="text-xs mt-1">Teal</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#3a3a59')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #3a3a59"></span>
                                    <span class="text-xs mt-1">Navy</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#5f9bc6')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #5f9bc6"></span>
                                    <span class="text-xs mt-1">Baby Blue</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#2e1373')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #2e1373"></span>
                                    <span class="text-xs mt-1">Purple</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#3d444b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #3d444b"></span>
                                    <span class="text-xs mt-1">Charcoal Grey</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('lacescolor', '#000000')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #000000"></span>
                                    <span class="text-xs mt-1">Black</span>
                                </div>
                            </div>
                        </div>

                        {{-- Wrist Color --}}
                        <div class="w-full p-5">
                            <h3 class="border-b mb-3 pb-1">Wrist Color</h3>
                            <div class="grid grid-cols-6 gap-5">
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#ffffff')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #ffffff"></span>
                                    <span class="text-xs mt-1">White</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#3d444b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #3d444b"></span>
                                    <span class="text-xs mt-1">Bone</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#a2a5a4')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #a2a5a4"></span>
                                    <span class="text-xs mt-1">Grey</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#ffd101')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #ffd101"></span>
                                    <span class="text-xs mt-1">Yellow</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#f3e601')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #f3e601"></span>
                                    <span class="text-xs mt-1">Lime</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#d62598')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #d62598"></span>
                                    <span class="text-xs mt-1">Pink</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#ea733d')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #ea733d"></span>
                                    <span class="text-xs mt-1">Orange</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#e10800')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #e10800"></span>
                                    <span class="text-xs mt-1">Red</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#dea900')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #dea900"></span>
                                    <span class="text-xs mt-1">Tan 1</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#db8a06')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #db8a06"></span>
                                    <span class="text-xs mt-1">Tan 2</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#a7662b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #a7662b"></span>
                                    <span class="text-xs mt-1">Caramel</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#5c4738')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #5c4738"></span>
                                    <span class="text-xs mt-1">Light Brwon</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#543a3b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #543a3b"></span>
                                    <span class="text-xs mt-1">Dark Brwon</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#36573b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #36573b"></span>
                                    <span class="text-xs mt-1">Green</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#5a6833')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #5a6833"></span>
                                    <span class="text-xs mt-1">Army Green</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#98d55c')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #98d55c"></span>
                                    <span class="text-xs mt-1">Sweet Lime</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#003ca2')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #003ca2"></span>
                                    <span class="text-xs mt-1">Royal Blue</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#00b097')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #00b097"></span>
                                    <span class="text-xs mt-1">Teal</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#3a3a59')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #3a3a59"></span>
                                    <span class="text-xs mt-1">Navy</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#5f9bc6')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #5f9bc6"></span>
                                    <span class="text-xs mt-1">Baby Blue</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#2e1373')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #2e1373"></span>
                                    <span class="text-xs mt-1">Purple</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#3d444b')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #3d444b"></span>
                                    <span class="text-xs mt-1">Charcoal Grey</span>
                                </div>
                                <div class="flex flex-col cursor-pointer items-center justify-center" x-on:click="$wire.set('wristcolor', '#000000')">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" style="background: #000000"></span>
                                    <span class="text-xs mt-1">Black</span>
                                </div>
                            </div>
                        </div>
                    </article>

                </div>
            </div>

        </div>
      </div>
    </div>
</div>
