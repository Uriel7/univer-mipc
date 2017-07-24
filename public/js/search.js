window.onload = function() {
  $('#form-search').submit(function(e){
    f = $(e.currentTarget);
    var type = f.find("#type").val();
    var id = f.find("#code").val();
    var _token = f.find("input[name='_token']").val();
    e.preventDefault();
    $.ajax({
      method: 'POST',
      url: '/search',
      data: {_token: _token, type: type, id: id },
      success: function(data){
        if($.isEmptyObject(data.error)){
          $('#search-result').html(data.html);
          $('#search-result').show(1000);
        }else{
          $('#search-result').html(data.error);
          $('#search-result').show(1000);
        }
      }
    });
  });
}