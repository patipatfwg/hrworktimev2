$('.nav-pills li a').on('click', function (e) {     
    //get selected href
    var href = $(this).attr('href');
    //active tab
    $('.tab-pane').removeClass('active in');
    $('.tab-pane'+href).addClass('active in');
});

// Upload  Files

// var selDiv = "";
    
// document.addEventListener("DOMContentLoaded", init, false);

// function init() {
//     document.querySelector('#files').addEventListener('change', handleFileSelect, false);
//     selDiv = document.querySelector("#selectedFiles");
// }
    
// function handleFileSelect(e) {
//     if(!e.target.files || !window.FileReader) return;
//     selDiv.innerHTML = "";
//     var files = e.target.files;
//     var filesArr = Array.prototype.slice.call(files);
//     filesArr.forEach(function(f) {
//         if(!f.type.match("image.*")) {
//             return;
//         }
//         var reader = new FileReader();
//         reader.onload = function (e) {
//         	var selectHTML = '<span class="label label-danger">'+f.name+' <a href="javascript:void(0);" style="color: #e7ecf1;"> <i class="fa fa-times"></i> </a></span>';
//             selDiv.innerHTML += selectHTML;               
//         }
//         reader.readAsDataURL(f);  
//     });
// }

//

$(document).ready(function(){
    $('#citizen_id').keypress(validateNumber);
});

function getLanguage(word) {
    api_merchant.getLang(word, function(data){
        // console.log(data);
        // console.log(data[0].wording_code);
        var temp = [];
        $.each(data, function(index, value){
            // console.log(value.wording_code);
        });
        console.log(temp);
    });
}

var lang = getLanguage('th');
// console.log(lang);



function validateNumber(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
        return false;
    } else {
        return true;
    }
};


function checkInputValidation(input, typeCheck){
    var sText = input.value;
    sText = sText.toString();
    var parent = $(input).parents();

    if (typeCheck == "citizen_id") {
        if (sText.length != 13) 
            // console.log("false");
            return false;
        for (i=0, sum=0; i < 12; i++)
            sum += parseFloat(sText.charAt(i))*(13-i);
        if ((11-sum%11)%10!=parseFloat(sText.charAt(12))) {
            $($(parent)[0]).addClass('has-error');
            $('#citizen_id_error').html('กรุณาระบุหมายเลขบัตรประชาชนให้ถูกต้อง');
        } else {

            api_merchant.checkCitizenId(sText, function(data){
            // api_merchant.checkCitizenId(function(data){
                console.log(data);
                if (sText == data[0].citizen_id) {
                    console.log('match');
                    $($(parent)[0]).addClass('has-error');
                    $('#citizen_id_error').html('รหัสบัตรประชาชนนี้ไม่สามารถใช้งานได้ กรุณาใส่รหัสบัตรประชาชนอื่น');
                } else {
                    $($(parent)[0]).removeClass('has-error');
                    $($(parent)[0]).addClass('has-success');
                    $('#citizen_id_error').html('รหัสบัตรประชาชนนี้สามารถใช้งานได้');
                }
            });
        }
    } else if (typeCheck == "citizen_id") {
        if (sText.length != 10) 
            // console.log("false");
            return false;
    } else {

    }

}