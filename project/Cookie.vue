<template>
    <cookie-law message="Pepins använder cookies för att webbplatsen ska fungera på ett bra sätt för dig. Genom att surfa vidare godkänner du att vi använder cookies." position="top" theme="base" buttonText="Dölj" buttonClass="pepins_cookie__button" transitionName="fade"></cookie-law>
</template>
 
<script>
  import CookieLaw from 'vue-cookie-law'
  export default {
    components: { CookieLaw }
  }
</script>