$(".numeric").on("input", function(evt) {
    var self = $(this);
       self.val(self.val().replace(/\D/g, ""));
    
   
   })

   
$(".numericvs").on("input", function(evt) {
    var self = $(this);
       self.val(self.val().replace(/\D/g, ""));
     
   
   } )