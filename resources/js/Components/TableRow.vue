<template>
	<tr>
	    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
	        <div class="flex items-center">
	            <div class="flex-shrink-0 w-10 h-10 hidden sm:table-cell">
	                
	            </div>
	            <div class="ml-3">
	                <p class="text-gray-900 whitespace-no-wrap">
	                	<inertia-link :href="route('artist.show', artist.slug)">{{ artist.name }}</inertia-link>
	                    
	                </p>
	            </div>
	        </div>
	    </td>

	    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
	        <p class="text-gray-900 whitespace-no-wrap text-center">
	        	{{ artist.id }}
	        </p>
	    </td>

	    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
	        <p class="text-gray-900 whitespace-no-wrap text-center">
	            {{ artist.latest_hit }}
	        </p>
	    </td>

	    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
	        <div class="flex items-center float-right">
	            <div class="mr-3">
	                <p class="text-gray-900 whitespace-no-wrap text-right">
	                    <inertia-link :href="route('artist.edit', artist.slug)">Edit</inertia-link>
	                </p>
	            </div>
	            <div class="flex-shrink-0 w-10 h-10 hidden sm:table-cell">
	               
	            </div>
	        </div>
	    </td>

	</tr>
</template>

<script>
	export default {
		props: ['artist'],

	}
</script>