<template>
    <app-layout>

<div class="flex mx-20 justify-between my-10">
    <inertia-link v-if="songs.prev_page_url" :href="songs.prev_page_url">Previous</inertia-link> 

    <inertia-link v-if="songs.next_page_url" :href="songs.next_page_url">Next</inertia-link>
</div>

        <div class="container mx-auto px-4 sm:px-8">
            <div v-if="songs.data">
                <div>
                    <h2 class="text-2xl font-semibold leading-tight text-center">All Songs</h2>
                </div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-200 text-center text-xs font-bold text-gray-600 uppercase tracking-wider">
                                        Artist Name
                                    </th>  
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-200 text-center text-xs font-bold text-gray-600 uppercase tracking-wider">
                                        Song Name
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-200 text-center text-xs font-bold text-gray-600 uppercase tracking-wider">
                                        Duration in Minutes
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-200 text-center text-xs font-bold text-gray-600 uppercase tracking-wider">
                                        Number of Downloads
                                    </th>

                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-200 text-center text-xs font-bold text-gray-600 uppercase tracking-wider">
                                        Is It a Hit?
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="tbody" v-for="song in songs.data">
                                <song-table-row class="trow" :song="song" />
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div v-else class="text-center text-xl">
                <p>No Data</p>
            </div>
        </div>
        
    </app-layout>
</template>

<script>


    import AppLayout from '@/Layouts/AppLayout'
    import SongTableRow  from '@/Components/SongTableRow'

    export default {
        props: ['songs'],

        components: {
            AppLayout,
            SongTableRow,
        },
    }
</script>
