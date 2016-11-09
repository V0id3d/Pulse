<!--Todo: Implement SVG / Image picker-->
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
            this.origin = this.getImage();

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
                let image = new XMLHttpRequest();
                let svgText = null;
                image.open('GET', this.href);
                image.send();
                image.onload = function () {
//                    console.log(image.responseText);
                    this.$set('imgResponse', image.responseText)
                };
                console.log(svgText);



                this.$http.get(this.href)
                        .then((response) => { return response })
                        .then((response) => { this.origin = response });
            }
        },
        components: {
            //
        }
    }
</script>
