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

  $(".inputField").submit(function(){
    $.ajax({
      url:"start_game.php",
      dataType: "json",
      success: function(data) {
        console.log("start_game is successful: ", data);
        $(".resultWindow").append("<p>" + data + "</p>");
      },
      error: function(data) {
        console.log("start_game not successful ", data.responseText);
      }
    });

    $(".buttons").show();
    $(".characters").hide();
    $(".inputField").hide();
    return false;
  });

  $(".attack").click(function(){
    $.ajax({
      url:"battle_generator.php",
      dataType: "json",
      success: function(data) {
        console.log("Fight is successful: ", data);
        $(".resultWindow").append("<p>" + data + "</p>");
      },
      error: function(data) {
        console.log("Fight not successful ", data.responseText);
      }
    });
  });

  $(".magic").click(function(){

  });

  $(".items").click(function(){
    $.ajax({
      url:"use_items.php",
      dataType: "json",
      success: function(data) {
        console.log("item is successful: ", data);
      },
      error: function(data) {
        console.log("item not successful ", data.responseText);
      }
    });
  });

  $(".cancel").click(function(){

  });


  $(".cancel").click(function() {
    $.ajax({
      //requests fight.php file
      url:"cancel.php",
      dataType: "json",
      //sends {reset:1} as part of request
      data: {
        reset: 1
      },
      success: function(data) {
        console.log("cancel fight");
        $(".printFight").html("");
        $(".printOptions").html("");
      },
      error: function(data) {
        console.log("OMG I FAILED TO RESET! ", data.responseText);
      }
    });
  });



});