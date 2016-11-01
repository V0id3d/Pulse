<template>
    <div :class="dropdownClasses">
        <button class="btn btn--secondary dropdown__toggle" type="button" id="dropdownMenuButton" @click="toggleOpen">
            {{ text | capitalize }}
        </button>
        <transition :name="transition">
            <ul class="dropdown__menu" v-show="opened">
                <a class="dropdown__item" href="#">Action</a>
                <a class="dropdown__item" href="#">Another action</a>
                <a class="dropdown__item" href="#">Something else here</a>
            </ul>
        </transition>

    </div>
</template>

<script type="text/babel">
    export default {
        data() {
            return {
                opened: false,
            }
        },
        computed: {
            // Sets the classes on the dropdown element.
            dropdownClasses () {
              return {
                  'dropdown': true,
                  'open': true
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
            toggleOpen: function () {
                this.opened = !this.opened
            }
        },
        events: {

        }
    }
</script>


