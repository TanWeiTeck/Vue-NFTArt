<template>
    <div>
        <div
            @click.self="togglepopup"
            class="sm:min-h-[320px] sm:min-w-[224px] overflow-hidden text-xs shadow hover:p-1 duration-300 cursor-pointer"
        >
            <img
                @click.self="togglepopup"
                class=""
                :src="'/storage/image/' + product.image"
                alt=""
            />
            <div @click="togglepopup" class="p-2 flex flex-col justify-end">
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
