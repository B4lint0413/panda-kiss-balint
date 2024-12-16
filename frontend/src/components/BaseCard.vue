<template>
<div class="card col-12 col-sm-6 col-md-4">
    <h5 class="card-title">{{panda.name}}</h5>
    <p class="card-text">{{panda.age}}</p>
    <RouterLink :to="{name: 'panda', params:{id: panda.id}}" class="btn btn-primary">Panda részletei</RouterLink>
</div>

</template>

<script>
import {RouterLink} from 'vue-router'
export default{
    props: ['panda'],
    components: {RouterLink}
}
</script>