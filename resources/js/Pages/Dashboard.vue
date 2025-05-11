<template>
    <Layout>
        <div class="container">
            <div class="d-flex my-4">
                <input
                    v-model="searchQuery"
                    @input="debouncedSearch"
                    type="text"
                    class="form-control"
                    placeholder="Search users by first name, last name, email, country, city or post code"
                />
            </div>

            <div v-if="users.data.length" class="row">
                <div
                    v-for="user in users.data"
                    :key="user.id"
                    class="col-12 col-sm-6 col-lg-3 mb-4"
                >
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ user.first_name }} {{ user.last_name }}</h5>
                            <p class="card-text text-muted">{{ user.email }}</p>
                            <a :href="`/users/${user.id}`" class="btn btn-primary btn-sm me-2">View Details</a>
                            <a :href="`/users/${user.id}/edit`" class="btn btn-warning btn-sm me-2">Edit</a>
                        </div>
                    </div>
                </div>
            </div>

            <div v-else class="text-center text-muted mt-4">
                <p>No users found. Try a different search.</p>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                <button
                    v-if="users.current_page > 1"
                    @click="fetchPage(users.current_page - 1)"
                    class="btn btn-secondary me-2"
                >
                    Prev
                </button>

                <button
                    v-for="page in visiblePages"
                    :key="page"
                    @click="fetchPage(page)"
                    :class="{
                        'btn-outline-primary': page !== users.current_page,
                        'btn-primary': page === users.current_page
                    }"
                    class="btn me-2"
                >
                    {{ page }}
                </button>

                <button
                    v-if="users.current_page < users.last_page"
                    @click="fetchPage(users.current_page + 1)"
                    class="btn btn-secondary ms-2"
                >
                    Next
                </button>
            </div>
        </div>
    </Layout>
</template>

<script>
import { debounce } from 'lodash';
import Layout from '@/Layouts/Layout.vue';
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Layout,
        Link
    },
    props: {
        users: Object,
        filters: Object
    },
    data() {
        return {
            searchQuery: this.filters?.search || ''
        };
    },
    computed: {
        visiblePages() {
            const pages = [];
            const total = this.users.last_page;
            const current = this.users.current_page;
            const start = Math.max(current - 2, 1);
            const end = Math.min(current + 2, total);

            for (let i = start; i <= end; i++) {
                pages.push(i);
            }

            if (start > 2) pages.unshift('...');
            if (end < total - 1) pages.push('...');

            return pages;
        }
    },
    methods: {
        searchUsers() {
            this.$inertia.get('/', { search: this.searchQuery }, { preserveState: true, replace: true });
        },
        fetchPage(page) {
            if (page === '...') return;
            this.$inertia.get('/', { search: this.searchQuery, page }, { preserveState: true, replace: true });
        }
    },
    created() {
        this.debouncedSearch = debounce(this.searchUsers, 300);
    }
}
</script>
