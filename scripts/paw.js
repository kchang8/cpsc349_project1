(function(window){
    'use strict';
    var $ = window.jQuery;
    var pawson = $("#pawsoffButton");
    pawson.on('click', function(event){
        event.preventDefault();
        document.getElementById("pawon").submit();
    });


})(window);