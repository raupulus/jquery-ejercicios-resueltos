(function($){
    $.fn.escalar = function() {
        this.each(function() {
            $(this).prepend("<input type='range' min='100' max='800'/><br>");
            $(this).children().first().on("change", function() {
                $(this).siblings().filter('img').width($(this).val());
            });
        });
        return this;
    };

    $.fn.difuminar = function() {
        this.each(function() {
            $(this).prepend("<input type='range' min='0' max='1' step='0.1' value='0.5'/><br>");
            $(this).children().first().on("change", function() {
                $(this).siblings().filter('img').fadeTo('slow',$(this).val());
            });
        });
        return this;
    };
})(jQuery);
