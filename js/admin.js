

$("#addEvent").validate({
  	  rules:{
  	          e_name: "required",
  	          e_place: "required",
  	          e_date: {required:true, date:true},
  	          e_time: "required",
  	          e_pic:"required"  	
  	  },
  	  messages:{
  	  	 e_name: "This field is required",
         e_place: "This field is required",
         e_date: {required: "This field is required", date: "Enter a valid date"},
  	  	 e_time: "This field is required",
         e_pic: "This field is required",
  	  }
  });

  $("#e_date").datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        showOtherYear: true,
        selectOtherYear: true,
        changeYear: true,
        showAnim: "clip",
        dateFormat: "mm/dd/yy",
        minDate: "01/01/1980",
        maxDate: "12/31/2017",
        changeMonth: true,
        yearRange: "1980:2017",
        regional: "it"
  });

    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
    
