<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex">
    <aside class="w-[20%] border-r border-gray-100 p-4">
        <h3 class="font-bold text-lg mb-3">Your Account</h3>
        <ul class="space-y-1">
            <li class="hover:bg-gray-50 text-sm cursor-pointer p-2 rounded-lg">
                <a href="{{ route('profile.show') }}">My Profile</a>
            </li>
            <li class="hover:bg-gray-50 text-sm cursor-pointer p-2 rounded-lg">
                <a href="#" class="text-sm">Your Orders</a>
            </li>
            <li class="hover:bg-gray-50 text-sm cursor-pointer p-2 rounded-lg">
                <a href="{{ route('wish-list') }}" class="text-sm">Your Wish List</a>
            </li>
        </ul>
    </aside>
    <section class="w-[80%] p-4">
        <section class="p-6 md:p-12">
            <h2 class="font-bold md:text-[3em] text-[2.5em] text-center">My Wishlist</h2>
            <p class="text-center mb-12">Experience sophistication with every piece - where elegance meets functionality in a <br/> perfect blend of style and practicality.</p>
            <div class="grid md:grid-cols-4 gap-5">
                <div class="card">
                    <div class="image bg-gray-100 p-5 rounded-xl overflow-hidden shadow md:h-[40vh] h-[30vh] flex items-center justify-center relative group cursor-pointer">
                        <img src="/images/pro_1.png" alt="" class="group-hover:scale-125 transition duration-700 ease-in-out">
                        <button class="bg-white shadow-xl rounded-full h-10 w-10 items-center justify-center absolute top-4 right-4 text-gray-700 hidden group-hover:flex transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"><path fill="currentColor" d="M8.4 17L7 15.6l3.6-3.6L7 8.425l1.4-1.4l3.6 3.6l3.575-3.6l1.4 1.4l-3.6 3.575l3.6 3.6l-1.4 1.4L12 13.4z"/></svg>
                        </button>
                        <button class="bg-white shadow-xl rounded-full h-10 w-10 items-center justify-center absolute top-16 right-4 text-gray-700 hidden group-hover:flex transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 256 256"><path fill="currentColor" d="M96 216a16 16 0 1 1-16-16a16 16 0 0 1 16 16m88-16a16 16 0 1 0 16 16a16 16 0 0 0-16-16m47.65-125.65l-28.53 92.71A23.89 23.89 0 0 1 180.18 184H84.07A24.11 24.11 0 0 1 61 166.59L24.82 40H8a8 8 0 0 1 0-16h16.82a16.08 16.08 0 0 1 15.39 11.6L48.32 64H224a8 8 0 0 1 7.65 10.35M213.17 80H52.89l23.49 82.2a8 8 0 0 0 7.69 5.8h96.11a8 8 0 0 0 7.65-5.65Z"/></svg>
                        </button>
                    </div>
                    <h3 class="text-lg mt-2 font-bold">Dream As Baby Blue</h3>
                    <h4 class="text-sm">$25.00 - $35.00</h4>
                </div>
                <div class="card">
                    <div class="image bg-gray-100 p-5 rounded-xl overflow-hidden shadow md:h-[40vh] h-[30vh] flex items-center justify-center relative group cursor-pointer">
                        <img src="/images/pro_2.png" alt="" class="group-hover:scale-125 transition duration-700 ease-in-out">
                        <button class="bg-white shadow-xl rounded-full h-10 w-10 items-center justify-center absolute top-4 right-4 text-gray-700 hidden group-hover:flex transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"><path fill="currentColor" d="M8.4 17L7 15.6l3.6-3.6L7 8.425l1.4-1.4l3.6 3.6l3.575-3.6l1.4 1.4l-3.6 3.575l3.6 3.6l-1.4 1.4L12 13.4z"/></svg>
                        </button>
                        <button class="bg-white shadow-xl rounded-full h-10 w-10 items-center justify-center absolute top-16 right-4 text-gray-700 hidden group-hover:flex transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 256 256"><path fill="currentColor" d="M96 216a16 16 0 1 1-16-16a16 16 0 0 1 16 16m88-16a16 16 0 1 0 16 16a16 16 0 0 0-16-16m47.65-125.65l-28.53 92.71A23.89 23.89 0 0 1 180.18 184H84.07A24.11 24.11 0 0 1 61 166.59L24.82 40H8a8 8 0 0 1 0-16h16.82a16.08 16.08 0 0 1 15.39 11.6L48.32 64H224a8 8 0 0 1 7.65 10.35M213.17 80H52.89l23.49 82.2a8 8 0 0 0 7.69 5.8h96.11a8 8 0 0 0 7.65-5.65Z"/></svg>
                        </button>
                    </div>
                    <h3 class="text-lg mt-2 font-bold">Dream Classic Infield Glove</h3>
                    <h4 class="text-sm">$35.00</h4>
                </div>
                <div class="card">
                    <div class="image bg-gray-100 p-5 rounded-xl overflow-hidden shadow md:h-[40vh] h-[30vh] flex items-center justify-center relative group cursor-pointer">
                        <img src="/images/pro_3.png" alt="" class="group-hover:scale-125 transition duration-700 ease-in-out">
                        <button class="bg-white shadow-xl rounded-full h-10 w-10 items-center justify-center absolute top-4 right-4 text-gray-700 hidden group-hover:flex transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"><path fill="currentColor" d="M8.4 17L7 15.6l3.6-3.6L7 8.425l1.4-1.4l3.6 3.6l3.575-3.6l1.4 1.4l-3.6 3.575l3.6 3.6l-1.4 1.4L12 13.4z"/></svg>
                        </button>
                        <button class="bg-white shadow-xl rounded-full h-10 w-10 items-center justify-center absolute top-16 right-4 text-gray-700 hidden group-hover:flex transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 256 256"><path fill="currentColor" d="M96 216a16 16 0 1 1-16-16a16 16 0 0 1 16 16m88-16a16 16 0 1 0 16 16a16 16 0 0 0-16-16m47.65-125.65l-28.53 92.71A23.89 23.89 0 0 1 180.18 184H84.07A24.11 24.11 0 0 1 61 166.59L24.82 40H8a8 8 0 0 1 0-16h16.82a16.08 16.08 0 0 1 15.39 11.6L48.32 64H224a8 8 0 0 1 7.65 10.35M213.17 80H52.89l23.49 82.2a8 8 0 0 0 7.69 5.8h96.11a8 8 0 0 0 7.65-5.65Z"/></svg>
                        </button>
                    </div>
                    <h3 class="text-lg mt-2 font-bold">Dream Elbow Guard</h3>
                    <h4 class="text-sm">$75.00</h4>
                </div>
                <div class="card">
                    <div class="image bg-gray-100 p-5 rounded-xl overflow-hidden shadow md:h-[40vh] h-[30vh] flex items-center justify-center relative group cursor-pointer">
                        <img src="/images/pro_4.png" alt="" class="group-hover:scale-125 transition duration-700 ease-in-out">
                        <button class="bg-white shadow-xl rounded-full h-10 w-10 items-center justify-center absolute top-4 right-4 text-gray-700 hidden group-hover:flex transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"><path fill="currentColor" d="M8.4 17L7 15.6l3.6-3.6L7 8.425l1.4-1.4l3.6 3.6l3.575-3.6l1.4 1.4l-3.6 3.575l3.6 3.6l-1.4 1.4L12 13.4z"/></svg>
                        </button>
                        <button class="bg-white shadow-xl rounded-full h-10 w-10 items-center justify-center absolute top-16 right-4 text-gray-700 hidden group-hover:flex transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 256 256"><path fill="currentColor" d="M96 216a16 16 0 1 1-16-16a16 16 0 0 1 16 16m88-16a16 16 0 1 0 16 16a16 16 0 0 0-16-16m47.65-125.65l-28.53 92.71A23.89 23.89 0 0 1 180.18 184H84.07A24.11 24.11 0 0 1 61 166.59L24.82 40H8a8 8 0 0 1 0-16h16.82a16.08 16.08 0 0 1 15.39 11.6L48.32 64H224a8 8 0 0 1 7.65 10.35M213.17 80H52.89l23.49 82.2a8 8 0 0 0 7.69 5.8h96.11a8 8 0 0 0 7.65-5.65Z"/></svg>
                        </button>
                    </div>
                    <h3 class="text-lg mt-2 font-bold">Dream Belt</h3>
                    <h4 class="text-sm">$65.00 - $85.00</h4>
                </div>
            </div>
        </section>
    </section>
</div>
