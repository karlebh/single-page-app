<template>
	<tr>
	    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-1/4">
            <p class="text-gray-900 whitespace-no-wrap text-xl text-blue-400 text-center">
            	<inertia-link :href="route('artist.show', artist.slug)">{{ artist.name }}</inertia-link>
            </p>
	    </td>

	    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm 1/4">
	        <p class="text-gray-900 whitespace-no-wrap text-center">
	        	{{ artist.age }}
	        </p>
	    </td>

	    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm 1/4">
	        <p class="text-gray-900 whitespace-no-wrap text-center">
	            {{ artist.latest_hit }}
	        </p>
	    </td>

	    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-1/4">
            <p class="text-gray-900 whitespace-no-wrap text-center">
                <inertia-link 
                v-if="$page.props.user.id === artist.user_id"
                class="text-blue-400 text-xl"
                 :href="route('artist.edit', artist.slug)">Edit</inertia-link>

                 <p v-else>
                 	No Action
                 </p>
            </p>
	    </td>
	</tr>
</template>

<script>
	export default {
		props: ['artist'],

	}
</script>