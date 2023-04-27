<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('click', 'a[href^="#"]', function(e) {
        var id = $(this).attr('href');

        // target element
        var $id = $(id);
        if ($id.length === 0) {
            return;
        }

        // prevent standard hash navigation (avoid blinking in IE)
        e.preventDefault();

        // top position relative to the document
        var pos = $id.offset().top;

        // animated top scrolling
        $('body, html').animate({scrollTop: pos});
    });
    
    $("#nav-home").click(function(){
        $(".navbar-nav>li>a").removeClass("nav-active");
        $(".navbar-nav>li>a").removeClass("border-bottom");
        $("#nav-home").addClass("nav-active");
        $("#nav-home").addClass("border-bottom");

    });

    $("#nav-profile").click(function(){
        $(".navbar-nav>li>a").removeClass("nav-active");
        $(".navbar-nav>li>a").removeClass("border-bottom");
        $("#nav-profile").addClass("nav-active");
        $("#nav-profile").addClass("border-bottom");
    });

    $("#nav-produk").click(function(){
        $(".navbar-nav>li>a").removeClass("nav-active");
        $(".navbar-nav>li>a").removeClass("border-bottom");
        $("#nav-produk").addClass("nav-active");
        $("#nav-produk").addClass("border-bottom");
    });

    $("#nav-contact").click(function(){
        $(".navbar-nav>li>a").removeClass("nav-active");
        $(".navbar-nav>li>a").removeClass("border-bottom");
        $("#nav-contact").addClass("nav-active");
        $("#nav-contact").addClass("border-bottom");
    });

    $("#nav-artikel").click(function(){
        $(".navbar-nav>li>a").removeClass("nav-active");
        $(".navbar-nav>li>a").removeClass("border-bottom");
        $("#nav-artikel").addClass("nav-active");
        $("#nav-artikel").addClass("border-bottom");
    });

    $("#nav-gallery").click(function(){
        $(".navbar-nav>li>a").removeClass("nav-active");
        $(".navbar-nav>li>a").removeClass("border-bottom");
        $("#nav-gallery").addClass("nav-active");
        $("#nav-gallery").addClass("border-bottom");
    });

    $('.center').slick({
      centerMode: true,
      centerPadding: '60px',
      slidesToShow: 5,
      infinite:true,

      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });

    $('.product-slider').slick({
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 5,
        infinite:true,
        responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
            }
        ]
    });

    $('.center-commerce').slick({
        dots: true,
        infinite: false,
        speed: 500,
        slidesToShow: 5,
        slidesToScroll: 5,
        infinite:true,

        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
        ]
    });

    // $('.center-artikel').slick({
    //     dots: true,
    //     infinite: false,
    //     speed: 300,
    //     slidesToShow: 3,
    //     slidesToScroll: 3,
    //     infinite:true,

    //     responsive: [
    //         {
    //         breakpoint: 1024,
    //         settings: {
    //             slidesToShow: 3,
    //             slidesToScroll: 3,
    //             infinite: true,
    //             dots: true
    //         }
    //         },
    //         {
    //         breakpoint: 600,
    //         settings: {
    //             slidesToShow: 2,
    //             slidesToScroll: 2
    //         }
    //         },
    //         {
    //         breakpoint: 480,
    //         settings: {
    //             slidesToShow: 1,
    //             slidesToScroll: 1
    //         }
    //         }
    //     ]
    // });
 


    var tempinitid = $(".slick-current").attr("id");
    var initid = tempinitid.replace(".png","");
    var initobj = $("#desc-" + initid);
    initobj.removeClass("d-none");
    var inputtempid = $("#tempid").val(initid);

    function removeBefore(id){
        var castBeforeId = id.replace(".png","");
        var concatBeforeId = $("#desc-" + castBeforeId);
        concatBeforeId.addClass("d-none");
    }

    $(".slick-next").click(function(){
        // hide before
            var idbefore = $("#desc-" + inputtempid.val());
            idbefore.addClass("d-none");
        // end hide before
        var tempid = $(".slick-current").attr("id");
        var id = tempid.replace(".png","");
        var obj = $("#desc-" + id);

        obj.removeClass("d-none");
        inputtempid.val(id);
       
    });
    $(".slick-prev").click(function(){
        // hide before
            var idbefore = $("#desc-" + inputtempid.val());
            idbefore.addClass("d-none");
        // end hide before
        var tempid = $(".slick-current").attr("id");
        var id = tempid.replace(".png","");
        var obj = $("#desc-" + id);


        obj.removeClass("d-none");
        inputtempid.val(id);
    });
  }); 
</script>

<script>
    $(document).ready(function () {
		$(".load-more-items").slice(0, 12).show();
		$("body").on('click touchstart', '.load-more-button', function (e) {
			e.preventDefault();
			$(".load-more-items:hidden").slice(0, 6).slideDown();
			if ($(".load-more-items:hidden").length == 0) {
				$(".load-more-button").css('visibility', 'hidden');
			}
		});
	});
</script>
