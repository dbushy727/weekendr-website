<template>
    <section class="content-section bg-warning text-text-dark text-center" id="why-choose-weekendr">
        <div class="container">
            <div class="content-section-heading">
                <h2 class="mb-5">Why Choose Weekendr</h2>
            </div>

            <div class="content-section-body text-left">
                <div class="row">
                    <div class="col-lg-3 text-center"><i class="fas fa-chart-line" ></i></div>
                    <div class="col-lg-9 why-copy">
                        <h4>Price Changes</h4>
                        <p>Flight prices go up and down on a moments notice at the mercy of the airline companies. Weekendr is constantly hunting for great weekend flight deals so you don't have to get lucky. Once we find a deal, we send it immediately so you can take the guesswork out of when to book flights.</p>
                    </div>
                </div>

                <br>

                <div class="row">

                    <div class="col-lg-3 text-center">
                        <i class="fas fa-calendar-alt" ></i>
                    </div>

                    <div class="col-lg-9 why-copy">
                        <h4>No Vacation Days Required</h4>
                        <p>Do you ever feel like you want to travel, but just don't have the vacation days? With Weekendr, you can leave on Friday and be back on Sunday just in time for work on Monday. Plus, all the flights are under $200 roundtrip, so you won't be breaking the bank trying to live your best life.</p>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-lg-3 text-center"><i class="fas fa-hiking"></i></div>
                    <div class="col-lg-9 why-copy">
                        <h4>Weekend Warriors</h4>
                        <p>Weekendr is a great option for people who like to take advantage of their weekends to try new things and see interesting places. We send out flight deals as late as the day of, so you can book Thursday and be wheels up on Friday.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
        }
    }
</script>

<style lang="scss" scoped>
    .row { margin: 3em 0; }

    i.fas { font-size: 7em; color: #333; margin-bottom: 50px;}
</style>