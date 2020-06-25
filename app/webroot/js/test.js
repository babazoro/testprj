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