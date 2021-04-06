<template>
    <app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-gray-600 text-2xl">
                        Welcome To <span class="text-2xl font-extrabold text-blue-500">Song!</span>
                    </h1>

                    <p class="mt-10 text-5xl font-semibold">
                        Enjoy! Explore the links above!
                    </p>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
        },
    }
</script>
