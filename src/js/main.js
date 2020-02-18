window.jQuery = require('jquery');
var $ = require('jquery');
var jQuery = require('jquery');

(function($){


    $('.game__link-no').click(function(){
        $('.modal').css('display','block');
        $('.content-site').val('sfyprojects@gmail.com')
    })
    $('.game__link-yes').click(function(){
        $('.modal').css('display','block');
        $('.content-site').val('project.bizup@gmail.com')
    })

    $(".modal__bg").click(function(){
        $('.modal').css('display','none')
    })

    $('form').submit(function(e){
        e.preventDefault();

        sendAjaxForm('form', 'send2.php');
      
        function sendAjaxForm(ajax_form, url) {
          $.ajax({
              url:     url, //url страницы (send.php)
              type:     "POST", //метод отправки
              dataType: "html",
              data: $(ajax_form).serialize(),  // Сеарилизуем объект
              beforeSend: function(data) { // событие до отправки
 
        		        },
              success: function(response) { //Данные отправлены успешно
                result = $.parseJSON(response);
                console.log(result);
                $("form").trigger("reset");
                $('.content__input').css('display','none')
                $('.reviews').css('display','block')

                setTimeout( function(){
                    $('.reviews').css('display','none')
                    $('.content__input').css('display','block')
                    $('.modal').css('display','none')
                },1500)
            
            },
            error: function(response) { // Данные не отправлены
              console.log('Ошибка. Данные не отправлены.');
            }
         });
        }


    })
 

})(jQuery);
