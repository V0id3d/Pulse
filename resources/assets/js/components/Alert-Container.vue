<template>
    <div :class='positionClass'>
        <slot></slot>
    </div>
</template>
<script>
    export default{
        props: {
            position: {
                type: String,
                default: 'top-right'
            },
        },
        computed: {
            slots() {
                return this.$slots;
            },
            positionClass() {
                let position = this.position;
                return {
                    'alert-container--top-left': position == 'top-left',
                    'alert-container--top-right': position == 'top-right'
                };
            }
        },
    }
</script>
