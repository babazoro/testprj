//h1タグの文字色を赤に変更
$(function(){
  $("h1").css('color','red');
});

function color() {
  $("h1").css('color','blue');
}

function testAjax() {
  $.ajax({
        url: "/testprj/main/test",
        type: "POST",
        success : function(response){
          var rows = "test";
          $('p').append(rows);

            alert(response);
        },
    });
}

//フォームの値をajaxで送信
$(function(){

    $('button').click(function(event){
      //初期化してから検索
      $('td').remove();
        var $search = $('#search');
        var param = $search.serializeArray();

        $.ajax({
            url: '/testprj/main/search',
            type:'POST',
            data: param,
            success : function(response){

            	//返ってきた値を変換
            	var json = $.parseJSON(response);

            	if(response == '0') {
            		alert('キーワードを入力してください');
            	} else if(response == '1') {
            		alert("そのユーザーは存在しません");
            	} else {
	            	//値の数だけデータを出力
	            	for(var i in json){
	            		//テーブルにhtmlを追加する
	                    $('#table').append(
	                        "<tr>" + "<td>" + json[i].TSyain.SYAIN_ID + "</td>" +
	                        "<td>" + json[i].TSyain.NAME + "</td>" +
	                        "<td>" + json[i].TSyain.SEIBETSU + "</td>" +
	                        "<td>" + json[i].TSyain.BIRTHDAY + "</td>" + "</tr>"
	                    );
	            	}
            	}
           },
           //ajax通信ができなかったときにエラー
            error: function(){
                alert("エラー");
              }
        })
    });
});

