<script setup>
import Navbar from '../components/Navbar.vue'
import { useRouter } from 'vue-router'

const router = useRouter()
</script>

<template>
    <div class="bg-[#D0EFFF] min-h-screen w-screen">
        <Navbar />
        <div class="flex">
            <div class="container mx-auto px-4 flex flex-col lg:flex-row gap-6 mt-48 mb-20">
                <div class="bg-white shadow-lg rounded-lg p-6 flex-1">
                    <h1 class="text-2xl font-bold mb-4">Cart</h1>
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm font-semibold text-gray-700">
                            <thead>
                                <tr class="border-b border-gray-300">
                                    <th class="pb-2 text-left">
                                        <input type="checkbox" class="mr-4">
                                        ITEM
                                    </th>
                                    <th class="pb-2 text-left">QUANTITY</th>
                                    <th class="pb-2 text-left">PRICE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-300">
                                    <td class="py-4 flex items-center space-x-4 min-w-[200px]">
                                        <input type="checkbox" class="mr-4">
                                        <img src="/public/asset/image/rajaampat.png" alt="item" class="w-16 h-16 rounded-md">
                                        <span class="text-lg font-medium">ITEM</span>
                                    </td>
                                    <td class="py-4 min-w-[150px]">
                                        <div class="flex gap-2 items-center">
                                            <button class="px-2 py-1 rounded border">-</button>
                                            <div class="text-lg font-semibold">1</div>
                                            <button class="px-2 py-1 rounded border">+</button>
                                        </div>
                                        <button class="text-red-500 px-2">Remove</button>
                                    </td>
                                    <td class="py-4 text-lg font-bold text-gray-700 min-w-[120px]">Rp 2.350.000</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <td class="py-4 flex items-center space-x-4 min-w-[200px]">
                                        <input type="checkbox" class="mr-4">
                                        <img src="/public/asset/image/bromo.png" alt="item" class="w-16 h-16 rounded-md">
                                        <span class="text-lg font-medium">ITEM</span>
                                    </td>
                                    <td class="py-4 min-w-[150px]">
                                        <div class="flex gap-2 items-center">
                                            <button class="px-2 py-1 rounded border">-</button>
                                            <div class="text-lg font-semibold">1</div>
                                            <button class="px-2 py-1 rounded border">+</button>
                                        </div>
                                        <button class="text-red-500 px-2">Remove</button>
                                    </td>
                                    <td class="py-4 text-lg font-bold text-gray-700 min-w-[120px]">Rp 2.350.000</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <td class="py-4 flex items-center space-x-4 min-w-[200px]">
                                        <input type="checkbox" class="mr-4">
                                        <img src="/public/asset/image/sumba.png" alt="item" class="w-16 h-16 rounded-md">
                                        <span class="text-lg font-medium">ITEM</span>
                                    </td>
                                    <td class="py-4 min-w-[150px]">
                                        <div class="flex gap-2 items-center">
                                            <button class="px-2 py-1 rounded border">-</button>
                                            <div class="text-lg font-semibold">1</div>
                                            <button class="px-2 py-1 rounded border">+</button>
                                        </div>
                                        <button class="text-red-500 px-2">Remove</button>
                                    </td>
                                    <td class="py-4 text-lg font-bold text-gray-700 min-w-[120px]">Rp 2.350.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
    
                <div class="bg-white shadow-lg rounded-lg p-6 w-full lg:w-1/3 max-h-[280px]">
                    <h2 class="text-xl font-bold mb-4">Subtotal</h2>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span>Subtotal</span>
                            <span>Rp 2.350.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Discount</span>
                            <span>Rp 0.00</span>
                        </div>
                        <div class="flex justify-between font-bold text-lg">
                            <span>Grand total</span>
                            <span>Rp 2.350.000</span>
                        </div>
                    </div>
                    <hr class="mt-5 mb-3">
                    <button @click="router.push('/payment')" class="mt-4 bg-green-400 text-white w-full py-2 rounded hover:bg-green-500 transition">
                        Checkout now
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
