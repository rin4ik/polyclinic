<template>
<div  data-flickity='{"cellAlign": "left", "contain": true, "wrapAround": true}'>
    <slot></slot>
</div>
</template>
<script>
    import Flickity from 'flickity'
    import 'flickity/dist/flickity.min.css'
</script>
<style>
/* smaller, dark, rounded square */
.flickity-button {
  background: #333;
}
.flickity-button:hover {
  background: #F90;
}

.flickity-prev-next-button {
  width: 30px;
  height: 30px;
  border-radius: 5px;
}
/* icon color */
.flickity-button-icon {
  fill: white;
}
/* position outside */
.flickity-prev-next-button.previous {
  left: -40px;
}
.flickity-prev-next-button.next {
  right: -40px;
}
</style>

