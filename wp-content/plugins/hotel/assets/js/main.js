(function($){
    $("#hotel_rating").bind('rated', function(){
        $(this).rateit('readonly', true);

        var form = {
            action: 'h_rate_hotel',
            hid: $(this).data('hid'),
            rating: $(this).rateit('value')
        }
        
       $.post(hotel_obj.ajax_url, form, function(data){

       });
    });
})(jQuery);