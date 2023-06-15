
<script setup>

import Layout from "@/Layouts/Layout.vue"
import { Head } from '@inertiajs/vue3';


function test() {
      axios.get('/api/test')
        .then(response => {
          console.log(response.data.message);
          // Check if the profile update was successful
          if (response.data.success) {
            // Redirect to the "About" page
            this.$inertia.visit('/users');
            // this.$router.push('/user');
          }
        })
        .catch(error => {
          console.log(error);
        });
}
</script>

<template>
    <Head title="Dashboard" />

    <Layout>
        <div>Dashboard</div>
        <!-- <button @click="test" class="btn btn-primary">Click me</button> -->
    </Layout>
</template>

