<template>
    <section class="content-section" id="travel-tips">
        <div class="container">
            <div class="content-section-heading text-center">
                <h2 class="mb-5">Travel Tips</h2>
            </div>
            <div class="row no-gutters">

                <div class="col-lg-6" v-for="tip in tips">
                    <a class="portfolio-item" :href="tip.link">
                        <span class="caption">
                            <span class="caption-content">
                                <h2>{{ tip.title }}</h2>
                                <p class="mb-0">{{ tip.description }}</p>
                            </span>
                        </span>
                        <img class="img-fluid" :src="tip.thumbnail">
                    </a>
                </div>
            </div>

            <div class="text-center">
                <a class="btn btn-warning btn-xl js-scroll-trigger" href="/travel-tips">See More Travel Tips</a>
            </div>

        </div>
    </section>
</template>

<script>
    export default {
        props: ['limit'],
        data () { console.log('setting data'); return { tips: [] }},
        methods: {
            getTravelTips() {
                $.ajax({
                    url: '/api/travel-tips',
                    type: 'GET',
                    success: (travelTips) => {
                        this.tips = this.limit ? _.take(travelTips, this.limit) : travelTips;
                    }
                });
            }
        },
        mounted() {
            this.getTravelTips();
        }
    }
</script>

<style lang="scss" scoped>

    a.btn { margin-top: 2em }

</style>