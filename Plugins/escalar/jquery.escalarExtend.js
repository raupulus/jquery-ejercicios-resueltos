(function($){
    $.fn.extend({
        escalar: function(){
            return this.each(function(){
                $(this).prepend("<input type='range' min='100' max='800'/><br>");
                $(this).children().first().on("change", function() {
                    $(this).siblings().filter('img').width($(this).val());
                });
            });
        }
    });
})(jQuery);
