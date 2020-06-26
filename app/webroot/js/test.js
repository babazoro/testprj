//h1タグの文字色を赤に変更
$(function(){
  $("h1").css('color','red');
});


function testAjax() {
	$.ajax({
        url: "/testprj/main/test",
        type: "POST",
        success : function(response){
            alert(response);
        },
    });
}

//フォームの値をajaxで送信
$(function(){
	//searchのsubmitが押されたら
    $('#search').submit(function(event){
//    	デフォルトのイベントを起動しない
    	event.preventDefault();

        var $search = $('#search');
        var param = $search.serializeArray();

        $.ajax({
            url: '/testprj/main/search',            type:'POST',

            data: param,
            success : function(response){
            	alert(response);
            },
        })
    });
});


$(function(){
});


function color() {
	$("h1").css('color','blue');
}
