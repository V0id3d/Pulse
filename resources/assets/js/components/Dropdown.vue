<template>
    <li :class="dropdownClasses" v-if="isUl" v-click-out="collapse">
        <a href="#" :class="toggleClasses" @click.prevent="toggleOpen">
            {{ text | capitalize }}
        </a>
        <transition :name="transition">
            <ul class="dropdown__menu dropdown__menu--right" v-show="opened">
                <slot></slot>
            </ul>
        </transition>
    </li>
    <div :class="dropdownClasses" v-else v-click-out="collapse">
        <a class="btn btn--secondary dropdown__toggle" id="dropdownMenuButton" @click.prevent="toggleOpen" href="#">
            {{ text | capitalize }}
        </a>
        <transition :name="transition">
            <ul class="dropdown__menu" v-show="opened">
                <slot></slot>
            </ul>
        </transition>
    </div>
</template>

<script type="text/babel">
    export default {
        data() {
            return {
                opened: false,
                isUl: null,
                inDropdown: null,
            }
        },
        computed: {
            // Sets the classes on the dropdown element.
            dropdownClasses () {
              return {
                  'dropdown': true,
                  'active': this.opened,
                  'nav__item': this.isUl && !this.inDropdown,
                  'dropdown__item': this.isUl && this.inDropdown
              }
            },
            toggleClasses () {
                return {
                    'nav__item': this.isUl && !this.inDropdown,
                    'dropdown__item': this.isUl && this.inDropdown,
                    'dropdown__toggle': true,
                }
            }
        },
        props: {
            text: {
                type: String,
                default: ''
            },
            transition: {
                type: String,
                default: 'flip--x'
            },
        },
        methods: {
            toggleOpen() {
                this.opened = !this.opened;
            },
            collapse() {
                this.opened = false;
            },
            expand() {
                this.opened = true;
            }
        },
        mounted () {
            this.isUl = (this.$el.parentElement.tagName == 'UL');
            let parentString = this.$el.parentElement.className;
            this.inDropdown = parentString.includes('dropdown__menu');
        }
    }
</script>


