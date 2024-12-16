<template>
  <BaseLayout>
    <div class="row opacity-25 bg-success my-2 g-2">
      <OrderButton url="pandas?orderBy=name&order=asc" @order="showCards">Név szerint növekvő</OrderButton>
      <OrderButton url="pandas?orderBy=name&order=desc" @order="showCards">Név szerint csökkenő</OrderButton>
      <OrderButton url="pandas?orderBy=age&order=asc" @order="showCards">Kor szerint növekvő</OrderButton>
      <OrderButton url="pandas?orderBy=age&order=desc" @order="showCards">Kor szerint csökkenő</OrderButton>
    </div>
    <div class="row gx-5">
      <BaseCard v-for="panda of pandas" :panda="panda"/>
    </div>
  </BaseLayout>
</template>

<script>
import BaseLayout from '@layouts/BaseLayout.vue'
import BaseCard from '@components/BaseCard.vue'
import OrderButton from '@components/OrderButton.vue'
import {http} from '@utils/http.mjs'

export default {
  data(){
    return{
      pandas: []
    }
  },
  components: {
    BaseLayout,
    OrderButton,
    BaseCard
  },
  computed: {
    
  },
  methods: {
    async showCards(url){
      console.log(url)
      let resp = await http.get(url);
      this.pandas = resp.data.data;
    }
  },
  async mounted(){
    await this.showCards('pandas');
  }
}
</script>
