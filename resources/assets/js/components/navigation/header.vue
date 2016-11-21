<template>
    <div class="navbar__header">
        <a href="#" class="navbar__brand">
            <slot></slot>
        </a>
        <a href="#" class="navbar__navbar-toggler"><i class="fa fa-bars"></i></a>
    </div>
</template>

<script type="text/babel">
    export default{
        data(){
            return{
                msg:'hello vue'
            }
        }
    }
</script>
