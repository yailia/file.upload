$(function(){
  $('form').on('submit', function(e){
    let form = new FormData(this);

    e.preventDefault();
    $.ajax({
      url: 'handler.php',
      data: form,
      method: 'post',
      processData: false,
      contentType: false,
      success: function(json){
        if(json){
          $('.list').replaceWith(json);
        }
      }
    });
  });
});