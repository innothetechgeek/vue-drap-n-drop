<script setup>

    import { Link } from '@inertiajs/vue3'

    let props = defineProps({
        section: Array
    })

</script>
<template>
    <div class='content-wrapper'>

        <a  :href="'page/liveedit/'+section.id" target="_blank" v-if="props.section.content === null" class="btn btn-secondary">  
            <font-awesome-icon icon="fa-solid fa-eye" /> Add Content 
        </a>
        <a  :href="'page/liveedit/1'+section.id" target="_blank" v-else class="btn btn-secondary">  
            <font-awesome-icon icon="fa-solid fa-plus" /> Live edit
        </a>
    </div>
</template>
<script setup>

</script>
<style scoped>
    .content-wrapper{
        padding-top:25px;
    }
    .btn-secondary{
        background-color:#FCB322;
        color:#fff;
    }
</style>