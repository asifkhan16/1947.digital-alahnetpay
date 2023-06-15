<script setup>

import Layout from "@/Layouts/Layout.vue"
import { Head,Link,useForm } from '@inertiajs/vue3';

const vendorForm = useForm({
    vendor_type_id: '',
    profile_image: '',
    cover_image: '',
    vender_name: '',
    email: '',
    phone_code:'',
    phone_number: '',
    website: '',
    post_code: '',
    address_line_one: '',
    address_line_two: '',
    latitude: '',
    longitude: '',
    city: '',
    district: '',
    country: '',
    description: ''
});
function addVendor() {
    console.log('call function')
    vendorForm.post(route('store.vendor'), {
        onSuccess: (res) => {
            console.log('Response success' + res)
        }
    });
}
</script>

<template>
    <Head title="Deposit Methods" />
    <Layout>
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Deposit Methods</h3>
                    <div class="nk-block-des text-soft">
                        <!-- <p>You have total 95 projects.</p> -->
                    </div>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li class="nk-block-tools-opt">
                                    <Link :href="route('deposit_method.index')" class="btn btn-sm btn-secondary">
                                        <em class="icon ni ni-back-alt-fill"></em><span>back</span>
                                    </Link>
                                    <!-- <a href="admin/deposit_method/index" class="btn btn-primary"><span> back</span></a> -->
                                </li>
                            </ul>
                        </div>
                    </div><!-- .toggle-wrap -->
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="card card-preview">
                <div class="card-inner">
                    <form @submit.prevent="addVendor">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row gy-4">
                                    <!-- 1 -->
                                    <div class="col-md-4">
                                        <!-- profile image -->
                                        <!-- name -->
                                        <div class="form-group">
                                            <label style="font-size:13px; font-weight:100"
                                                class="form-label text-muted mb-0" for="vender_name">Name</label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="vender_name" class="form-control form-control-sm"
                                                    id="vender_name" v-model="vendorForm.vender_name" placeholder="">
                                            </div>
                                            <span v-if="vendorForm.errors.vender_name" class="text-danger"><small>{{
                                                vendorForm.errors.vender_name
                                            }}</small></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2 mt-5">
                                <button type="submit" class="d-block w-100 btn btn-s  btn-secondary">Submit</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div><!-- .nk-block -->
    </Layout>
</template>
