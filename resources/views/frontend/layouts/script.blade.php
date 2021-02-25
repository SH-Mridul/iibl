<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
<!-- core vue cli -->
<script src="{{ asset('assets/frontend/js/vue.js') }}"></script>
<script src="{{ asset('assets/frontend/js/axios.min.js') }}"></script>
<!-- production script -->
<script src="{{ asset('assets/frontend/js/debug.min.js') }}"></script>


<script type="text/javascript">

  function dynamicLanguageLibrary(language){
    $.ajax({
      url: "frontend/dashboard/dynamicLanguageLibrary",
      method: "POST",
      data:{
        language: language
      },
      success: function(res){
        location.reload();
      },
      error: function(err){
        console.log(err);
      }
    });
  }

  $(".explore_slider").owlCarousel({
      loop:true,
      autoplay:true,
      autoplayHoverPause:true,
      autoplayTimeout:1950
  });
  var owl = $('.explore_slider');
    owl.owlCarousel(); 
    $('.NextBtn').click(function() {
        owl.trigger('next.owl.carousel');
    }) 
    $('.PrevBtn').click(function() { 
        owl.trigger('prev.owl.carousel', [300]);
    })

    function dynamicLanguageLibrary(language){
       console.log(language);
       var date = new Date();
       date.setTime(date.getTime()+(1*24*60*60*1000));
       var expires = "; expires="+date.toGMTString();
       document.cookie = "language="+language+expires;
       window.location.reload();
    }
</script> 