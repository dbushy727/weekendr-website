<template>
    <section id="sign-up" class="callout">
        <div class="container text-center">
            <h2 class="mx-auto mb-5">Join Weekendr Today!</h2>

            <!-- Begin Mailchimp Signup Form -->
            <div id="mc_embed_signup">
                <form action="/subscribe.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div class="form-row justify-content-lg-center">

                        <div class="col-lg-4 form-group">
                            <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL" placeholder="Email Address">
                        </div>

                        <div class="col-lg-4 form-group">
                            <model-list-select
                                :list="airports"
                                v-model="selectedAirport"
                                option-value="PlaceId"
                                option-text="PlaceName"
                                placeholder="Airport Code or City"
                                @searchchange="searchAirport">
                            </model-list-select>
                        </div>
                    </div>

                    <br>

                    <div class="form-row">
                        <div class="col form-group">
                            <input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="btn btn-warning btn-xl">
                        </div>
                    </div>


                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b8208b298e182f511941c318d_03c2cc3ef1" tabindex="-1" value=""></div>
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
            }
        },
        components: {
            ModelListSelect
        },
    }
</script>

<style lang="scss" scoped>

    #mce-EMAIL { padding: 20.5px; }

    .callout h2 { max-width: 40rem; }
</style>