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
            this.getImage();
//            this.$http.get(this.href).then(
//                    (response) => {
//////                        this.$set('imgResponse', success.text());
////                        console.log(response);
////                        return response.blob();
//////                        console.log(success.blob())
//                    }
//            ).then(blob) => {
//                console.log(blob)
//            };
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
                this.$http.get(this.href).then((response) => {
                    console.log(response.body);
                }, (response) => {
                    console.log(response);
                });
//                this.$http.get('http://httpbin.org/ip').then((response) => {
//                    this.$set('origin', response)
//            })
            }
        },
        components: {
            //
        }
    }
</script>
