(function(window){
    'use strict';
    var $ = window.jQuery;
    var edit_button = $("#edit-button");
    var delete_button = $("#delete-button");
    var toggle = 0;

    edit_button.on('click', function(event){
        event.preventDefault();
        if(toggle ===0){
            console.log("We prevented the default edit event");
            $(".form-control").attr("readonly", false);
            edit_button.text("Save Changes");
            toggle =1;
        }
        else if(toggle ===1){
            document.getElementById("pet-info").submit();
        }
    });

    delete_button.on('click',function(event){
        event.preventDefault();
        console.log("delete");
        $("#pop-up").modal({
            show: true
        }); 
    });




})(window);