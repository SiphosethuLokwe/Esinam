function ValidateFileUpload(evt) {

    evt.preventDefault();
    var fuData = document.getElementById('FileUpload');
    var FileUploadPath = fuData.value;

    var Extension = FileUploadPath.substring(
        FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

    //The file uploaded is an image

    if (Extension == "gif" || Extension == "png" || Extension == "bmp" ||
        Extension == "jpeg" || Extension == "jpg") {

        // To Display
        if (fuData.files && fuData.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(fuData.files[0]);
        }

    } else {

        alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");



    }

}

function LogoutConfirm(evt) {
    evt.preventDefault();
    var logout = confirm("Are you sure you want to logout ");
    if (logout) {
        location.href = "index.php";
    }

}

var password = document.getElementById("txtPass"),
    confirm_password = document.getElementById("txtConfPass");

function validatePassword() {
    if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
        confirm_password.setCustomValidity('');
    }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;