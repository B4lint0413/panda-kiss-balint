<template>
    <BaseLayout>
        <h1 class="text-4xl my-4 font-bold">{{panda.name}}</h1>
        <BaseTable :panda="panda"/>
    </BaseLayout>
</template>

<script>
import BaseTable from '@components/BaseTable.vue'
import BaseLayout from '@layouts/BaseLayout.vue'
import {http} from '@utils/http.mjs'

export default{
    components: {BaseTable, BaseLayout},
    data(){
        return{
            panda: {}
        }
    },
    async mounted(){
        let resp = await http.get(`pandas/${this.$route.params.id}`)
        this.panda = resp.data.data;
    }
}
</script>

<route lang="json">
{
    "name": "panda"
}
</route>