(function(window){
    'use strict';
    var $ = window.jQuery;
    var pawson = $("#pawmeButton");
    pawson.on('click', function(event){
        event.preventDefault();
        console.log("Heyo");
        document.getElementById("pawon").submit();
    });
})(window);