<template>
    <nav :class="mainNavClasses">
        <div :class="containerClasses">
            <slot></slot>
        </div>
    </nav>
</template>
<script>
    export default {
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
            },
            // vertical: first menu will be vertical
            // horizontal: first dropdown menu will be horizontal
            dropdown: {
                type: String,
                default: 'vertical',
            }
        },
        data () {
            return {
                'responsive':   ! this.nonResponsive,
            }
        },
        computed: {
            mainNavClasses() {
                return {
                    'navbar'                        :   true,
                    'navbar--responsive'            :   ! this.nonResponsive,
                    'navbar--full'                  :   this.fullWidth,
                    'navbar--dark'                  :   this.style == 'dark',
                    'navbar--light'                 :   this.style == 'light',
                    'navbar--horizontal-dropdown'   :   this.dropdown != 'vertical'
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
