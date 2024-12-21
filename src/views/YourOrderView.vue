<script setup>
import Navbar from '@/components/Navbar.vue';
import { useRouter } from 'vue-router'
const router = useRouter()
</script>

<template>
    <div class="bg-[#D0EFFF] min-h-screen w-full flex flex-col">
        <Navbar />
        <div class="mt-6 flex justify-center px-5">
            <div class="w-full max-w-6xl p-4 sm:p-6 bg-white shadow-xl rounded-lg border border-gray-300 mt-36">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Pesanan Saya</h2>
                <!-- Tabel dengan Scroll Horizontal -->
                <div class="overflow-x-auto px-4 sm:px-6">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-100 border-b">
                                <th class="py-3 px-4 text-gray-700 font-semibold">#</th>
                                <th class="py-3 px-4 text-gray-700 font-semibold">Nama Produk</th>
                                <th class="py-3 px-4 text-gray-700 font-semibold">Harga</th>
                                <th class="py-3 px-4 text-gray-700 font-semibold">Tanggal Pesan</th>
                                <th class="py-3 px-4 text-gray-700 font-semibold">Status</th>
                                <th class="py-3 px-4 text-gray-700 font-semibold">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Baris pertama -->
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-3 px-4 text-gray-600">1</td>
                                <td class="py-3 px-4 text-gray-600">Bromo</td>
                                <td class="py-3 px-4 text-gray-600">Rp 50.000</td>
                                <td class="py-3 px-4 text-gray-600">20 Desember 2024</td>
                                <td class="py-3 px-4 text-green-500 font-medium flex items-center">
                                    <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Selesai
                                </td>
                                <td class="py-3 px-4">
                                    <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600" @click="router.push('/invoice')">
                                        Lihat Invoice
                                    </button>
                                </td>
                            </tr>
                            <!-- Baris kedua -->
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-3 px-4 text-gray-600">2</td>
                                <td class="py-3 px-4 text-gray-600">Raja Ampat</td>
                                <td class="py-3 px-4 text-gray-600">Rp 30.000</td>
                                <td class="py-3 px-4 text-gray-600">18 Desember 2024</td>
                                <td class="py-3 px-4 text-yellow-500 font-medium flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12A1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z">
                                            <animateTransform attributeName="transform" dur="0.75s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12" />
                                        </path>
                                    </svg>
                                    Proses
                                </td>
                                <td class="py-3 px-4">
                                    <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600" @click="router.push('/invoice')">
                                        Lihat Invoice
                                    </button>
                                </td>
                            </tr>
                            <!-- Baris ketiga -->
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-3 px-4 text-gray-600">3</td>
                                <td class="py-3 px-4 text-gray-600">Kayu Tangan</td>
                                <td class="py-3 px-4 text-gray-600">Rp 75.000</td>
                                <td class="py-3 px-4 text-gray-600">15 Desember 2024</td>
                                <td class="py-3 px-4 text-blue-500 font-medium flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M12 17q.425 0 .713-.288T13 16v-4q0-.425-.288-.712T12 11t-.712.288T11 12v4q0 .425.288.713T12 17m0-8q.425 0 .713-.288T13 8t-.288-.712T12 7t-.712.288T11 8t.288.713T12 9m0 13q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                                    </svg>
                                    Menunggu Pembayaran
                                </td>
                                <td class="py-3 px-4">
                                    <button class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600" @click="router.push('/checkout')">
                                        Lunaskan
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>
