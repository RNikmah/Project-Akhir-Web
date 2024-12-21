<script setup>
import Navbar from '../components/Navbar.vue'
import Footer from '../components/Footer.vue'
import { useRouter } from 'vue-router'
const router = useRouter()

</script>
<template>
    <div class="bg-[#D0EFFF] overflow-x-hidden">
        <div class="flex flex-col relative">
            <div class="absolute inset-0 z-0 overflow-hidden">
                <img src="/asset/image/bannerhome.png" alt="Background"
                    class="w-full h-full object-cover filter blur-sm" />
            </div>
            <Navbar />

            <div class="flex flex-col items-center justify-center text-center mt-52 z-10 relative px-4 sm:px-8">
                <h1 class="text-4xl text-black font-semibold">Discover the vacation of your dreams</h1>
                <p class="text-black mt-2 max-w-3xl">Search low price on flights, travel, and trip tours</p>
            </div>

            <div class="flex flex-col items-center justify-center mt-16 px-4 sm:px-8 z-10 relative">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 w-full max-w-3xl">
                    <input type="text" class="bg-white border p-5 rounded-full w-full max-w-xl mx-auto"
                        placeholder="Explore destination">
                    <input type="text" class="bg-white border p-5 rounded-full w-full max-w-xl mx-auto"
                        placeholder="Departure">
                    <input type="text" class="bg-white border p-5 rounded-full w-full max-w-xl mx-auto"
                        placeholder="Return">
                </div>
            </div>

            <div class="flex gap-4 items-center justify-center mt-16 mb-10 px-6 sm:px-24 flex-wrap z-10 relative">
                <div class="border-0 p-6 rounded-lg bg-[#FF9090] w-full sm:w-auto shadow-lg">
                    <div class="grid grid-cols-12 items-center">
                        <div class="col-span-7">
                            <h5 class="text-2xl text-white font-semibold">Vacations</h5>
                            <p class="text-white">1,412 vacations</p>
                        </div>
                        <div class="col-span-5">
                            <img src="/asset/image/Vacations.svg" alt="vacations" class="max-w-full">
                        </div>
                    </div>
                </div>
                <div class="border-0 p-6 rounded-lg bg-[#93FFC6] w-full sm:w-auto shadow-lg">
                    <div class="grid grid-cols-12 items-center">
                        <div class="col-span-7">
                            <h5 class="text-2xl text-white font-semibold">Hiking</h5>
                            <p class="text-white">1,412 hikings</p>
                        </div>
                        <div class="col-span-5">
                            <img src="/asset/image/Hiking.svg" alt="Hiking" class="max-w-full" style="width: 160px;">
                        </div>
                    </div>
                </div>
                <div class="border-0 p-6 rounded-lg bg-[#93DAFF] w-full sm:w-auto shadow-lg">
                    <div class="grid grid-cols-12 items-center">
                        <div class="col-span-7">
                            <h5 class="text-2xl text-white font-semibold">Recreational</h5>
                            <p class="text-white">1,412 recreationals</p>
                        </div>
                        <div class="col-span-5">
                            <img src="/asset/image/Recreational.svg" alt="Recreational" class="max-w-full"
                                style="width: 160px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="px-6 sm:px-20 mt-10 w-full">
                <div class="border rounded-lg bg-[#E7F7FF] p-5">
                    <div class="flex gap-4 items-center justify-between">
                        <h1 class="text-gray-700 text-2xl font-bold">Upcoming trip</h1>
                        <div class="border px-2 py-1 bg-white shadow-sm rounded-full"><span>3d:10h:10m</span></div>
                    </div>
                    <div class="grid gap-4 mt-12 grid-cols-1 sm:grid-cols-3">
                        <div class="rounded-lg min-h-64 relative">
                            <div class="absolute inset-0">
                                <img src="/asset/image/bali.png" alt="Bali Trip"
                                    class="w-full h-full object-cover rounded-lg">
                            </div>
                            <div class="absolute opacity-75 min-h-16 p-5 bottom-4 left-0 right-0 rounded-lg mx-5"
                                style="background-color: rgba(255, 255, 255, 0.9);">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-xl font-semibold">3 day Bali</h4>
                                        <p class="text-gray-600">122 people</p>
                                    </div>
                                    <button
                                        class="bg-gray-600 text-white opacity-100 text-gray-700 rounded-full px-4 py-2 cursor-pointer">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg min-h-64 relative">
                            <div class="absolute inset-0">
                                <img src="/asset/image/sumba.png" alt="Bali Trip"
                                    class="w-full h-full object-cover rounded-lg">
                            </div>
                            <div class="absolute opacity-75 min-h-16 p-5 bottom-4 left-0 right-0 rounded-lg mx-5"
                                style="background-color: rgba(255, 255, 255, 0.9);">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-xl font-semibold">5 Day Sumba</h4>
                                        <p class="text-gray-600">122 people</p>
                                    </div>
                                    <button
                                        class="bg-gray-600 text-white opacity-100 text-gray-700 rounded-full px-4 py-2 cursor-pointer">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg min-h-64 relative">
                            <div class="absolute inset-0">
                                <img src="/asset/image/bromo.png" alt="Bali Trip"
                                    class="w-full h-full object-cover rounded-lg">
                            </div>
                            <div class="absolute opacity-75 min-h-16 p-5 bottom-4 left-0 right-0 rounded-lg mx-5"
                                style="background-color: rgba(255, 255, 255, 0.9);">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-xl font-semibold">2 Day Bromo</h4>
                                        <p class="text-gray-600">122 people</p>
                                    </div>
                                    <button
                                        class="bg-gray-600 text-white opacity-100 text-gray-700 rounded-full px-4 py-2 cursor-pointer">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="px-4 sm:px-10 lg:px-20 mt-10 mb-10 w-full">
            <h1 class="text-gray-700 text-2xl sm:text-3xl font-bold mb-6">Explore Indonesia</h1>
            <div class="flex flex-wrap gap-4">
                <button class="bg-[#DBFFEC] text-black rounded-full px-5 py-2">Filters</button>
                <button class="bg-[#DBFFEC] text-black rounded-full px-5 py-2">Nearby</button>
                <button class="bg-[#5FFFAA] text-black rounded-full px-5 py-2">Popular</button>
                <button class="bg-[#DBFFEC] text-black rounded-full px-5 py-2">Recommendation</button>
                <button class="bg-[#DBFFEC] text-black rounded-full px-5 py-2">New</button>
            </div>
            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="max-w-full rounded-lg overflow-hidden shadow-lg bg-white">
                    <img class="w-full h-48 object-cover rounded-t-lg" src="/asset/image/sumba.png" alt="Sumba Island">
                    <div class="px-6 py-4">
                        <button class="font-bold text-xl mb-2"  @click="router.push('/detail/destination')">5 Day Sumba Island</button>
                        <p class="text-gray-700 text-base">5 Nov - 10 Nov 2024</p>
                        <p class="text-gray-900 text-2xl mt-4">$1,420/Person</p>
                    </div>
                </div>
                <div class="max-w-full rounded-lg overflow-hidden shadow-lg bg-white">
                    <img class="w-full h-48 object-cover rounded-t-lg" src="/asset/image/sumba.png" alt="Sumba Island">
                    <div class="px-6 py-4">
                        <button class="font-bold text-xl mb-2"  @click="router.push('/detail/destination')">5 Day Sumba Island</button>
                        <p class="text-gray-700 text-base">5 Nov - 10 Nov 2024</p>
                        <p class="text-gray-900 text-2xl mt-4">$1,420/Person</p>
                    </div>
                </div>
                <div class="max-w-full rounded-lg overflow-hidden shadow-lg bg-white">
                    <img class="w-full h-48 object-cover rounded-t-lg" src="/asset/image/sumba.png" alt="Sumba Island">
                    <div class="px-6 py-4">
                        <button class="font-bold text-xl mb-2"  @click="router.push('/detail/destination')">5 Day Sumba Island</button>
                        <p class="text-gray-700 text-base">5 Nov - 10 Nov 2024</p>
                        <p class="text-gray-900 text-2xl mt-4">$1,420/Person</p>
                    </div>
                </div>
                <div class="max-w-full rounded-lg overflow-hidden shadow-lg bg-white">
                    <img class="w-full h-48 object-cover rounded-t-lg" src="/asset/image/sumba.png" alt="Sumba Island">
                    <div class="px-6 py-4">
                        <button class="font-bold text-xl mb-2"  @click="router.push('/detail/destination')">5 Day Sumba Island</button>
                        <p class="text-gray-700 text-base">5 Nov - 10 Nov 2024</p>
                        <p class="text-gray-900 text-2xl mt-4">$1,420/Person</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="px-4 sm:px-10 lg:px-20 mt-20 mb-10 w-full space-y-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 ">
                <div class="col-span-12 lg:col-span-4">
                    <div class="border rounded-xl bg-white p-4 flex flex-col items-center text-center">
                        <img src="/asset/image/left-side.svg" alt="Left Side">
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-1">
                </div>
                <div class="col-span-12 lg:col-span-6 space-y-4">
                    <h1 class="text-2xl sm:text-3xl">Safely saved list</h1>
                    <p class="text-gray-700">Neatly arranged for your ease of access. Go to Saved at the top navigation
                        bar, where
                        we save your saved items. We group them based on category. Just a few clicks away from starting
                        your
                        journey!</p>
                    <button class="bg-[#38FF96] py-2 px-6 rounded-full text-white">Learn More</button>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 ">
                <div class="col-span-12 lg:col-span-6 space-y-4">
                    <h1 class="text-2xl sm:text-3xl">Easy Reschedule</h1>
                    <p class="text-gray-700">No more chasing after the airline. Changing your flight is only a matter of
                        a few
                        clicks. Easy Reschedule ultimately saves your time! Open your e-ticket Through My Booking, open
                        the e-
                        ticket of the flight you want to reschedule.</p>
                    <button class="bg-[#38FF96] py-2 px-6 rounded-full text-white">Learn More</button>
                </div>
                <div class="col-span-12 lg:col-span-1">
                </div>
                <div class="col-span-12 lg:col-span-4 flex justify-end">
                    <div class="border rounded-xl bg-white p-4 flex flex-col items-center text-center">
                        <img src="/asset/image/left-side.svg" alt="Left Side">
                    </div>
                </div>
            </div>
        </section>


        <section class="px-4 sm:px-10 lg:px-20 mt-20 mb-10 w-full">
            <h1 class="text-2xl sm:text-3xl font-semibold text-center mb-10 mt-10">Satisfied customers are our best ads
            </h1>
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="border rounded-lg bg-white p-5">
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <h3 class="text-xl font-bold">Anita Wijaya</h3>
                            <p class="text-gray-500">Travel Blogger</p>
                        </div>
                        <span class="text-gray-400">3.4</span>
                    </div>
                    <p class="text-gray-700 mb-7 mt-5">Paket wisata dari TripMaster sangat memudahkan saya dalam
                        merencanakan
                        liburan. Sistem pemesanan mereka yang sederhana membantu saya memilih destinasi dan jadwal
                        perjalanan dengan
                        tepat.</p>
                </div>
                <div class="border rounded-lg bg-white p-5">
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <h3 class="text-xl font-bold">Anita Wijaya</h3>
                            <p class="text-gray-500">Travel Blogger</p>
                        </div>
                        <span class="text-gray-400">3.4</span>
                    </div>
                    <p class="text-gray-700 mb-7 mt-5">Paket wisata dari TripMaster sangat memudahkan saya dalam
                        merencanakan
                        liburan. Sistem pemesanan mereka yang sederhana membantu saya memilih destinasi dan jadwal
                        perjalanan dengan
                        tepat.</p>
                </div>
                <div class="border rounded-lg bg-white p-5">
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <h3 class="text-xl font-bold">Anita Wijaya</h3>
                            <p class="text-gray-500">Travel Blogger</p>
                        </div>
                        <span class="text-gray-400">3.4</span>
                    </div>
                    <p class="text-gray-700 mb-7 mt-5">Paket wisata dari TripMaster sangat memudahkan saya dalam
                        merencanakan
                        liburan. Sistem pemesanan mereka yang sederhana membantu saya memilih destinasi dan jadwal
                        perjalanan dengan
                        tepat.</p>
                </div>
                <div class="border rounded-lg bg-white p-5">
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <h3 class="text-xl font-bold">Anita Wijaya</h3>
                            <p class="text-gray-500">Travel Blogger</p>
                        </div>
                        <span class="text-gray-400">3.4</span>
                    </div>
                    <p class="text-gray-700 mb-7 mt-5">Paket wisata dari TripMaster sangat memudahkan saya dalam
                        merencanakan
                        liburan. Sistem pemesanan mereka yang sederhana membantu saya memilih destinasi dan jadwal
                        perjalanan dengan
                        tepat.</p>
                </div>
                <div class="border rounded-lg bg-white p-5">
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <h3 class="text-xl font-bold">Anita Wijaya</h3>
                            <p class="text-gray-500">Travel Blogger</p>
                        </div>
                        <span class="text-gray-400">3.4</span>
                    </div>
                    <p class="text-gray-700 mb-7 mt-5">Paket wisata dari TripMaster sangat memudahkan saya dalam
                        merencanakan
                        liburan. Sistem pemesanan mereka yang sederhana membantu saya memilih destinasi dan jadwal
                        perjalanan dengan
                        tepat.</p>
                </div>
                <div class="border rounded-lg bg-white p-5">
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <h3 class="text-xl font-bold">Anita Wijaya</h3>
                            <p class="text-gray-500">Travel Blogger</p>
                        </div>
                        <span class="text-gray-400">3.4</span>
                    </div>
                    <p class="text-gray-700 mb-7 mt-5">Paket wisata dari TripMaster sangat memudahkan saya dalam
                        merencanakan
                        liburan. Sistem pemesanan mereka yang sederhana membantu saya memilih destinasi dan jadwal
                        perjalanan dengan
                        tepat.</p>
                </div>
            </div>
        </section>

        <section class="flex justify-center px-4 sm:px-10 lg:px-20 mt-10 mb-10">
            <img src="/asset/image/WeMakeEvery.svg" alt="We Make Every">
        </section>

        <Footer />
    </div>
</template>
