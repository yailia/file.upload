$(function(){
  $('#form').on('submit', function(e){
    e.preventDefault();
    var $that = $(this);
    console.log($.ajax({
      url: $that.attr('action'),
      type: $that.attr('method'),
      dataType: 'json',
    }))
  });
});