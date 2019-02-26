$(document).ready(function () {

  var toggleAffix = function (affixElement, scrollElement, wrapper) {

    var height = affixElement.outerHeight(),
      top = wrapper.offset().top;

    if (scrollElement.scrollTop() >= top + 45) {
      wrapper.height(height);
      affixElement.addClass("affix");
    }
    else {
      affixElement.removeClass("affix");
      wrapper.height('auto');
    }

  };


  $('[data-toggle="affix"]').each(function () {
    var ele = $(this),
      wrapper = $('<div></div>');

    ele.before(wrapper);
    $(window).on('scroll resize', function () {
      toggleAffix(ele, $(this), wrapper);
    });

    // init
    toggleAffix(ele, $(window), wrapper);
  });

  $('ul.nav li.dropdown').hover(function () {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
  }, function () {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
  });
});

// To toggle Modal between Login And Registration

$("#registerButton").click(function () {

  $('#register').removeClass('d-none');
  $('#login').addClass('d-none');

});

$("#loginButton").click(function () {

  $('#login').removeClass('d-none');
  $('#register').addClass('d-none');

});

// scroll to top

$(window).on('scroll', function () {
  if ($(window).scrollTop() >= 1000) {
    $('#scrollTop').fadeIn();
  } else {
    $('#scrollTop').fadeOut();
  }
});


$('#scrollTop').on('click', function () {
  $('html, body').animate({
    scrollTop: 0
  }, 1000);
});

//hide-show Password

$(".togglePassword").click(function () {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

//Owl Carousel 
var productSlider = $('.product-slider');
productSlider.owlCarousel({
  loop: true,
  margin: 15,
  nav: false,
  autoplay: false,
  autoplayHoverPause: true,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    900: {
      items: 3
    },
    1000: {
      items: 5
    }
  },

  onRefresh: function () {
    productSlider.find('.pimage').height('');
},
onRefreshed: function () {
    var maxHeight = 0;
    var items = productSlider.find('.pimage');
    items.each(function () {
        var itemHeight = $(this).height();
        if (itemHeight > maxHeight) {
            maxHeight = itemHeight;
        }
    });
    if (maxHeight > 0) {
        items.height(maxHeight);
    }
}
});

  
  function adjustProductsHeight(){
    var productImage = $('.product-image');
    var maxHeight = 0;
    var items = productImage.find('.pimage');
    items.each(function () {
        var itemHeight = $(this).height();
        if (itemHeight > maxHeight) {
            maxHeight = itemHeight;
        }
    });
    if (maxHeight > 0) {
        items.height(maxHeight);
    }
  }

  $(document).ready(adjustProductsHeight);
// $(window).resize(adjustProductsHeight);

//accordian
$('.collapse').on('shown.bs.collapse', function () {
  $(this).parent().find(".fa-angle-down").removeClass("fa-angle-down").addClass("fa-angle-up");
}).on('hidden.bs.collapse', function () {
  $(this).parent().find(".fa-angle-up").removeClass("fa-angle-up").addClass("fa-angle-down");
});



// nOuiSlider

var snapSlider = document.getElementById('slider-snap');
      
noUiSlider.create(snapSlider, {
  start: [ 200, 3000 ],
  snap: false,
  connect: true,
    step: 1,
  range: {
    'min': 100,
    'max': 4000
  }
});
var snapValues = [
  document.getElementById('slider-snap-value-lower'),
  document.getElementById('slider-snap-value-upper')
];
var inputValues = [
  document.getElementById('slider-snap-input-lower'),
  document.getElementById('slider-snap-input-upper')
];
snapSlider.noUiSlider.on('update', function( values, handle ) {
  snapValues[handle].innerHTML = values[handle];
});        

snapSlider.noUiSlider.on('change', function( values, handle ) {
    inputValues[handle].value = values[handle];
});        



 // ------------------------------------------------------- //
    //    Colour form control 
    // ------------------------------------------------------ //

    $('.btn-colour').on('click', function (e) {
      var button = $(this);

      if (button.attr('data-allow-multiple') === undefined) {
          button.parents('.colours-wrapper').find('.btn-colour').removeClass('active');
      }

      button.toggleClass('active');
  });



// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see the error "The Geolocation service
// failed.", it means you probably did not give permission for the browser to
// locate you.
var map, infoWindow;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 6
  });
  infoWindow = new google.maps.InfoWindow;

  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      infoWindow.setPosition(pos);
      infoWindow.setContent('Location found.');
      infoWindow.open(map);
      map.setCenter(pos);
    }, function () {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
    'Error: The Geolocation service failed.' :
    'Error: Your browser doesn\'t support geolocation.');
  infoWindow.open(map);
}




