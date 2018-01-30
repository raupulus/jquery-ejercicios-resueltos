(function($){
    $.fn.extend({
        escalar: function(opciones){
            //opciones por defecto
            var conf = {
                min: 100,
                max: 800
            };

            $.extend(conf,opciones);

            this.each(function(){
                $(this).prepend("<input type='range' min='"+ conf.min + "' max='" +conf.max + "' /><br>");
                $(this).children().first().on("change", function(){
                    $(this).siblings().filter('img').width( $(this).val());

                });
            });
            return this;
        }
    });
})(jQuery);
