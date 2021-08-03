$(function(){
  $('form').on('submit', function(e){
    e.preventDefault();
    $.ajax({
      url: 'handler.php',
      data: new FormData(this),
      success: function(json){
        if(json){
          console.log(FormData)
        }
      }
    });
  });
});