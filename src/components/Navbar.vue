<script setup>
import { useRouter } from 'vue-router';
import { ref, onMounted, onUnmounted } from 'vue';

const router = useRouter();
const showModal = ref(false);
const RegisshowModal = ref(false);
const showSidebar = ref(false);
const isAuthenticated = ref(false);
const showUserDropdown = ref(false);
const isScrolled = ref(false);
const toggleModal = () => {
    if (!showModal.value) {
        RegisshowModal.value = false; 
    }
    showModal.value = !showModal.value; 
};

const RegistoggleModal = () => {
    if (!RegisshowModal.value) {
        showModal.value = false; 
    }
    RegisshowModal.value = !RegisshowModal.value;
};


const toggleSidebar = () => {
    showSidebar.value = !showSidebar.value;
};

const toggleUserDropdown = () => {
    showUserDropdown.value = !showUserDropdown.value;
};

const logout = () => {
    isAuthenticated.value = false;
    showUserDropdown.value = false;
};

const handleGuestClick = () => {
    isAuthenticated.value = true;
};

const handleScroll = () => {
    isScrolled.value = window.scrollY > 50;
};

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});
</script>


<template>
    <nav :class="[
        'w-full z-20 top-0 start-0 p-2 fixed transition-colors duration-300',
        isScrolled ? 'bg-white shadow-md' : 'bg-transparent'
    ]">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
            <a @click="router.push('/')" class="flex items-center space-x-3 cursor-pointer rtl:space-x-reverse">
                <img src="/asset/image/logo.svg" class="h-24" alt="ayokesitu-logo.png">
            </a>
            <button @click="toggleSidebar" class="md:hidden text-gray-900 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
            <div class="hidden md:flex md:order-2 space-x-3 rtl:space-x-reverse">
                <template v-if="isAuthenticated">
                    <div class="relative flex items-center space-x-4">
                        <button @click="router.push('/chart')" class="text-gray-900 focus:outline-none">
                            <svg width="46" height="46" viewBox="0 0 46 46" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="46" height="46" fill="url(#pattern0_333_312)" />
                                <defs>
                                    <pattern id="pattern0_333_312" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_333_312" transform="scale(0.01)" />
                                    </pattern>
                                    <image id="image0_333_312" width="100" height="100"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAD4ElEQVR4nO3dS4iOURzH8UNjISK3pVyGhaTcFzNyCckozIKFopQFYSVFxKQow8KCkSkrl2zMRm4bG5cNEWJhMSnlkuuY3C9fPc1BpnnP+z7veJ5znvP/f+pdz/88//d53znnd97zGKOUUkoppXICjAaWAStKvBqACUCfvGoSC9gH/KAyT4EmYKDvuqMENFKdx8BU3/VHBzhN9d4Dk32PISrAKXqnHejvexzRAJbTe1t9jyMqwN4UX+o9eeR7DNEBRgJLHf/2bgc+OpoyyfcYxAH2OBqyzXd94gBTHA256rs+cZJZOvCkREO+A8N81ygO0Oq4S1b5rk8cu95Vyinf9YkDDAA+lWjIa6DGd43iAJccd0m97/rEATY7GrLPd33iAGMcDbnnuz6RgIeOpozyXZ84wAFHQ9b7rk8cYK6jIed81ycO0A94W6IhH4CVjoVKKa+FuWZFwBnHXaK6PMttKgCssX9Uld8Ykv2dAozoZbAlyfzMG2KbcsP3SAtiQV4N2el7pAWQRBND8mrIZN+jLYBruTSjgtBKddmdW0NsU47ZP6x6Vpd3Q5LdKqpnHckkOqTQSrqzuTajwtBKsvUhhlaSjQ0xtJKq3UszKgytJGrx3ZBm31cgMI2+GzLH9xUQuVziaEiNI7SS5roJgYZWfzSZEACr/9YkWp0JATDcfn5K1pH7comLhla0mZAAO5BtgwmJhlbUmpAID63aTYgEh1YtJkSCQ6tGEyKhodV378slLsBFZLluQgZsQpYmEzKBoVWdCR3wABk6glouKUVQaNVmikBQaLXBFIENrd4Qv1pTFAJCq3ZTJAJCqxZTJMkZv0An8ZpligY4QpxuFfK0bxvtviS+tat6U1TAPOAr8dhiig5YHMH3yc+ozioGxgGXKaYHwGwTI2AacAi4bU+jC1Gn3UR+HFgC9PV93ZRSSimlVKEBtfZpcA2+8gVgqA3VkhO8Z4o8GJquB5Pd72EOcC+5MDnVMD75kT/wrVsNyfxot5jHOgEHK5icNWdcwwK7ScHlZrJAamKW8rCBjRneGeWa8duVQi61p/isfpeiIW+z2KZpP6bSWGliBKwjvbUZvCm6f2eUc97ECDhaRUMOZ5DPpPXCxAg4WcXFOBHATyY+G4Fnx5ey/z/XMIPYt/xUClhUxcVYmMEmvlcpa2g1MUqCHuBOigtxN4twyD6KPM2mhokmVsD0Mk8P/e1jVo8KT2bgdtJXiV0mdnStG71wXITnWWfYdovSlTJ3xq5oJ4XdAYPtCdm3bIbdad+1yQEEg3L8KXfyiI0L9k3wxT6avDXqjymllFJKKaWUUkqZf/0CHTVO+uarCf0AAAAASUVORK5CYII=" />
                                </defs>
                            </svg>
                        </button>
                        <div class="relative">
                            <button @click="toggleUserDropdown" class="text-gray-900 focus:outline-none">
                                <svg width="67" height="40" viewBox="0 0 67 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="40" height="40" fill="url(#pattern0_509_49)" />
                                    <rect x="47" y="30" width="20" height="20" transform="rotate(-90 47 30)"
                                        fill="url(#pattern1_509_49)" />
                                    <defs>
                                        <pattern id="pattern0_509_49" patternContentUnits="objectBoundingBox" width="1"
                                            height="1">
                                            <use xlink:href="#image0_509_49" transform="scale(0.0111111)" />
                                        </pattern>
                                        <pattern id="pattern1_509_49" patternContentUnits="objectBoundingBox" width="1"
                                            height="1">
                                            <use xlink:href="#image1_509_49" transform="scale(0.0111111)" />
                                        </pattern>
                                        <image id="image0_509_49" width="90" height="90"
                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFhElEQVR4nO2da4hVVRTHdzWmaY9xIkgsqCyi1xd7o5HYC6Igs+f0NCuICcyk+hpRZEEgAykGEhRIQfSSMEsasUnMHpMW0ZcGP6Rm44yZWTOk/WIxS5wZpnvPOXevffaZ2T8QZObeM/+1uOfstddea13nEolEIpFIJBKJRCKRDeAY4FJgIfAy8D6wDfgZ6AMG9F+f/mybvuYlfc8lco2Mf258AZwGPAGsAfbROL8DHwKLgOluPAMcB9wHfAocwo6DwCfAvcAkN14AjtdP2g7C8xvwLHCSG6sAE4CngF7KRzQsEU1uLAFcBXxPfPwEXOuqjjwTgVeBf4kX0dYOTHRVBDgD2Ex1+AY421UJuR09hWmhkbBwrqsCwDzgb6rLAHCnixngUeOYOBRiwyMuRoBbdHMwVjgE3OFiQp5rQD9jjwHgehcDwDkVXfjyLJAzynbyRA2Lxjpflxpn62bEmq3Ac7q7PAuYAkwGLgCeAXYShvaynHy18Y6vG7g1g44W4AvsEVtnh/Hu8ATRD4ZGbQaac+hp0VyKddQjhwxNtt4dbphk4az4ETixoK5m4AXjO22xf4+ObswJhqnOg8CVHjS2YUeP5NT9eLO2EU8bGvGOR50dhjqX+NJZ6/jpV0MDbvCo9SZDnTtNj8WA+w3FH/C50ADHAvsN9bb60jqaeDlItaLTQO9GQ70f+9Y7tCTAMjO3ykDzKkO9snBPcwaipe7CklcMNEsBjiWPOwPRUtxiyfMGmiWmtuQ934KbNItlyUqvogd1v2asuc9r+ZnWwlmzyZvgI7o7A+i+2KdgKR4MkWSf6lFzc6DDiAVVWlQOc43nk/gQLHUeRX8QQPDn3gSHfXT4WxA1+W7NSm+Cwy2GQpdPwdsDCF7vTfAR3Z8F0N3tU/CeAIL350n2ZzwM+DOA7h7nUbREBCFY7cPZEr0AbwXS3F9FRwuve9D7BuHor9qj4zC7GkmX6i52N+HoqdpiOJTCdW/AY4Slu2rh3cgTjJYCOk/WOyIkXsM76eMLzZo8CRvtT/yoBJ3vVnELPpLlOTSuoByWVi2pNBodkZx61+LBqqVJq+romT4dLc+/vSUY0RG5o/d67zvX3urQrM6hT3aV1V0IhxgibcUhOQBcmEPfRfqekLRZOHp6wB6V7iIlslpDLe8NwT/Aqd4drYbIlAAr/pJbEbhNqowarFCar9eSa1qx1q93hxshoxh8skdiZeBGqesz0DtZr73CIF/Tal3k6GOL26ntcoU/uQU/6fM8HW/tMJ/90WARei9wl6nAbDa0Nljj/WTMhejbgXNdJIiWgllJKUSfEkqkDBXJwz7gPBcZwPnAHzltWRS6WSjPoJOFLlKAh3PY8V3QZqEhMWuWppxvgaNdpIg2ySlnsENsnVWWSJncUo8HXORIBi6DHcvKblGW9t1aXOYiB7i8jg1bQoai/ydyRp2S3l7gChcp8jjQ8ttaGbozXQwAc+pMnemXRcfFOcilVimF/O46FxPA7Rl6XN4scuhqoPUU4O06WiWBNt/FiJQJZHD2LkkclaTvKOBunehYz8nR3YHD0BxGluFVXwI3B9Ql9dJfZdDVH92Inzqjf7L2vGzQ3MMko+ydNKFuyqhFFr45rkpoNFIv9Btp5HKdAzKhwZBzrtZG5xlBtCWa6KKg0e0FxjpICe864EV9ps7ShtKpWlvXpP8/XX/XqoO61xco1RVty0qPk30AzC6hrCwLW0vbVlvB4KdwsaYZy6ZHD5vDJohCwuDwKTHylxIcvFsHdReacFPlkcf3yJQA49N1ufZaq8imUgDTpIFdWsnq5B2y0qfXajMrCag6DJafzQQekkpNLRvo0q8C6R3y9SC9+rMufY28doG+N309SCKRSCQSiUQikUi4jPwHVQ3JWmkhMXgAAAAASUVORK5CYII=" />
                                        <image id="image1_509_49" width="90" height="90"
                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAABNklEQVR4nO3asWoCQRhF4dXCVfC9TRGCrY0PYSG+kVUgJIGUJwzYpUg3v3vnfHWKn8NlYzHTJEmSJEmSpEUBZuAVeAe+gROwq74rMfKVv07Vt40Qufmsvm+EyM1H9Y0jRG7equ8cIfK1/V31rYsFbIDLP5FvwLb61sXCyEaOgEs2cgRcspEj4JKNHAGXbOQIuGQjR8AlGzkCLtnIEXDJRo6ASzZyBFyykSPgkrtEnn3c0if0iy+I+oS++4LI0DmAg5+OPqFn/xl2gj/v+sHYxo6EyzZ2JFy2sSPhso0dCZdt7Ei4bGNHwmUbOxIu29iRcNnGjoTLNnYkXLaxI+Gy+/GRzvPFPva8aeTYX8Cq+s4RYv8A6+obR4h9rr4tNfbx8bloSz4D++q7YgErv8uSJEmSJE3JfgFhVy9RbsoXswAAAABJRU5ErkJggg==" />
                                    </defs>
                                </svg>
                            </button>
                            <div v-if="showUserDropdown"
                                class="absolute right-0 mt-2 z-40 w-48 bg-[#D0EFFF] rounded-lg shadow-lg border border-gray-200">
                                <div class="flex justify-center py-4">
                                    <img src="/public/logo.png" alt="User Avatar"
                                        class="h-16 w-16 rounded-full object-cover">
                                </div>
                                <ul class="py-2">
                                    <li>
                                        <button @click="router.push('/order')"
                                            class="block px-4 py-2 text-gray-800 w-full text-start hover:bg-[#A8E1FF] hover:text-white rounded">Your
                                            Order</button>
                                    </li>
                                    <hr class="my-2 border-gray-300">
                                    <li>
                                        <button @click="logout"
                                            class="w-full text-left block px-4 py-2 text-gray-800 hover:bg-[#A8E1FF] hover:text-white rounded">Sign
                                            Out</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </template>
                <template v-else>
                    <button @click="toggleModal"
                        class="text-black focus:outline-none font-medium rounded-full text-sm px-5 py-4 text-center bg-[#DBFFEC]">
                        Sign in
                    </button>
                    <button @click="RegistoggleModal"
                        class="text-black focus:outline-none font-medium rounded-full text-sm px-5 py-4 text-center bg-[#DBFFEC]">
                        Sign up
                    </button>
                </template>
            </div>
            <div :class="{ 'hidden': !showModal }"
                class="items-center justify-between w-full md:flex md:w-auto md:order-1 border-0 rounded-full p-4 bg-[#DBFFEC]">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <li class="px-3">
                        <a @click="router.push('/')" :class="{
                            'text-blue-700 font-bold': router.currentRoute.value.path === '/',
                            'text-gray-900': router.currentRoute.value.path !== '/'
                        }"
                            class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 cursor-pointer">
                            <i class="fas fa-house fa-md px-1"></i> Home
                        </a>
                    </li>
                    <li class="px-3">
                        <a @click="router.push('/goingto')" :class="{
                            'text-blue-700 font-bold': router.currentRoute.value.path === '/goingto',
                            'text-gray-900': router.currentRoute.value.path !== '/goingto'
                        }"
                            class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 cursor-pointer">
                            <i class="fas fa-location-arrow fa-md px-1"></i> Going To
                        </a>
                    </li>
                    <li class="px-3">
                        <a @click="router.push('/about')" :class="{
                            'text-blue-700 font-bold': router.currentRoute.value.path === '/about',
                            'text-gray-900': router.currentRoute.value.path !== '/about'
                        }"
                            class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 cursor-pointer">
                            <i class="fas fa-heart fa-md px-1"></i> About Us
                        </a>
                    </li>
                    <li class="px-3">
                        <a @click="handleGuestClick" :class="{
                            'text-blue-700 font-bold': router.currentRoute.value.path === '/guests',
                            'text-gray-900': router.currentRoute.value.path !== '/guests'
                        }"
                            class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 cursor-pointer">
                            <i class="fas fa-user fa-md px-1"></i> Guests
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div v-if="showSidebar" class="fixed inset-0 z-50 bg-black bg-opacity-50" @click="toggleSidebar"></div>
    <div :class="{ 'translate-x-0': showSidebar, '-translate-x-full': !showSidebar }"
        class="fixed top-0 left-0 z-50 w-64 h-full bg-white shadow-lg transform transition-transform duration-300 ease-in-out">
        <div class="flex items-center justify-between p-4">
            <img src="/asset/image/logo.svg" class="h-12" alt="menu-logo">
            <button @click="toggleSidebar"
                class="text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg w-8 h-8 flex items-center justify-center">
                <span class="sr-only">Close sidebar</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <ul class="p-4 space-y-4">
            <li>
                <a @click="router.push('/')"
                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 cursor-pointer">Home</a>
            </li>
            <li>
                <a @click="router.push('/goingto')"
                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 cursor-pointer">Going To</a>
            </li>
            <li>
                <a @click="router.push('/about')"
                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 cursor-pointer">About Us</a>
            </li>
            <li>
                <a @click="handleGuestClick"
                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 cursor-pointer">Guests</a>
            </li>
        </ul>
    </div>

    <div v-if="showModal" tabindex="-1" aria-hidden="true"
        class="fixed inset-0 z-50 flex justify-center items-center w-full h-full backdrop-blur-sm">
        <div class="relative w-full max-w-4xl max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-600 p-4">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Login</h2>
                    <button @click="toggleModal" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <span class="sr-only">Close modal</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="grid grid-cols-12 gap-4 p-3">
                    <div class="col-span-12 md:col-span-6">
                        <div class="p-4 md:p-5">
                            <form class="space-y-4" action="#">
                                <div class="flex justify-center">
                                    <img src="/public/logo.png" alt="logo.png" class="flex w-32 h-32 justify-center">
                                </div>
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        email</label>
                                    <input type="email" name="email" id="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="name@company.com" required />
                                </div>
                                <div>
                                    <label for="password"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        password</label>
                                    <input type="password" name="password" id="password" placeholder="••••••••"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        required />
                                </div>
                                <div class="flex justify-end">
                                    <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Forgot
                                        Password?</a>
                                </div>
                                <button type="button"  @click="handleGuestClick"
                                    class="w-full text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    Sign in
                                </button>
                                <span class="flex justify-center">Or</span>
                                <button type="button"
                                    class="w-full px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700">Sign
                                    In</button>

                                <div class="text-center text-sm font-medium text-gray-500 dark:text-gray-300">Or</div>

                                <a href="#"
                                    class="flex items-center justify-center w-full px-4 py-2 border rounded-lg bg-gray-100 hover:bg-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600">
                                    <i class="fab fa-google mr-2"></i> Sign in with Google
                                </a>
                                <a href="#"
                                    class="flex items-center justify-center w-full px-4 py-2 border rounded-lg bg-gray-100 hover:bg-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600">
                                    <i class="fab fa-facebook mr-2"></i> Sign in with Facebook
                                </a>
                                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                    Don't you have an account? <a href="#" @click="RegistoggleModal"
                                        class="text-blue-700 hover:underline dark:text-blue-500">Sign
                                        up</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6">
                        <img src="/asset/image/login.svg" alt="Login illustration" class="rounded-lg p-3 object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div v-if="RegisshowModal" tabindex="-1" aria-hidden="true"
        class="fixed inset-0 z-50 flex justify-center items-center w-full h-full backdrop-blur-sm bg-gray-800 bg-opacity-50">
        <div class="relative w-full max-w-4xl max-h-full">
            <div class="relative bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-600 p-4">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Register</h2>
                    <button @click="RegistoggleModal" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <span class="sr-only">Close modal</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="grid grid-cols-12 gap-4 p-6">
                    <div class="col-span-12 md:col-span-6">
                        <div class="p-4">
                            <form class="space-y-6" action="#">
                                <div class="flex justify-center mb-4">
                                    <img src="/public/logo.png" alt="Logo" class="w-32 h-32">
                                </div>

                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="name"
                                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                                        <input type="text" id="name" name="name" placeholder="Your Name"
                                            class="block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                    </div>

                                    <div>
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                                        <input type="email" id="email" name="email" placeholder="name@company.com"
                                            class="block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                    </div>

                                    <div>
                                        <label for="password"
                                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                                        <input type="password" id="password" name="password" placeholder="••••••••"
                                            class="block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                    </div>

                                    <div>
                                        <label for="confirm-password"
                                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Confirm
                                            Password</label>
                                        <input type="password" id="confirm-password" name="confirm-password"
                                            placeholder="••••••••"
                                            class="block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                    </div>
                                </div>

                                <div class="flex justify-end">
                                    <a href="#" class="text-sm text-blue-600 hover:underline dark:text-blue-400">Forgot
                                        Password?</a>
                                </div>

                                <button type="submit"
                                    class="w-full px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700">Sign
                                    In</button>

                                <div class="text-center text-sm font-medium text-gray-500 dark:text-gray-300">Or</div>

                                <a href="#"
                                    class="flex items-center justify-center w-full px-4 py-2 border rounded-lg bg-gray-100 hover:bg-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600">
                                    <i class="fab fa-google mr-2"></i> Sign in with Google
                                </a>
                                <a href="#"
                                    class="flex items-center justify-center w-full px-4 py-2 border rounded-lg bg-gray-100 hover:bg-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600">
                                    <i class="fab fa-facebook mr-2"></i> Sign in with Facebook
                                </a>

                                <div class="text-center text-sm font-medium text-gray-500 dark:text-gray-300">
                                    Do you already have an account? <a href="#"
                                        class="text-blue-600 hover:underline dark:text-blue-400" @click="toggleModal">Sign in</a>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="hidden md:block col-span-12 md:col-span-6">
                        <img src="/asset/image/login.svg" alt="Login illustration" class="w-full rounded-lg shadow-md">
                    </div>
                </div>
            </div>
        </div>
    </div>


</template>
