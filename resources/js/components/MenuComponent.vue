<template>
    <div>
        <a class="menu-toggle rounded" href="#" v-on:click="toggle" :class="{ active: isActive }">
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
                    <a class="js-scroll-trigger" v-on:click="toggle" href="#howitworks">How It Works</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" v-on:click="toggle" href="#callout">Sign Up</a>
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
