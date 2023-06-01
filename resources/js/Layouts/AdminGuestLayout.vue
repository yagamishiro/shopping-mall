<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Footer from '@/Components/Footer.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-light bg-light">
            <div class="container-fluid">
                <Link class="navbar-brand" href="/">
                    <ApplicationLogo class="fs-3 fw-bolder" />
                </Link>
            </div>
        </nav>

        <div class="content-wrapper">
            <slot />
        </div>
    </div>
</template>