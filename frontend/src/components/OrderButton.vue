<template>
<button type="button" class="col-6 btn btn-success font-bold border p-2" @click="click"><slot/></button>
</template>

<script>

export default{
    props: ["url"],
    methods: {
        click(){
            this.$emit('order', this.url);
        }
    }
}
</script>