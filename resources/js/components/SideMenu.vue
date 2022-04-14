<template>
    <div
        class="float-right bg-black min-h-screen text-gray-300 flex flex-col w-80 text-sm shadow-xl shadow-white"
    >
        <div class="flex justify-end">
            <img
                class="h-16 p-4 cursor-pointer"
                v-on:click="toggle"
                src="https://img.icons8.com/glyph-neue/64/ffffff/delete-sign.png"
            />
        </div>
        <a href="/" class="pl-4 py-2 align-middle hover:text-white duration-500"
            >HOME</a
        >
        <div class="flex justify-between">
            <a
                href="/#allproduct" @click="toggle"
                class="pl-4 py-2 align-middle hover:text-white duration-500"
                >ALL PRODUCT</a
            >
            <button class="py px-2 mr-2 border max-h-fit my-1" @click="toggleshowproduct">
                <p v-if="showallproduct">&#8722</p>
                <p v-if="!showallproduct">&#43</p>
            </button>
        </div>
        <div class="text-xs pl-4 py-2" v-if="showallproduct">
            <ul class="flex flex-col space-y-3 pl-1">
                <a class="hover:text-white duration-500" href="/art">Art</a>
                <a class="hover:text-white duration-500" href="/collection">Collection</a>
                <a class="hover:text-white duration-500" href="/">Art</a>

            </ul>
        </div>

        <a href="/#contact" @click="toggle" class="pl-4 py-2 align-middle hover:text-white duration-500"
            >CONTACT US</a
        >
    </div>
</template>

<script>
export default {
    data() {
        return {
            showallproduct: false,
        };
    },
    methods: {
        toggle() {
            this.$emit("toggle");
        },

        toggleshowproduct() {
            console.log("click");
            this.showallproduct = !this.showallproduct;
        },
    },
};
</script>

<style>

.content {
    overflow: hidden;
    max-height: 0;
    transition: max-height 1s;
}

/* .container{
    display: flex;
  flex-direction: column;
}

.content {
    background: aqua;
  flex-basis: 0;
  overflow: hidden;
  transition: 1s;
}

button:hover + .content {
    flex-basis: 1;
} */
</style>


