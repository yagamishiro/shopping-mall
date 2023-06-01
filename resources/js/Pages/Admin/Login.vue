<script setup>
import AdminGuestLayout from '@/Layouts/AdminGuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

const form = useForm({
    email: "",
    password: "",
});

const submit = () => {
    form.post(route('admin.login'), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <AdminGuestLayout>
        <Head title="Login" />
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card shadow-0 border overflow-hidden rounded-4">
                        <div class="card-header bg-light">
                            <div class="card-title text-center pb-0">
                                <div class="h4 my-3 fw-bold">Login</div>
                            </div>
                        </div>
                        <div class="card-body login-card-body p-4">
                            <form @submit.prevent="submit">
                                <InputError class="mt-1" :message="form.errors.message" />
                                <div>
                                    <InputLabel for="email" value="Email" />

                                    <TextInput
                                        id="email"
                                        type="email"
                                        class="block w-full border bg-light"
                                        v-model="form.email"
                                        autofocus
                                        autocomplete="email"
                                    />

                                    <InputError class="mt-1" :message="form.errors.email" />
                                </div>

                                <div class="mt-3">
                                    <InputLabel for="password" value="Password" />

                                    <TextInput
                                        id="password"
                                        type="password"
                                        class="block w-full border bg-light"
                                        v-model="form.password"
                                        autocomplete="current-password"
                                    />

                                    <InputError class="mt-1" :message="form.errors.password" />
                                </div>

                                <div class="mt-4 d-grid">
                                    <button type="submit" class="btn btn-primary btn-block shadow-sm w-100 fw-bold" :disabled="form.processing">Login</button>
                                    <div class="text-center" v-show="form.processing">
                                        <div class="spinner-border text-primary mt-3" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AdminGuestLayout>
</template>