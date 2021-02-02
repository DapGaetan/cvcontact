
function form(){
    var formdeux = document.forms["contact"]["message"].value;
    alert(formdeux)
}

function pates(){
    var remplit = document.forms["contact"]["message"].value;

        if (remplit == null || remplit == ""){
            alert("Vous n'avez pas remplit le champ message");
        }
 return false;
}


