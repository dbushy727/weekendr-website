<template>
    <section class="content-section bg-light" id="how-it-works">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-10 mx-auto content-section-heading">
                    <h2>How It Works</h2>
                    <p class="lead mb-5">
                        Minus veritatis rem vero veniam neque eaque vitae, totam temporibus inventore nihil illo fuga aperiam.
                    </p>
                </div>
            </div>

            <div class="row steps">
                <div class="col-lg-4">
                    <div class="card text-center">
                      <!-- <div class="card-header text-muted">Step 1</div> -->
                      <div class="card-body">
                        <span class="badge badge-warning">1</span>
                        <h5 class="card-title ">Sign Up</h5>
                        <hr>
                        <p class="card-text">To get started, we just need your email address and the airport code or city you fly out of.</p>
                      </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center">
                      <!-- <div class="card-header text-muted">Step 2</div> -->
                      <div class="card-body">
                        <span class="badge badge-warning">2</span>
                        <h5 class="card-title ">Email Notifications</h5>
                        <hr>
                        <p class="card-text">We are searching 24/7 for airline tickets to all destinations, so you don't have to. Once we find a deal leaving on Friday and returning on Sunday for under $200, we'll let you know about it via email.</p>
                      </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center">
                      <!-- <div class="card-header text-muted">Step 3</div> -->
                      <div class="card-body">
                        <span class="badge badge-warning">3</span>
                        <h5 class="card-title ">Book It</h5>
                        <hr>
                        <p class="card-text">Every flight deal will have a "Book Flight" button which will take you to an external flight bookings site. From there you can book the flight, as well as see flight details, times, prices, etc.</p>

                      </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        mounted() {
            console.log('Component how it works mounted.');
        }
    }
</script>

<style lang="scss" scoped>

    .steps { margin-top: 3rem; }

    .card {

        margin-bottom: 3em;

        .card-title { margin-top: 1.5rem; }

        .card-body {

            min-height: 18em;

            hr { margin: 2em auto; width: 25%; }

            p.card-text { font-size: 1.1em; }

            span.badge {

                position: absolute;
                top: -23px;
                padding: 13px;
                border-radius: 50%;
                font-family: serif, monospace;
                font-size: 1.2em;
                left: calc(50% - 23px);
                width: 46px;
                height: 46px;
                color: #f8f9fa;

            }

        }

    }
</style>