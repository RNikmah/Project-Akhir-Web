<script setup>
import Navbar from '@/components/Navbar.vue';
import Footer from '@/components/Footer.vue';
</script>

<template>
  <div class="about bg-[#D0EFFF] min-h-screen w-full">
    <Navbar />
    <div class="relative flex justify-center items-center py-8 ">
      <div class="relative w-[1290px] mt-40">
        <img src="/public/asset/image/about.png" alt="Background" class="w-full min-h-44 object-cover rounded-xl">
        <div class="absolute min-h-44 inset-0 flex flex-col justify-center items-center">
          <button class="bg-white text-black px-4 py-1 rounded-full font-medium shadow mb-4">Career</button>
          <h1 class="text-black text-4xl font-bold mb-4">Let’s Collaborate</h1>
          <button class="bg-white text-black px-6 py-2 rounded-full font-medium shadow-lg">Explore
            Opportunities</button>
        </div>
      </div>
    </div>
    <div class="max-w-7xl mx-auto px-6 py-16">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
          <h1 class="text-3xl font-bold text-gray-800 mb-4">We’re Shaping the Future of Travel Experiences</h1>
          <p class="text-gray-600">
            Gain insights into traveler preferences such as favorite destinations, travel seasons, and activity
            preferences across various countries and cultures, allowing you to create immersive and unforgettable
            experiences that truly resonate with your audience. Keep travelers informed with updates on the latest
            travel trends, tips, and exclusive offers tailored to their destinations and interests, making it easier
            than ever to build a community of explorers who share your passion for adventure.
          </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
          <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h2 class="text-4xl font-bold text-gray-800">5 Million</h2>
            <p class="mt-2 text-gray-600">Travelers Engaged Every Month</p>
          </div>

          <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h2 class="text-4xl font-bold text-gray-800">24 Million</h2>
            <p class="mt-2 text-gray-600">Personalized Travel Notifications Sent Every Day</p>
          </div>

          <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h2 class="text-4xl font-bold text-gray-800">17 Million</h2>
            <p class="mt-2 text-gray-600">Daily Interactions on Travel Tips & Guides</p>
          </div>

          <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h2 class="text-4xl font-bold text-gray-800">11</h2>
            <p class="mt-2 text-gray-600">Exclusive Travel Packages & Partnerships</p>
          </div>
        </div>
      </div>
    </div>
    <Footer />
  </div>
</template>
