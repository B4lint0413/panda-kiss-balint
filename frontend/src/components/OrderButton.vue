<template>
    <div class="col-6">
        <button type="button" class="w-full btn btn-success font-bold border" @click="click"><slot/></button>
    </div>
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