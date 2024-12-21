<script setup>
import Navbar from '../components/Navbar.vue';
import Footer from '../components/Footer.vue';
</script>

<template>
    <div class="bg-blue-50 min-h-screen relative">
        <div class="absolute w-full z-10">
            <Navbar />
        </div>

        <div class="relative">
            <img src="/public/asset/image/goingto.png" alt="Background" class="w-full h-48 sm:h-full object-cover" />

            <div class="absolute inset-0 flex mt-48 md:mt-0 flex-col items-center justify-center text-white px-4">
                <h1 class="text-xl sm:text-4xl font-bold text-center text-white">Fun experiences for unforgettable trips</h1>
                <div class="mt-6 flex flex-row flex-wrap gap-4 justify-center w-full">
                    <div class="flex items-center bg-white rounded-md shadow-md px-3 py-2 max-w-md">
                        <span class="text-gray-500 mr-2">✈️</span>
                        <input type="text" placeholder="Explore your next Destination"
                            class="focus:outline-none text-gray-700" />
                    </div>
                    <input type="date" placeholder="Departure"
                        class="px-4 py-2 text-gray-500 rounded-md shadow-md focus:outline-none focus:ring focus:ring-blue-300 w-full max-w-xs" />
                    <input type="date" placeholder="Return"
                        class="px-4 py-2 text-gray-500 rounded-md shadow-md focus:outline-none focus:ring focus:ring-blue-300 w-full max-w-xs" />
                </div>
            </div>
        </div>

        <div class="relative mt-36 md:-mt-24 bg-[#E8F7FF] rounded-tl-[120px] shadow-lg pt-12 pb-20 px-6">
            <div class="flex justify-center mb-8">
                <div class="flex space-x-6 text-sm sm:text-lg font-semibold">
                    <button
                        class="px-4 py-2 bg-transparent hover:text-blue-500 border-b-2 border-transparent hover:border-blue-500">
                        Tours
                    </button>
                    <button class="px-4 py-2 bg-transparent text-blue-500 border-b-2 border-blue-500">
                        Recreational
                    </button>
                    <button
                        class="px-4 py-2 bg-transparent hover:text-blue-500 border-b-2 border-transparent hover:border-blue-500">
                        Hiking
                    </button>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="w-full max-w-4xl">
                    <div class="rounded-lg p-4 sm:p-6">
                        <img src="/public/asset/image/lets travel.svg" alt="Let's travel" class="w-full rounded-md" />
                    </div>
                </div>
            </div>

            <section class="mb-12">
                <h2 class="text-xl sm:text-2xl font-bold text-center mb-6">Save your travel budget with these promos!</h2>
                <div class="flex justify-center">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 container">
                        <div class="">
                            <img src="/public/asset/image/promo 1.png" alt="Promo 1"
                                class="rounded-md w-full max-h-52 min-h-52 object-cover mb-4">
                        </div>
                        <div class="">
                            <img src="/public/asset/image/promo 2.png" alt="Promo 2"
                                class="rounded-md w-full max-h-52 min-h-52 object-cover mb-4">
                        </div>
                        <div class="">
                            <img src="/public/asset/image/promo 3.png" alt="Promo 3"
                                class="rounded-md w-full max-h-52 min-h-52 object-cover mb-4">
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-xl sm:text-2xl font-bold text-center mb-6">Claim Your Coupon for the Best Deals!</h2>
                <div class="max-w-lg mx-auto bg-white rounded-lg shadow-md p-6 text-center">
                    <div class="flex flex-wrap justify-between items-center mb-4">
                        <p class="text-gray-700 font-semibold text-sm sm:text-base">Special discount up to 15% for Xperience</p>
                        <span class="bg-red-500 text-white text-xs font-bold px-3 py-1 rounded">1 Day Left</span>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <button
                            class="bg-green-500 text-white px-6 py-2 rounded-md font-semibold hover:bg-green-600">Code:
                            ADDXPER15</button>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="text-xl sm:text-2xl font-bold text-center mb-6">Explore Our Best Travel Packages</h2>
                <div class="flex justify-center">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 container">
                        <div class="bg-white rounded-lg shadow-md p-4">
                            <img src="/public/asset/image/sumba.png" alt="Travel Package"
                                class="rounded-md w-full h-32 sm:h-40 object-cover mb-4">
                            <p class="font-semibold text-sm sm:text-lg">3 Day Bali</p>
                            <p class="text-gray-500 text-xs sm:text-sm">5 Stars - All inclusive</p>
                            <p class="text-blue-500 font-semibold mt-2 text-sm sm:text-base">$1,420 <span
                                    class="text-gray-500 text-xs sm:text-sm">/person</span></p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-4">
                            <img src="/public/asset/image/sumba.png" alt="Travel Package"
                                class="rounded-md w-full h-32 sm:h-40 object-cover mb-4">
                            <p class="font-semibold text-sm sm:text-lg">3 Day Bali</p>
                            <p class="text-gray-500 text-xs sm:text-sm">5 Stars - All inclusive</p>
                            <p class="text-blue-500 font-semibold mt-2 text-sm sm:text-base">$1,420 <span
                                    class="text-gray-500 text-xs sm:text-sm">/person</span></p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-4">
                            <img src="/public/asset/image/sumba.png" alt="Travel Package"
                                class="rounded-md w-full h-32 sm:h-40 object-cover mb-4">
                            <p class="font-semibold text-sm sm:text-lg">3 Day Bali</p>
                            <p class="text-gray-500 text-xs sm:text-sm">5 Stars - All inclusive</p>
                            <p class="text-blue-500 font-semibold mt-2 text-sm sm:text-base">$1,420 <span
                                    class="text-gray-500 text-xs sm:text-sm">/person</span></p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-4">
                            <img src="/public/asset/image/sumba.png" alt="Travel Package"
                                class="rounded-md w-full h-32 sm:h-40 object-cover mb-4">
                            <p class="font-semibold text-sm sm:text-lg">3 Day Bali</p>
                            <p class="text-gray-500 text-xs sm:text-sm">5 Stars - All inclusive</p>
                            <p class="text-blue-500 font-semibold mt-2 text-sm sm:text-base">$1,420 <span
                                    class="text-gray-500 text-xs sm:text-sm">/person</span></p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-4">
                            <img src="/public/asset/image/sumba.png" alt="Travel Package"
                                class="rounded-md w-full h-32 sm:h-40 object-cover mb-4">
                            <p class="font-semibold text-sm sm:text-lg">3 Day Bali</p>
                            <p class="text-gray-500 text-xs sm:text-sm">5 Stars - All inclusive</p>
                            <p class="text-blue-500 font-semibold mt-2 text-sm sm:text-base">$1,420 <span
                                    class="text-gray-500 text-xs sm:text-sm">/person</span></p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-4">
                            <img src="/public/asset/image/sumba.png" alt="Travel Package"
                                class="rounded-md w-full h-32 sm:h-40 object-cover mb-4">
                            <p class="font-semibold text-sm sm:text-lg">3 Day Bali</p>
                            <p class="text-gray-500 text-xs sm:text-sm">5 Stars - All inclusive</p>
                            <p class="text-blue-500 font-semibold mt-2 text-sm sm:text-base">$1,420 <span
                                    class="text-gray-500 text-xs sm:text-sm">/person</span></p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-4">
                            <img src="/public/asset/image/sumba.png" alt="Travel Package"
                                class="rounded-md w-full h-32 sm:h-40 object-cover mb-4">
                            <p class="font-semibold text-sm sm:text-lg">3 Day Bali</p>
                            <p class="text-gray-500 text-xs sm:text-sm">5 Stars - All inclusive</p>
                            <p class="text-blue-500 font-semibold mt-2 text-sm sm:text-base">$1,420 <span
                                    class="text-gray-500 text-xs sm:text-sm">/person</span></p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-4">
                            <img src="/public/asset/image/sumba.png" alt="Travel Package"
                                class="rounded-md w-full h-32 sm:h-40 object-cover mb-4">
                            <p class="font-semibold text-sm sm:text-lg">3 Day Bali</p>
                            <p class="text-gray-500 text-xs sm:text-sm">5 Stars - All inclusive</p>
                            <p class="text-blue-500 font-semibold mt-2 text-sm sm:text-base">$1,420 <span
                                    class="text-gray-500 text-xs sm:text-sm">/person</span></p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-4">
                            <img src="/public/asset/image/sumba.png" alt="Travel Package"
                                class="rounded-md w-full h-32 sm:h-40 object-cover mb-4">
                            <p class="font-semibold text-sm sm:text-lg">3 Day Bali</p>
                            <p class="text-gray-500 text-xs sm:text-sm">5 Stars - All inclusive</p>
                            <p class="text-blue-500 font-semibold mt-2 text-sm sm:text-base">$1,420 <span
                                    class="text-gray-500 text-xs sm:text-sm">/person</span></p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-4">
                            <img src="/public/asset/image/sumba.png" alt="Travel Package"
                                class="rounded-md w-full h-32 sm:h-40 object-cover mb-4">
                            <p class="font-semibold text-sm sm:text-lg">3 Day Bali</p>
                            <p class="text-gray-500 text-xs sm:text-sm">5 Stars - All inclusive</p>
                            <p class="text-blue-500 font-semibold mt-2 text-sm sm:text-base">$1,420 <span
                                    class="text-gray-500 text-xs sm:text-sm">/person</span></p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-4">
                            <img src="/public/asset/image/sumba.png" alt="Travel Package"
                                class="rounded-md w-full h-32 sm:h-40 object-cover mb-4">
                            <p class="font-semibold text-sm sm:text-lg">3 Day Bali</p>
                            <p class="text-gray-500 text-xs sm:text-sm">5 Stars - All inclusive</p>
                            <p class="text-blue-500 font-semibold mt-2 text-sm sm:text-base">$1,420 <span
                                    class="text-gray-500 text-xs sm:text-sm">/person</span></p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-4">
                            <img src="/public/asset/image/sumba.png" alt="Travel Package"
                                class="rounded-md w-full h-32 sm:h-40 object-cover mb-4">
                            <p class="font-semibold text-sm sm:text-lg">3 Day Bali</p>
                            <p class="text-gray-500 text-xs sm:text-sm">5 Stars - All inclusive</p>
                            <p class="text-blue-500 font-semibold mt-2 text-sm sm:text-base">$1,420 <span
                                    class="text-gray-500 text-xs sm:text-sm">/person</span></p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <Footer />
</template>
