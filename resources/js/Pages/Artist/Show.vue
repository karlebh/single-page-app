<template>
    <app-layout>
		<div class="artist mt-10">
			<div>
				<p>Name: <span class="ml-4 text-bold text-blue-500 text-2xl">{{ artist.name }}</span></p>
				<p>Age: <span class="ml-5 text-bold text-blue-500 text-2xl">{{ artist.age }}</span></p>
				<p>Albums: <span class="ml-4 text-bold text-blue-500 text-2xl">{{ artist.albums }}</span></p>
				<p>Country: <span class="ml-4 text-bold text-blue-500 text-2xl">{{ artist.country }}</span></p>
				<p>Latest Hit: <span class="ml-4 text-bold text-blue-500 text-2xl">{{ artist.latest_hit }}</span></p>

				<p>No of Songs: <span class="ml-4 text-bold text-blue-500 text-2xl">{{ artist.songs_count }}</span></p>
			</div>
		</div>

		<!-- <show-table :songs="artist.songs" />		 -->
		 <div class="container mx-auto px-4 sm:px-8 mt-10" v-if="artist.songs_count > 0">
		        <div>
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
		                         <tr v-for="song in artist.songs" >
		                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-1/5">
		                                <p class="text-gray-900 whitespace-no-wrap text-center">
		                                    {{ song.name }}
		                                </p>
		                            </td>

		                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-1/5">
		                                <p class="text-gray-900 whitespace-no-wrap text-center">
		                                    {{ song.duration }}
		                                </p>
		                            </td>

		                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-1/5">
		                                <p class="text-gray-900 whitespace-no-wrap text-center">
		                                    {{ song.download_count }}
		                                </p>
		                            </td>

		                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-1/5">
		                                <p class="text-gray-900 whitespace-no-wrap text-center">
		                                    {{ !!song.hit }}
		                                </p>
		                            </td>
		                        </tr>
		                    </table>
		                </div>
		            </div>
		        </div>
		    </div>
		<add-song :artist="artist"/>
    </app-layout>
</template>

<script>

    import AppLayout from '@/Layouts/AppLayout'
    import AddSong from '@/Components/AddSong'
    // import ShowTable from '@/Components/ShowTable'

    export default {
        props: ['artist'],

        components: {
            AppLayout,
            AddSong,
            // ShowTable
        },
    }
</script>

<style scoped>
	.artist {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
	}
</style>