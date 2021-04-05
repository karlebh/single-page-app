<template>
    <app-layout>

<div class="flex mx-20 justify-between my-10">
    <inertia-link v-if="artists.prev_page_url" :href="artists.prev_page_url">Previous</inertia-link> 

    <inertia-link v-if="artists.next_page_url" :href="artists.next_page_url">Next</inertia-link>
</div>


        <!-- component -->
        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div>
                    <h2 class="text-2xl font-semibold leading-tight text-center">All Artists</h2>
                </div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Id
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Latest Hit
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Albums
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="tbody" v-for="artist in artists.data">
                                <table-row class ="trow" :artist="artist" />
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </app-layout>
</template>

<script>


    import AppLayout from '@/Layouts/AppLayout'
    import TableRow  from '@/Components/TableRow'

    export default {
        props: ['artists'],

        data() {
            return {
                page: '',
            }
        },

        components: {
            AppLayout,
            TableRow,
        },
    }
</script>
