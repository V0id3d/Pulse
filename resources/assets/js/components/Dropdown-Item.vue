<template>
    <li><a :class="itemClasses" :href="href" @click="test"><slot></slot></a></li>
</template>
<script>
    export default{
        props: {
            href: {
                type: String,
                default: '#'
            },
        },
        data(){
            return {
                active: false,
            }
        },
        methods: {
            test: function() {
                console.log('Item Clicked -> Should collapse menu.');
            }

        },
        computed: {
            itemClasses() {
                return {
                    'dropdown__item': true,
                    'active': this.active,
                }
            },
        }
    }
</script>
