//val(),text(),html(),attr()

$(document).ready(function(){
  $("#btnid").click(function(){
  	//set text value
    $("#pid2").text("paragraph changed");
    //get text value
	   let a= $("#pid1").text();
	   console.log(a);
	   //set html value
    $("#pid3").html("<b><i>this is p3 paragraph set html</i></b>");
      //get html value
   let b= $("#pid3").html();
   console.log(b);
   //set val()
   $("#name").val('set value raviya');
   //get val()
 	let c = $("#age").val();
   console.log(c);
	//set attr()

 $("img").attr("src", "image/boy.jpg"); 
 //get src
 let src = $("img").attr("src");
 console.log(src); 
   $("#head1").addClass('myclass');


  });
});

