<template>
    <app-layout>
		<div class="artist mt-10">
			<p>Name: <span class="ml-4 text-bold text-blue-500 text-2xl">{{ artist.name }}</span></p>
			<p>Age: <span class="ml-4 text-bold text-blue-500 text-2xl">{{ artist.age }}</span></p>
			<p>Albums: <span class="ml-4 text-bold text-blue-500 text-2xl">{{ artist.albums }}</span></p>
			<p>Country: <span class="ml-4 text-bold text-blue-500 text-2xl">{{ artist.country }}</span></p>
			<p>Latest Hit: <span class="ml-4 text-bold text-blue-500 text-2xl">{{ artist.latest_hit }}</span></p>
		</div>

		<br>
		<br>
		<br>

		<add-song :artist="artist"/>
    </app-layout>
</template>

<script>

    import AppLayout from '@/Layouts/AppLayout'
    import AddSong from '@/Components/AddSong'

    export default {
        props: ['artist'],

        components: {
            AppLayout,
            AddSong,
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