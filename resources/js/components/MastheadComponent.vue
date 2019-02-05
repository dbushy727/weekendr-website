<template>
    <header class="masthead d-flex">
      <div class="container text-center my-auto">
        <h1 class="mb-2">
            <typewriter
                :speed="150"
                :full-erase="true"
                :interval="300"
                :words='["Cheap Flights", "Romantic Getaways", "Exciting Adventures"]'>
            </typewriter>
        </h1>
        <h3 class="mb-5">
            <em>Friday to Sunday roundtrip tickets for under $200</em>
        </h3>
        <a class="btn btn-warning btn-xl js-scroll-trigger" href="#sign-up">Sign Up</a>
        <a class="btn btn-dark btn-xl js-scroll-trigger" href="#how-it-works">Learn More <i class="icon-arrow-down"></i></a>
      </div>
      <div class="overlay"></div>
    </header>
</template>

<script>
    export default {
        mounted() {
            console.log('Component masthead mounted.');
        }
    }
</script>

<style lang="scss" scoped>

    .icon-arrow-down { vertical-align: middle; margin-left: 0.3em; }

    @media (max-width: 736px) {

        h1 { font-size: 2.15rem; }
        h3 { font-size: 1.25rem; }
    }

</style>