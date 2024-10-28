<div x-data="{
    // Sets the time between each slides in milliseconds
    autoplayIntervalTime: 8000,
    slides: [
        {
            imgSrc: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-1.webp',
            imgAlt: 'Vibrant abstract painting with swirling blue and light pink hues on a canvas.',
            bgimg: '/images/slide-one-bg.jpg',
            leftGifFile: '/images/custom-text.png',
            title: '',
            buttonTitle: 'Customize Now',
            buttonLink: '',
            gifFile: '/images/gloves.png',
        },
    ],
    currentSlideIndex: 1,
    isPaused: false,
    autoplayInterval: null,
    previous() {
        if (this.currentSlideIndex > 1) {
            this.currentSlideIndex = this.currentSlideIndex - 1
        } else {
            // If it's the first slide, go to the last slide
            this.currentSlideIndex = this.slides.length
        }
    },
    next() {
        if (this.currentSlideIndex < this.slides.length) {
            this.currentSlideIndex = this.currentSlideIndex + 1
        } else {
            // If it's the last slide, go to the first slide
            this.currentSlideIndex = 1
        }
    },
    autoplay() {
        this.autoplayInterval = setInterval(() => {
            if (! this.isPaused) {
                this.next()
            }
        }, this.autoplayIntervalTime)
    },
    // Updates interval time
    setAutoplayInterval(newIntervalTime) {
        clearInterval(this.autoplayInterval)
        this.autoplayIntervalTime = newIntervalTime
        this.autoplay()
    },
}" x-init="autoplay" class="relative w-full overflow-hidden">

    <!-- slides -->
    <!-- Change min-h-[50svh] to your preferred height size -->
    <div class="relative h-[75vh] w-full">
        <template x-for="(slide, index) in slides">
            <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0" x-transition.opacity.duration.1000ms>
                <div class="h-full">
                    <img x-bind:src="slide.bgimg" class="w-full object-cover h-[75vh] relative">
                    <div class="grid grid-cols-2 w-full absolute top-0 left-0 bottom-0 h-full">
                        <div class="w-full h-[75vh]">
                            <div class="w-full h-full">
                                <div class="flex flex-col items-start justify-center w-[60%] mx-auto h-full">
                                    <img x-bind:src="slide.leftGifFile" class="w-[50vw] h-[50vh] object-contain">
                                    <button class="font-semibold border-b-2 hover:border-yellow-500 text-xl px-1 py-2 text-white flex items-center gap-2 group w-[200px]">
                                        <span x-text="slide.buttonTitle"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 -rotate-45 group-hover:text-yellow-500 group-hover:rotate-0 transition duration-500 ease-in-out" viewBox="0 0 24 24"><path fill="currentColor" d="M16.175 13H5q-.425 0-.712-.288T4 12t.288-.712T5 11h11.175l-4.9-4.9q-.3-.3-.288-.7t.313-.7q.3-.275.7-.288t.7.288l6.6 6.6q.15.15.213.325t.062.375t-.062.375t-.213.325l-6.6 6.6q-.275.275-.687.275T11.3 19.3q-.3-.3-.3-.712t.3-.713z"/></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="w-full h-[75vh]">
                            <img x-bind:src="slide.gifFile" class="w-full h-full object-contain heroGlove">
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>

    <!-- indicators -->
    <div class="absolute rounded-md bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 px-1.5 py-1 md:px-2" role="group" aria-label="slides" >
        <template x-for="(slide, index) in slides">
            <button class="size-2 cursor-pointer rounded-full transition" x-on:click="(currentSlideIndex = index + 1), setAutoplayInterval(autoplayIntervalTime)" x-bind:class="[currentSlideIndex === index + 1 ? 'bg-neutral-300' : 'bg-neutral-300/50']" x-bind:aria-label="'slide ' + (index + 1)"></button>
        </template>
    </div>

</div>
