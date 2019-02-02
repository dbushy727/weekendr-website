<template>
    <div>
        <a class="menu-toggle rounded" v-on:click="toggle" :class="{ active: isActive }">
            <i class="fas fa-bars" :class="{ 'fa-bars': !isActive,  'fa-times': isActive }"></i>
        </a>

        <nav id="sidebar-wrapper" :class="{ active: isActive }">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a class="js-scroll-trigger" v-on:click="toggle" href="#page-top">Weekendr</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" v-on:click="toggle" href="#page-top">Home</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" v-on:click="toggle" href="#how-it-works">How It Works</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" v-on:click="toggle" href="#why-choose-weekendr">Why Choose Weekendr</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" v-on:click="toggle" href="#sign-up">Sign Up</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" v-on:click="toggle" href="#travel-tips">Travel Tips</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" v-on:click="toggle" href="#past-deals">Past Deals</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" v-on:click="toggle" href="#contact">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
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
            }
        },
        mounted() {
            console.log('Component menu mounted.');
        }
    }
</script>

<style lang="scss" scoped>
    a.menu-toggle { cursor: pointer; }
</style>
