<template>
    <div>
        <div
            @click="togglepopup"
            class="sm:min-h-[320px] sm:min-w-[224px] overflow-hidden text-xs shadow hover:p-1 duration-300 cursor-pointer"
        >
            <img
                class=""
                src="https://www.zdnet.com/a/img/resize/80888999f165ac6a14b9cbcaa9cdc93399a10acc/2022/01/21/968b39f9-3c62-49f2-b739-ff3567d9c131/nft-1.jpg?width=1200&height=1200&fit=crop&auto=webp"
                alt=""
            />
            <div class="p-2 flex flex-col justify-end">
                <p class="text-right">{{ product.name }}</p>
                <p class="text-right">{{ product.price }} SOL</p>
            </div>
            <a :href="'/payment' + product.id" class="z-20">
                <vue-primarybutton>BUY</vue-primarybutton>
            </a>
        </div>

        <div v-if="popup">
            <vue-productcardpopup
                v-on:toggle="togglepopup"
                :product="product"
            ></vue-productcardpopup>
        </div>
    </div>
</template>

<script>
export default {
    name: "ProductCard",
    props: ["product"],
    data() {
        return {
            popup: false,
            // products: {
            //     name: this.product.name,
            //     price: this.product.price,
            // },
        };
    },

    methods: {
        togglepopup() {
            return (this.popup = !this.popup);
        },
    },
};
</script>

<style></style>
