$(function() {
 
  $(".attack").click(function() {
	// console.log ("click success");
    $.ajax({
      url:"battle_generator.php",
      dataType: "json",
      success: function(data) {
        console.log("Success: ");
      },
      error: function(data) {
        console.log("Failure: ");
      }
    });
  });


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