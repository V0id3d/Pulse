<!--<template>-->
    <!--<div class="dropdown open">-->
        <!--<button class="btn btn&#45;&#45;secondary dropdown__toggle" type="button" id="dropdownMenuButton">-->
            <!--Dropdown button-->
        <!--</button>-->
        <!--<div class="dropdown__menu">-->
            <!--<a class="dropdown__item" href="#">Action</a>-->
            <!--<a class="dropdown__item" href="#">Another action</a>-->
            <!--<a class="dropdown__item" href="#">Something else here</a>-->
        <!--</div>-->
    <!--</div>-->
<!--</template>-->
<template>
    <div :class="{ open: show, dropdown: !dropup, dropup: dropup}">
        <button class="dropdown__toggle"
                aria-expanded="{{ show }}"
                @click = "toggle($event)"
                :disabled = 'disabled'>
            <span v-html="text" v-show="text"></span>
        </button>
        <ul class="dropdown__menu">
            <li @click="clicked" class="dropdown__item">Somewhere here</li>
            <li @click="clicked" class="dropdown__item">Another page link</li>
        </ul>
    </div>
</template>


<script type="text/babel">
    export default {
        data() {
            return {
                show: false
            }
        },
        props: {
            text: {
                type: String,
                default: ''
            },
            disabled: {
                type: Boolean,
                default: false
            },
        },
        methods: {
            toggle(e) {
                this.show = !this.show;
                if (this.show) {
                    this.$dispatch('shown::dropdown');
                    e.stopPropagation();
                } else {
                    this.$dispatch('hidden::dropdown');
                }
            },
            clicked() {
                this.show = false;
            }
        },
        events: {
            'hide::dropdown'() {
                this.show = false;
            }
        }
    }
</script>


