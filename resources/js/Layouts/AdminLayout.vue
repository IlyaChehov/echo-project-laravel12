<template>
    <div class="min-h-screen bg-[var(--main-bg-color)] text-[var(--main-text-color)]">
        <aside
            class="fixed inset-y-0 left-0 z-50 w-64 bg-[var(--second-bg-color)] shadow-lg transform transition-transform duration-300 ease-in-out lg:translate-x-0"
            :class="sidebarIsOpen ? 'translate-x-0' : '-translate-x-full'"
        >
            <div class="flex flex-col h-full">
                <div class="flex items-center justify-between h-16 px-4 border-b-2 border-[var(--accent-color)]">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-[var(--accent-color)] rounded-lg flex items-center justify-center">
                            <span class="text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-6">
                                  <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"/>
                                </svg>
                            </span>
                        </div>
                        <span class="text-xl font-bold text-gray-900 dark:text-white">ECHO</span>
                    </div>
                    <button
                        @click="closeSidebar"
                        class="lg:hidden p-1 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <nav class="flex-1 px-4 py-6">
                    <ul class="flex flex-col gap-2 overflow-y-auto font-semibold">
                        <li>
                            <Link
                                href="#"
                                class="flex items-center gap-2 space-x-3 px-4 py-3 rounded-lg transition-all duration-200 bg-[var(--accent-color)] text-[var(--second-text-color)] border-4 border-transparent hover:border-[var(--main-border-color)] cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6"/>
                                </svg>
                                Статистика
                            </Link>
                        </li>
                        <li>
                            <Link
                                href="#"
                                class="flex items-center gap-2 space-x-3 px-4 py-3 rounded-lg transition-all duration-200 border-4 border-transparent hover:border-[var(--accent-color)]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                </svg>
                                Категории
                            </Link>
                        </li>
                        <li>
                            <Link
                                href="#"
                                class="flex items-center gap-2 space-x-3 px-4 py-3 rounded-lg transition-all duration-200 border-4 border-transparent hover:border-[var(--accent-color)]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                                </svg>
                                Теги
                            </Link>
                        </li>
                        <li>
                            <Link
                                href="#"
                                class="flex items-center gap-2 space-x-3 px-4 py-3 rounded-lg transition-all duration-200 border-4 border-transparent hover:border-[var(--accent-color)]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                Пользователи
                            </Link>
                        </li>
                        <li>
                            <Link
                                href="#"
                                class="flex items-center gap-2 space-x-3 px-4 py-3 rounded-lg transition-all duration-200 border-4 border-transparent hover:border-[var(--accent-color)]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                                Посты
                            </Link>
                        </li>
                    </ul>
                </nav>

                <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700">
                    <div class="text-xs text-gray-500 dark:text-gray-400">Version 1.0.0</div>
                </div>
            </div>
        </aside>

        <div class="lg:ml-64 duration-300 transition-all ease-in-out">
            <header class="sticky top-0 z-40 h-16 bg-[var(--second-bg-color)] shadow-sm">
                <div class="flex items-center justify-between h-full px-4 lg:px-6">
                    <button
                        @click="toggleSidebar"
                        class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors lg:hidden"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>

                    <div class="flex items-center space-x-4 ml-auto">
                        menu
                    </div>
                </div>
            </header>

            <div
                v-if="sidebarIsOpen"
                @click="closeSidebar"
                class="fixed inset-0 bg-gray-900/50 z-40 lg:hidden transition-opacity"
            ></div>

            <main class="p-4 lg:p-8">
                <slot/>
            </main>
        </div>

    </div>
</template>

<script setup>
import {ref} from "vue";
import {Link} from "@inertiajs/vue3";

const sidebarIsOpen = ref(false);

const closeSidebar = () => sidebarIsOpen.value = false;
const toggleSidebar = () => sidebarIsOpen.value = !sidebarIsOpen.value;

</script>

<style>
:root {
    --main-bg-color: #F5F6FA;
    --second-bg-color: #FFFFFF;
    --accent-color: #4880FF;
    --main-text-color: #202224;
    --second-text-color: #FFFFFF;
    --main-border-color: #202224;
}

.dark {
    --main-bg-color: #1B2431;
    --second-bg-color: #273142;
    --accent-color: #4880FF;
    --main-text-color: #FFFFFF;
    --second-text-color: #202224;
    --main-border-color: #FFFFFF;
}

@media (prefers-color-scheme: light) {
    :root {
        --main-bg-color: #F5F6FA;
        --second-bg-color: #FFFFFF;
        --accent-color: #4880FF;
        --main-text-color: #202224;
        --second-text-color: #FFFFFF;
        --main-border-color: #202224;
    }
}

@media (prefers-color-scheme: dark) {
    :root {
        --main-bg-color: #1B2431;
        --second-bg-color: #273142;
        --accent-color: #4880FF;
        --main-text-color: #FFFFFF;
        --second-text-color: #202224;
        --main-border-color: #FFFFFF;
    }
}
</style>

