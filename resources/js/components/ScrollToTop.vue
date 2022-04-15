<template>
    <a
        href=""
        @click="scrollToTop"
        class="text-3xl fixed bg-gray-800 right-0 bottom-0 md:bottom-32 p-2 h-10 w-10 z-20"
        ><img
            src="https://img.icons8.com/external-those-icons-fill-those-icons/48/ffffff/external-up-arrows-those-icons-fill-those-icons.png"
    /></a>
</template>

<script>
export default {
    methods: {
        scrollToTop() {
            window.scrollTo(0, 0);
        },
    },
};
</script>

<style></style>
