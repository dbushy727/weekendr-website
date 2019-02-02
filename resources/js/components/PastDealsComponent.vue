<template>
    <section class="content-section bg-dark text-light" id="past-deals">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-10 mx-auto content-section-heading">
                    <h2>Past Deals</h2>
                    <p class="lead mb-5">Here are some weekend flight deals we've had in the past</p>
                </div>
            </div>

            <div class="row deals">

                <div class="col-lg-4 deal">
                    <div class="card text-center">
                        <div class="card-body deal--orlando text-light">
                            <span class="badge badge-success">$190</span>
                            <h3 class="card-title">New York to Orlando</h3>
                        </div>
                        <div class="card-footer text-dark font-weight-bold">
                            <div>Friday Feb 1, 2019 - Sunday Feb 3, 2019</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 deal">
                    <div class="card text-center">
                        <div class="card-body deal--las-vegas text-light">
                            <span class="badge badge-success">$197</span>
                            <h3 class="card-title">Denver to Las Vegas</h3>
                        </div>
                        <div class="card-footer text-dark font-weight-bold">
                            <div>Friday Dec 8, 2018 - Sunday Feb 10, 2018</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 deal">
                    <div class="card text-center">
                        <div class="card-body deal--chicago text-light">
                            <span class="badge badge-success">$139</span>
                            <h3 class="card-title">Boston to Chicago</h3>
                        </div>
                        <div class="card-footer text-dark font-weight-bold">
                            <div>Friday Jan 12, 2019 - Sunday Jan 14, 2019</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row deals">

                <div class="col-lg-4 deal">
                    <div class="card text-center">
                        <div class="card-body deal--san-francisco text-light">
                            <span class="badge badge-success">$163</span>
                            <h3 class="card-title">San Diego to San Francisco</h3>
                        </div>
                        <div class="card-footer text-dark font-weight-bold">
                            <div>Friday Feb 8, 2019 - Sunday Feb 10, 2019</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 deal">
                    <div class="card text-center">
                        <div class="card-body deal--new-york text-light">
                            <span class="badge badge-success">$138</span>
                            <h3 class="card-title">Atlanta to New York</h3>
                        </div>
                        <div class="card-footer text-dark font-weight-bold">
                            <div>Friday Feb 8, 2019 - Sunday Feb 10, 2019</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 deal">
                    <div class="card text-center">
                        <div class="card-body deal--tampa text-light">
                            <span class="badge badge-success">$101</span>
                            <h3 class="card-title">Chicago to Tampa</h3>
                        </div>
                        <div class="card-footer text-dark font-weight-bold">
                            <div>Friday Feb 8, 2019 - Sunday Feb 10, 2019</div>
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
            console.log('Component Past Deals mounted.');
        }
    }
</script>

<style lang="scss" scoped>

    .deals { margin-top: 3rem; }

    .card {

        margin-bottom: 3em;
        border-width: 0;

        .card-header { font-family: serif; }

        .card-body {

            min-height: 18em;

            hr { margin: 2em auto; width: 25%; }

            p.card-text { font-size: 1.1em; }

            span.badge {

                position: absolute;
                top: -30px;
                padding-top: 1.15em;
                border-radius: 50%;
                font-family: serif, monospace;
                font-size: 1.2em;
                right: -30px;
                width: 60px;
                height: 60px;

            }

            .card-title { margin-top: 6.5rem; }

        }

        .deal--orlando {
            background: radial-gradient(rgba(255, 255, 255, 0) -50%, rgba(0, 0, 0, 1)), url('/images/orlando-small.png') center center;
            background-size: cover;
        }
        .deal--las-vegas {
            background: radial-gradient(rgba(255, 255, 255, 0) -50%, rgba(0, 0, 0, 1)), url('/images/las-vegas-small.png') center center;
            background-size: cover;
        }
        .deal--chicago {
            background: radial-gradient(rgba(255, 255, 255, 0) -50%, rgba(0, 0, 0, 1)), url('/images/chicago-small.png') center center;
            background-size: cover;
        }
        .deal--san-francisco {
            background: radial-gradient(rgba(255, 255, 255, 0) -50%, rgba(0, 0, 0, 1)), url('/images/san-francisco-small.png') center center;
            background-size: cover;
        }
        .deal--new-york {
            background: radial-gradient(rgba(255, 255, 255, 0) -50%, rgba(0, 0, 0, 1)), url('/images/new-york-small.png') center center;
            background-size: cover;
        }
        .deal--tampa {
            background: radial-gradient(rgba(255, 255, 255, 0) -50%, rgba(0, 0, 0, 1)), url('/images/tampa-small.png') center center;
            background-size: cover;
        }

    }
</style>