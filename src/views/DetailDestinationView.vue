<script setup>
import Navbar from '../components/Navbar.vue';
import { useRouter } from 'vue-router';
const router = useRouter();

import { ref } from 'vue';
const showModal = ref(false);

function addToCart() {
    showModal.value = true;
}

function closeModal() {
    showModal.value = false;
}
</script>

<template>
    <div class="bg-[#D0EFFF] min-h-screen">
        <Navbar />
        <div class="max-w-screen-xl mx-auto px-4 py-8 ">
            <section class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-center mt-40">
                <div class="relative">
                    <img src="/public/asset/image/sumba_island.png" alt="Sumba Landscape"
                        class="w-full h-auto rounded-lg shadow-md object-cover" style="max-height: 500px;" />
                    <div class="grid grid-cols-4 gap-2 mt-4">
                        <img src="/public/asset/image/bromo.png" alt="Image 1"
                            class="h-24 w-full object-cover rounded-md shadow-md" />
                        <img src="/public/asset/image/rajaampat.png" alt="Image 2"
                            class="h-24 w-full object-cover rounded-md shadow-md" />
                        <img src="/public/asset/image/bromo.png" alt="Image 3"
                            class="h-24 w-full object-cover rounded-md shadow-md" />
                        <img src="/public/asset/image/bromo.png" alt="Image 4"
                            class="h-24 w-full object-cover rounded-md shadow-md" />
                    </div>
                </div>
                <div class="space-y-6">
                    <div>
                        <h1 class="text-4xl font-extrabold text-gray-800">Sumba Island</h1>
                        <p class="mt-2 text-lg text-gray-600">Sumba Island, East Nusa Tenggara</p>
                        <div class="mt-4 flex items-center space-x-2">
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927C9.432 2.032 10.568 2.032 10.951 2.927L12.36 6.23C12.546 6.684 12.977 7 13.463 7H16.92C17.95 7 18.372 8.292 17.543 8.856L14.613 10.83C14.228 11.087 14.073 11.588 14.24 12.015L15.607 15.5C16.037 16.55 14.882 17.45 13.992 16.87L10.771 14.872C10.344 14.599 9.656 14.599 9.229 14.872L6.008 16.87C5.118 17.45 3.963 16.55 4.393 15.5L5.76 12.015C5.927 11.588 5.772 11.087 5.387 10.83L2.457 8.856C1.628 8.292 2.05 7 3.08 7H6.537C7.023 7 7.454 6.684 7.64 6.23L9.049 2.927Z">
                                </path>
                            </svg>
                            <p class="text-gray-700 font-medium">4.9 (62 Reviews)</p>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Amenities</h2>
                        <hr class="my-2" />
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-2 bg-white text-sm font-semibold rounded-full shadow-md">Breakfast,
                                Lunch & Dinner</span>
                            <span class="px-4 py-2 bg-white text-sm font-semibold rounded-full shadow-md">Hotel
                                AC</span>
                            <span class="px-4 py-2 bg-white text-sm font-semibold rounded-full shadow-md">Guide/Tour
                                Leader</span>
                            <span class="px-4 py-2 bg-white text-sm font-semibold rounded-full shadow-md">Transportation
                                AC</span>
                            <span class="px-4 py-2 bg-white text-sm font-semibold rounded-full shadow-md">Tour
                                Tickets</span>
                            <span
                                class="px-4 py-2 bg-white text-sm font-semibold rounded-full shadow-md">Documentation</span>
                            <span class="px-4 py-2 bg-white text-sm font-semibold rounded-full shadow-md">Airport
                                Shuttle</span>
                            <span class="px-4 py-2 bg-white text-sm font-semibold rounded-full shadow-md">Mineral
                                Water</span>
                        </div>
                    </div>

                    <div>
                        <div class="flex items-start gap-4">
                            <svg width="35" height="35" class="mt-2" viewBox="0 0 35 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.2082 16.0416L16.0415 2.91663C17.2018 2.91663 18.3146 3.37756 19.1351 4.19803C19.9556 5.01851 20.4165 6.1313 20.4165 7.29163V13.125H28.6707C29.0935 13.1202 29.5122 13.2074 29.898 13.3805C30.2837 13.5536 30.6272 13.8085 30.9046 14.1276C31.1821 14.4466 31.3868 14.8222 31.5047 15.2282C31.6226 15.6343 31.6508 16.0611 31.5873 16.4791L29.5748 29.6041C29.4694 30.2996 29.1161 30.9336 28.5801 31.3891C28.0441 31.8447 27.3616 32.0912 26.6582 32.0833H10.2082M10.2082 16.0416V32.0833M10.2082 16.0416H5.83317C5.05962 16.0416 4.31776 16.3489 3.77078 16.8959C3.22379 17.4429 2.9165 18.1847 2.9165 18.9583V29.1666C2.9165 29.9402 3.22379 30.682 3.77078 31.229C4.31776 31.776 5.05962 32.0833 5.83317 32.0833H10.2082"
                                    stroke="#1E1E1E" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div>
                                <h3 class="text-lg font-bold text-gray-800">Self Check-in</h3>
                                <p class="text-gray-600">Check yourself in with our mobile app</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 mt-4">
                            <svg width="35" height="35" class="mt-2" viewBox="0 0 35 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M32.0832 16.1583V17.5C32.0814 20.6448 31.0631 23.7047 29.1801 26.2235C27.2972 28.7423 24.6505 30.5849 21.6347 31.4765C18.619 32.3682 15.3958 32.2611 12.4459 31.1713C9.49604 30.0814 6.97746 28.0672 5.26582 25.4291C3.55418 22.7909 2.7412 19.6701 2.94812 16.5321C3.15503 13.3942 4.37076 10.4071 6.414 8.01657C8.45723 5.62599 11.2185 3.95994 14.2859 3.26689C17.3534 2.57383 20.5627 2.89091 23.4353 4.17084M32.0832 5.83334L17.4998 20.4313L13.1248 16.0563"
                                    stroke="#1E1E1E" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div>
                                <h3 class="text-lg font-bold text-gray-800">Clean Accomodation</h3>
                                <p class="text-gray-600">CHSE- certified accomodations for applying hygiene protocol</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 bg-green-100 rounded-lg shadow-lg flex justify-between items-center">
                        <div>
                            <p class="text-sm text-gray-500">Price starts from</p>
                            <p class="text-3xl font-bold text-green-600">Rp 2.150.000</p>
                        </div>
                        <div class="flex gap-2">
                            <button @click="addToCart"
                                class="px-6 py-2 bg-red-500 text-white font-semibold rounded-lg hover:bg-green-600 shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M7 22q-.825 0-1.412-.587T5 20t.588-1.412T7 18t1.413.588T9 20t-.587 1.413T7 22m10 0q-.825 0-1.412-.587T15 20t.588-1.412T17 18t1.413.588T19 20t-.587 1.413T17 22M5.2 4h14.75q.575 0 .875.513t.025 1.037l-3.55 6.4q-.275.5-.737.775T15.55 13H8.1L7 15h11q.425 0 .713.288T19 16t-.288.713T18 17H7q-1.125 0-1.7-.987t-.05-1.963L6.6 11.6L3 4H2q-.425 0-.712-.288T1 3t.288-.712T2 2h1.625q.275 0 .525.15t.375.425z" />
                                </svg>
                            </button>
                            <button @click="router.push('/chekout')"
                                class="px-6 py-2 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600 shadow-md">
                                Booking
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mt-10">
                <h2 class="text-2xl font-bold text-black mb-4">Itinerary</h2>
                <p class="text-gray-700 mb-6">
                    Nikmati pesona keindahan alam dan budaya Sumba selama 6 hari 5 malam. Perjalanan ini mencakup
                    destinasi-destinasi ikonik yang menampilkan perpaduan antara pantai eksotis, bukit hijau, desa adat,
                    hingga air terjun yang memukau. Pengalaman ini akan membawa Anda lebih dekat dengan kearifan lokal
                    dan panorama menakjubkan yang tak terlupakan.
                </p>
                <div class="space-y-6">
                    <div>
                        <h3 class="text-lg font-bold text-black">Hari 1: Kedatangan di Sumba Barat Daya</h3>
                        <ul class="list-disc list-inside text-gray-700 mt-2">
                            <li>Tiba di Bandara Tambolaka.</li>
                            <li>Check-in hotel/penginapan dan istirahat.</li>
                            <li>Kunjungan ke Pantai Mananga Aba (Pantai Kita) untuk menikmati matahari terbenam.</li>
                            <li>Makan malam di restoran lokal.</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-black">Hari 2: Eksplorasi Alam & Budaya</h3>
                        <ul class="list-disc list-inside text-gray-700 mt-2">
                            <li>Pagi: Berkunjung ke Bukit Lendongara, pemandangan bukit savana hijau yang memukau.</li>
                            <li>Siang: Menjelajahi Desa Adat Ratenggaro, dengan rumah tradisional khas Sumba.</li>
                            <li>Sore: Menikmati keindahan Pantai Bwanwa dan Pantai Watu Maladong.</li>
                            <li>Kembali ke hotel dan istirahat.</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-black">Hari 3: Air Terjun & Petualangan Alam</h3>
                        <ul class="list-disc list-inside text-gray-700 mt-2">
                            <li>Pagi: Perjalanan menuju Air Terjun Lapopu, salah satu air terjun tertinggi di Sumba.
                                Nikmati berenang atau berfoto di sini.</li>
                            <li>Siang: Piknik atau makan siang di area air terjun.</li>
                            <li>Sore: Kunjungan ke Danau Weekuri, laguna biru alami yang cocok untuk berenang.</li>
                            <li>Mengunjungi Pantai Mandorak di sekitar danau.</li>
                            <li>Kembali ke hotel/penginapan.</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-black">Hari 4: Jelajah Sumba Timur</h3>
                        <ul class="list-disc list-inside text-gray-700 mt-2">
                            <li>Pagi: Perjalanan menuju Air Terjun Lapopu, salah satu air terjun tertinggi di Sumba.
                                Nikmati berenang atau berfoto di sini.</li>
                            <li>Siang: Piknik atau makan siang di area air terjun.</li>
                            <li>Sore: Kunjungan ke Danau Weekuri, laguna biru alami yang cocok untuk berenang.</li>
                            <li>Mengunjungi Pantai Mandorak di sekitar danau.</li>
                            <li>Kembali ke hotel/penginapan.</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-black">Hari 5: Budaya & Tenun Tradisional</h3>
                        <ul class="list-disc list-inside text-gray-700 mt-2">
                            <li>Pagi: Kunjungi Desa Adat Prailiu untuk melihat kerajinan kain tenun ikat khas Sumba.
                            </li>
                            <li>Interaksi dengan penduduk lokal dan belajar proses pembuatan tenun.</li>
                            <li>Siang: Menikmati makan siang dengan hidangan khas Sumba.</li>
                            <li>Sore: Berbelanja oleh-oleh di pasar lokal.</li>
                            <li>Kembali ke hotel dan istirahat.</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-black">Hari 6: Kepulangan</h3>
                        <ul class="list-disc list-inside text-gray-700 mt-2">
                            <li>Sarapan dan bersantai di penginapan.</li>
                            <li>Menuju Bandara Waingapu untuk penerbangan kembali ke kota asal.</li>
                            <li>Perjalanan selesai dengan kenangan indah dari Sumba Island.</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- modal chart success  -->
    <div v-if="showModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <div class="flex justify-center mb-4">
                <i class="fas fa-check-circle text-green-500 text-5xl"></i>
            </div>
            <h2 class="text-2xl font-bold text-center text-green-500">Item Added to Cart</h2>
            <p class="text-center text-gray-600 mt-2">You have successfully added an item to your cart!</p>
            <hr class="my-4">
            <button class="bg-green-500 text-white px-6 py-2 rounded mt-4 w-full" @click="closeModal">Continue</button>
        </div>
    </div>
</template>

<style>
.container {
    max-width: 1200px;
}
</style>
