<template>
    <div class="col-12 col-sm-6 col-md-4">
        <div class="card">
            <h5 class="card-title">{{panda.name}}</h5>
            <p class="card-text">{{panda.age}}</p>
            <RouterLink :to="{name: 'panda', params:{id: panda.id}}" class="btn btn-primary">Panda részletei</RouterLink>
        </div>
    </div>
</template>

<script>
import {RouterLink} from 'vue-router'
export default{
    props: ['panda'],
    components: {RouterLink}
}
</script>