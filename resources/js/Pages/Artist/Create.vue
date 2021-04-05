<template>
    <app-layout>
        <div class="flex flex-col content-center t-2">
            <!-- component -->
            <form @submit.prevent="addArtist">
                <div class="max-w-2xl py-10 px-5 m-auto w-full mt-1">

                  <div class="text-3xl mb-6 text-center ">
                    Enter an artist details!
                  </div>

                  <div class="grid grid-cols-2 gap-4 max-w-xl m-auto">

                    <div class="col-span-2">
                        <label for="name" class="md:text-xl">Name</label><br>
                        <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Name" v-model="form.name"/>
                    </div>

                    <div class="col-span-2">
                        <label for="age" class="md:text-xl">Age (Optional) </label><br>
                        <input type="number" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Age" v-model="form.age"/>
                    </div>

                    <div class="col-span-2">
                        <label for="albums" class="md:text-xl">Albums (Optional)</label><br>
                        <input type="number" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Albums" v-model="form.albums"/>
                    </div>

                    <div class="col-span-2">
                        <label for="country" class="md:text-xl">Country (Optional)</label><br>
                        <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Country" v-model="form.country"/>
                    </div>

                    <div class="col-span-2">
                        <label for="latest_hit" class="md:text-xl">Latest Hit (Optional)</label><br>
                        <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Latest hit song by the artist" v-model="form.latest_hit"/>
                    </div>

                    <div class="col-span-2 text-right">
                      <input type="submit" value="Add Artist" class="py-3 px-6 bg-green-500 text-white font-bold w-full sm:w-32">
                    </div>

                  </div>
                </div>
            </form>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        data() {
            return {
                form: {
                    name: '',
                    age: '',
                    albums: '',
                    country: '',
                    latest_hit: '',
                }
            }
        },

        methods: {
            addArtist() {
                this.$inertia.post('/artist', this.form)
                    .catch(err => console.log(err.message))
            }
        },

        components: {
            AppLayout,
        },
    }
</script>
