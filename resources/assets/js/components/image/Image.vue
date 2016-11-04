<template>

</template>

<script>
    export default{
        data () {
            return {
                origin : '',
                imgResponse: '',
                imgStatus: '',
            }
        },
        props: {
            href: {
                type: String,
                default: '#'
            },
            type: {
                type: String,
                default: 'img'
            }
        },
        mounted (){
//            this.$http.get(this.href, function (data, status, request){
//                this.$set('test', data)
//            }).error(function (data, status, request){
//                console.log ('Data: ' + data);
//                console.log ('Status:' + status);
//                console.log ('Request: ' + request)
//            });
        },
        methods: {
            getImage (){
                this.$http.get('http://httpbin.org/ip', function (data) {
                    // set data on vm
                    this.$set('origin', data)

                })
            }
        },
        components: {
            //
        }
    }
</script>
