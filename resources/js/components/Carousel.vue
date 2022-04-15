<template>
    <div>
        <div>
            <carousel
                v-if="imgData.length > 0"
                :items="1"
                :nav="true"
                :loop="true"
                :autoplay="true"
                :autoplayHoverPause="true"
            >
                <div v-for="(img, index) in imgData" :key="index">
                    <img
                        :src="'storage/HeroImage/' + img.picture"
                        :alt="img.title"
                    />
                </div>
            </carousel>
        </div>
    </div>
</template>
<script>
import carousel from "vue-owl-carousel";
export default {
    components: {
        carousel,
    },
    props: {
        msg: String,
    },
    data() {
        return {
            imgData: [],
        };
    },
    mounted() {
        axios.get("/image-slides").then((res) => {
            this.imgData = res.data;
        });
    },
};
</script>
