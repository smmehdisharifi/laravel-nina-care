<template>
    <Layout>
        <div class="container mt-4">
            <h2>User Details</h2>

            <div class="card mt-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ user.first_name }} {{ user.last_name }}
                    </h5>

                    <p class="card-text">
                        <strong>Email:</strong> {{ user.email }}
                    </p>

                    <p class="card-text">
                        <strong>Verified: </strong>
                        <span v-if="user.email_verified_at">
                            {{ formatDate(user.email_verified_at) }}
                        </span>
                        <span v-else>Not yet</span>
                    </p>

                    <hr>

                    <h6>Address</h6>
                    <p v-if="user.address">
                        <strong>Street:</strong> {{ user.address.street || 'N/A' }}<br>
                        <strong>Post Code:</strong> {{ user.address.post_code || 'N/A' }}<br>
                        <strong>City:</strong> {{ user.address.city?.name || 'N/A' }}<br>
                        <strong>Country:</strong> {{ user.address.country?.name || 'N/A' }}
                    </p>
                    <p v-else class="text-muted">No address available.</p>

                    <hr>

                    <p class="text-muted mb-1">
                        <strong>Created at:</strong> {{ formatDate(user.created_at) }}
                    </p>
                    <p class="text-muted">
                        <strong>Updated at:</strong> {{ formatDate(user.updated_at) }}
                    </p>

                    <Link href="/" class="btn btn-outline-secondary mt-3">Back</Link>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from '@/Layouts/Layout.vue'
import { Link } from '@inertiajs/inertia-vue3'

export default {
    components: {
        Layout,
        Link
    },
    props: {
        user: Object
    },
    methods: {
        formatDate(dateStr) {
            return new Date(dateStr).toLocaleString()
        }
    }
}
</script>
