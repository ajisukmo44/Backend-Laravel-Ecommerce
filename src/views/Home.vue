<template>
  <div class="home">
    <Header />
    <OwlCarousel />
    <ItemsCarousel />
    <InstaGallery />
    <LogoPatner />

    <Footer />
  </div>
</template>

<script>
// // @ is an alias to /src
import Header from "@/components/Header.vue";
import OwlCarousel from "@/components/OwlCarousel.vue";
import ItemsCarousel from "@/components/ItemsCarousel.vue";
import InstaGallery from "@/components/InstaGallery.vue";
import LogoPatner from "@/components/LogoPatner.vue";
import Footer from "@/components/Footer.vue";

export default {
  name: "Home",
  components: {
    Header,
    OwlCarousel,
    ItemsCarousel,
    InstaGallery,
    LogoPatner,
    Footer
  }
};
</script>
