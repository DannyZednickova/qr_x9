$(".numeric").on("input", function(evt) {
    var self = $(this);
       self.val(self.val().replace(/\D/g, ""));
       $(".hidden-text").show().delay(500).fadeOut();
   
   })

   
$(".numericvs").on("input", function(evt) {
    var self = $(this);
       self.val(self.val().replace(/\D/g, ""));
       $(".hidden-text").show();
   
   })

   
   $(".numeric").on("input", function(evt) {
    var self = $(this);
    var isNumeric = $.isNumeric(self);
    if(isNumeric) {
        $(".hidden-text").show();
    }
})