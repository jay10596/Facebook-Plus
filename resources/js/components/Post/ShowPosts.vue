<template>
    <div class="flex flex-col items-center justify-center py-4">
        <p v-if="status == 'loading'">Loading Posts...</p>

        <PostCard class="w-5/6" v-for="(post, index) in posts" :key="index" :post="post" />
    </div>
</template>

<script>
    import { mapGetters } from "vuex";
    import PostCard from "../Extra/PostCard";

    export default {
        name: "ShowPosts",

        components: {PostCard},

        computed: {
            ...mapGetters({
                posts: 'posts',
                status: 'postStatus',
            })
        },

        created() {
            this.$store.dispatch('fetchAllPosts');
        }
    }
</script>

<style scoped>

</style>
