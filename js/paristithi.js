var myCenter = new google.maps.LatLng(30.315893 , 78.031983);

function initialize() {
var mapProp = {
center:myCenter,
zoom:12,
scrollwheel:false,
draggable:false,
mapTypeId:google.maps.MapTypeId.ROADMAP
};

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
position:myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

 $("#dob").datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        showOtherYear: true,
        selectOtherYear: true,
        changeYear: true,
        showAnim: "clip",
        dateFormat: "mm/dd/yy",
        minDate: "01/01/1980",
        maxDate: "12/31/2016",
        changeMonth: true,
        yearRange: "1980:2016",
        regional: "it"
    });

  $("#volunteerForm").validate({
  	  rules:{
  	          name: "required",
  	          mail: {required:true, email:true},
  	          dob: {required:true, date:true},
  	          phn: {required:true, matches:"[0-9\-\(\)\s]+"},
  	          cause:{required:true}  	
  	  },
  	  messages:{
  	  	 name: "This field is required",
  	  	 mail: {required: "This field is required", email: "Enter valid email address"},
  	  	 dob: {required: "This field is required", date: "Enter valid Date of Birth"},
  	  	 phn: {required:"This field is required", matches: "Enter valid phone number"},
  	  	 cause: "This field is required"
  	  }
  });

  $("#donateForm").validate({
      rules:{
              d_name: "required",
              d_mail: {required:true, email:true},
              d_amt: {required: true, number: true}   
      },
      messages:{
         d_name: "This field is required",
         d_mail: {required: "This field is required", email: "Enter valid email address"},
         d_amt: {required: "This field is required", number: "Please enter valid amount to donate"}
      }
  });




  $("#gender-error").addClass('pull-right');
});