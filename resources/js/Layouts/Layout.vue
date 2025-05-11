<template>
    <div class="min-vh-100 d-flex flex-column">
        <Navbar />

        <div class="d-flex flex-grow-1">
            <Sidebar />
            <main class="flex-grow-1 p-4 bg-white">
                <slot />
            </main>
        </div>
    </div>
</template>

<script>
import Navbar from './Navbar.vue'
import Sidebar from './Sidebar.vue'

export default {
    components: { Navbar, Sidebar },
}
</script>
