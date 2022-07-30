function changeTheme(){
    var body = document.getElementsByTagName("body")[0];
    var labelE = document.getElementsByTagName("label")[0];
    if (body.className == "light-mode"){
      body.className = body.className.replace( /(?:^|\s)light-mode(?!\S)/g , '' );
      labelE.className += " switched";
    } else{
      body.className = "light-mode";
      labelE.className = "sidebar-themeLabel";
    }
  }
  
  $(".search-bar input")
   .focus(function () {
    $(".header").addClass("wide");
   })
   .blur(function () {
    $(".header").removeClass("wide");
   });
  
  
  
  function changeSidebarView(){
    var sidebar = document.getElementsByClassName("sidebar-container")[0];
    const viewButton = document.getElementsByClassName("sidebar-viewButton")[0];
    if (viewButton.title == "Shrink"){
      sidebar.className += " shrink";
      viewButton.ariaLabel = "Expand Sidebar";
      viewButton.title = "Expand";
    } else{
      sidebar.className = "sidebar-container ";
      viewButton.ariaLabel = "Shrink Sidebar";
      viewButton.title = "Shrink";
    }
  }
  
  var swiper = new Swiper('.product-slider', {
    spaceBetween: 30,
    effect: 'fade',
    // initialSlide: 2,
    loop: false,
    navigation: {
        nextEl: '.next',
        prevEl: '.prev'
    },
    // mousewheel: {
    //     // invert: false
    // },
    on: {
        init: function(){
            var index = this.activeIndex;
  
            var target = $('.product-slider__item').eq(index).data('target');
  
            console.log(target);
  
            $('.product-img__item').removeClass('active');
            $('.product-img__item#'+ target).addClass('active');
        }
    }
  
  });
  
  swiper.on('slideChange', function () {
    var index = this.activeIndex;
  
    var target = $('.product-slider__item').eq(index).data('target');
  
    console.log(target);
  
    $('.product-img__item').removeClass('active');
    $('.product-img__item#'+ target).addClass('active');
  
    if(swiper.isEnd) {
        $('.prev').removeClass('disabled');
        $('.next').addClass('disabled');
    } else {
        $('.next').removeClass('disabled');
    }
  
    if(swiper.isBeginning) {
        $('.prev').addClass('disabled');
    } else {
        $('.prev').removeClass('disabled');
    }
  });
  
  $(".js-fav").on("click", function() {
    $(this).find('.heart').toggleClass("is-active");
  });
  
  
  const sizes = document.querySelectorAll('.size');
  const colors = document.querySelectorAll('.color');
  const shoes = document.querySelectorAll('.shoe');
  const shoeBg = document.querySelector('.shoeBackground');
  
  let animationEnd = true;
  
  function changeSize(){
      sizes.forEach(size => size.classList.remove('active'));
      this.classList.add('active');
  }
  
  function changeColor(){
  }
  
  sizes.forEach(size => size.addEventListener('click', changeSize));
  colors.forEach(c => c.addEventListener('click', changeColor));
  
  function changeHeight(){
      var x = window.matchMedia("(max-width: 1000px)");
      if(x.matches){
      }
      else{
          
      }
  }
  
  changeHeight();
  
  window.addEventListener('resize', changeHeight);