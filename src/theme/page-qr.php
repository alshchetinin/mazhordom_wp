<?php
/*
Template Name: QR код
*/
?>
<script type="text/javascript"> // <![CDATA[
//iPhone Version:
if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
    window.location = "<?php the_field('linkApsstore', 'option')?>";
}
//Android Version:
if(navigator.userAgent.match(/android/i)) {
    window.location = "<?php the_field('linkGP', 'option')?>";
}
</script>