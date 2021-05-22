
$('#myCarousel').on('slide.bs.carousel', function () {
$('#myCarouselCustom').carousel();

// Go to the previous item
$("#prevBtn").click(function(){
    $("#myCarouselCustom").carousel("prev");
});
// Go to the previous item
$("#nextBtn").click(function(){
    $("#myCarouselCustom").carousel("next");
});

<script type="text/javascript">
$('.carousel').carousel({
     interval: 5000,
     pause:true,
     wrap:false
});
