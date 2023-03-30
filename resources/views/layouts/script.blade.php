<!-- <script>
    $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
</script> -->

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
    var initid = tempinitid.replace(".jpg","");
    var initobj = $("#desc-" + initid);
    initobj.removeClass("d-none");
    var inputtempid = $("#tempid").val(initid);

    function removeBefore(id){
        var castBeforeId = id.replace(".jpg","");
        var concatBeforeId = $("#desc-" + castBeforeId);
        concatBeforeId.addClass("d-none");
    }

    $(".slick-next").click(function(){
        // hide before
            var idbefore = $("#desc-" + inputtempid.val());
            idbefore.addClass("d-none");
        // end hide before
        var tempid = $(".slick-current").attr("id");
        var id = tempid.replace(".jpg","");
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
        var id = tempid.replace(".jpg","");
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
