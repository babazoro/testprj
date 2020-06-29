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

        var $search = $('#search');
        var param = $search.serializeArray();

        $.ajax({
            url: '/testprj/main/search',
            type:'POST',
            data: param,
            success : function(response){
//            	alert(response);

//            	foreach ($data as $key => $value){
//            	}
//            	var json = $.parseJSON([
//            			'{"NAME":"John"}',
//            			'{"SYAIN_ID":"001"}',
//            			'{"SEIBETSU":"男"}',
//            			'{"BIRTHDAY":"1990/01/01"}']);

            	var NAME = $.parseJSON('{"NAME":"John"}');
            	var SYAIN_ID = $.parseJSON('{"SYAIN_ID":"001"}');
            	var SEIBETSU = $.parseJSON('{"SEIBETSU":"男"}');
            	var BIRTHDAY = $.parseJSON('{"BIRTHDAY":"1990/01/01"}');
            	var rows ="";
            	rows += "<tr>";
            	rows += "<td>";
                rows += SYAIN_ID['SYAIN_ID'];
                rows += "</td>";
                rows += "<td>";
                rows += NAME['NAME'];
                rows += "</td>";
                rows += "<td>";
                rows += SEIBETSU['SEIBETSU'];
                rows += "</td>";
                rows += "<td>";
                rows += BIRTHDAY['BIRTHDAY'];
                rows += "</td>";
                rows += "</tr>";
                //テーブルに作成したhtmlを追加する
                $('#table').append(rows);
            },
        })
    });
});


$(function(){
});

