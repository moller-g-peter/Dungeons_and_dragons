$(function() {

  function hideFirst(){
    $(".inputField").hide();
    $(".buttons").hide();
  }
  hideFirst();

  $(".Knight").click(function(){
    $(".inputField").show();
  });

  $(".Archer").click(function(){
    $(".inputField").show();
  });

  $(".Sorcerer").click(function(){
    $(".inputField").show();
  });


  $(".").click(function(){
    $(".inputField").show();
  });













 //  $(".attack").click(function() {
	// // console.log ("click success");
 //    $.ajax({
 //      url:"battle_generator.php",
 //      dataType: "json",
 //      success: function() {
 //        console.log("Success: ");
 //      },
 //      error: function() {
 //        console.log("Failure: ");
 //      }
 //    });
 //  });

















  // $(".reset").click(function() {
 
  //   $.ajax({
  //     url:"reset.php",
  //     dataType: "json",
  //     //sends {reset:1} as part of request
  //     data: {
  //       reset: 1
  //     },
  //     success: function(data) {
  //       console.log("Reset success: ", data);
  //     },
  //     error: function(data) {
  //       console.log("Reset failure: ", data);
  //     }
  //   });
  // });

});