<template>
    <header class="masthead d-flex">
      <div class="container text-center my-auto">
        <h1 class="mb-2">
            <typewriter
                :speed="150"
                :full-erase="true"
                :interval="300"
                :words='["Cheap Flights", "Romantic Getaways", "New Adventures"]'
                v-on:change="detectChange">
            </typewriter>
        </h1>
        <h3 class="mb-5">
            <em>Friday to Sunday roundtrip tickets for under $200</em>
        </h3>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Sign Up</a>
        <a class="btn btn-dark btn-xl js-scroll-trigger" href="#about">Learn More</a>
      </div>
      <div class="overlay"></div>
    </header>
</template>

<script>
    export default {
        data: function () {
            return {
                isActive: false
            }
        },
        methods: {
            toggle: function() {
                this.isActive = !this.isActive;
            },
            detectChange: function () {
                console.log('change');
            }
        },
        mounted() {
            console.log('Component masthead mounted.');
        }
    }
</script>
