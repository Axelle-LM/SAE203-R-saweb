document.addEventListener("DOMContentLoaded", function(){

    document.querySelector('.reservation-form').addEventListener('click',function(clic){
        console.log('click');
        document.querySelector('.reserv-invisible').classList.add('reserv-visible');
        document.querySelector('.reserv-visible').classList.remove('reserv-invisible');
    });
  

    // document.querySelector('.reservation').classList.add('reserv-visible');
    //document.querySelector('.reservation').classList.remove('reserv-invisible');
//});

});


