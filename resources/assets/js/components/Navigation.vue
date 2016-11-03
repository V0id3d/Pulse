<template>
    <nav :class="mainNavClasses">
        <div :class="containerClasses">
            <slot></slot>
        </div>
    </nav>
</template>
<script>
    export default {
        data () {
            return {
                'fixed': this.fixed,
                'responsive':   ! this.nonResponsive,
                'fullWidth':    this.fullWidth,
                'fixedWidth':   this.fixedWidth
            }
        },
        props: {
            // Fixed To Location
            fixed: {
                type: Boolean,
                default: false
            },
            // Set responsiveness of the bar
            nonResponsive: {
                type: Boolean,
                default: false
            },
            // Set if the bar will take the whole screen
            fullWidth: {
                type: Boolean,
                default: false
            },
            // Set if the container will be fluid or fixed width
            fixedWidth: {
                type: Boolean,
                default: false
            },
            // dark: Light lettering dark toolbar
            // light: Dark Lettering light toolbar
            style: {
                type: String,
                default: 'dark'
            }
        },
        computed: {
            mainNavClasses() {
                return {
                    'navbar'            :   true,
                    'navbar--responsive':   ! this.nonResponsive,
                    'navbar--full'      :   this.fullWidth,
                    'navbar--dark'      :   this.style == 'dark',
                    'navbar--light'     :   this.style == 'light'
                }
            },
            containerClasses() {
                return {
                    'container':            this.fixedWidth,
                    'container--fluid':     ! this.fixedWidth
                }
            }
        }
    }
</script>
