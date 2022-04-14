<template>
    <div class="z-10 fixed bg-black/80 w-screen h-screen top-0 right-0 self">
        <div
            class="h-full flex flex-col md:flex-row justify-center content-center items-center m-2"
        >
            <div class="overflow-hidden bg-gray-900 rounded-l-lg">
                <img
                    class="object-contain h-80"
                    src="https://www.zdnet.com/a/img/resize/80888999f165ac6a14b9cbcaa9cdc93399a10acc/2022/01/21/968b39f9-3c62-49f2-b739-ff3567d9c131/nft-1.jpg?width=1200&height=1200&fit=crop&auto=webp"
                    alt=""
                />
            </div>
            <div
                class="min-h-96 w-96 bg-gray-200 text-gray-800 rounded-lg p-4 flex flex-col space-y-5 relative"
            >
                <img
                    class="h-6 w-6 absolute right-0 top-0 pr-2 pt-2 cursor-pointer"
                    @click="toggle"
                    src="https://img.icons8.com/glyph-neue/64/000000/delete-sign.png"
                />
                <h2 class="text-4xl font-semibold">{{ product.name }}</h2>
                <p class="text-xs">
                    {{ product.description }}
                </p>
                <h3 class="text-xl">{{ product.price }} SOL</h3>
                <hr />
                <div class="flex space-x-6 items-center justify-center">
                    <div class="w-32">
                        <h3 class="text-lg pb-1">Call Us</h3>
                        <p class="text-sm">+60 161234xxx</p>
                    </div>
                    <p class="text-sm">or</p>
                    <div class="w-32">
                        <a href="https://wa.me/+60129289129"
                            ><img
                                class="w-8 m-auto hover:animate-bounce"
                                src="https://img.icons8.com/ios/50/26e07f/whatsapp--v1.png"
                        /></a>
                    </div>
                </div>
                <a :href="'/payment' + product.id" class="z-20">
                    <vue-primarybutton>BUY</vue-primarybutton>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ProductCardPopUp",
    props: ["product"],

    methods: {
        toggle() {
            this.$emit("toggle");
        },
    },

    mounted() {
        console.log(this.product);
    },
};
</script>

<style></style>
