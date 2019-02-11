<template>
    <section id="sign-up" class="callout">
        <div class="container text-center">
            <h2 class="mx-auto mb-5">Join Weekendr Today!</h2>

            <!-- Begin Mailchimp Signup Form -->
            <div id="mc_embed_signup">
                <form action="/api/subscribe" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate @submit.prevent="signUp">
                    <div class="form-row justify-content-lg-center">

                        <div class="col-lg-4 form-group text-left">
                            <input type="email" value="" name="email" v-model="email" class="required email form-control" id="mce-EMAIL" placeholder="Email Address *">
                            <div class="text-light bg-danger error" v-if="errors.email">Please make sure to type in a valid email address</div>
                        </div>

                        <div class="col-lg-4 form-group text-left">
                            <model-list-select
                                :list="airports"
                                v-model="selectedAirport"
                                option-value="PlaceId"
                                option-text="PlaceName"
                                placeholder="Airport Code or City *"
                                @searchchange="searchAirport">
                            </model-list-select>
                            <div class="text-light bg-danger error" v-if="errors.airport">Please make sure to select an airport code or city</div>
                        </div>
                    </div>

                    <br>

                    <div class="form-row">
                        <div class="col form-group">
                            <input type="submit" value="Sign Up" name="subscribe" id="subscribe" class="btn btn-warning btn-xl">
                        </div>
                    </div>

                    <div class="form-row" v-if="errors.general">
                        <div class="col form-group text-dark bg-danger">
                            It appears something went wrong. Please refresh the page and try again. If you are having trouble signing up, please email us at danny@weekendr.io
                        </div>
                    </div>

                </form>
            </div>
            <!--End mc_embed_signup-->

        </div>
    </section>
</template>

<script>
    import { ModelListSelect } from 'vue-search-select'

    export default {
        data () {
            return {
                airports: [],
                selectedAirport: {},
                email: '',
                errors: {
                    airport: false,
                    email: false,
                    general: false,
                }
            }
        },
        methods: {
            searchAirport (searchText) {

                if (!searchText) {
                    return;
                }

                $.ajax({url: `/api/places/${searchText}`, type: "GET"}).then(data => {
                    this.airports = JSON.parse(data).Places;
                });
            },
            signUp () {
                if (this.failedValidation()) {
                    return;
                }

                this.subscribe();
            },
            subscribe() {
                const that = this;
                return $.ajax({
                    url: '/api/subscribe',
                    type: 'POST',
                    data: {
                        email: this.email,
                        airport: this.selectedAirport.PlaceId
                    }, success: function () {
                        window.location.href = "/thank-you";
                    }, error: function (err) {
                        that.errors.general = true;
                    }
                });
            },
            reset() {
                this.errors.email   = false;
                this.errors.airport = false;
                this.errors.general = false;
            },
            failedValidation() {
                this.reset();

                if (!this.validEmail(this.email)) {
                    this.errors.email = true;
                }

                if (_.isEmpty(this.selectedAirport)) {
                    this.errors.airport = true;
                }

                return this.errors.email || this.errors.airport;
            },
            validEmail (email) {
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            }
        },
        components: {
            ModelListSelect
        },
    }
</script>

<style lang="scss" scoped>

    #mce-EMAIL {

        padding: 20.5px;

        &::placeholder { color: #c7c7c7; }

    }

    .error {

        padding: 0.5em;
        margin: 0.5em 0;
        border-radius: 3px;

    }

    .callout h2 { max-width: 40rem; }

    @media (max-width: 992px) {

        .callout{

            padding: 5rem 0;
            background: -webkit-gradient(linear, left top, right top, from(rgba(255, 255, 255, 0.3)), to(rgba(255, 255, 255, 0.3))), url("/images/beach-hammock-small.jpeg");
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0.3) 100%), url("/images/beach-hammock-small.jpeg");
            background-position: center 0em;
            background-repeat: no-repeat;
            background-size: cover;

            h2 { font-size: 3em; }
        }

    }
</style>