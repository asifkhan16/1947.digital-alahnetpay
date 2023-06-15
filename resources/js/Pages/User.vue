<script setup>
import Layout from "@/Layouts/Layout.vue"
import { Head } from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';

const props = defineProps({
    user: {
        type: Object,
        default: () => ({})
    }
});


const form = useForm({
    name: props.user.name,
    dob : props.user.user_profile.date_of_birth,
    country: props.user.user_profile.country,
    city: props.user.user_profile.city,
    postal_code: props.user.user_profile.postal_code,
    country_code: props.user.user_profile.country_code,
    address: props.user.user_profile.address,
    phone_no: props.user.user_profile.phone_number,
    avatar: '',
});
const submit = () => {
    form.post(route('user.profile.update'), {
        onSuccess: (res) => {
            alert('profile updated successfully');
            console.log("🚀 ~ file: User.vue:38 ~ form.post ~ res:", res)
            // productForm.reset();
        },
        onError: (res) => {
            console.log("🚀 ~ file: Products.vue:88 ~ updateProduct.post ~ res", res)
        }
    })
}
console.log(props.user);
</script>

<template>
    <Head title="Test Page" />
    <Layout>
        <div class="nk-block nk-block-lg px-5">

            <div class="card">
                <div class="card-inner">
                    <div class="card-head">
                        <h5 class="card-title" style="font-size:1.5rem">User Profile</h5>
                    </div>
                    <form @submit.prevent="submit" class="gy-2">
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="site-name">Your Name</label>
                                    <span class="form-note">Specify your name</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <TextInput type="text" class="mt-1 block w-full" v-model="form.name"/>
                                        <InputError class="mt-2" :message="form.errors.name" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="site-name">Date of birth</label>
                                    <span class="form-note">select your birthday date.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <TextInput type="date" class="mt-1 block w-full" v-model="form.dob"/>
                                        <InputError class="mt-2" :message="form.errors.dob" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="site-name">Country</label>
                                    <span class="form-note">select your country</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <TextInput type="text" class="mt-1 block w-full" v-model="form.country"/>
                                        <InputError class="mt-2" :message="form.errors.country" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="site-name">City</label>
                                    <span class="form-note">select your city</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <TextInput type="text" class="mt-1 block w-full" v-model="form.city"/>
                                        <InputError class="mt-2" :message="form.errors.city" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="site-name">Postal Code</label>
                                    <span class="form-note">enter your postal code</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <TextInput type="text" class="mt-1 block w-full" v-model="form.postal_code"/>
                                        <InputError class="mt-2" :message="form.errors.postal_code" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="site-name">Country Code</label>
                                    <span class="form-note">enter your country code</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <TextInput type="text" class="mt-1 block w-full" v-model="form.country_code"/>
                                        <InputError class="mt-2" :message="form.errors.country_code" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="site-name">Phone Number</label>
                                    <span class="form-note">enter your phone number</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <TextInput type="text" class="mt-1 block w-full" v-model="form.phone_no"/>
                                        <InputError class="mt-2" :message="form.errors.phone_no" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="site-name">Address</label>
                                    <span class="form-note">enter your address</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <TextInput type="text" class="mt-1 block w-full" v-model="form.address"/>
                                        <InputError class="mt-2" :message="form.errors.address" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-lg-7 offset-lg-5">
                                <div class="form-group mt-2">
                                    <button class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- card -->
        </div><!-- .nk-block -->
    </Layout>
</template>

