$(function(){
  $('form').on('submit', function(e){
    console.log(1)
    let form = new FormData(this);

    e.preventDefault();
    $.ajax({
      url: 'handler.php',
      data: form,
      method: 'post',
      processData: false,
      contentType: false,
      success: function(html) {
          $('.list').html(html);
      }
    });
  });
});