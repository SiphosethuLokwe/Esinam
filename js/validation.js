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

// function validateTextBox(_this) {
//     if (_this.validity.valueMissing) {
//         $(_this).css('border', '1px solid red');
//     } else {
//         $(_this).css('border', '1px solid #ddd');
//     }
// }}

// function validateTextBox(_this) {
//     if (_this.validity.valueMissing) {
//         $(_this).css('border', '1px solid red');
//     } else {
//         $(_this).css('border', '1px solid #ddd');
//     }
// }