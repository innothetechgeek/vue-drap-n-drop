<template>
    <span v-html="content"></span>
</template>

<script setup>

    let props = defineProps({
        content: String
    })

    //alert(props.content);
</script>