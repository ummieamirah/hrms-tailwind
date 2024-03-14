<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="font-['Poppins']">
    <div class="antialiased lg:flex" x-data="{ open: false, buka: false }">
        {{-- Navbar aside --}}
        <nav class="absolute transform lg:transform-none lg:opacity-100 duration-200 lg:relative z-10 text-black h-auto shadow-2xl"
            :class="{
                'translate-x-0 ease-in opacity-100': open === true,
                '-translate-x-full ease-out opacity-0': open ===
                    false,
                'w-20': buka === true,
                'w-72': buka ===
                    false,
            }">
            <div class="flex bg-blue-950 text-white items-center h-14 ps-10">
                <img src="img/mys-logo.png" alt="" class="w-8 h-6">
                <img src="img/mys-icon.svg" :class="{ 'hidden': buka === true, }" alt="" class="ps-3 w-28 h-28">
            </div>
            <div class="px-4 py-3">
                <div class="">
                    <img src="img/dashboard-nav.svg" :class="{ 'hidden': buka === true, }" alt="">
                </div>

                <ul class="mt-5">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-teal-100/100 rounded-md">
                            <div class="flex justify-start">
                                <img src="img/dashboard-icon.svg"
                                    :class="{
                                        // 'w-20 h-20': buka === true,
                                        'pe-2': buka === false,
                                    }">
                                <span class="font-poppins" :class="{ 'hidden': buka === true, }">Dashboard</span>
                            </div>
                        </a>
                        <a href="#" class="block px-4 py-2 hover:bg-teal-100/100 rounded-md">
                            <div class="flex justify-start">
                                <img src="img/record-icon.svg"
                                    :class="{
                                        // 'w-20 h-20': buka === true,
                                        'pe-2': buka === false,
                                    }">
                                <span class="font-poppins" :class="{ 'hidden': buka === true, }">My Record</span>
                            </div>
                        </a>
                        <a href="#" class="block px-4 py-2 hover:bg-teal-100/100 rounded-md">
                            <div class="flex justify-between">
                                <div class="flex justify-start">
                                    <img src="img/note-add-icon.svg"
                                        :class="{
                                            // 'w-20 h-20': buka === true,
                                            'pe-2': buka === false,
                                        }">
                                    <span class="font-poppins" :class="{ 'hidden': buka === true, }">Apply</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4"
                                    :class="{
                                        // 'w-20 h-20': buka === true,
                                        'hidden': buka === true,
                                    }">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="block px-4 py-2 hover:bg-teal-100/100 rounded-md">
                            <div class="flex justify-start">
                                <img src="img/announcement-icon.svg"
                                    :class="{
                                        // 'w-20 h-20': buka === true,
                                        'pe-2': buka === false,
                                    }">
                                <span class="font-poppins" :class="{ 'hidden': buka === true, }">Announcement</span>
                            </div>
                        </a>
                        <a href="#" class="block px-4 py-2 hover:bg-teal-100/100 rounded-md">
                            <div class="flex justify-start">
                                <img src="img/calender-icon.svg"
                                    :class="{
                                        // 'w-20 h-20': buka === true,
                                        'pe-2': buka === false,
                                    }">
                                <span class="font-poppins" :class="{ 'hidden': buka === true, }">Calender</span>
                            </div>
                        </a>
                        <a href="#" class="block px-4 py-2 hover:bg-teal-100/100 rounded-md">
                            <div class="flex justify-start">
                                <img src="img/gift-icon.svg"
                                    :class="{
                                        // 'w-20 h-20': buka === true,
                                        'pe-2': buka === false,
                                    }">
                                <span class="font-poppins" :class="{ 'hidden': buka === true, }">Invite Friends</span>
                            </div>
                        </a>
                    </li>
                </ul>

                <div class="mt-4">
                    <img src="img/admin-nav.svg" :class="{ 'hidden': buka === true, }" alt="">
                </div>

                <ul class="mt-5">
                    <li>
                        <a href="#" class="block px-4 py-2 bg-teal-100/100 rounded-md">
                            <div class="flex justify-start">
                                <img src="img/profile-2user.svg"
                                    :class="{
                                        // 'w-20 h-20': buka === true,
                                        'pe-2': buka === false,
                                    }">
                                <span class="font-poppins" :class="{ 'hidden': buka === true, }">Employee</span>
                            </div>
                        </a>
                        <a href="#" class="block px-4 py-2 hover:bg-teal-100/100 rounded-md">
                            <div class="flex justify-between">
                                <div class="flex justify-start">
                                    <img src="img/tick-square.svg"
                                        :class="{
                                            // 'w-20 h-20': buka === true,
                                            'pe-2': buka === false,
                                        }">
                                    <span class="font-poppins" :class="{ 'hidden': buka === true, }">Approval</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4"
                                    :class="{
                                        // 'w-20 h-20': buka === true,
                                        'hidden': buka === true,
                                    }">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="block px-4 py-2 hover:bg-teal-100/100 rounded-md">
                            <div class="flex justify-between">
                                <div class="flex justify-start">
                                    <img src="img/clock.svg"
                                        :class="{
                                            // 'w-20 h-20': buka === true,
                                            'pe-2': buka === false,
                                        }">
                                    <span class="font-poppins" :class="{ 'hidden': buka === true, }">Attendance</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4"
                                    :class="{
                                        // 'w-20 h-20': buka === true,
                                        'hidden': buka === true,
                                    }">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="block px-4 py-2 hover:bg-teal-100/100 rounded-md">
                            <div class="flex justify-between">
                                <div class="flex justify-start">
                                    <img src="img/firstline.svg"
                                        :class="{
                                            // 'w-20 h-20': buka === true,
                                            'pe-2': buka === false,
                                        }">
                                    <span class="font-poppins" :class="{ 'hidden': buka === true, }">Yearly
                                        Form</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4"
                                    :class="{
                                        // 'w-20 h-20': buka === true,
                                        'hidden': buka === true,
                                    }">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="block px-4 py-2 hover:bg-teal-100/100 rounded-md">
                            <div class="flex justify-between">
                                <div class="flex justify-start">
                                    <img src="img/dollar-square.svg"
                                        :class="{
                                            // 'w-20 h-20': buka === true,
                                            'pe-2': buka === false,
                                        }">
                                    <span class="font-poppins" :class="{ 'hidden': buka === true, }">Payment</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4"
                                    :class="{
                                        // 'w-20 h-20': buka === true,
                                        'hidden': buka === true,
                                    }">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="block px-4 py-2 hover:bg-teal-100/100 rounded-md">
                            <div class="flex justify-start">
                                <img src="img/setting-2.svg"
                                    :class="{
                                        // 'w-20 h-20': buka === true,
                                        'pe-2': buka === false,
                                    }">
                                <span class="font-poppins" :class="{ 'hidden': buka === true, }">Invite Friends</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="lg:flex-grow">
            <header class="flex bg-blue-950 text-white items-center h-14 justify-between">
                <div class="ms-3">
                    <button type="button"
                        class="relative rounded-full bg-slate-400/50 p-1 text-white hover:text-teal-light hover:bg-white s:hidden"
                        @click="buka = !buka">
                        <svg class="h-6 w-6 pt-1.5 ps-1.5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path
                                d="M14.6667 2.73325C14.6667 1.73325 14.24 1.33325 13.18 1.33325H10.4867C9.42667 1.33325 9 1.73325 9 2.73325V7.26659C9 8.26659 9.42667 8.66659 10.4867 8.66659H13.18C14.24 8.66659 14.6667 8.26659 14.6667 7.26659V2.73325Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M14.6667 12.0667C14.6667 11.0667 14.24 10.6667 13.18 10.6667H10.4867C9.42667 10.6667 9 11.0667 9 12.0667V13.2667C9 14.2667 9.42667 14.6667 10.4867 14.6667H13.18C14.24 14.6667 14.6667 14.2667 14.6667 13.2667V12.0667Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M7.00065 13.2666C7.00065 14.2666 6.57398 14.6666 5.51398 14.6666H2.82065C1.76065 14.6666 1.33398 14.2666 1.33398 13.2666V8.73325C1.33398 7.73325 1.76065 7.33325 2.82065 7.33325H5.51398C6.57398 7.33325 7.00065 7.73325 7.00065 8.73325V13.2666Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M7.00065 3.93325C7.00065 4.93325 6.57398 5.33325 5.51398 5.33325H2.82065C1.76065 5.33325 1.33398 4.93325 1.33398 3.93325V2.73325C1.33398 1.73325 1.76065 1.33325 2.82065 1.33325H5.51398C6.57398 1.33325 7.00065 1.73325 7.00065 2.73325V3.93325Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                    <button type="button"
                        class="relative rounded-full bg-slate-400/50 p-1 text-white hover:text-teal-light hover:bg-white lg:hidden"
                        @click="open = true">
                        <svg class="h-6 w-6 pt-1.5 ps-1.5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path
                                d="M14.6667 2.73325C14.6667 1.73325 14.24 1.33325 13.18 1.33325H10.4867C9.42667 1.33325 9 1.73325 9 2.73325V7.26659C9 8.26659 9.42667 8.66659 10.4867 8.66659H13.18C14.24 8.66659 14.6667 8.26659 14.6667 7.26659V2.73325Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M14.6667 12.0667C14.6667 11.0667 14.24 10.6667 13.18 10.6667H10.4867C9.42667 10.6667 9 11.0667 9 12.0667V13.2667C9 14.2667 9.42667 14.6667 10.4867 14.6667H13.18C14.24 14.6667 14.6667 14.2667 14.6667 13.2667V12.0667Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M7.00065 13.2666C7.00065 14.2666 6.57398 14.6666 5.51398 14.6666H2.82065C1.76065 14.6666 1.33398 14.2666 1.33398 13.2666V8.73325C1.33398 7.73325 1.76065 7.33325 2.82065 7.33325H5.51398C6.57398 7.33325 7.00065 7.73325 7.00065 8.73325V13.2666Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M7.00065 3.93325C7.00065 4.93325 6.57398 5.33325 5.51398 5.33325H2.82065C1.76065 5.33325 1.33398 4.93325 1.33398 3.93325V2.73325C1.33398 1.73325 1.76065 1.33325 2.82065 1.33325H5.51398C6.57398 1.33325 7.00065 1.73325 7.00065 2.73325V3.93325Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center pr-2 md:me-10">
                    <button type="button"
                        class="relative rounded-full bg-slate-400/50 p-1 text-white hover:text-teal-light hover:bg-white">
                        <svg class="h-6 w-6 pt-1.5 ps-1.5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path
                                d="M3.33398 14.6666C2.00065 14.6666 1.33398 13.9999 1.33398 12.6666V7.33325C1.33398 5.99992 2.00065 5.33325 3.33398 5.33325H6.66732V12.6666C6.66732 13.9999 7.33398 14.6666 8.66732 14.6666H3.33398Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M6.66732 3.33341V5.33341H3.33398V4.00008C3.33398 3.26675 3.93398 2.66675 4.66732 2.66675H6.74064C6.68731 2.86675 6.66732 3.08675 6.66732 3.33341Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9.33398 5.33325V8.66659" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 5.33325V8.66659" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M10.0007 11.3333C9.63398 11.3333 9.33398 11.6333 9.33398 11.9999V14.6666H12.0007V11.9999C12.0007 11.6333 11.7007 11.3333 11.334 11.3333H10.0007Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M4 8.66675V11.3334" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M6.66602 3.33325C6.66602 1.99992 7.33268 1.33325 8.66602 1.33325H12.666C13.9993 1.33325 14.666 1.99992 14.666 3.33325V12.6666C14.666 13.9999 13.9993 14.6666 12.666 14.6666H8.66602C7.33268 14.6666 6.66602 13.9999 6.66602 12.6666V3.33325Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                    <button type="button"
                        class="relative rounded-full bg-slate-400/50 p-1 text-white hover:text-teal-light hover:bg-white ml-3">
                        <svg class="h-6 w-6 pt-1.5 ps-1.5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path
                                d="M4.01242 5.93994V7.86661C4.01242 8.27327 3.83908 8.89327 3.63242 9.23994L2.86575 10.5133C2.39242 11.2999 2.71908 12.1733 3.58575 12.4666C6.45908 13.4266 9.55908 13.4266 12.4324 12.4666C13.2391 12.1999 13.5924 11.2466 13.1524 10.5133L12.3857 9.23994C12.1857 8.89327 12.0124 8.27327 12.0124 7.86661V5.93994C12.0124 3.73994 10.2124 1.93994 8.01242 1.93994C5.80575 1.93994 4.01242 3.73327 4.01242 5.93994Z"
                                stroke-linecap="round" />
                            <path stroke-linecap="round"
                                d="M8.60596 1.99988C7.96596 1.91988 7.35263 1.96655 6.7793 2.13321C6.97263 1.63988 7.45263 1.29321 8.01263 1.29321C8.57263 1.29321 9.05263 1.63988 9.24596 2.13321C9.0393 2.07321 8.82596 2.02655 8.60596 1.99988Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M10.0137 12.7068C10.0137 13.8068 9.11367 14.7068 8.01367 14.7068C7.46701 14.7068 6.96034 14.4801 6.60034 14.1201C6.24034 13.7601 6.01367 13.2535 6.01367 12.7068" />
                        </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div class="flex">
                            <button type="button"
                                class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </button>

                            <span class="text-white ps-5">Alif</span>
                        </div>
                    </div>
                </div>
            </header>

            <div class="flex items-center">
                <div class="self-start me-5">
                    <div class="flex mt-10 ms-5 mb-8">
                        <div class="flex">
                            <img src="img/calendar-2.svg" alt="">
                            <span class="text-sm text-gray-700/50 ms-2">
                                28 February 2022 | Monday
                            </span>
                        </div>
                        <div class="flex ms-2">
                            <img src="img/clock-1.svg" alt="">
                            <span class="text-sm text-gray-700/50 ms-2">
                                08:00 AM
                            </span>
                        </div>
                    </div>
                    <div class="ms-5 mb-8">
                        <span
                            class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-tiffany-mix to-blue-b block mb-3">
                            Hey, Good Morning
                        </span>
                        <span
                            class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-tiffany-mix to-blue-b">
                            Alif Azuwan!
                        </span>
                    </div>
                    <div class="ms-5">
                        <span class="text-sm text-gray-700/50">
                            We are delighted to have you here today.
                        </span>
                    </div>

                </div>

                <div>
                    <img src="img/dashboard-1.svg" alt="">
                </div>

                <div class="ms-5">
                    <img src="img/frame-630266139.svg" alt="">
                </div>
            </div>

            <!-- Static Section -->
            <div class="grid grid-cols-3 gap-0 me-5">
                <section id="hero" class="col-span-2 me-5 ms-5">
                    <div class="bg-white shadow-md rounded-md overflow-hidden w-full mt-3">
                        <!-- Card Header -->
                        <div class="bg-gradient-to-r from-tiffany-mix to-blue-b text-white items-center p-2 h-12">
                            <span class="text-lg">Today Statistic</span>
                        </div>

                        <!-- Card Content -->
                        <div class="p-4">
                            <!-- Your card content goes here -->
                            <p class="text-sm text-gray-700/50">Here’s your employee statistic so far.</p>

                            <div class="flex justify-items-center">
                                <div>
                                    <img src="img/Group-7143.svg" alt="">
                                    <img src="img/Frame-630266145.svg" alt="" class="ms-10">
                                </div>
                                <div class="flex mt-7 ms-8">
                                    <div
                                        class="card m-2 border border-zinc-100 rounded-lg shadow-lg items-center text-center w-32 h-32">
                                        <div class="m-3 items-center mt-7">
                                            <div class="font-bold text-base-blue text-3xl mb-2 ms-3">
                                                10
                                            </div>
                                            <p class="text-sm text-gray-700/50">
                                                Total Clock in
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="card m-2 border border-zinc-100 rounded-lg shadow-lg items-center text-center w-32 h-32">
                                        <div class="m-3 mt-6">
                                            <div class="font-bold text-base-blue text-3xl mb-2 ms-3">
                                                10
                                            </div>
                                            <p class="text-sm text-gray-700/50">
                                                Total On Leave
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="card m-2 border border-zinc-100 rounded-lg shadow-lg items-center text-center w-32 h-32">
                                        <div class="m-3 mt-6">
                                            <div class="font-bold text-base-blue text-3xl mb-2 ms-3">
                                                10
                                            </div>
                                            <p class="text-sm text-gray-700/50">
                                                Total Leave Approved
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white shadow-md rounded-md overflow-hidden w-full mt-8">
                        <!-- Card Header -->
                        <div class="bg-gradient-to-r from-tiffany-mix to-blue-b text-white items-center p-2 h-12">
                            <span class="text-lg">Pending Approval</span>
                        </div>

                        <!-- Card Content -->
                        <div class="p-4">
                            <!-- Your card content goes here -->
                            <p class="text-sm text-gray-700/50 ms-2">45 task(s) are waiting for your action.</p>

                            <div class="flex justify-items-center">
                                <div
                                    class="card m-2 border border-zinc-100 rounded-lg shadow-lg items-center text-center p-2">
                                    <div class="m-3">
                                        <div class="font-bold text-xl mb-2 ms-8">
                                            <img src="img/calendar-1.svg" alt="">
                                        </div>
                                        <p class="text-base">
                                            Leave
                                            Approved
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="card m-2 border border-zinc-100 rounded-lg shadow-lg items-center text-center p-2">
                                    <div class="m-3">
                                        <div class="font-bold text-xl mb-2 ms-8">
                                            <img src="img/money-1.svg" alt="">
                                        </div>
                                        <p class="text-base">
                                            Claim
                                            Approved
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="card m-2 border border-zinc-100 rounded-lg shadow-lg items-center text-center p-2">
                                    <div class="m-3">
                                        <div class="font-bold text-xl mb-2 ms-8">
                                            <img src="img/accounting-1.svg" alt="">
                                        </div>
                                        <p class="text-base">
                                            Overtime
                                            Approve
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="card m-2 border border-zinc-100 rounded-lg shadow-lg items-center text-center p-2">
                                    <div class="m-3">
                                        <div class="font-bold text-xl mb-2 ms-6">
                                            <img src="img/salary-1.svg" alt="">
                                        </div>
                                        <p class="text-base">
                                            Payroll
                                            Record
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="card m-2 border border-zinc-100 rounded-lg shadow-lg items-center text-center p-2">
                                    <div class="m-3">
                                        <div class="font-bold text-xl mb-2 ms-8">
                                            <img src="img/expenses-1.svg" alt="">
                                        </div>
                                        <p class="text-base">
                                            Payment
                                            Voucher
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white shadow-md rounded-md overflow-hidden w-full mt-8 mb-8">
                        <!-- Card Header -->
                        <div
                            class="bg-gradient-to-r from-tiffany-mix to-blue-b text-white items-center p-2 h-12 flex justify-between">
                            <div>
                                <span class="text-lg">Team Calendar</span>
                            </div>
                            <div>
                                <span class="text-lg">07 Jan - 13 Jan, 2024</span>
                            </div>
                        </div>

                        <!-- Card Content -->
                        <div class="p-4">
                            <!-- Your card content goes here -->
                            <table class="w-full">
                                <thead>
                                    <tr>
                                        <th
                                            class="p-2 border h-10 xl:w-20 lg:w-20 md:w-20 sm:w-20 w-5 xl:text-sm text-xs">
                                            <span class="xl:block lg:block md:block sm:block hidden">Mon 1/1</span>
                                            <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Sun</span>
                                        </th>
                                        <th
                                            class="p-2 border h-10 xl:w-20 lg:w-20 md:w-20 sm:w-20 w-5 xl:text-sm text-xs">
                                            <span class="xl:block lg:block md:block sm:block hidden">Tue 1/2</span>
                                            <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Mon</span>
                                        </th>
                                        <th
                                            class="p-2 border h-10 xl:w-20 lg:w-20 md:w-20 sm:w-20 w-5 xl:text-sm text-xs">
                                            <span class="xl:block lg:block md:block sm:block hidden">Wed 1/3</span>
                                            <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Tue</span>
                                        </th>
                                        <th
                                            class="p-2 border h-10 xl:w-20 lg:w-20 md:w-20 sm:w-20 w-5 xl:text-sm text-xs">
                                            <span class="xl:block lg:block md:block sm:block hidden">Thu 1/4</span>
                                            <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Wed</span>
                                        </th>
                                        <th
                                            class="p-2 border h-10 xl:w-20 lg:w-20 md:w-20 sm:w-20 w-5 xl:text-sm text-xs">
                                            <span class="xl:block lg:block md:block sm:block hidden">Fri 1/5</span>
                                            <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Thu</span>
                                        </th>
                                        <th
                                            class="p-2 border h-10 xl:w-20 lg:w-20 md:w-20 sm:w-20 w-5 xl:text-sm text-xs">
                                            <span class="xl:block lg:block md:block sm:block hidden">Sat 1/6</span>
                                            <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Fri</span>
                                        </th>
                                        <th
                                            class="p-2 border h-10 xl:w-20 lg:w-20 md:w-20 sm:w-20 w-20 xl:text-sm text-xs">
                                            <span class="xl:block lg:block md:block sm:block hidden">Sun 1/7</span>
                                            <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Sat</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center h-20">
                                        <td
                                            class="border p-1 h-20 xl:w-20 lg:w-20 md:w-20 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300 ">
                                            <div
                                                class="flex flex-col h-20 mx-auto xl:w-20 lg:w-20 md:w-20 sm:w-full w-10 overflow-hidden">
                                                <div class="top h-5 w-full">
                                                    <span class="text-gray-500"></span>
                                                </div>
                                                {{-- <div class="bottom flex-grow h-10 py-1 w-full cursor-pointer">
                                                    <div
                                                        class="event bg-purple-400 text-white rounded p-1 text-sm mb-1">
                                                        <span class="event-name">
                                                            Meating
                                                        </span>
                                                        <span class="time">
                                                            12:00~14:00
                                                        </span>
                                                    </div>
                                                    <div
                                                        class="event bg-purple-400 text-white rounded p-1 text-sm mb-1">
                                                        <span class="event-name">
                                                            Meating
                                                        </span>
                                                        <span class="time">
                                                            18:00~20:00
                                                        </span>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </td>
                                        <td
                                            class="border p-1 h-20 xl:w-20 lg:w-20 md:w-20 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                                            <div
                                                class="flex flex-col h-20 mx-auto xl:w-20 lg:w-20 md:w-20 sm:w-full w-10 overflow-hidden">
                                                <div class="top h-5 w-full">
                                                    <span class="text-gray-500"></span>
                                                </div>
                                                <div class="bottom flex-grow h-20 py-1 w-full cursor-pointer"></div>
                                            </div>
                                        </td>
                                        <td
                                            class="border p-1 h-20 xl:w-20 lg:w-20 md:w-20 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                                            <div
                                                class="flex flex-col h-20 mx-auto xl:w-20 lg:w-20 md:w-20 sm:w-full w-10  overflow-hidden">
                                                <div class="top h-5 w-full">
                                                    <span class="text-gray-500"></span>
                                                </div>
                                                <div class="bottom flex-grow h-20 py-1 w-full cursor-pointer"></div>
                                            </div>
                                        </td>
                                        <td
                                            class="border p-1 h-20 xl:w-20 lg:w-20 md:w-20 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                                            <div
                                                class="flex flex-col h-20 mx-auto xl:w-20 lg:w-20 md:w-20 sm:w-full  overflow-hidden">
                                                <div class="top h-5 w-full">
                                                    <span class="text-gray-500"></span>
                                                </div>
                                                <div class="bottom flex-grow h-20 py-1 w-full cursor-pointer"></div>
                                            </div>
                                        </td>
                                        <td
                                            class="border p-1 h-20 xl:w-20 lg:w-20 md:w-20 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                                            <div
                                                class="flex flex-col h-20 mx-auto xl:w-20 lg:w-20 md:w-20 sm:w-full w-10  overflow-hidden">
                                                <div class="top h-5 w-full">
                                                    <span class="text-gray-500"></span>
                                                </div>
                                                <div class="bottom flex-grow h-20 py-1 w-full cursor-pointer"></div>
                                            </div>
                                        </td>
                                        <td
                                            class="border p-1 h-20 xl:w-20 lg:w-20 md:w-20 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                                            <div
                                                class="flex flex-col h-20 mx-auto xl:w-20 lg:w-20 md:w-20 sm:w-full w-10  overflow-hidden">
                                                <div class="top h-5 w-full">
                                                    <span class="text-gray-500"></span>
                                                </div>
                                                <div class="bottom flex-grow h-20 py-1 w-full cursor-pointer"></div>
                                            </div>
                                        </td>
                                        <td
                                            class="border p-1 h-20 xl:w-20 lg:w-20 md:w-20 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                                            <div
                                                class="flex flex-col h-20 mx-auto xl:w-20 lg:w-20 md:w-20 sm:w-full w-10  overflow-hidden">
                                                <div class="top h-5 w-full">
                                                    <span class="text-gray-500"></span>
                                                </div>
                                                <div class="bottom flex-grow h-20 py-1 w-full cursor-pointer"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <section id="hero">
                    {{-- announcement section --}}
                    <div class="bg-white shadow-md rounded-md overflow-hidden w-full mt-2">
                        <!-- Card Header -->
                        <div
                            class="bg-gradient-to-r from-tiffany-mix to-blue-b text-white items-center p-2 h-12 flex justify-between">
                            <div>
                                <span class="text-md ms-3">Announcement</span>
                            </div>
                            <div class="flex">
                                <img src="img/add-circle.svg" alt="">
                                <span class="text-md ms-3 me-3">See More</span>
                            </div>
                        </div>

                        <!-- Card Content -->
                        <div class="p-4">
                            <table class="w-full">
                                <tbody class="divide-y divide-gray-200 items-center">
                                    <tr>
                                        <td class="grid grid-cols-6 gap-0 items-center">
                                            <div class="col-span-2 text-center">
                                                <span class="text-base-blue text-sm font-semibold">
                                                    8 JAN
                                                </span>
                                                <span class="block text-cyan-500 text-xs font-semibold ms-3">
                                                    2024
                                                </span>
                                            </div>
                                            <div class="col-span-1">
                                                <span class="border border-base-blue rounded-lg">
                                                </span>
                                            </div>
                                            <div class="col-span-3">
                                                <span class="text-base-blue text-sm font-semibold">
                                                    Office Outdoor Activity
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="grid grid-cols-6 gap-0 items-center">
                                            <div class="col-span-2 text-center">
                                                <span class="text-base-blue text-sm font-semibold">
                                                    8 JAN
                                                </span>
                                                <span class="block text-cyan-500 text-xs font-semibold ms-3">
                                                    2024
                                                </span>
                                            </div>
                                            <div class="col-span-1">
                                                <span class="border border-base-blue rounded-lg">
                                                </span>
                                            </div>
                                            <div class="col-span-3">
                                                <span class="text-base-blue text-sm font-semibold">
                                                    Office Outdoor Activity
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="grid grid-cols-6 gap-0 items-center">
                                            <div class="col-span-2 text-center">
                                                <span class="text-base-blue text-sm font-semibold">
                                                    8 JAN
                                                </span>
                                                <span class="block text-cyan-500 text-xs font-semibold ms-3">
                                                    2024
                                                </span>
                                            </div>
                                            <div class="col-span-1">
                                                <span class="border border-base-blue rounded-lg">
                                                </span>
                                            </div>
                                            <div class="col-span-3">
                                                <span class="text-base-blue text-sm font-semibold">
                                                    Office Outdoor Activity
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="grid grid-cols-6 gap-0 items-center">
                                            <div class="col-span-2 text-center">
                                                <span class="text-base-blue text-sm font-semibold">
                                                    8 JAN
                                                </span>
                                                <span class="block text-cyan-500 text-xs font-semibold ms-3">
                                                    2024
                                                </span>
                                            </div>
                                            <div class="col-span-1">
                                                <span class="border border-base-blue rounded-lg">
                                                </span>
                                            </div>
                                            <div class="col-span-3">
                                                <span class="text-base-blue text-sm font-semibold">
                                                    Office Outdoor Activity
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="grid grid-cols-6 gap-0 items-center">
                                            <div class="col-span-2 text-center">
                                                <span class="text-base-blue text-sm font-semibold">
                                                    8 JAN
                                                </span>
                                                <span class="block text-cyan-500 text-xs font-semibold ms-3">
                                                    2024
                                                </span>
                                            </div>
                                            <div class="col-span-1">
                                                <span class="border border-base-blue rounded-lg">
                                                </span>
                                            </div>
                                            <div class="col-span-3">
                                                <span class="text-base-blue text-sm font-semibold">
                                                    Office Outdoor Activity
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- leave section --}}
                    <div class="bg-white shadow-md rounded-lg overflow-hidden w-full mt-10 mb-10">
                        <!-- Card Header -->
                        <div
                            class="bg-gradient-to-r from-tiffany-mix to-blue-b text-white items-center p-2 h-12 flex justify-between">
                            <div>
                                <span class="text-md ms-3">Who's Off This Week</span>
                            </div>
                            <div class="flex">
                                <img src="img/add-circle.svg" alt="">
                                <span class="text-md ms-3 me-3">See More</span>
                            </div>
                        </div>

                        <!-- Card Content -->
                        <div class="ps-4 pe-4">
                            <table class="w-full">
                                <tbody class="divide-y divide-gray-200 items-center">
                                    <tr>
                                        <td class="grid grid-cols-3 gap-0 p-2">
                                            <div class="col-span-1 ps-2">
                                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                    class="rounded-full w-16 h-16">
                                            </div>
                                            <div class="col-span-2 text-start">
                                                <p>
                                                    Alif Azuwan
                                                </p>
                                                <span>
                                                    1 Jan 2024 - 1 Jan 2024
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="grid grid-cols-3 gap-0 p-2">
                                            <div class="col-span-1 ps-2">
                                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                    class="rounded-full w-16 h-16">
                                            </div>
                                            <div class="col-span-2 text-start">
                                                <p>
                                                    Alif Azuwan
                                                </p>
                                                <span>
                                                    1 Jan 2024 - 1 Jan 2024
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="grid grid-cols-3 gap-0 p-2">
                                            <div class="col-span-1 ps-2">
                                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                    class="rounded-full w-16 h-16">
                                            </div>
                                            <div class="col-span-2 text-start">
                                                <p>
                                                    Alif Azuwan
                                                </p>
                                                <span>
                                                    1 Jan 2024 - 1 Jan 2024
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="grid grid-cols-3 gap-0 p-2">
                                            <div class="col-span-1 ps-2">
                                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                    class="rounded-full w-16 h-16">
                                            </div>
                                            <div class="col-span-2 text-start">
                                                <p>
                                                    Alif Azuwan
                                                </p>
                                                <span>
                                                    1 Jan 2024 - 1 Jan 2024
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="grid grid-cols-3 gap-0 p-2">
                                            <div class="col-span-1 ps-2">
                                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                    class="rounded-full w-16 h-16">
                                            </div>
                                            <div class="col-span-2 text-start">
                                                <p>
                                                    Alif Azuwan
                                                </p>
                                                <span>
                                                    1 Jan 2024 - 1 Jan 2024
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

</body>

</html>
