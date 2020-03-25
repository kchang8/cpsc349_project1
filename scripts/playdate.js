PENDINGROW_LINK_SELECTOR ='[PendPlaydate-row-role = "trigger"]';
CONFIRMEDROW_LINK_SELECTOR ='[ConPlaydate-row-role = "trigger"]';
var context = "none"
function getPendingArray() {
    'use strict';
    var thumbnails = document.querySelectorAll(PENDINGROW_LINK_SELECTOR);
    var thumbnailArray = [].slice.call(thumbnails);
    return thumbnailArray;
}

function getConfirmArray() {
    'use strict';
    var thumbnails = document.querySelectorAll(CONFIRMEDROW_LINK_SELECTOR);
    var thumbnailArray = [].slice.call(thumbnails);
    return thumbnailArray;
}

function addDeleteClickHandler(row){
    row.addEventListener('click',function(event){
        console.log("we did it");
        row.setAttribute("class","bg-secondary");
        console.log(row.getAttribute('other-party-owner'));
        console.log(row.getAttribute('other-party-time'));
        $("#context-button").removeAttr("disabled");
        $("#context-button").attr("enabled");
        $("#context-button").text("Cancel Date?");
        var formatted = row.getAttribute('other-party-time');
        $("#deletetime").val(formatted);
        $("#deleteOwnerID").val(row.getAttribute('other-party-owner'));
        $("#deletePetID").val(row.getAttribute('other-party-pet'));
        $("#deleteAdID").val(row.getAttribute('ad-id'));
        context = "delete";
    });
}

function addConfirmClickHandler(row){
    row.addEventListener('click',function(event){
        console.log("we did it");
        row.setAttribute("class","bg-secondary");
        console.log(row.getAttribute('other-party-owner'));
        console.log(row.getAttribute('other-party-time'));
        $("#context-button").removeAttr("disabled");
        $("#context-button").attr("enabled");
        $("#context-button").text("Confirm Date?");
        var formatted = row.getAttribute('other-party-time');
        $("#confirmtime").val(formatted);
        $("#confirmOwnerID").val(row.getAttribute('other-party-owner'));
        $("#confirmPetID").val(row.getAttribute('other-party-pet'));
        $("#confirmAdID").val(row.getAttribute('this-ad-id'));
        context = "confirm";
    });
}


(function (window) {
    'use strict';
    var Pendingrows = getPendingArray();
    var Confirmrows = getConfirmArray();
    console.log(Confirmrows.length);
    Pendingrows.forEach(addConfirmClickHandler);
    Confirmrows.forEach(addDeleteClickHandler);


    $('#context-button').on('click', function(event){
        event.preventDefault();
        if(context==="delete"){
            document.getElementById("Cancel-Date").submit();
        }
        else if(context==="confirm"){
            document.getElementById("Confirm-Date").submit();
        }
        else{
            window.location = "createPlaydate.php";
        }
    });
    
})(window); 