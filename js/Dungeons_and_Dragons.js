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

  $(".play").click(function(){
    var playerName = $('.characterName').val();
    var playerClass = $("input[type='radio']:checked").val();
    $.ajax({
      url:"php/start_game.php",
      dataType: "json",
      data: {
        playerName: playerName,
        playerClass: playerClass

      },
      success: function(data) {
        for (var i = 0; i < data.length; i++) {
          for (var j = 0; j < data[i].length; j++) {
            console.log("start_game is successful: ", data);
            $(".resultWindow").append("<p>" + data[i][j].name + "</p>");
            $(".inputField").hide();
            $(".buttons").show();
            $(".characters").hide();
          }
        }

      },
      error: function(data) {
        console.log("start_game not successful ", data.responseText);
      }
    });

    return false;
  });

  $(".attack").click(function(){
    $.ajax({
      url:"php/battle_generator.php",
      dataType: "json",
      success: function(data) {
        console.log("Fight is successful: ", data);
        $(".resultWindow").append("<p>" + data + "</p>");

        window.scrollTo(0, 50000);
      },
      error: function(data) {
        console.log("Fight not successful ", data.responseText);
      }
    });
  });


  // $(".items").click(function(){
  //   $.ajax({
  //     url:"php/use_items.php",
  //     dataType: "json",
  //     success: function(data) {
  //       console.log("item is successful: ", data);
  //     },
  //     error: function(data) {
  //       console.log("item not successful ", data.responseText);
  //     }
  //   });
  // });


  $(".cancel").click(function() {
    $.ajax({
      //requests fight.php file
      url:"php/cancel.php",
      dataType: "json",
      //sends {reset:1} as part of request
      data: {
        reset: 1
      },
      success: function(data) {
        console.log("cancel fight");
   
      },
      error: function(data) {
        console.log("OMG I FAILED TO RESET! ", data.responseText);
      }
    });
  });



});