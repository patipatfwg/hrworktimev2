var API_URL = "http://10.32.10.102/truerelaxAPI/public/api/v1/";// dev env
const api_merchant = (function(){
    var lang = "th";
    var setCookie = function(cname, cvalue, expires) {
        var d = new Date();
        d.setTime(d.getTime() + (exhours*60*60*1000));
        var expires = "expires="+ d.toUTCString();
        alert(cname + "=" + cvalue + ";expires=" + expires + ";path=/");
    }
    var getCookie = function(cname){
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    
    }
    return {
        getLang(lang, callback) { //10.32.10.102/truerelaxAPI/public/api/v1/word/th
        // checkCitizenId(callback) {
            $.ajax({
                url: API_URL+'word/'+lang,
                dataType: 'json',
                type: 'GET',
                // data: { lang: lang },
                success: callback,
                error: function(xhr, status, error) {
                    console.log(xhr);
                }
            });
        },

        checkCitizenId(citizen_id, callback) {
        // checkCitizenId(callback) {
            $.ajax({
                // url: API_URL+'owner',
                url: API_URL+'todo',
                dataType: 'json',
                // type: 'POST',
                type: 'GET',
                data: { citizen_id: citizen_id },
                success: callback,
                error: function(xhr, status, error) {
                    console.log(xhr);
                }
            });
        }
    }
})()