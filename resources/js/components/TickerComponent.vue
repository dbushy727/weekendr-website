<template>
    <section class="content-section" id="ticker-section">
        <div class="container">
            <div class="ticker">

                <div class="ticker-deal mini" v-show="scrollStarted">
                    <strong>Current Deals:&nbsp;&nbsp;&nbsp;</strong>
                </div>

                <div class="ticker-deal" v-for="flightDeal in flightDeals" v-show="scrollStarted">
                    <strong class="text-success">${{ flightDeal.price }}</strong>
                    <strong>&nbsp;&middot;&nbsp;</strong>
                    <span>{{ flightDeal.departure_date }} to {{ flightDeal.return_date }}</span>
                    <strong>&nbsp;&middot;&nbsp;</strong>
                    <span>{{ flightDeal.departure_origin }} - {{ flightDeal.departure_destination }}</span>
                </div>

            </div>
        </div>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                flightDeals: [],
                scrollStarted: false,
            }
        },
        mounted() {
            this.getFlightDeals().then(this.scrollTicker);
            console.log('ticker mounted');
        },
        methods: {
            scrollTicker() {
                // Set original ticker
                const tickerDeals = $('.ticker .ticker-deal').map(function() { return $(this).get(0); }).toArray();
                $(".ticker").html(tickerDeals);

                // Get dimensions of ticker for relapse
                const ticker_width = $(".ticker").width();
                let text_x = ticker_width + 300;
                const total_width = _.reduce(tickerDeals, function (carry, item) {
                    return carry += $(item).width();
                }, 0);

                this.startScroll(text_x, tickerDeals, ticker_width, total_width);

            },
            startScroll(text_x, tickerDeals, ticker_width, total_width) {
                const that  = this;
                const speed = 10;
                setInterval(function() {
                    text_x--;

                    _.each(tickerDeals, function (item) {
                        const ticker_item = $(item);
                        ticker_item.css("left", text_x + ticker_item.width());
                        that.scrollStarted = true;

                        if (text_x < -1.3 * total_width) {
                            $(".ticker").html(tickerDeals);
                            text_x = ticker_width + 300;
                        }
                    });
                }, speed);
            },
            getFlightDeals() {
                return $.ajax({url: '/api/flight-deals', type: 'GET', success: (data) => {
                    this.flightDeals = data;
                }});
            }
        }
    }
</script>

<style lang="scss" scoped>

    #ticker-section {

        font-family: monospace;
        position: fixed;
        bottom: 0;
        background: #ffc107;
        width: 100%;
        z-index: 2;
        padding: 1em 0;
        line-height: 0.5;
        font-size: 1.2em;
        color: #333;
        opacity: 0.9;

        .ticker {

            white-space: nowrap;

            .ticker-deal {
                position: relative;
                top: 0;
                white-space: nowrap;
                width: auto;
                display: inline-block;
                margin-right: 10em;

            }

            .mini { margin: 0 -20em; }
        }
    }
</style>