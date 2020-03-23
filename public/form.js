$(document).ready(function() {
    function validName(){
        if ($('.regName').val()==0) {
            $('.regName').val('').attr('placeholder','Пожалуйста введите имя!');
            return false;
        }else{
            return true;
        }
    }
    function validPass(){
        if ($('.regPass').val()==0) {
            $('.regPass').val('').attr('placeholder','Пожалуйста введите пароль!');
            return false;
        }else{
            return true;
        }
    }
// , name:name, pass:pass, bird:bird
    $('#register_form').submit(function(e) {
        var name = $('.regName').val();
        var pass = $('.regPass').val();
        var bird = $('.regBird').val();
        e.preventDefault();
        var formData = new FormData(this);
        if(validName() == true && validPass() == true && ($('.regPhoto')[0].files).length !=0){
            $.each($('.regPhoto')[0].files, function (i,file) {
                formData.append("file["+ i +"]",file);
            })

            $.ajax({
                type: "POST",
                url: "../public/form.php",
                data: formData,
                cache: false,
                contentType:false,
                processData:false,
                success: function(msg){
                    console.log(msg);
                    console.log('ура');
                },
                error: function(response) {
                    console.log(response);
                    console.log('ппц');
                }
            });
        }
    });
});