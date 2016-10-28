<template>
    <transition :name="transition">
        <div :class='alertClasses' v-show='show' role='alert'>
            <button type="button" class="close" @click='close'>
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="alert__heading" v-if="slots.heading"><slot name='heading'></slot></div>

            <strong v-if="! slots.heading">{{ type | capitalize }}</strong>&nbsp;&nbsp;<slot></slot>
        </div>
    </transition>
</template>

<script type="text/babel">
    export default {
        props: {
            type: {
                type: String,
                default: 'info'
            },
            transition: {
                type: String,
                default: 'flip--x'
            },
            timeout: {
                type: Number,
                default: 3000
            }
        },
        filters: {
            capitalize: function (n) {
                return n[0].toUpperCase() + n.slice(1)
            }
        },
        data() {
            return {
                show: true
            }
        },
        computed: {
            slots() {
                return this.$slots;
            },
            alertClasses() {
                let type = this.type;
                return {
                    'alert': true,
                    'alert--success': type == 'success',
                    'alert--error': type == 'error',
                    'alert--warning': type == 'warning',
                    'alert--info': type == 'info'
                };
            }
        },
        methods: {
            close () {
                this.show = false;
            }
        },
        mounted () {
            setTimeout(() => { this.show = false }, this.timeout);
        },
    };
</script>
