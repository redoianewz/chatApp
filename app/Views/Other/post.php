<?php
$this->extend('Other/layout/layout') ?>
<?php $this->section('mainSubtitle') ?>
Post App
<?php $this->endSection() ?>
<?php $this->section('maintitle') ?>
<div class="avatar mr-3 hidden h-9 w-9 lg:flex">
    <div class="is-initial rounded-full bg-secondary/10 text-secondary dark:bg-secondary-light/10 dark:text-secondary-light">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
    </div>
</div>
<p class="line-clamp-1 text-lg font-medium tracking-wider text-slate-800 dark:text-navy-100">
    Post System
</p>
<?php $this->endSection() ?>
<?php $this->section('MainContent') ?>
<div class="mt-5 grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
    <div class="col-span-12 sm:col-span-6 lg:col-span-8">
        <div class="swiper" x-init="$nextTick(()=>$el._x_swiper= new Swiper($el,{  slidesPerView: 'auto', spaceBetween: 14,navigation:{nextEl:'.next-btn',prevEl:'.prev-btn'}}))">
            <div class="flex items-center justify-between">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Categories
                </p>
                <div class="flex">
                    <button class="btn prev-btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 disabled:pointer-events-none disabled:select-none disabled:opacity-60 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button class="btn next-btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 disabled:pointer-events-none disabled:select-none disabled:opacity-60 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="swiper-wrapper mt-5" x-data="{selected:'slide-1'}">
                <div class="card swiper-slide w-24 shrink-0 cursor-pointer" @click="selected = 'slide-1'">
                    <div class="flex flex-col items-center rounded-lg px-2 py-4" :class="selected === 'slide-1' ? 'text-secondary bg-secondary/10  dark:bg-secondary-light/10 dark:text-secondary-light' : 'text-slate-600 dark:text-navy-100' ">
                        <img class="w-12" src="/images/object/food-icon-1.svg" alt="image" />
                        <h3 class="line-clamp-1 pt-2 font-medium tracking-wide">
                            Burger
                        </h3>
                    </div>
                </div>
                <div class="card swiper-slide w-24 shrink-0 cursor-pointer" @click="selected = 'slide-2'">
                    <div class="flex flex-col items-center rounded-lg px-2 py-4" :class="selected === 'slide-2' ? 'text-secondary bg-secondary/10  dark:bg-secondary-light/10 dark:text-secondary-light' : 'text-slate-600 dark:text-navy-100' ">
                        <img class="w-12" src="/images/object/food-icon-4.svg" alt="image" />
                        <h3 class="line-clamp-1 pt-2 font-medium tracking-wide">
                            Hot Dog
                        </h3>
                    </div>
                </div>
                <div class="card swiper-slide w-24 shrink-0 cursor-pointer" @click="selected = 'slide-3'">
                    <div class="flex flex-col items-center rounded-lg px-2 py-4" :class="selected === 'slide-3' ? 'text-secondary bg-secondary/10  dark:bg-secondary-light/10 dark:text-secondary-light' : 'text-slate-600 dark:text-navy-100' ">
                        <img class="w-12" src="/images/object/food-icon-5.svg" alt="image" />
                        <h3 class="line-clamp-1 pt-2 font-medium tracking-wide">
                            Pizza
                        </h3>
                    </div>
                </div>
                <div class="card swiper-slide w-24 shrink-0 cursor-pointer" @click="selected = 'slide-4'">
                    <div class="flex flex-col items-center rounded-lg px-2 py-4" :class="selected === 'slide-4' ? 'text-secondary bg-secondary/10  dark:bg-secondary-light/10 dark:text-secondary-light' : 'text-slate-600 dark:text-navy-100' ">
                        <img class="w-12" src="/images/object/food-icon-6.svg" alt="image" />
                        <h3 class="line-clamp-1 pt-2 font-medium tracking-wide">
                            Sandwich
                        </h3>
                    </div>
                </div>
                <div class="card swiper-slide w-24 shrink-0 cursor-pointer" @click="selected = 'slide-5'">
                    <div class="flex flex-col items-center rounded-lg px-2 py-4" :class="selected === 'slide-5' ? 'text-secondary bg-secondary/10  dark:bg-secondary-light/10 dark:text-secondary-light' : 'text-slate-600 dark:text-navy-100' ">
                        <img class="w-12" src="/images/object/food-icon-7.svg" alt="image" />
                        <h3 class="line-clamp-1 pt-2 font-medium tracking-wide">
                            Popcorn
                        </h3>
                    </div>
                </div>
                <div class="card swiper-slide w-24 shrink-0 cursor-pointer" @click="selected = 'slide-6'">
                    <div class="flex flex-col items-center rounded-lg px-2 py-4" :class="selected === 'slide-6' ? 'text-secondary bg-secondary/10  dark:bg-secondary-light/10 dark:text-secondary-light' : 'text-slate-600 dark:text-navy-100' ">
                        <img class="w-12" src="/images/object/food-icon-8.svg" alt="image" />
                        <h3 class="line-clamp-1 pt-2 font-medium tracking-wide">
                            Taco
                        </h3>
                    </div>
                </div>
                <div class="card swiper-slide w-24 shrink-0 cursor-pointer" @click="selected = 'slide-7'">
                    <div class="flex flex-col items-center rounded-lg px-2 py-4" :class="selected === 'slide-7' ? 'text-secondary bg-secondary/10  dark:bg-secondary-light/10 dark:text-secondary-light' : 'text-slate-600 dark:text-navy-100' ">
                        <img class="w-12" src="/images/object/food-icon-10.svg" alt="image" />
                        <h3 class="line-clamp-1 pt-2 font-medium tracking-wide">
                            Burrito
                        </h3>
                    </div>
                </div>
                <div class="card swiper-slide w-24 shrink-0 cursor-pointer" @click="selected = 'slide-8'">
                    <div class="flex flex-col items-center rounded-lg px-2 py-4" :class="selected === 'slide-8' ? 'text-secondary bg-secondary/10  dark:bg-secondary-light/10 dark:text-secondary-light' : 'text-slate-600 dark:text-navy-100' ">
                        <img class="w-12" src="/images/object/food-icon-12.svg" alt="image" />
                        <h3 class="line-clamp-1 pt-2 font-medium tracking-wide">
                            Pizza
                        </h3>
                    </div>
                </div>
                <div class="card swiper-slide w-24 shrink-0 cursor-pointer" @click="selected = 'slide-9'">
                    <div class="flex flex-col items-center rounded-lg px-2 py-4" :class="selected === 'slide-9' ? 'text-secondary bg-secondary/10  dark:bg-secondary-light/10 dark:text-secondary-light' : 'text-slate-600 dark:text-navy-100' ">
                        <img class="w-12" src="/images/object/food-icon-13.svg" alt="image" />
                        <h3 class="line-clamp-1 pt-2 font-medium tracking-wide">
                            Burrito
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 grid grid-cols-2 gap-4 sm:mt-5 sm:grid-cols-2 sm:gap-5 lg:mt-6 lg:grid-cols-3 xl:grid-cols-4">
            <div class="card p-2">
                <img class="rounded-lg" src="/images/object/food-1.jpg" alt="image" />
                <div class="pt-2">
                    <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                        Duck Salad
                    </p>
                    <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                        Description
                    </p>
                    <p class="text-right font-medium text-primary dark:text-accent-light">
                        35.00 $
                    </p>
                </div>
            </div>
            <div class="card p-2">
                <img class="rounded-lg" src="/images/object/food-2.jpg" alt="image" />
                <div class="pt-2">
                    <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                        Breakfast board
                    </p>
                    <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                        Description
                    </p>
                    <p class="text-right font-medium text-primary dark:text-accent-light">
                        14.00 $
                    </p>
                </div>
            </div>
            <div class="card p-2">
                <img class="rounded-lg" src="/images/object/food-3.jpg" alt="image" />
                <div class="pt-2">
                    <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                        Hummus
                    </p>
                    <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                        Description
                    </p>
                    <p class="text-right font-medium text-primary dark:text-accent-light">
                        24.00 $
                    </p>
                </div>
            </div>
            <div class="card p-2">
                <img class="rounded-lg" src="/images/object/food-4.jpg" alt="image" />
                <div class="pt-2">
                    <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                        Roast beef
                    </p>
                    <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                        Description
                    </p>
                    <p class="text-right font-medium text-primary dark:text-accent-light">
                        17.50 $
                    </p>
                </div>
            </div>
            <div class="card p-2">
                <img class="rounded-lg" src="/images/object/food-5.jpg" alt="image" />
                <div class="pt-2">
                    <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                        Tuna salad
                    </p>
                    <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                        Description
                    </p>
                    <p class="text-right font-medium text-primary dark:text-accent-light">
                        35.00 $
                    </p>
                </div>
            </div>
            <div class="card p-2">
                <img class="rounded-lg" src="/images/object/food-6.jpg" alt="image" />
                <div class="pt-2">
                    <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                        Salmon
                    </p>
                    <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                        Description
                    </p>
                    <p class="text-right font-medium text-primary dark:text-accent-light">
                        48.00 $
                    </p>
                </div>
            </div>
            <div class="card p-2">
                <img class="rounded-lg" src="/images/object/food-7.jpg" alt="image" />
                <div class="pt-2">
                    <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                        California roll
                    </p>
                    <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                        Description
                    </p>
                    <p class="text-right font-medium text-primary dark:text-accent-light">
                        74.00 $
                    </p>
                </div>
            </div>
            <div class="card p-2">
                <img class="rounded-lg" src="/images/object/food-8.jpg" alt="image" />
                <div class="pt-2">
                    <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                        Sashimi
                    </p>
                    <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                        Description
                    </p>
                    <p class="text-right font-medium text-primary dark:text-accent-light">
                        75.00 $
                    </p>
                </div>
            </div>
            <div class="card p-2">
                <img class="rounded-lg" src="/images/object/food-9.jpg" alt="image" />
                <div class="pt-2">
                    <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                        Pub salad
                    </p>
                    <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                        Description
                    </p>
                    <p class="text-right font-medium text-primary dark:text-accent-light">
                        64.00 $
                    </p>
                </div>
            </div>
            <div class="card p-2">
                <img class="rounded-lg" src="/images/object/food-10.jpg" alt="image" />
                <div class="pt-2">
                    <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                        Duck carpaccio
                    </p>
                    <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                        Description
                    </p>
                    <p class="text-right font-medium text-primary dark:text-accent-light">
                        72.00 $
                    </p>
                </div>
            </div>
            <div class="card p-2">
                <img class="rounded-lg" src="/images/object/food-11.jpg" alt="image" />
                <div class="pt-2">
                    <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                        Maui food
                    </p>
                    <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                        Description
                    </p>
                    <p class="text-right font-medium text-primary dark:text-accent-light">
                        42.00 $
                    </p>
                </div>
            </div>
            <div class="card p-2">
                <img class="rounded-lg" src="/images/object/food-12.jpg" alt="image" />
                <div class="pt-2">
                    <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                        Scottish salmon
                    </p>
                    <p class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                        Description
                    </p>
                    <p class="text-right font-medium text-primary dark:text-accent-light">
                        86.00 $
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden sm:col-span-6 sm:block lg:col-span-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-1">
                <p>
                    <span class="text-base font-medium text-slate-700 dark:text-navy-100">Draft</span>
                    <span>#001</span>
                </p>

                <div x-data="usePopper({placement:'bottom-end',offset:4})" @click.outside="isShowPopper && (isShowPopper = false)" class="inline-flex">
                    <button x-ref="popperRef" @click="isShowPopper = !isShowPopper" class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                        <div class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                            <ul>
                                <li>
                                    <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Draft #001</a>
                                </li>
                                <li>
                                    <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Draft #002</a>
                                </li>
                                <li>
                                    <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Draft #005</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex space-x-1">
                <button class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4" />
                    </svg>
                </button>
                <button class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 hover:text-error focus:bg-slate-300/20 focus:text-error active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
                <div x-data="usePopper({placement:'bottom-end',offset:4})" @click.outside="isShowPopper && (isShowPopper = false)" class="inline-flex">
                    <button x-ref="popperRef" @click="isShowPopper = !isShowPopper" class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                    </button>

                    <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                        <div class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                            <ul>
                                <li>
                                    <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                </li>
                                <li>
                                    <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another Action</a>
                                </li>
                                <li>
                                    <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something else</a>
                                </li>
                            </ul>
                            <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                            <ul>
                                <li>
                                    <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated Link</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-5 p-4 sm:p-5">
            <div class="flex flex-col space-y-3.5">
                <div class="group flex items-center justify-between space-x-3">
                    <div class="flex items-center space-x-4">
                        <div class="relative flex">
                            <img src="/images/object/food-5.jpg" class="mask is-star h-11 w-11 origin-center object-cover" alt="image" />

                            <div class="absolute right-0 top-0 -m-1 flex h-5 min-w-[1.25rem] items-center justify-center rounded-full border border-white bg-slate-200 px-1 text-tiny+ font-medium leading-none text-slate-800 dark:border-navy-700 dark:bg-navy-450 dark:text-white">
                                2
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center space-x-1">
                                <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                                    Roast beef
                                </p>
                                <button class="btn h-6 w-6 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                            </div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Lorem ipsum dolor sit.
                            </p>
                        </div>
                    </div>
                    <p class="font-inter font-semibold">$12.00</p>
                </div>
                <div class="group flex items-center justify-between space-x-3">
                    <div class="flex items-center space-x-4">
                        <div class="relative flex">
                            <img src="/images/object/food-12.jpg" class="mask is-star h-11 w-11 origin-center object-cover" alt="image" />

                            <div class="absolute right-0 top-0 -m-1 flex h-5 min-w-[1.25rem] items-center justify-center rounded-full border border-white bg-slate-200 px-1 text-tiny+ font-medium leading-none text-slate-800 dark:border-navy-700 dark:bg-navy-450 dark:text-white">
                                1
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center space-x-1">
                                <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                                    Tuna salad
                                </p>
                                <button class="btn h-6 w-6 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                            </div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Amet consectetur adip.
                            </p>
                        </div>
                    </div>
                    <p class="font-inter font-semibold">$14.00</p>
                </div>
                <div class="group flex items-center justify-between space-x-3">
                    <div class="flex items-center space-x-4">
                        <div class="relative flex">
                            <img src="/images/object/food-9.jpg" class="mask is-star h-11 w-11 origin-center object-cover" alt="image" />

                            <div class="absolute right-0 top-0 -m-1 flex h-5 min-w-[1.25rem] items-center justify-center rounded-full border border-white bg-slate-200 px-1 text-tiny+ font-medium leading-none text-slate-800 dark:border-navy-700 dark:bg-navy-450 dark:text-white">
                                3
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center space-x-1">
                                <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                                    Salmon
                                </p>
                                <button class="btn h-6 w-6 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                            </div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Adipisicing elit. Quos?
                            </p>
                        </div>
                    </div>
                    <p class="font-inter font-semibold">$45.00</p>
                </div>
                <div class="group flex items-center justify-between space-x-3">
                    <div class="flex items-center space-x-4">
                        <div class="relative flex">
                            <img src="/images/object/food-7.jpg" class="mask is-star h-11 w-11 origin-center object-cover" alt="image" />

                            <div class="absolute right-0 top-0 -m-1 flex h-5 min-w-[1.25rem] items-center justify-center rounded-full border border-white bg-slate-200 px-1 text-tiny+ font-medium leading-none text-slate-800 dark:border-navy-700 dark:bg-navy-450 dark:text-white">
                                1
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center space-x-1">
                                <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                                    California roll
                                </p>
                                <button class="btn h-6 w-6 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                            </div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Lorem, ipsum dolor.
                            </p>
                        </div>
                    </div>
                    <p class="font-inter font-semibold">$22.00</p>
                </div>
                <div class="group flex items-center justify-between space-x-3">
                    <div class="flex items-center space-x-4">
                        <div class="relative flex">
                            <img src="/images/object/food-2.jpg" class="mask is-star h-11 w-11 origin-center object-cover" alt="image" />

                            <div class="absolute right-0 top-0 -m-1 flex h-5 min-w-[1.25rem] items-center justify-center rounded-full border border-white bg-slate-200 px-1 text-tiny+ font-medium leading-none text-slate-800 dark:border-navy-700 dark:bg-navy-450 dark:text-white">
                                2
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center space-x-1">
                                <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                                    Duck carpaccio
                                </p>
                                <button class="btn h-6 w-6 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                            </div>
                            <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                Amet consectetur adip.
                            </p>
                        </div>
                    </div>
                    <p class="font-inter font-semibold">$18.00</p>
                </div>
            </div>
            <div class="my-4 h-px bg-slate-200 dark:bg-navy-500"></div>
            <div class="space-y-2 font-inter">
                <div class="flex justify-between text-slate-600 dark:text-navy-100">
                    <p>Subtotal</p>
                    <p class="font-medium tracking-wide">55.00$</p>
                </div>
                <div class="flex justify-between text-xs+">
                    <p>Tax</p>
                    <p class="font-medium tracking-wide">5.00$</p>
                </div>
                <div class="flex justify-between text-base font-medium text-primary dark:text-accent-light">
                    <p>Total</p>
                    <p>60.00$</p>
                </div>
            </div>
            <div class="mt-5 grid grid-cols-3 gap-4 text-center">
                <button class="rounded-lg border border-slate-200 p-3 dark:border-navy-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline h-9 w-9" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="mt-1 font-medium text-primary dark:text-accent-light">
                        Cash
                    </span>
                </button>
                <button class="rounded-lg border border-slate-200 p-3 dark:border-navy-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline h-9 w-9" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                    <span class="mt-1 font-medium text-primary dark:text-accent-light">
                        Debit
                    </span>
                </button>
                <button class="rounded-lg border border-slate-200 p-3 dark:border-navy-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline h-9 w-9" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                    </svg>
                    <span class="mt-1 font-medium text-primary dark:text-accent-light">
                        Scan
                    </span>
                </button>
            </div>
            <button class="btn mt-5 h-11 justify-between bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                <span>Checkout</span>
                <span>$88.00</span>
            </button>
        </div>
    </div>
</div>
<?php $this->endSection() ?>
<?php $this->section('MainModals') ?>
<div x-data="{showDrawer:false}" x-show="showDrawer" x-effect="$store.breakpoints.smAndUp && (showDrawer = false)" @show-drawer.window="($event.detail.drawerId === 'pos-card-drawer') && (showDrawer = true)" @keydown.window.escape="showDrawer = false">
    <div class="fixed inset-0 z-[100] bg-slate-900/60 transition-opacity duration-200" @click="showDrawer = false" x-show="showDrawer" x-transition:enter="ease-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
    <div class="fixed bottom-0 right-0 z-[101] h-[calc(100%-2.5rem)] w-full">
        <div class="flex h-full w-full flex-col rounded-t-2xl bg-white px-4 py-3 transition-transform duration-200 dark:bg-navy-700" x-show="showDrawer" x-transition:enter="ease-out transform-gpu" x-transition:enter-start="translate-y-full" x-transition:enter-end="translate-y-0" x-transition:leave="ease-in transform-gpu" x-transition:leave-start="translate-y-0" x-transition:leave-end="translate-y-full">
            <div class="flex items-center justify-between">
                <div class="-ml-1 flex items-center space-x-1.5">
                    <button @click="showDrawer=false" class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <div class="flex items-center space-x-1">
                        <p>
                            <span class="text-base font-medium text-slate-700 dark:text-navy-100">Draft</span>
                            <span>#001</span>
                        </p>

                        <div x-data="usePopper({placement:'bottom-end',offset:4})" @click.outside="isShowPopper && (isShowPopper = false)" class="inline-flex">
                            <button x-ref="popperRef" @click="isShowPopper = !isShowPopper" class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                <div class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                    <ul>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Draft #001</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Draft #002</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Draft #005</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="-mr-1.5 flex space-x-1">
                    <button class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4" />
                        </svg>
                    </button>
                    <button class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 hover:text-error focus:bg-slate-300/20 focus:text-error active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                    <div x-data="usePopper({placement:'bottom-end',offset:4})" @click.outside="isShowPopper && (isShowPopper = false)" class="inline-flex">
                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper" class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>

                        <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                            <div class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                <ul>
                                    <li>
                                        <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another Action</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something else</a>
                                    </li>
                                </ul>
                                <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                <ul>
                                    <li>
                                        <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated Link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex grow flex-col overflow-y-auto">
                <div class="mt-4 flex grow flex-col space-y-3.5">
                    <div class="group flex items-center justify-between space-x-3">
                        <div class="flex items-center space-x-4">
                            <div class="relative flex">
                                <img src="/images/object/food-4.jpg" class="mask is-star h-11 w-11 origin-center object-cover" alt="image" />

                                <div class="absolute right-0 top-0 -m-1 flex h-5 min-w-[1.25rem] items-center justify-center rounded-full border border-white bg-slate-200 px-1 text-tiny+ font-medium leading-none text-slate-800 dark:border-navy-700 dark:bg-navy-450 dark:text-white">
                                    2
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center space-x-1">
                                    <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                                        Roast beef
                                    </p>
                                    <button class="btn h-6 w-6 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </button>
                                </div>
                                <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                    Lorem ipsum dolor sit.
                                </p>
                            </div>
                        </div>
                        <p class="font-inter font-semibold">$12.00</p>
                    </div>
                    <div class="group flex items-center justify-between space-x-3">
                        <div class="flex items-center space-x-4">
                            <div class="relative flex">
                                <img src="/images/object/food-5.jpg" class="mask is-star h-11 w-11 origin-center object-cover" alt="image" />

                                <div class="absolute right-0 top-0 -m-1 flex h-5 min-w-[1.25rem] items-center justify-center rounded-full border border-white bg-slate-200 px-1 text-tiny+ font-medium leading-none text-slate-800 dark:border-navy-700 dark:bg-navy-450 dark:text-white">
                                    1
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center space-x-1">
                                    <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                                        Tuna salad
                                    </p>
                                    <button class="btn h-6 w-6 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </button>
                                </div>
                                <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                    Amet consectetur adip.
                                </p>
                            </div>
                        </div>
                        <p class="font-inter font-semibold">$14.00</p>
                    </div>
                    <div class="group flex items-center justify-between space-x-3">
                        <div class="flex items-center space-x-4">
                            <div class="relative flex">
                                <img src="/images/object/food-2.jpg" class="mask is-star h-11 w-11 origin-center object-cover" alt="image" />

                                <div class="absolute right-0 top-0 -m-1 flex h-5 min-w-[1.25rem] items-center justify-center rounded-full border border-white bg-slate-200 px-1 text-tiny+ font-medium leading-none text-slate-800 dark:border-navy-700 dark:bg-navy-450 dark:text-white">
                                    3
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center space-x-1">
                                    <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                                        Salmon
                                    </p>
                                    <button class="btn h-6 w-6 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </button>
                                </div>
                                <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                    Adipisicing elit. Quos?
                                </p>
                            </div>
                        </div>
                        <p class="font-inter font-semibold">$45.00</p>
                    </div>
                    <div class="group flex items-center justify-between space-x-3">
                        <div class="flex items-center space-x-4">
                            <div class="relative flex">
                                <img src="/images/object/food-12.jpg" class="mask is-star h-11 w-11 origin-center object-cover" alt="image" />

                                <div class="absolute right-0 top-0 -m-1 flex h-5 min-w-[1.25rem] items-center justify-center rounded-full border border-white bg-slate-200 px-1 text-tiny+ font-medium leading-none text-slate-800 dark:border-navy-700 dark:bg-navy-450 dark:text-white">
                                    1
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center space-x-1">
                                    <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                                        California roll
                                    </p>
                                    <button class="btn h-6 w-6 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </button>
                                </div>
                                <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                    Lorem, ipsum dolor.
                                </p>
                            </div>
                        </div>
                        <p class="font-inter font-semibold">$22.00</p>
                    </div>
                    <div class="group flex items-center justify-between space-x-3">
                        <div class="flex items-center space-x-4">
                            <div class="relative flex">
                                <img src="/images/object/food-10.jpg" class="mask is-star h-11 w-11 origin-center object-cover" alt="image" />

                                <div class="absolute right-0 top-0 -m-1 flex h-5 min-w-[1.25rem] items-center justify-center rounded-full border border-white bg-slate-200 px-1 text-tiny+ font-medium leading-none text-slate-800 dark:border-navy-700 dark:bg-navy-450 dark:text-white">
                                    2
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center space-x-1">
                                    <p class="line-clamp-1 font-medium text-slate-700 dark:text-navy-100">
                                        Duck carpaccio
                                    </p>
                                    <button class="btn h-6 w-6 rounded-full p-0 opacity-0 hover:bg-slate-300/20 focus:bg-slate-300/20 focus:opacity-100 active:bg-slate-300/25 group-hover:opacity-100 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </button>
                                </div>
                                <p class="text-xs+ text-slate-400 dark:text-navy-300">
                                    Amet consectetur adip.
                                </p>
                            </div>
                        </div>
                        <p class="font-inter font-semibold">$18.00</p>
                    </div>
                </div>
                <div class="my-4 h-px bg-slate-200 dark:bg-navy-500"></div>
                <div class="space-y-2 font-inter">
                    <div class="flex justify-between text-slate-600 dark:text-navy-100">
                        <p>Subtotal</p>
                        <p class="font-medium tracking-wide">55.00$</p>
                    </div>
                    <div class="flex justify-between text-xs+">
                        <p>Tax</p>
                        <p class="font-medium tracking-wide">5.00$</p>
                    </div>
                    <div class="flex justify-between text-base font-medium text-primary dark:text-accent-light">
                        <p>Total</p>
                        <p>60.00$</p>
                    </div>
                </div>
                <div class="mt-5 grid grid-cols-3 gap-4 text-center">
                    <button class="rounded-lg border border-slate-200 p-3 dark:border-navy-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-9 w-9" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="mt-1 font-medium text-primary dark:text-accent-light">
                            Cash
                        </span>
                    </button>
                    <button class="rounded-lg border border-slate-200 p-3 dark:border-navy-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-9 w-9" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                        <span class="mt-1 font-medium text-primary dark:text-accent-light">
                            Debit
                        </span>
                    </button>
                    <button class="rounded-lg border border-slate-200 p-3 dark:border-navy-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-9 w-9" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                        </svg>
                        <span class="mt-1 font-medium text-primary dark:text-accent-light">
                            Scan
                        </span>
                    </button>
                </div>
                <button class="btn mt-5 h-11 w-full justify-between bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                    <span>Checkout</span>
                    <span>$88.00</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="fixed bottom-3 right-3 rounded-full bg-white dark:bg-navy-700">
    <button @click="$dispatch('show-drawer', { drawerId: 'pos-card-drawer' })" class="btn h-14 w-14 rounded-full bg-warning p-0 font-medium text-white hover:bg-warning-focus focus:bg-warning-focus active:bg-warning-focus/90 sm:hidden">
        $60
    </button>
</div>
<?php $this->endSection() ?>