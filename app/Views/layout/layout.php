<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

    <title>
        <?= $this->renderSection('title') ?>
    </title>
    <link rel="icon" type="image/png" href="/images/favicon.png" />

    <!-- CSS Assets -->
    <link rel="stylesheet" href="/css/app.css" />

    <!-- Javascript Assets -->
    <script src="/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <script>
        /**
         * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
         */
        localStorage.getItem("_x_darkMode_on") === "true" &&
            document.documentElement.classList.add("dark");
    </script>
</head>

<body x-data x-bind="$store.global.documentBody" class="has-min-sidebar is-sidebar-open is-header-blur">
    <?php
    // الحصول على المسار الحالي
    // $currentUrl = current_url();
    $noavctive = 'dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25';
    $active = 'bg-primary/10 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90';
    $isDashboardPage = strpos(current_url(), '/dashboard');
    $isChatPage = strpos(current_url(), '/chat');
    $isEmailPage = strpos(current_url(), '/email');
    $isKanbanPage = strpos(current_url(), '/kanban');
    $isTodoPage = strpos(current_url(), '/todos');
    $isFileManagerPage = strpos(current_url(), '/file-manager');
    $isOtherPage = strpos(current_url(), '/other');

    ?>
    <!-- App preloader-->
    <div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">
        <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
    </div>

    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
        <!-- Sidebar -->
        <div class="sidebar print:hidden">
            <!-- Main Sidebar -->
            <div class="main-sidebar">
                <div class="flex h-full w-full flex-col items-center border-r border-slate-150 bg-white dark:border-navy-700 dark:bg-navy-800">
                    <!-- Application Logo -->
                    <div class="flex pt-4">
                        <a href="/">
                            <img class="h-11 w-11 transition-transform duration-500 ease-in-out hover:rotate-[360deg]" src="/images/app-logo.svg" alt="logo" />
                        </a>
                    </div>

                    <!-- Main Sections Links -->
                    <div class="is-scrollbar-hidden flex grow flex-col space-y-4 overflow-y-auto pt-6">

                        <!-- Apps -->
                        <a href="<?= route_to("chat") ?>" class="flex h-11 w-11 items-center justify-center rounded-lg outline-none  text-primary  transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 <?= $isChatPage ? $active : $noavctive ?>" x-tooltip.placement.right="'Chats Apps'">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                        </a>

                        <!-- Pages And Layouts -->
                        <a href="<?= route_to("email") ?>" class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 text-warning <?= $isEmailPage ? $active : $noavctive ?>" x-tooltip.placement.right="'Emails App'">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </a>

                        <!-- Forms -->
                        <a href="<?= route_to("kanban") ?>" class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 text-success <?= $isKanbanPage ? $active : $noavctive ?>" x-tooltip.placement.right="'Kanban App'">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                            </svg>
                        </a>

                        <!-- Components -->
                        <a href="<?= route_to("todos") ?>" class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 text-info <?= $isTodoPage ? $active : $noavctive ?>" x-tooltip.placement.right="'Todos App'">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5293 18L20.9999 8.40002" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3 13.2L7.23529 18L17.8235 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>

                        <!-- Elements -->
                        <a href="<?= route_to("file-manager") ?>" class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 text-info <?= $isFileManagerPage ? $active : $noavctive ?>" x-tooltip.placement.right="'File Manager'">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                            </svg>
                        </a>
                        <a href="<?= route_to("other-post") ?>" class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 text-info <?= $isOtherPage ? $active : $noavctive ?>" x-tooltip.placement.right="'Other App'">
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 8H19V16C19 17.8856 19 18.8284 18.4142 19.4142C17.8284 20 16.8856 20 15 20H9C7.11438 20 6.17157 20 5.58579 19.4142C5 18.8284 5 17.8856 5 16V8Z" fill="currentColor" fill-opacity="0.3" />
                                <path d="M12 8L11.7608 5.84709C11.6123 4.51089 10.4672 3.5 9.12282 3.5V3.5C7.68381 3.5 6.5 4.66655 6.5 6.10555V6.10555C6.5 6.97673 6.93539 7.79026 7.66025 8.2735L9.5 9.5" stroke="currentColor" stroke-linecap="round" />
                                <path d="M12 8L12.2392 5.84709C12.3877 4.51089 13.5328 3.5 14.8772 3.5V3.5C16.3162 3.5 17.5 4.66655 17.5 6.10555V6.10555C17.5 6.97673 17.0646 7.79026 16.3397 8.2735L14.5 9.5" stroke="currentColor" stroke-linecap="round" />
                                <rect x="4" y="8" width="16" height="3" rx="1" fill="currentColor" />
                                <path d="M12 11V15" stroke="currentColor" stroke-linecap="round" />
                            </svg>
                        </a>
                     
                    </div>

                    <!-- Bottom Links -->
                    <div class="flex flex-col items-center space-y-3 py-3">
                        <!-- Settings -->
                        <a href="#" class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-opacity="0.3" fill="currentColor" d="M2 12.947v-1.771c0-1.047.85-1.913 1.899-1.913 1.81 0 2.549-1.288 1.64-2.868a1.919 1.919 0 0 1 .699-2.607l1.729-.996c.79-.474 1.81-.192 2.279.603l.11.192c.9 1.58 2.379 1.58 3.288 0l.11-.192c.47-.795 1.49-1.077 2.279-.603l1.73.996a1.92 1.92 0 0 1 .699 2.607c-.91 1.58-.17 2.868 1.639 2.868 1.04 0 1.899.856 1.899 1.912v1.772c0 1.047-.85 1.912-1.9 1.912-1.808 0-2.548 1.288-1.638 2.869.52.915.21 2.083-.7 2.606l-1.729.997c-.79.473-1.81.191-2.279-.604l-.11-.191c-.9-1.58-2.379-1.58-3.288 0l-.11.19c-.47.796-1.49 1.078-2.279.605l-1.73-.997a1.919 1.919 0 0 1-.699-2.606c.91-1.58.17-2.869-1.639-2.869A1.911 1.911 0 0 1 2 12.947Z" />
                                <path fill="currentColor" d="M11.995 15.332c1.794 0 3.248-1.464 3.248-3.27 0-1.807-1.454-3.272-3.248-3.272-1.794 0-3.248 1.465-3.248 3.271 0 1.807 1.454 3.271 3.248 3.271Z" />
                            </svg>
                        </a>

                        <!-- Profile -->
                        <div x-data="usePopper({placement:'right-end',offset:12})" @click.outside="isShowPopper && (isShowPopper = false)" class="flex">
                            <button @click="isShowPopper = !isShowPopper" x-ref="popperRef" class="avatar h-12 w-12">
                                <img class="rounded-full" src="/images/app/avatar-12.jpg" alt="avatar" />
                                <span class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-success dark:border-navy-700"></span>
                            </button>

                            <div :class="isShowPopper && 'show'" class="popper-root fixed" x-ref="popperRoot">
                                <div class="popper-box w-64 rounded-lg border border-slate-150 bg-white shadow-soft dark:border-navy-600 dark:bg-navy-700">
                                    <div class="flex items-center space-x-4 rounded-t-lg bg-slate-100 px-4 py-5 dark:bg-navy-800">
                                        <div class="avatar h-14 w-14">
                                            <img class="rounded-full" src="/images/app/avatar-12.jpg" alt="avatar" />
                                        </div>
                                        <div>
                                            <a href="#" class="text-base font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                                                Travis Fuller
                                            </a>
                                            <p class="text-xs text-slate-400 dark:text-navy-300">
                                                Product Designer
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col pb-5 pt-2">
                                        <a href="#" class="group flex items-center space-x-3 px-4 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                            <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-warning text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </div>

                                            <div>
                                                <h2 class="font-medium text-slate-700 transition-colors group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                                    Profile
                                                </h2>
                                                <div class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                                                    Your profile setting
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="group flex items-center space-x-3 px-4 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                            <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-info text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                                </svg>
                                            </div>

                                            <div>
                                                <h2 class="font-medium text-slate-700 transition-colors group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                                    Messages
                                                </h2>
                                                <div class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                                                    Your messages and tasks
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="group flex items-center space-x-3 px-4 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                            <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-secondary text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                                </svg>
                                            </div>

                                            <div>
                                                <h2 class="font-medium text-slate-700 transition-colors group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                                    Team
                                                </h2>
                                                <div class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                                                    Your team activity
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="group flex items-center space-x-3 px-4 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                            <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-error text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                </svg>
                                            </div>

                                            <div>
                                                <h2 class="font-medium text-slate-700 transition-colors group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                                    Activity
                                                </h2>
                                                <div class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                                                    Your activity and events
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="group flex items-center space-x-3 px-4 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                            <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-success text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                            </div>

                                            <div>
                                                <h2 class="font-medium text-slate-700 transition-colors group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                                    Settings
                                                </h2>
                                                <div class="line-clamp-1 text-xs text-slate-400 dark:text-navy-300">
                                                    Webapp settings
                                                </div>
                                            </div>
                                        </a>
                                        <div class="mt-3 px-4">
                                            <button class="btn h-9 w-full space-x-2 bg-primary text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                                </svg>
                                                <span>Logout</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Panel change -->
            <div class="sidebar-panel">
                <div class="flex h-full grow flex-col bg-white pl-[var(--main-sidebar-width)] dark:bg-navy-750">
                    <?php $this->renderSection('SliderPanel') ?>
                </div>
            </div>

            <!-- Minimized Sidebar Panel  change-->
            <?php if (!$isOtherPage) : ?>
                <div class="sidebar-panel-min">
                    <div class="flex h-full flex-col bg-white dark:bg-navy-750">
                        <?php $this->renderSection('MiniSliderPanel') ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- Right Sidebar -->
        <div x-show="$store.global.isRightSidebarExpanded" @keydown.window.escape="$store.global.isRightSidebarExpanded = false">
            <div class="fixed inset-0 z-[150] bg-slate-900/60 transition-opacity duration-200" @click="$store.global.isRightSidebarExpanded = false" x-show="$store.global.isRightSidebarExpanded" x-transition:enter="ease-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
            <div class="fixed right-0 top-0 z-[151] h-full w-full sm:w-80">
                <div x-data="{activeTab:'tabHome'}" class="relative flex h-full w-full transform-gpu flex-col bg-white transition-transform duration-200 dark:bg-navy-750" x-show="$store.global.isRightSidebarExpanded" x-transition:enter="ease-out" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="ease-in" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
                    <div class="flex items-center justify-between px-4 py-2">
                        <p x-show="activeTab === 'tabHome'" class="flex shrink-0 items-center space-x-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs">25 May, 2022</span>
                        </p>
                        <p x-show="activeTab === 'tabProjects'" class="flex shrink-0 items-center space-x-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                            </svg>
                            <span class="text-xs">Projects</span>
                        </p>
                        <p x-show="activeTab === 'tabActivity'" class="flex shrink-0 items-center space-x-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-xs">Activity</span>
                        </p>

                        <button @click="$store.global.isRightSidebarExpanded=false" class="btn -mr-1 h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div x-show="activeTab === 'tabHome'" x-transition:enter="transition-all duration-500 easy-in-out" x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]" x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]" class="is-scrollbar-hidden overflow-y-auto overscroll-contain pt-1">
                        <label class="relative flex px-3">
                            <input class="form-input peer h-8 w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 text-xs+ ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900" placeholder="Search here..." type="text" />
                            <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 transition-colors duration-200" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z" />
                                </svg>
                            </span>
                        </label>
                        <div class="mt-3">
                            <h2 class="line-clamp-1 px-3 text-xs+ font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                Banking cards
                            </h2>
                            <div class="swiper mt-3 px-3" x-init="$nextTick(()=>new Swiper($el,{  slidesPerView: 'auto', spaceBetween: 16}))">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide relative flex h-28 w-48 flex-col overflow-hidden rounded-xl bg-gradient-to-br from-purple-500 to-indigo-600 p-3">
                                        <div class="grow">
                                            <img class="h-3" src="/images/payments/cc-visa-white.svg" alt="image" />
                                        </div>
                                        <div class="text-white">
                                            <p class="text-lg font-semibold tracking-wide">
                                                $2,139.22
                                            </p>
                                            <p class="mt-1 text-xs font-medium">
                                                **** **** **** 8945
                                            </p>
                                        </div>
                                        <div class="mask is-reuleaux-triangle absolute right-0 top-0 -m-3 h-16 w-16 bg-white/20"></div>
                                    </div>
                                    <div class="swiper-slide relative flex h-28 w-48 flex-col overflow-hidden rounded-xl bg-gradient-to-br from-pink-500 to-rose-500 p-3">
                                        <div class="grow">
                                            <img class="h-3" src="/images/payments/cc-visa-white.svg" alt="image" />
                                        </div>
                                        <div class="text-white">
                                            <p class="text-lg font-semibold tracking-wide">
                                                $2,139.22
                                            </p>
                                            <p class="mt-1 text-xs font-medium">
                                                **** **** **** 8945
                                            </p>
                                        </div>
                                        <div class="mask is-diamond absolute bottom-0 right-0 -m-3 h-16 w-16 bg-white/20"></div>
                                    </div>
                                    <div class="swiper-slide relative flex h-28 w-48 flex-col overflow-hidden rounded-xl bg-gradient-to-br from-info to-info-focus p-3">
                                        <div class="grow">
                                            <img class="h-3" src="/images/payments/cc-visa-white.svg" alt="image" />
                                        </div>
                                        <div class="text-white">
                                            <p class="text-lg font-semibold tracking-wide">
                                                $2,139.22
                                            </p>
                                            <p class="mt-1 text-xs font-medium">
                                                **** **** **** 8945
                                            </p>
                                        </div>
                                        <div class="mask is-hexagon-2 absolute right-0 top-0 -m-3 h-16 w-16 bg-white/20"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 px-3">
                            <h2 class="line-clamp-1 text-xs+ font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                Pinned Apps
                            </h2>
                            <div class="mt-3 flex space-x-3">
                                <a href="#" class="w-12 text-center">
                                    <div class="avatar h-10 w-10">
                                        <div class="is-initial mask is-squircle bg-success text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                        Kanban
                                    </p>
                                </a>
                                <a href="#" class="w-12 text-center">
                                    <div class="avatar h-10 w-10">
                                        <div class="is-initial mask is-squircle bg-warning text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                        Sales
                                    </p>
                                </a>
                                <a href="#" class="w-12 text-center">
                                    <div class="avatar h-10 w-10">
                                        <div class="is-initial mask is-squircle bg-info text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                        Chat
                                    </p>
                                </a>
                                <a href="#" class="w-12 text-center">
                                    <div class="avatar h-10 w-10">
                                        <div class="is-initial mask is-squircle bg-error text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                        Files
                                    </p>
                                </a>
                                <a href="#" class="w-12 text-center">
                                    <div class="avatar h-10 w-10">
                                        <div class="is-initial mask is-squircle bg-secondary text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                        Banking
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="grid grid-cols-2 gap-3 px-3">
                                <div class="rounded-lg bg-slate-150 px-2.5 py-2 dark:bg-navy-600">
                                    <div class="flex items-center justify-between space-x-1">
                                        <p>
                                            <span class="text-lg font-medium text-slate-700 dark:text-navy-100">11.3</span>
                                            <span class="text-xs">hr</span>
                                        </p>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 text-secondary dark:text-secondary-light" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <p class="mt-0.5 text-tiny+ uppercase">Working Hours</p>

                                    <div class="progress mt-3 h-1.5 bg-secondary/15 dark:bg-secondary-light/25">
                                        <div class="is-active relative w-8/12 overflow-hidden rounded-full bg-secondary dark:bg-secondary-light"></div>
                                    </div>

                                    <div class="mt-1.5 flex items-center justify-between text-xs text-slate-400 dark:text-navy-300">
                                        <button class="btn -ml-1 h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </button>
                                        <span> 71%</span>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-slate-150 px-2.5 py-2 dark:bg-navy-600">
                                    <div class="flex items-center justify-between space-x-1">
                                        <p>
                                            <span class="text-lg font-medium text-slate-700 dark:text-navy-100">13</span>
                                            <span class="text-xs">/22</span>
                                        </p>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 text-success" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <p class="mt-0.5 text-tiny+ uppercase">Completed tasks</p>

                                    <div class="progress mt-3 h-1.5 bg-success/15 dark:bg-success/25">
                                        <div class="relative w-6/12 overflow-hidden rounded-full bg-success"></div>
                                    </div>

                                    <div class="mt-1.5 flex items-center justify-between text-xs text-slate-400 dark:text-navy-300">
                                        <button class="btn -ml-1 h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </button>
                                        <span> 49%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h2 class="line-clamp-1 px-3 text-xs+ font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                Stock Market
                            </h2>
                            <div class="mt-3 grid grid-cols-2 gap-3 px-3">
                                <div class="rounded-lg bg-slate-100 p-2.5 dark:bg-navy-600">
                                    <div class="flex items-center space-x-2">
                                        <img class="h-10 w-10" src="/images/object/bitcoin.svg" alt="image" />
                                        <div>
                                            <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                                BTC
                                            </h2>
                                            <p class="text-xs">Bitcoin</p>
                                        </div>
                                    </div>

                                    <div class="ax-transparent-gridline">
                                        <div x-init="$nextTick(() => { $el._x_chart = new ApexCharts($el,pages.charts.stockMarket1); $el._x_chart.render() });"></div>
                                    </div>

                                    <div class="mt-2 flex items-center justify-between">
                                        <p class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                            60.33$
                                        </p>
                                        <p class="text-xs font-medium tracking-wide text-success">
                                            +3.3%
                                        </p>
                                    </div>
                                </div>

                                <div class="rounded-lg bg-slate-100 p-2.5 dark:bg-navy-600">
                                    <div class="flex items-center space-x-2">
                                        <img class="h-10 w-10" src="/images/object/solana.svg" alt="image" />
                                        <div>
                                            <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                                SOL
                                            </h2>
                                            <p class="text-xs">Solana</p>
                                        </div>
                                    </div>

                                    <div class="ax-transparent-gridline">
                                        <div x-init="$nextTick(() => { $el._x_chart = new ApexCharts($el,pages.charts.stockMarket2); $el._x_chart.render() });"></div>
                                    </div>

                                    <div class="mt-2 flex items-center justify-between">
                                        <p class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                            20.56$
                                        </p>
                                        <p class="text-xs font-medium tracking-wide text-success">
                                            +4.11%
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h2 class="line-clamp-1 px-3 text-xs+ font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                Latest News
                            </h2>
                            <div class="mt-3 space-y-3 px-2">
                                <div class="flex justify-between space-x-2 rounded-lg bg-slate-100 p-2.5 dark:bg-navy-700">
                                    <div class="flex flex-1 flex-col justify-between">
                                        <div class="line-clamp-2">
                                            <a href="#" class="font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">What is Tailwind CSS?</a>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2">
                                                <div class="avatar h-7 w-7">
                                                    <img class="rounded-full" src="/images/app/avatar-12.jpg" alt="avatar" />
                                                </div>
                                                <div>
                                                    <p class="line-clamp-1 text-xs font-medium">
                                                        John D.
                                                    </p>
                                                    <p class="line-clamp-1 text-tiny+ text-slate-400 dark:text-navy-300">
                                                        2 min read
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <button class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                                    </svg>
                                                </button>
                                                <button class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="/images/object/object-2.jpg" class="h-20 w-20 rounded-lg object-cover object-center" alt="image" />
                                </div>

                                <div class="flex justify-between space-x-2 rounded-lg bg-slate-100 p-2.5 dark:bg-navy-700">
                                    <div class="flex flex-1 flex-col justify-between">
                                        <div class="line-clamp-2">
                                            <a href="#" class="font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">Tailwind CSS Card Example</a>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2">
                                                <div class="avatar h-7 w-7">
                                                    <img class="rounded-full" src="/images/app/avatar-19.jpg" alt="avatar" />
                                                </div>
                                                <div>
                                                    <p class="line-clamp-1 text-xs font-medium">
                                                        Travis F.
                                                    </p>
                                                    <p class="line-clamp-1 text-tiny+ text-slate-400 dark:text-navy-300">
                                                        5 min read
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <button class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                                    </svg>
                                                </button>
                                                <button class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="/images/object/object-1.jpg" class="h-20 w-20 rounded-lg object-cover object-center" alt="image" />
                                </div>

                                <div class="flex justify-between space-x-2 rounded-lg bg-slate-100 p-2.5 dark:bg-navy-700">
                                    <div class="flex flex-1 flex-col justify-between">
                                        <div class="line-clamp-2">
                                            <a href="#" class="font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">10 Tips for Making a Good Camera Even Better</a>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2">
                                                <div class="avatar h-7 w-7">
                                                    <img class="rounded-full" src="/images/app/avatar-10.jpg" alt="avatar" />
                                                </div>
                                                <div>
                                                    <p class="line-clamp-1 text-xs font-medium">
                                                        Alfredo E .
                                                    </p>
                                                    <p class="line-clamp-1 text-tiny+ text-slate-400 dark:text-navy-300">
                                                        4 min read
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <button class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                                    </svg>
                                                </button>
                                                <button class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="/images/object/object-5.jpg" class="h-20 w-20 rounded-lg object-cover object-center" alt="image" />
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 px-3">
                            <h2 class="line-clamp-1 text-xs+ font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                Settings
                            </h2>
                            <div class="mt-2 flex flex-col space-y-2">
                                <label class="inline-flex items-center space-x-2">
                                    <input x-model="$store.global.isDarkModeEnabled" class="form-switch h-5 w-10 rounded-lg bg-slate-300 before:rounded-md before:bg-slate-50 checked:bg-slate-500 checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-navy-400 dark:checked:before:bg-white" type="checkbox" />
                                    <span>Dark Mode</span>
                                </label>
                                <label class="inline-flex items-center space-x-2">
                                    <input x-model="$store.global.isMonochromeModeEnabled" class="form-switch h-5 w-10 rounded-lg bg-slate-300 before:rounded-md before:bg-slate-50 checked:bg-slate-500 checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-navy-400 dark:checked:before:bg-white" type="checkbox" />
                                    <span>Monochrome Mode</span>
                                </label>
                            </div>
                        </div>

                        <div class="mt-3 px-3">
                            <div class="rounded-lg bg-slate-100 p-3 dark:bg-navy-600">
                                <div class="flex items-center justify-between">
                                    <p>
                                        <span class="font-medium text-slate-600 dark:text-navy-100">35GB</span>
                                        of 1TB
                                    </p>
                                    <a href="#" class="text-xs+ font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70">Upgrade</a>
                                </div>

                                <div class="progress mt-2 h-2 bg-slate-150 dark:bg-navy-500">
                                    <div class="w-7/12 rounded-full bg-info"></div>
                                </div>
                            </div>
                        </div>
                        <div class="h-18"></div>
                    </div>

                    <div x-show="activeTab === 'tabProjects'" x-transition:enter="transition-all duration-500 easy-in-out" x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]" x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]" class="is-scrollbar-hidden overflow-y-auto overscroll-contain px-3 pt-1">
                        <div class="grid grid-cols-2 gap-3">
                            <div class="rounded-lg bg-slate-100 p-3 dark:bg-navy-600">
                                <div class="flex justify-between space-x-1">
                                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                        14
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" class="h-5 w-5 text-primary dark:text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <p class="mt-1 text-xs+">Pending</p>
                            </div>
                            <div class="rounded-lg bg-slate-100 p-3 dark:bg-navy-600">
                                <div class="flex justify-between">
                                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                        36
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                    </svg>
                                </div>
                                <p class="mt-1 text-xs+">Completed</p>
                            </div>
                            <div class="rounded-lg bg-slate-100 p-3 dark:bg-navy-600">
                                <div class="flex justify-between">
                                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                        143
                                    </p>

                                    <i class="fa fa-spinner text-base text-warning"></i>
                                </div>
                                <p class="mt-1 text-xs+">In Progress</p>
                            </div>
                            <div class="rounded-lg bg-slate-100 p-3 dark:bg-navy-600">
                                <div class="flex justify-between">
                                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                        279
                                    </p>

                                    <i class="fa-solid fa-list-check text-base text-info"></i>
                                </div>
                                <p class="mt-1 text-xs+">Total</p>
                            </div>
                        </div>

                        <div class="mt-4 rounded-lg border border-slate-150 p-3 dark:border-navy-600">
                            <div class="flex items-center space-x-3">
                                <img class="h-10 w-10 rounded-lg object-cover object-center" src="/images/illustrations/lms-ui.svg" alt="image" />
                                <div>
                                    <p class="font-medium leading-snug text-slate-700 dark:text-navy-100">
                                        LMS App Design
                                    </p>
                                    <p class="text-xs text-slate-400 dark:text-navy-300">
                                        Updated at 7 Sep
                                    </p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="progress h-1.5 bg-slate-150 dark:bg-navy-500">
                                    <div class="w-4/12 rounded-full bg-primary dark:bg-accent"></div>
                                </div>
                                <p class="mt-2 text-right text-xs+ font-medium text-primary dark:text-accent-light">
                                    25%
                                </p>
                            </div>

                            <div class="mt-3 flex items-center justify-between space-x-2">
                                <div class="flex -space-x-3">
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700" src="/images/app/avatar-6.jpg" alt="avatar" />
                                    </div>
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <div class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                            jd
                                        </div>
                                    </div>
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700" src="/images/app/avatar-7.jpg" alt="avatar" />
                                    </div>
                                </div>
                                <button class="btn h-7 w-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="mt-4 rounded-lg border border-slate-150 p-3 dark:border-navy-600">
                            <div class="flex items-center space-x-3">
                                <img class="h-10 w-10 rounded-lg object-cover object-center" src="/images/illustrations/store-ui.svg" alt="image" />
                                <div>
                                    <p class="font-medium leading-snug text-slate-700 dark:text-navy-100">
                                        Store Dashboard
                                    </p>
                                    <p class="text-xs text-slate-400 dark:text-navy-300">
                                        Updated at 11 Sep
                                    </p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="progress h-1.5 bg-slate-150 dark:bg-navy-500">
                                    <div class="w-6/12 rounded-full bg-primary dark:bg-accent"></div>
                                </div>
                                <p class="mt-2 text-right text-xs+ font-medium text-primary dark:text-accent-light">
                                    49%
                                </p>
                            </div>

                            <div class="mt-3 flex items-center justify-between space-x-2">
                                <div class="flex -space-x-3">
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700" src="/images/app/avatar-14.jpg" alt="avatar" />
                                    </div>
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <div class="is-initial rounded-full bg-warning text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                            dv
                                        </div>
                                    </div>
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700" src="/images/app/avatar-14.jpg" alt="avatar" />
                                    </div>
                                </div>
                                <button class="btn h-7 w-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="mt-4 rounded-lg border border-slate-150 p-3 dark:border-navy-600">
                            <div class="flex items-center space-x-3">
                                <img class="h-10 w-10 rounded-lg object-cover object-center" src="/images/illustrations/chat-ui.svg" alt="image" />
                                <div>
                                    <p class="font-medium leading-snug text-slate-700 dark:text-navy-100">
                                        Chat Mobile App
                                    </p>
                                    <p class="text-xs text-slate-400 dark:text-navy-300">
                                        Updated at 19 Sep
                                    </p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="progress h-1.5 bg-slate-150 dark:bg-navy-500">
                                    <div class="w-2/12 rounded-full bg-primary dark:bg-accent"></div>
                                </div>
                                <p class="mt-2 text-right text-xs+ font-medium text-primary dark:text-accent-light">
                                    13%
                                </p>
                            </div>

                            <div class="mt-3 flex items-center justify-between space-x-2">
                                <div class="flex -space-x-3">
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700" src="/images/app/avatar-11.jpg" alt="avatar" />
                                    </div>
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <div class="is-initial rounded-full bg-error text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                            gt
                                        </div>
                                    </div>
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700" src="/images/app/avatar-13.jpg" alt="avatar" />
                                    </div>
                                </div>
                                <button class="btn h-7 w-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="mt-4 rounded-lg border border-slate-150 p-3 dark:border-navy-600">
                            <div class="flex items-center space-x-3">
                                <img class="h-10 w-10 rounded-lg object-cover object-center" src="/images/illustrations/nft.svg" alt="image" />
                                <div>
                                    <p class="font-medium leading-snug text-slate-700 dark:text-navy-100">
                                        NFT Marketplace App
                                    </p>
                                    <p class="text-xs text-slate-400 dark:text-navy-300">
                                        Updated at 5 Sep
                                    </p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="progress h-1.5 bg-slate-150 dark:bg-navy-500">
                                    <div class="w-9/12 rounded-full bg-primary dark:bg-accent"></div>
                                </div>
                                <p class="mt-2 text-right text-xs+ font-medium text-primary dark:text-accent-light">
                                    78%
                                </p>
                            </div>

                            <div class="mt-3 flex items-center justify-between space-x-2">
                                <div class="flex -space-x-3">
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700" src="/images/app/avatar-18.jpg" alt="avatar" />
                                    </div>
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <div class="is-initial rounded-full bg-success text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                            jd
                                        </div>
                                    </div>
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700" src="/images/app/avatar-18.jpg" alt="avatar" />
                                    </div>
                                </div>
                                <button class="btn h-7 w-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="h-18"></div>
                    </div>

                    <div x-show="activeTab === 'tabActivity'" x-transition:enter="transition-all duration-500 easy-in-out" x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]" x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]" class="is-scrollbar-hidden overflow-y-auto overscroll-contain pt-1">
                        <div class="mx-3 flex flex-col items-center rounded-lg bg-slate-100 px-8 py-3 dark:bg-navy-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary dark:text-secondary-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <p class="mt-2 text-xs">Today</p>

                            <p class="text-lg font-medium text-slate-700 dark:text-navy-100">
                                6hr 22m
                            </p>

                            <div class="progress mt-3 h-2 bg-secondary/15 dark:bg-secondary-light/25">
                                <div class="is-active relative w-8/12 overflow-hidden rounded-full bg-secondary dark:bg-secondary-light"></div>
                            </div>

                            <button class="btn mt-5 space-x-2 rounded-full border border-slate-300 px-3 text-xs+ font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 text-slate-400 dark:text-navy-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
                                </svg>
                                <span> Download Report</span>
                            </button>
                        </div>

                        <ol class="timeline line-space mt-5 px-4 [--size:1.5rem]">
                            <li class="timeline-item">
                                <div class="timeline-item-point rounded-full border border-current bg-white text-secondary dark:bg-navy-700 dark:text-secondary-light">
                                    <i class="fa fa-user-edit text-tiny"></i>
                                </div>
                                <div class="timeline-item-content flex-1 pl-4">
                                    <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                        <p class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                            User Photo Changed
                                        </p>
                                        <span class="text-xs text-slate-400 dark:text-navy-300">12 minute ago</span>
                                    </div>
                                    <p class="py-1">John Doe changed his avatar photo</p>
                                    <div class="avatar mt-2 h-20 w-20">
                                        <img class="mask is-squircle" src="/images/app/avatar-19.jpg" alt="avatar" />
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-item-point rounded-full border border-current bg-white text-primary dark:bg-navy-700 dark:text-accent">
                                    <i class="fa-solid fa-image text-tiny"></i>
                                </div>
                                <div class="timeline-item-content flex-1 pl-4">
                                    <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                        <p class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                            Images Added
                                        </p>
                                        <span class="text-xs text-slate-400 dark:text-navy-300">1 hour ago</span>
                                    </div>
                                    <p class="py-1">Mores Clarke added new image gallery</p>
                                    <div class="mt-4 grid grid-cols-3 gap-3">
                                        <img class="rounded-lg" src="/images/object/object-1.jpg" alt="image" />
                                        <img class="rounded-lg" src="/images/object/object-2.jpg" alt="image" />
                                        <img class="rounded-lg" src="/images/object/object-3.jpg" alt="image" />
                                        <img class="rounded-lg" src="/images/object/object-5.jpg" alt="image" />
                                        <img class="rounded-lg" src="/images/object/object-7.jpg" alt="image" />
                                        <img class="rounded-lg" src="/images/object/object-8.jpg" alt="image" />
                                    </div>
                                    <div class="mt-4">
                                        <span class="font-medium text-slate-600 dark:text-navy-100">
                                            Category:
                                        </span>

                                        <a href="#" class="text-xs text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">
                                            #Tag
                                        </a>

                                        <a href="#" class="text-xs text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">
                                            #Category
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-item-point rounded-full border border-current bg-white text-success dark:bg-navy-700">
                                    <i class="fa fa-leaf text-tiny"></i>
                                </div>
                                <div class="timeline-item-content flex-1 pl-4">
                                    <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                        <p class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                            Design Completed
                                        </p>
                                        <span class="text-xs text-slate-400 dark:text-navy-300">3 hours ago</span>
                                    </div>
                                    <p class="py-1">
                                        Robert Nolan completed the design of the CRM application
                                    </p>
                                    <a href="#" class="inline-flex items-center space-x-1 pt-2 text-slate-600 transition-colors hover:text-primary dark:text-navy-100 dark:hover:text-accent">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        <span>File_final.fig</span>
                                    </a>
                                    <div class="pt-2">
                                        <a href="#" class="tag rounded-full border border-secondary/30 bg-secondary/10 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:border-secondary-light/30 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                                            UI/UX
                                        </a>

                                        <a href="#" class="tag rounded-full border border-info/30 bg-info/10 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                                            CRM
                                        </a>

                                        <a href="#" class="tag rounded-full border border-success/30 bg-success/10 text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25">
                                            Dashboard
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-item-point rounded-full border border-current bg-white text-warning dark:bg-navy-700">
                                    <i class="fa fa-project-diagram text-tiny"></i>
                                </div>
                                <div class="timeline-item-content flex-1 pl-4">
                                    <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                        <p class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                            ER Diagram
                                        </p>
                                        <span class="text-xs text-slate-400 dark:text-navy-300">a day ago</span>
                                    </div>
                                    <p class="py-1">Team completed the ER diagram app</p>
                                    <div>
                                        <p class="text-xs text-slate-400 dark:text-navy-300">
                                            Members:
                                        </p>
                                        <div class="mt-2 flex justify-between">
                                            <div class="flex flex-wrap -space-x-2">
                                                <div class="avatar h-7 w-7 hover:z-10">
                                                    <img class="rounded-full ring ring-white dark:ring-navy-700" src="/images/app/avatar-5.jpg" alt="avatar" />
                                                </div>

                                                <div class="avatar h-7 w-7 hover:z-10">
                                                    <div class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                                        jd
                                                    </div>
                                                </div>

                                                <div class="avatar h-7 w-7 hover:z-10">
                                                    <img class="rounded-full ring ring-white dark:ring-navy-700" src="/images/app/avatar-8.jpg" alt="avatar" />
                                                </div>

                                                <div class="avatar h-7 w-7 hover:z-10">
                                                    <img class="rounded-full ring ring-white dark:ring-navy-700" src="/images/app/avatar-12.jpg" alt="avatar" />
                                                </div>

                                                <div class="avatar h-7 w-7 hover:z-10">
                                                    <img class="rounded-full ring ring-white dark:ring-navy-700" src="/images/app/avatar-3.jpg" alt="avatar" />
                                                </div>
                                            </div>
                                            <button class="btn h-7 w-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-item-point rounded-full border border-current bg-white text-error dark:bg-navy-700">
                                    <i class="fa fa-history text-tiny"></i>
                                </div>
                                <div class="timeline-item-content flex-1 pl-4">
                                    <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                        <p class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                            Weekly Report
                                        </p>
                                        <span class="text-xs text-slate-400 dark:text-navy-300">a day ago</span>
                                    </div>
                                    <p class="py-1">The weekly report was uploaded</p>
                                </div>
                            </li>
                        </ol>
                        <div class="h-18"></div>
                    </div>

                    <div class="pointer-events-none absolute bottom-4 flex w-full justify-center">
                        <div class="pointer-events-auto mx-auto flex space-x-1 rounded-full border border-slate-150 bg-white px-4 py-0.5 shadow-lg dark:border-navy-700 dark:bg-navy-900">
                            <button @click="activeTab = 'tabHome'" :class="activeTab === 'tabHome' && 'text-primary dark:text-accent'" class="btn h-9 rounded-full px-4 py-0 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25">
                                <svg x-show="activeTab === 'tabHome'" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                                <svg x-show="activeTab !== 'tabHome'" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </button>
                            <button @click="activeTab = 'tabProjects'" :class="activeTab === 'tabProjects' && 'text-primary dark:text-accent'" class="btn h-9 rounded-full px-4 py-0 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25">
                                <svg x-show="activeTab === 'tabProjects'" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>

                                <svg x-show="activeTab !== 'tabProjects'" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                </svg>
                            </button>
                            <button @click="activeTab = 'tabActivity'" :class="activeTab === 'tabActivity' && 'text-primary dark:text-accent'" class="btn h-9 rounded-full px-4 py-0 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25">
                                <svg x-show="activeTab ===  'tabActivity'" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                </svg>
                                <svg x-show="activeTab !==  'tabActivity'" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        if (!$isChatPage) {
            echo view('layout/Sidebar');
        }
        ?>
        <!-- Main Content Wrapper channge -->


        <main <?php if ($isChatPage) : ?> x-data="{isShowChatInfo : !$store.breakpoints.mdAndDown ,activeChat:{chatId:'chat-1',name:'Alfredo Elliott',avatar_url:'images/app/avatar-1.jpg'}}" x-effect="$store.breakpoints.mdAndDown === true && (isShowChatInfo = false)" class="main-content h-100vh chat-app mt-0 flex w-full flex-col" :class="isShowChatInfo && 'lg:mr-80'" @change-active-chat.window="activeChat=$event.detail" <?php else : ?> class="main-content mail-app w-full px-[var(--margin-x)] pb-6" <?php endif; ?>>
            <?php $this->renderSection('content'); ?>
        </main>

        <?php if ($this->renderSection('modals')) {
            $this->renderSection('modals');
        }
        ?>
    </div>


    <!-- 
        This is a place for Alpine.js Teleport feature 
        @see https://alpinejs.dev/directives/teleport
      -->
    <div id="x-teleport-target"></div>
    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>
</body>

</html>