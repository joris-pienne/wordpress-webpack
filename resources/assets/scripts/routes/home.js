export default {

  //Animation skill

  finalize() {
    //Change les couleurs du menu
    $(window).scroll(function(){
      if ($(this).scrollTop() > 650) {
         $('header div.menu div.left-side').addClass('active');
      } else if ($(this).scrollTop() > 500) {
         $('header div.menu div.right-side').addClass('active');
      } else {
        $('header div.menu div.left-side').removeClass('active');
        $('header div.menu div.right-side').removeClass('active');
      }
    });

    //Selecteur dans la section 2
    var $littleMenu = $('section.second div.little-menu p');
    $('section.second div.little-menu p:first-of-type').addClass('selected');
    $('sectio,.second div.about-content div:first').addClass('active');

    $littleMenu.on('click', function (){
      if ($(this).siblings().hasClass('selected')) {
        $(this).siblings().removeClass('selected');
        $(this).addClass('selected');
      }

      if ($('section.second div.little-menu p.infos').hasClass('selected')){
        $('section.second div.about-content div.info-content').siblings().removeClass('active');
        $('section.second div.about-content div.info-content').addClass('active');
      }

      if ($('section.second div.little-menu p.competences').hasClass('selected')){
        $('section.second div.about-content div.skill-content').siblings().removeClass('active');
        $('section.second div.about-content div.skill-content').addClass('active');
      }

      if ($('section.second div.little-menu p.logiciels').hasClass('selected')){
        $('section.second div.about-content div.software-content').siblings().removeClass('active');
        $('section.second div.about-content div.software-content').addClass('active');
      }
    });

    //Condition animation skill


    $('section.second div.about-content div.skill-content').hasClass('active'), function(){

        var forEach = function (array, callback, scope){
          for (var i = 0; i < array.length; i++){
            callback.call(scope, i, array[i]);
          }
        };

        var max = 2160;
        forEach(document.querySelectorAll('.progress'),function(index, value){
          var percent = value.getAttribute('data-progress');
          value.querySelector('.fill').setAttribute('style', 'stroke-dashoffset:' + ((100 - percent) / 100) * max);
        });
      }

  }
};
