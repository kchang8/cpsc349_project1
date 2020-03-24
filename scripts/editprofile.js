(function(window){
    'use strict';
    var $ = window.jQuery;
    var edit_pet = $("#edit-pet");
    var delete_button = $("#delete-button");
    var owner_picture = $("#owner-picture");
    var pet_picture = $("#pet-picture");
    var togglepet = 0;

    edit_pet.on('click', function(event){
        event.preventDefault();
        if(togglepet ===0){
            console.log("We prevented the default edit event");
            $(".pet-input").attr("readonly", false);
            edit_pet.text("Save Changes");
            togglepet = 1;
        }
        else if(togglepet ===1){
            document.getElementById("pet-info").submit();
        }
    });

    owner_picture.on('mouseover',function(event){
        console.log("moused over");
    });

    owner_picture.on('click',function(event){
        $("#ownerupload").trigger('click');
    });

    pet_picture.on('mouseover',function(event){
        console.log("moused over");
    });

    pet_picture.on('click',function(event){
        $("#petupload").trigger('click');
    });


    delete_button.on('click', function(event){
        event.preventDefault();
        console.log("delete");
        $(document).ready(function() {
            $("#deleteButton").modal('show');
        }); 
    });






})(window);