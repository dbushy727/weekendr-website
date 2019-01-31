<template>
    <div>
        <a class="menu-toggle rounded" href="#" v-on:click="toggle" v-bind:class="{ active: isActive }">
            <i class="fas fa-bars" v-bind:class="{ 'fa-bars': !isActive,  'fa-times': isActive }"></i>
        </a>

        <nav id="sidebar-wrapper" v-bind:class="{ active: isActive }">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a class="js-scroll-trigger" v-on:click="toggle" href="#page-top"><img src="/images/new-logo-big.png" class="logo">Weekendr</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" v-on:click="toggle" href="#page-top">Home</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" v-on:click="toggle" href="#about">About</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" v-on:click="toggle" href="#services">Services</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" v-on:click="toggle" href="#portfolio">Portfolio</a>
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
