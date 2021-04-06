<template>
	<div class="lg:grid lg:grid-cols-2">
	    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
	        <div>
	            <slot name="logo" />
	        </div>

	        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
	            <slot />
	        </div>
	    </div>

	    <div class="hidden lg:block m-auto p-4 text-2xl">
	    	<h1 class="text-purple-600 text-4xl font-sans">Welcome to Song!</h1>
	    	<br>
	    	<br>

	    	<h3 class="text-gray-700">A great place to add your favourite artists and songs!</h3>
	    </div>
	</div>
</template>
