<template>
    <transition :name="transition">
        <div :class='alertClasses' v-show='show' role='alert'>
            <button type="button" class="close" @click='close'>
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 v-if="heading"><i :class="alertIcons"></i>&nbsp;{{ type | capitalize }}</h4>

            <strong v-if="!heading"><i :class="alertIcons"></i>&nbsp;{{ type | capitalize }}</strong>&nbsp;&nbsp;<slot></slot>
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
            placement: {
                type: String
            },
            timeout: {
                type: Number,
                default: 0
            },
            hide: {
                type: Boolean,
                default: false
            },
            heading: {
                type: Boolean,
                default: false
            }
        },
        data() {
            return {
                show: !this.hide
            }
        },
        computed: {
            alertClasses() {
                let type = this.type;
                let placement = this.placement;
                return {
                    'alert': true,
                    'alert--success': type == 'success',
                    'alert--error': type == 'error',
                    'alert--warning': type == 'warning',
                    'alert--info': type == 'info',
                    'alert--top': placement == 'top',
                    'alert--top-left': placement == 'top-left',
                    'alert--top-right': placement == 'top-right',
                    'alert--bottom': placement == 'bottom',
                    'alert--bottom-left': placement == 'bottom-left',
                    'alert--bottom-right': placement == 'bottom-right'
                };
            },
            alertIcons() {
                let type = this.type;
                return {
                    'fa': true,
                    'fa-check-circle': type == 'success',
                    'fa-times-circle': type == 'error',
                    'fa-exclamation-circle': type == 'warning',
                    'fa-info-circle': type == 'info',
                }
            }
        },
        methods: {
            close () {
                this.show = false;
            }
        },
        mounted () {
            if(this.timeout != 0) {
                setTimeout(() => { this.show = false }, this.timeout);
            }
        },
    };
</script>
