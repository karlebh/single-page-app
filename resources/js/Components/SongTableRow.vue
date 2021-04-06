<template>
    <tr>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-1/5">
            <p class="text-gray-900 whitespace-no-wrap text-xl text-blue-400 text-center">
                <inertia-link :href="route('artist.show', song.artist.slug)">{{ song.artist.name }}</inertia-link>
                
            </p>
        </td>

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
                {{ Hit }}
            </p>
        </td>
    </tr>
</template>

<script>
    export default {
        props: ['song'],

        computed: {
            Hit() {
                return Boolean(this.song.hit)
            }
        }

    }
</script>