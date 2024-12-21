<script setup>
import { ref } from 'vue';
import Navbar from '@/components/Navbar.vue';

const isModalVisible = ref(false);

const openModal = () => {
    isModalVisible.value = true;
};
const closeModal = () => {
    isModalVisible.value = false;
};
</script>
<template>
    <div class="min-h-screen w-full flex flex-col bg-[#93DAFF]">
        <Navbar />
        <div class="min-h-screen">
            <div class="h-[30vh]">
                <div class="container mx-auto p-4 sm:p-6 mt-20">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <div class="lg:col-span-2 bg-white p-4 sm:p-6 rounded-lg shadow-md">
                            <div class="flex flex-wrap justify-between items-center mb-4">
                                <div>
                                    <h2 class="text-lg font-bold">INVOICE #42344 - 0002</h2>
                                    <p class="text-gray-500">Due next month</p>
                                </div>
                                <div>
                                    <p class="text-2xl font-bold text-green-500">$2250.65</p>
                                    <a href="#" class="text-blue-500">Copy link</a>
                                </div>
                            </div>
                            <div class="flex flex-wrap space-x-2 space-y-2 sm:space-y-0 mb-4">
                                <button class="bg-green-500 text-white px-4 py-2 rounded">
                                    <i class="fas fa-paper-plane mr-2"></i>Send Invoice
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded">
                                    <i class="fas fa-edit mr-2"></i>Edit Invoice
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded">
                                    <i class="fas fa-sticky-note mr-2"></i>Add Note
                                </button>
                            </div>
                            <div class="bg-gray-50 p-4 rounded mb-4">
                                <h3 class="font-bold mb-2"><i class="fas fa-history text-gray-500 mr-2"></i>History</h3>
                                <ul class="space-y-2">
                                    <li class="flex items-center text-gray-600">
                                        <i class="fas fa-envelope text-gray-500 mr-2"></i>
                                        <p>Invoice was sent to FufuFafa21@gmail.com</p>
                                    </li>
                                    <li class="flex items-center text-gray-600">
                                        <i class="fas fa-check-circle text-gray-500 mr-2"></i>
                                        <p>Invoice was finalized</p>
                                    </li>
                                    <li class="flex items-center text-gray-600">
                                        <i class="fas fa-plus-circle text-gray-500 mr-2"></i>
                                        <p>Invoice #42344 - 0002 was created</p>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="font-bold mb-2"><i class="fas fa-list text-gray-500 mr-2"></i>Items</h3>
                                <div class="overflow-x-auto">
                                    <table class="w-full text-left border-collapse">
                                        <thead>
                                            <tr class="bg-gray-200">
                                                <th class="p-2">Description</th>
                                                <th class="p-2">QTY</th>
                                                <th class="p-2">Price</th>
                                                <th class="p-2">Total Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="p-2">Bromo & Raja ampat</td>
                                                <td class="p-2">1</td>
                                                <td class="p-2">$1950.25</td>
                                                <td class="p-2">$1950.25</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2">Bromo & Raja ampat</td>
                                                <td class="p-2">1</td>
                                                <td class="p-2">$500.35</td>
                                                <td class="p-2">$500.35</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="bg-gray-50 p-4 rounded mb-6">
                                <h3 class="font-bold text-lg mb-4"><i
                                        class="fas fa-info-circle text-blue-500 mr-2"></i>Details</h3>
                                <p class="mt-3"><i class="fas fa-user text-gray-500 mr-2"></i>Name: Fufu Fafa</p>
                                <p class="mt-3"><i class="fas fa-envelope text-gray-500 mr-2"></i>Email:
                                    FufuFafa21@gmail.com</p>
                                <p class="mt-3"><i class="fas fa-calendar-alt text-gray-500 mr-2"></i>Date: Aug 6, 3:16
                                    AM</p>
                                <p class="mt-3"><i class="fas fa-file-invoice text-gray-500 mr-2"></i>Invoice #: 42344 -
                                    0002</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded mb-6">
                                <h3 class="font-bold text-lg mb-4"><i
                                        class="fas fa-question-circle text-yellow-500 mr-2"></i>Ask Us</h3>
                                <img src="/public/asset/image/Question.svg" alt="Question Icon"
                                    class="w-16 h-16 mx-auto mb-4">
                                <p>If you have a question or encounter a problem, we can help you any time.</p>
                                <div class="flex justify-center">
                                    <button class="bg-green-500 text-white px-4 py-2 rounded mt-4">
                                        <i class="fas fa-envelope-open-text mr-2"></i>Contact Us
                                    </button>
                                </div>
                            </div>
                            <div class="mt-6">
                                <label class="flex items-center mb-4">
                                    <input type="checkbox" class="mr-2">
                                    <span class="text-gray-600">My billing address is the same as my shipping
                                        address.</span>
                                </label>
                                <div class="flex justify-center">
                                    <button class="bg-green-500 text-white px-6 py-2 rounded" @click="openModal">
                                        <i class="fas fa-check mr-2"></i>Confirm
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-[#D0EFFF] h-[50vh]"></div>
        </div>
    </div>



    <div v-if="isModalVisible" class="fixed inset-0 bg-gray-800 bg-opacity-50 z-40 flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <div class="flex justify-center mb-4">
                <i class="fas fa-check-circle text-green-500 text-5xl"></i>
            </div>
            <h2 class="text-2xl font-bold text-center text-green-500">Payment Successful</h2>
            <p class="text-center text-gray-600 mt-2">Successfully paid 2,992,500 to AyoKesitu</p>
            <hr class="my-4">
            <div class="text-sm text-gray-700 mb-4">
                <p class="mt-3"><strong>Transaction Number:</strong> 1234 5678 9932</p>
                <p class="mt-3"><strong>Date:</strong> 19 August 2045 • 12:45</p>
                <p class="mt-3"><strong>Status:</strong> <span class="text-green-500">✔ Success</span></p>
                <p class="mt-3"><strong>Type of Transactions:</strong> QRIS</p>
                <p class="mt-3"><strong>Nominal:</strong> Rp 2,992,500</p>
            </div>
            <h3 class="text-center text-green-500 text-xl font-bold">Rp 2,992,500</h3>
            <button class="bg-green-500 text-white px-6 py-2 rounded mt-4 w-full" @click="closeModal">Continue</button>
        </div>
    </div>

</template>
