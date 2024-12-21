<script setup>
import Navbar from '../components/Navbar.vue'
import { useRouter } from 'vue-router'

const router = useRouter()
</script>

<template>
    <div class="bg-[#D0EFFF] min-h-screen w-full flex flex-col">
        <Navbar />
        <div class="flex-1">
            <div class="container mx-auto px-4 mt-40">
                <div class="text-gray-500 text-sm mb-6">
                    <span>Shipping Address</span>
                    <span class="mx-2">&gt;</span>
                    <span class="font-bold  cursor-pointer" @click="router.push('/chekout')">Checkout</span>
                    <span class="mx-2">&gt;</span>
                    <span class="font-bold text-black cursor-pointer" @click="router.push('/payment')">Payment</span>
                </div>
            </div>

            <div class="container mx-auto px-4 flex flex-col lg:flex-row gap-6 mt-10 mb-20">
                <div class="bg-white shadow-lg rounded-lg p-6 flex-1">
                    <h1 class="text-2xl font-bold mb-4">Select payment methods</h1>
                    <form class="space-y-4">
                        <div>
                            <label for="card-number" class="block text-sm font-semibold mb-1">Card number</label>
                            <input id="card-number" type="text"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                placeholder="Card number" />
                        </div>
                        <div>
                            <label for="name-on-card" class="block text-sm font-semibold mb-1">Name on card</label>
                            <input id="name-on-card" type="text"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                placeholder="Name on card" />
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-1">
                                <label for="expiration" class="block text-sm font-semibold mb-1">Expiration date
                                    (MM/YY)</label>
                                <input id="expiration" type="text"
                                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                    placeholder="MM/YY" />
                            </div>
                            <div class="flex-1">
                                <label for="cvv" class="block text-sm font-semibold mb-1">CVV</label>
                                <input id="cvv" type="text"
                                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                    placeholder="CVV" />
                            </div>
                        </div>
                        <div>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                Same as my shipping address
                            </label>
                        </div>
                        <div>
                            <label for="full-name" class="block text-sm font-semibold mb-1">Full name *</label>
                            <input id="full-name" type="text"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                placeholder="Your full name" />
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold mb-1">Email address *</label>
                            <input id="email" type="email"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                placeholder="Your email address" />
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-semibold mb-1">Phone number *</label>
                            <input id="phone" type="tel"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                placeholder="Your phone number" />
                        </div>
                        <div>
                            <label for="address" class="block text-sm font-semibold mb-1">Street name and house number
                                *</label>
                            <input id="address" type="text"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                placeholder="Your street address" />
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-1">
                                <label for="city" class="block text-sm font-semibold mb-1">City *</label>
                                <input id="city" type="text"
                                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                    placeholder="Your city" />
                            </div>
                            <div class="flex-1">
                                <label for="zip" class="block text-sm font-semibold mb-1">Code pos *</label>
                                <input id="zip" type="text"
                                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                    placeholder="Postal code" />
                            </div>
                        </div>
                    </form>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-6 w-full lg:w-1/3 max-h-[280px]">
                    <h2 class="text-xl font-bold mb-4">Order Summary</h2>
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
                    <button  @click="router.push('/invoice')" class="mt-4 bg-green-400 text-white w-full py-2 rounded hover:bg-green-500 transition">
                        Checkout now
                    </button>
                </div>
            </div>
        </div>
    </div>
    
</template>
