<script setup>

import Layout from "@/Layouts/Layout.vue"
import { Head,Link } from '@inertiajs/vue3';
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
                                    <Link :href="route('deposit_method.create')" class="btn btn-sm btn-secondary">
                                        <em class="icon ni ni-plus"></em><span>Add Deposit Method</span>
                                    </Link>
                                    <!-- <a href="" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Deposit Method</span></a> -->
                                </li>
                            </ul>
                        </div>
                    </div><!-- .toggle-wrap -->
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="row g-gs">
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-inner">
                            <div class="project">
                                <div class="project-head">
                                    <a href="html/apps-kanban.html" class="project-title">
                                        <div class="user-avatar sq bg-purple"><span>DD</span></div>
                                        <div class="project-info">
                                            <h6 class="title">Dashlite Development</h6>
                                            <span class="sub-text">Softnio</span>
                                        </div>
                                    </a>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="html/apps-kanban.html"><em class="icon ni ni-eye"></em><span>View Project</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Project</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-check-round-cut"></em><span>Mark As Done</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-details">
                                    <p>Design and develop the DashLite template for Envato Marketplace.</p>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em class="icon ni ni-check-round-cut"></em><span>3 Tasks</span></div>
                                        <div class="project-progress-percent">93.5%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="93.5"></div>
                                    </div>
                                </div>
                                <div class="project-meta">
                                    <ul class="project-users g-1">
                                        <li>
                                            <div class="user-avatar sm bg-primary"><span>A</span></div>
                                        </li>
                                        <li>
                                            <div class="user-avatar sm bg-blue"><img src="/assets/images/avatar/b-sm.jpg" alt=""></div>
                                        </li>
                                        <li>
                                            <div class="user-avatar bg-light sm"><span>+12</span></div>
                                        </li>
                                    </ul>
                                    <span class="badge badge-dim badge-warning"><em class="icon ni ni-clock"></em><span>5 Days Left</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .nk-block -->
    </Layout>
</template>
