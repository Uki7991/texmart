<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                        <p>And it is so exciting</p>
                        <p>{{ message }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                message: "Hello World!!!"
            }
        }
    }
</script>

<style lang="scss" scoped>
    .card {
        border: 0;

        > .card-header {
            text-align: center;
        }
        > .card-body {
            color: #00cc00;
        }
    }
</style>
