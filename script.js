function myFunction(){
        var x = document.getElementById("idnavbar")
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show" , "")
        }
    }

function previewFile() {
    const preview = document.querySelector('.w3-image');
    const file = document.querySelector('input[type=file]').files[0];
    const reader = new FileReader();
    reader.addEventListener("load", function() {
        preview.src = reader.result;
    }, false);

    if(file) {
        reader.readAsDataURL(file);
    }
}

function uploadImage($id)
{
    $target_dir = "../MIDTERM/image";
    $target_file = $target_dir . $id;
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
}

function confirmDialog() {
    var r = confirm("Confirm to register?");
    if(r == true){
        return true;
    } else {
        return false;
    }
}