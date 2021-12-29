var loader = $('.loader');
function getDataOnSelect(id,url,position,selectedId=null){
    loader.show();
    $.ajax({
        method:'get',
        url: url ,
        data:{id:id},
        success:function(data)
        {
            let row='';
            data.forEach(function(k,v){
                var selected = k.id == selectedId ?'selected':' ';
                row +=`<option ${selected} value=`+k.id+`>`+k.name+`</option>`;
            });
            $('#'+position).html(row);
            loader.hide();
        }
    });
}
 function getMessagesByAdId($targetId, $diffId, $targetPlace = '.messagesDiv'){
    loader.show();
    $.ajax({
        method:'get',
        url:  base_url + '/get-messages-by-ad/'+$targetId+'/'+$diffId,
        success:function(data)
        {
            $($targetPlace).html(data);      
            $(".chats").each(function(i) {
                $(".chats").stop().animate({ scrollTop: $(".chats")[i].scrollHeight}, 10);
            });
                loader.hide();
        }
    });
}