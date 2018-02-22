
 
    $(document).ready(function() {
 
        $(".owl-carousel").owlCarousel({
       
            autoPlay: 3000, //Set AutoPlay to 3 seconds
       
            
            navigation : true,
           
            loop: true,
 
            responsiveClass:true,
            responsive: {
                0:{
                  items: 1
                },
                480:{
                  items: 1
                },
                769:{
                  items: 2
                }
            },
            
           
            autoheight: true
       
        });
       
      });
   
