<template>
    <Layout>
        <div class="container mt-4">
            <h2>Edit User</h2>
            <div class="card mt-3 shadow-sm">
                <div class="card-body">
                    <form @submit.prevent="submitForm">
                        <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input v-model="form.first_name" class="form-control" />
                            <span v-if="errors.first_name" class="text-danger">{{ errors.first_name }}</span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Last Name</label>
                            <input v-model="form.last_name" class="form-control" />
                            <span v-if="errors.last_name" class="text-danger">{{ errors.last_name }}</span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input v-model="form.email" type="email" class="form-control" />
                            <span v-if="errors.email" class="text-danger">{{ errors.email }}</span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Country</label>
                            <v-select
                                v-model="form.country_id"
                                :options="countries"
                                label="name"
                                :reduce="country => country.id"
                                @search="fetchCountries"
                                @input="onCountrySelected"
                                placeholder="Select a country"
                            />
                            <span v-if="errors.country_id" class="text-danger">{{ errors.country_id }}</span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <v-select
                                v-model="form.city_id"
                                :options="cities"
                                label="name"
                                :reduce="city => city.id"
                                :disabled="!form.country_id"
                                @search="searchCities"
                                placeholder="Select a city"
                            />
                            <span v-if="errors.city_id" class="text-danger">{{ errors.city_id }}</span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Street</label>
                            <input v-model="form.street" class="form-control" />
                            <span v-if="errors.street" class="text-danger">{{ errors.street }}</span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Post Code</label>
                            <input v-model="form.post_code" class="form-control" />
                            <span v-if="errors.post_code" class="text-danger">{{ errors.post_code }}</span>
                        </div>

                        <button class="btn btn-primary">Update User</button>
                        <Link href="/" class="btn btn-outline-secondary ms-2">Cancel</Link>
                    </form>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from '@/Layouts/Layout.vue'
import { Link } from '@inertiajs/inertia-vue3'
import axios from 'axios'
import vSelect from 'vue-select'
import 'vue-select/dist/vue-select.css'

export default {
    components: {
        Layout,
        Link,
        'v-select': vSelect,
    },
    props: {
        user: Object
    },
    data() {
        return {
            form: {
                first_name: this.user.first_name || '',
                last_name: this.user.last_name || '',
                email: this.user.email || '',
                country_id: this.user.address?.country?.id || null,
                city_id: this.user.address?.city?.id || null,
                street: this.user.address?.street || '',
                post_code: this.user.address?.post_code || '',
            },
            countries: [],
            cities: [],
            errors: {},
        }
    },
    mounted() {
        this.fetchCountries()
        if (this.form.country_id) {
            this.searchCities()
        }
    },
    methods: {
        fetchCountries(search = '') {
            axios.get('/api/countries', { params: { search } })
                .then(res => {
                    this.countries = res.data.data || []
                })
        },
        onCountrySelected() {
            this.form.city_id = null
            this.cities = []
        },
        searchCities(search = '') {
            if (!this.form.country_id) return

            axios
                .get(`/api/countries/${this.form.country_id}/cities`, {
                    params: { search }
                })
                .then(res => {
                    this.cities = res.data.data || []
                })
        },
        submitForm() {
            this.errors = {}

            const payload = { ...this.form }

            this.$inertia.put(`/users/${this.user.id}`, payload, {
                onError: (errors) => {
                    this.errors = errors
                }
            })
        }
    }
}
</script>
