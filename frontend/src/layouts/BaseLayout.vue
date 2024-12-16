<template>
  <header>
  <BaseHeader />
  </header>
  <main class="container-fluid mx-auto">
    <slot />
  </main>
</template>
<script>
import BaseHeader from '@components/layout/BaseHeader.vue'
export default {
  components: {
    BaseHeader
  }
}
</script>
