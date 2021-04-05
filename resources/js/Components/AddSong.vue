<template>
    <div class="flex flex-col content-center t-2">
        <!-- component -->
        <form @submit.prevent="addSong">
            <div class="max-w-2xl py-10 px-5 m-auto w-full mt-1">

              <div class="text-3xl mb-6 text-center ">
                Enter an artist details!
              </div>

              <div class="grid grid-cols-2 gap-4 max-w-xl m-auto">

                <div class="col-span-2">
                    <label for="name" class="md:text-xl">Name</label><br>
                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Name" v-model="artist.name" readonly />
                </div>

                <!-- <input type="hidden" v-model="artist_id" value="artist.id"> -->

                <div class="col-span-2">
                    <label for="duration" class="md:text-xl">Duration</label><br>
                    <input type="number" min="2.0" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Time of Play" v-model="form.duration"/>
                </div>

                <div class="col-span-2">
                    <label for="year_released" class="md:text-xl">Download Count</label><br>
                    <input type="number" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Number of downloads" v-model="form.download_count"/>
                </div>
                <div class="col-span-2">
                    <label for="hit" class="md:text-xl">Is the song a hit?</label><br>
                    <input type="checkbox" min="0" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-2/5 h-20 mt-2" v-model="form.hit"/>
                </div>

                <div class="col-span-2 text-right">
                  <input type="submit" value="Add Song" class="py-3 px-6 bg-green-500 text-white font-bold w-full sm:w-32">
                </div>

              </div>
            </div>
        </form>
    </div>
</template>

<script>

    export default {
        props: ['artist'],

        data() {
            return {
                form: {
                    name: this.artist.name,
                    duration: '',
                    download_count: '',
                    hit: '',
                    artist_id: this.artist.id
                }
            }
        },

        methods: {
            addSong() {
                this.$inertia.post('/song', this.form)
                    .catch(err => console.log(err.message))
            }
        },
    }
</script>
