<x-app-layout>
    <div class="bg-white overflow-hidden h-[83vh] sm:rounded-lg flex">
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
            <p>No order right now!</p>
        </section>
    </div>
</x-app-layout>
