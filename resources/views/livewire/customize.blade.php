<template>
    <div class="bg-white w-full h-full">
      <div class="flex flex-col md:flex-row gap-12">
        <div class="canvas-wraper w-full md:h-[82vh] h-[40vh]">
          <div class="canvas-area">
            <v-stage ref="stage" :config="stageSize">
                <v-layer ref="layer">
                    <v-image
                        :config="{
                            x: 0,
                            y: 0,
                            width: stageSize.width,
                            height: stageSize.height,
                            image: baseImage
                        }"
                    />
                </v-layer>
            </v-stage>
          </div>
        </div>
        <!-- toolbar -->
        <div class="w-full h-[80vh] overflow-y-auto p-3 border-t">
            <h3 class="mb-6 text-gray-900 text-2xl font-bold mt-5">Customize Options</h3>
            <fwb-tabs v-model="activeTab" class="md:p-5 py-6">
                <fwb-tab name="first" title="Base Options">
                    <section class="md:pr-12 space-y-5">
                        <div class="relative field-group border p-4 rounded-xl">
                            <label for="leather-option" class="w-full text-gray-700">Leather Option</label>
                            <ul class="grid w-full gap-4 md:grid-cols-2 grid-cols-1">
                                <li v-for="option in leatherOptions" :key="option">
                                    <input type="radio" :id="option" :value="option" class="hidden peer" name="services">
                                    <label :for="option" class="inline-flex md:h-12 items-center justify-center w-full  text-zinc-800 bg-white border border-zinc-300 rounded-2xl cursor-pointer peer-checked:border-zinc-400 peer-checked:bg-gradient-to-bl from-zinc-700 to-gray-900 hover:bg-black hover:text-zinc-100 peer-checked:hover:text-zinc-100 peer-checked:text-zinc-100 transition duration-300 ease-in-out">
                                        <div class="block text-center">
                                            <div class="w-full text-center font-semibold">{{ option }}</div>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="relative field-group border p-4 rounded-xl">
                            <label for="leather-option" class="w-full text-gray-700">Throwing Hand</label>
                            <ul class="grid w-full gap-4 md:grid-cols-2 grid-cols-1">
                                <li v-for="option in throwingHand" :key="option">
                                    <input type="radio" :id="option" :value="option" class="hidden peer" name="services">
                                    <label :for="option" class="inline-flex md:h-12 items-center justify-center w-full  text-zinc-800 bg-white border border-zinc-300 rounded-2xl cursor-pointer peer-checked:border-zinc-400 peer-checked:bg-gradient-to-bl from-zinc-700 to-gray-900 hover:bg-black hover:text-zinc-100 peer-checked:hover:text-zinc-100 peer-checked:text-zinc-100 transition duration-300 ease-in-out">
                                        <div class="block text-center">
                                            <div class="w-full text-center font-semibold">{{ option }}</div>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="relative field-group border p-4 rounded-xl">
                            <label for="leather-option" class="w-full text-gray-700">Sport</label>
                            <ul class="grid w-full gap-4 md:grid-cols-2 grid-cols-1">
                                <li v-for="option in sports" :key="option">
                                    <input type="radio" :id="option" :value="option" class="hidden peer" name="services">
                                    <label :for="option" class="inline-flex md:h-12 items-center justify-center w-full  text-zinc-800 bg-white border border-zinc-300 rounded-2xl cursor-pointer peer-checked:border-zinc-400 peer-checked:bg-gradient-to-bl from-zinc-700 to-gray-900 hover:bg-black hover:text-zinc-100 peer-checked:hover:text-zinc-100 peer-checked:text-zinc-100 transition duration-300 ease-in-out">
                                        <div class="block text-center">
                                            <div class="w-full text-center font-semibold">{{ option }}</div>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="relative field-group border p-4 rounded-xl">
                            <label for="leather-option" class="w-full text-gray-700">Position</label>
                            <ul class="grid w-full gap-4 md:grid-cols-3 grid-cols-1">
                                <li v-for="option in positions" :key="option">
                                    <input type="radio" :id="option" :value="option" class="hidden peer" name="services">
                                    <label :for="option" class="inline-flex md:h-12 items-center justify-center w-full  text-zinc-800 bg-white border border-zinc-300 rounded-2xl cursor-pointer peer-checked:border-zinc-400 peer-checked:bg-gradient-to-bl from-zinc-700 to-gray-900 hover:bg-black hover:text-zinc-100 peer-checked:hover:text-zinc-100 peer-checked:text-zinc-100 transition duration-300 ease-in-out">
                                        <div class="block text-center">
                                            <div class="w-full text-center font-semibold">{{ option }}</div>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="relative field-group border p-4 rounded-xl">
                            <label for="leather-option" class="w-full text-gray-700">Youth Size</label>
                            <ul class="grid w-full gap-4 md:grid-cols-2 grid-cols-1">
                                <li v-for="option in youthsize" :key="option">
                                    <input type="radio" :id="option" :value="option" class="hidden peer" name="services">
                                    <label :for="option" class="inline-flex md:h-12 items-center justify-center w-full  text-zinc-800 bg-white border border-zinc-300 rounded-2xl cursor-pointer peer-checked:border-zinc-400 peer-checked:bg-gradient-to-bl from-zinc-700 to-gray-900 hover:bg-black hover:text-zinc-100 peer-checked:hover:text-zinc-100 peer-checked:text-zinc-100 transition duration-300 ease-in-out">
                                        <div class="block text-center">
                                            <div class="w-full text-center font-semibold">{{ option }}</div>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="relative field-group border p-4 rounded-xl">
                            <label for="leather-option" class="w-full text-gray-700">Size First Base</label>
                            <ul class="grid w-full gap-4 md:grid-cols-3 grid-cols-1">
                                <li v-for="option in sizefirstbase" :key="option">
                                    <input type="radio" :id="option" :value="option" class="hidden peer" name="services">
                                    <label :for="option" class="inline-flex md:h-12 items-center justify-center w-full  text-zinc-800 bg-white border border-zinc-300 rounded-2xl cursor-pointer peer-checked:border-zinc-400 peer-checked:bg-gradient-to-bl from-zinc-700 to-gray-900 hover:bg-black hover:text-zinc-100 peer-checked:hover:text-zinc-100 peer-checked:text-zinc-100 transition duration-300 ease-in-out">
                                        <div class="block text-center">
                                            <div class="w-full text-center font-semibold">{{ option }}</div>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </div>

                    </section>
                </fwb-tab>
                <fwb-tab name="second" title="Colors">
                    <section class="pr-12 space-y-5">
                        <div class="w-full">
                            <h3>Web</h3>
                            <div class="grid grid-cols-6 gap-5">
                                <div class="flex flex-col cursor-pointer items-center justify-center" v-for="color in colors" :key="color">
                                    <span class="h-12 w-full rounded-lg shadow-xl border" :style="`background: ${color.color}`"></span>
                                    <span class="text-xs mt-1">{{ color.name }}</span>
                                </div>
                            </div>
                        </div>
                    </section>
                </fwb-tab>
            </fwb-tabs>
        </div>
      </div>
    </div>

    <script>

        const activeTab = 'first';

        const stageSize = ({
            width: 100,
            height: 100
        })
        const baseImage = null;

        onMounted(() => {
            const container = document.querySelector(".canvas-wraper");
            const observer = new ResizeObserver(() => {
                stageSize.value.width = container.offsetWidth - 80;
                stageSize.value.height = container.offsetHeight;
            });
            observer.observe(container);

            const imageObj = new window.Image();
            imageObj.src = "/images/gloves.png";
            imageObj.onload = () => {
                baseImage.value = imageObj;
            };
        })

        const leatherOptions = ref([
          'Classic (Steerhide)', 'Premier (Kip Leather)'
        ])
        const throwingHand = ref([
          'Left', 'Right'
        ])
        const sports = ref([
          'Softball', 'Baseball'
        ])
        const positions = ref([
          'First Base Mitt', 'Catcher Mitt', 'Infield/Outfield Gloves'
        ])
        const youthsize = ref([
          'Yes', 'no'
        ])
        const sizefirstbase = ref([
          '12.25', '12.5', '12.75', '13', '13.25', '13.5'
        ])

        const colors = ref([
            { name: 'White', color: "#ffffff" },
            { name: 'Bone', color: "#3d444b" },
            { name: 'Grey', color: "#a2a5a4" },
            { name: 'Yellow', color: "#ffd101" },
            { name: 'Lime', color: "#f3e601" },
            { name: 'Pink', color: "#d62598" },
            { name: 'Orange', color: "#ea733d" },
            { name: 'Red', color: "#e10800" },
            { name: 'Tan 1', color: "#dea900" },
            { name: 'Tan 2', color: "#db8a06" },
            { name: 'Caramel', color: "#a7662b" },
            { name: 'Light Brwon', color: "#5c4738" },
            { name: 'Dark Brwon', color: "#543a3b" },
            { name: 'Green', color: "#36573b" },
            { name: 'Army Green', color: "#5a6833" },
            { name: 'Sweet Lime', color: "#98d55c" },
            { name: 'Royal Blue', color: "#003ca2" },
            { name: 'Teal', color: "#00b097" },
            { name: 'Navy', color: "#3a3a59" },
            { name: 'Baby Blue', color: "#5f9bc6" },
            { name: 'Purple', color: "#2e1373" },
            { name: 'Charcoal Grey', color: "#3d444b" },
            { name: 'Black', color: "#000000" },
        ])
    </script>
  </template>
