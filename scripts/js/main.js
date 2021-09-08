$(function(){
  
  $('#form').on('submit', function(e){
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

  $('.add-form').on('submit', function(e){
    console.log(2)
    let files = new FormData(this);
    e.preventDefault();
    $.ajax({
      url: 'scripts/file.php',
      data: files,
      method: 'post',
      processData: false,
      contentType: false,
      success: function(data) {
          $(".message-container").html(data)
      }
    });
  })
});