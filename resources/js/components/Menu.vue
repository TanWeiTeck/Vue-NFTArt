<template>
    <div class="w-full">
        <!-- main menu -->
        <div class="md:flex hidden justify-center space-x-5 mr-40">
            <a href="/">HOME</a>
            <div class="relative group inline-block">
                <a href="/#allproduct" class="group ease-in-out duration-500"
                    >ALL PRODUCT</a
                >
                <div
                    class="group-hover:flex absolute z-10 min-w-fit hidden bg-white space-x-7 py-8 px-5 rounded-b-xl"
                >
                    <a class="duration-500" href="/art">Art</a>
                    <a class="duration-500" href="/collection">Collection</a>
                    <a class="duration-500" href="/">Art</a>
                </div>
            </div>
            <a href="/#contact">CONTACT US</a>
        </div>

        <!-- Sliding Side Menu -->
        <div class="md:hidden justify-end flex">
            <button class="z-0 relative" @click="toggleSideMenu">
                <img
                    src="https://img.icons8.com/ios-glyphs/30/000000/menu--v1.png"
                />
            </button>

            <div
                :class="{
                    'fixed top-0 right-0 z-40 w-screen h-screen bg-black/60':
                        showsidemenu,
                }"
            >
                <div
                    class="fixed top-0 ease-in-out duration-200 z-50 shadow-2xl"
                    :class="{
                        'right-0': showsidemenu,
                        'right-[-100%]': !showsidemenu,
                    }"
                >
                    <SideMenu v-on:toggle="toggleSideMenu"></SideMenu>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import SideMenu from "./SideMenu.vue";

export default {
    name: "SlidingSideMenu",
    components: {
        SideMenu,
    },
    data() {
        return {
            showsidemenu: false,
        };
    },
    methods: {
        toggleSideMenu() {
            this.showsidemenu = !this.showsidemenu;
        },
    },
};
</script>
