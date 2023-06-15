<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';


defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    dob : '',
    country: '',
    city: '',
    postal_code: '',
    country_code: '',
    address: '',
    phone_no: '',
    avatar: '',
});

const submit = () => {
    form.post(route('profile.store'), {
        onSuccess: (res) => {
            // alert('profile updated successfully');
            console.log("🚀 ~ file: User.vue:38 ~ form.post ~ res:", res)
            // productForm.reset();
        },
        onError: (res) => {
            console.log("🚀 ~ file: Products.vue:88 ~ updateProduct.post ~ res", res)
        }
    })
}
// const submit = () => {
//     form.post(route('profile.store'), {
//         // onFinish: () => form.reset('password'),
//     });
// };
</script>

<template>
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-block nk-block-lg mx-auto" style="width: 70%;">
                    <div class="card mt-5">
                        <div class="card-inner">
                            <div class="card-head">
                                <h1 style="font-size: 2rem;">User Profile</h1>
                            </div>
                            <hr class="mb-4">
                            <form @submit.prevent="submit">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label text-muted mb-0"
                                            style="font-size:13px; font-weight:100" for="">Date of birth</label>                                              <div class="form-control-wrap">
                                                <TextInput id="dob" type="date" class="mt-1 block w-full" v-model="form.dob"
                                                    autofocus />
                                                <InputError class="mt-2" :message="form.errors.dob" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label text-muted mb-0"
                                            style="font-size:13px; font-weight:100" for="">Country</label>                                              <div class="form-control-wrap">
                                                <TextInput id="country" type="text" class="mt-1 block w-full"
                                                    v-model="form.country" autofocus />
                                                <InputError class="mt-2" :message="form.errors.country" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label text-muted mb-0"
                                            style="font-size:13px; font-weight:100" for="">City</label>                                              <div class="form-control-wrap">
                                                <TextInput id="city" type="text" class="mt-1 block w-full"
                                                    v-model="form.city" />
                                                <InputError class="mt-2" :message="form.errors.city" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-label text-muted mb-0"
                                            style="font-size:13px; font-weight:100" for="">Postal Code</label>                                              <div class="form-control-wrap">
                                                <TextInput id="postal_code" type="text" class="mt-1 block w-full"
                                                    v-model="form.postal_code" />
                                                <InputError class="mt-2" :message="form.errors.postal_code" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-label text-muted mb-0"
                                            style="font-size:13px; font-weight:100" for="">Country Code</label>                                             <div class="form-control-wrap">
                                                <TextInput id="country_code" type="text" class="mt-1 block w-full"
                                                    v-model="form.country_code" />
                                                <InputError class="mt-2" :message="form.errors.country_code" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label text-muted mb-0"
                                            style="font-size:13px; font-weight:100" for="">Address</label>                                            <div class="form-control-wrap">
                                                <TextInput id="address" type="text" class="mt-1 block w-full"
                                                    v-model="form.address" />
                                                <InputError class="mt-2" :message="form.errors.address" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label text-muted mb-0"
                                            style="font-size:13px; font-weight:100" for="">Phone No</label>                                            <div class="form-control-wrap">
                                                <TextInput id="phone_no" type="text" class="mt-1 block w-full"
                                                    v-model="form.phone_no" />
                                                <InputError class="mt-2" :message="form.errors.phone_no" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label text-muted mb-0"
                                                style="font-size:13px; font-weight:100" for="">Choose Image</label>
                                            <div class="form-control-wrap">
                                                <div class="custom-file">
                                                    <input @input="form.avatar = $event.target.files[0]" type="file" multiple
                                                        class="custom-file-input form-control form-control-sm"
                                                        id="customFile">
                                                    <label class="custom-file-label" for="customFile">Choose Image</label>
                                                </div>
                                            </div>
                                            <span v-if="form.errors.avatar" class="text-danger"><small>{{
                                                form.errors.avatar
                                            }}</small></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary">Save Information</button>
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Save Informations</button> -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- .nk-block -->
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
</template>
