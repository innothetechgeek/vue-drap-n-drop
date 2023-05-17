<template>
   <div id="editor">
   
  </div>
</template>


<style scoped>
    /* Let's highlight canvas boundaries */
    #gjs {
    border: 3px solid #444;
    }

    /* Reset some default styling */
    .gjs-cv-canvas {
    top: 0;
    width: 100%;
    height: 100%;
    }
    ::v-deep:h1{
        color:green;
    }
    ::v-deep .gjs-one-bg {
        background-color:  #5E4B45 !important;
    }
</style>


<script setup>

    import 'grapesjs/dist/css/grapes.min.css';
    import grapesjs from 'grapesjs';

    import '../../../css/style.css';
    import '../../../css/frontend/frontend.css';

    import { onMounted, ref } from "vue";

    let section_content = '<p> hello world </p>';

    let props = defineProps({
        components: Array,
        content: String,
        cssFromDatabase: String,
        section_id: Number,
    });

    let editor = null;

    onMounted(() => {

        initializeEditor();
        addSaveButton();
        addReusableComponents();
        applyStyles();

        let panels = editor.Panels.getPanels();

});

const applyStyles = () => {

    let styles = document.getElementsByTagName('head')[0].innerHTML;

    let databaseStyles = '<style>'+props.cssFromDatabase+'</style>';

    styles = styles+databaseStyles;

    const iframe = document.getElementsByTagName("iframe")[0];

    const doc = iframe.contentWindow.document.head;

    doc.innerHTML = styles;


}

const addSaveButton = () => {

    editor.Panels.addButton('options', [

        { 
            id: 'save', 
            className: 'fas fa-save',
            command: saveChanges,
            attributes: { title: 'Save Template' }
       }
    ]);
}

function saveChanges(){

 
    let updatedContent = editor.getHtml();
    let css = editor.getCss();

    axios.post(route('section.save'), {
        sectionId: props.section_id,
        updatedContent: updatedContent,
        css: css
    })
    .then(function (response) {
       
        alert('content saved successfully!!');

    })
    .catch(function (error) {
        console.log(error);
    });
}

const initializeEditor = () => {

    editor = grapesjs.init({
    
        container: '#editor',
        components: props.content,
        allowCss:false,

        storageManager: {
            autoload: false,
            storeHtml: 1,
        },      

    });

}

const addReusableComponents = () => {

    for(const blockId in props.components){

        var component = props.components[blockId].html;
        var title = props.components[blockId].label;
        var icon = props.components[blockId].icon;

        const bm = editor.Blocks; // `Blocks` is an alias of `BlockManager`

        bm.add(blockId, {
            // Your block properties...
            label:title,
            content: component,
            media: icon,
        });
    }

}    

</script>