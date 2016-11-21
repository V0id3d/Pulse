<template>
    <ul class="nav navbar__nav navbar--flex" id="pulse-navbar-collapse">
        <slot></slot>
    </ul>
</template>
<script>
    export default{
        data(){
            return {
                msg: 'hello vue'
            }
        },
    }
</script>
