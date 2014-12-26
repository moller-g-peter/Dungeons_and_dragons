//wait for DOM ready
$(function() {
  //function to print story data
  function printStory(data) {
    $(".printFight").html("");

    //the storyLine
    var storyLine = data["storyLine"];
    
    //storyLine is an array
    for (var i = 0; i < storyLine.length; i++) {
      $(".printFight").append("<p>"+storyLine[i]+"</p>");
    }

    //the options in the story right now
    var options = data["options"];
    $(".printOptions").html("");
    //options is an object
    for (var i in options) {
      //if this option is available
      if (options[i]) {
        $(".printOptions").append('<button value="'+i+'">'+i+'</button>');
      }
    }
      //options button clickhandler
    $(".printOptions button").click(function() {
      var selectedOption = $(this).val();
      sendSelectedOption(selectedOption);
    });
  }

  //fight button clickhandler
  $(".fight").click(function() {
    //fight AJAX
    $.ajax({
      //requests fight.php file
      url:"fight.php",
      dataType: "json",
      success: function(data) {
        console.log("fight success: ", data);
        printStory(data);
      },
      error: function(data) {
        console.log("OMG I FAILED TO FIGHT! ", data.responseText);
      }
    });
  });

  //fight button clickhandler
  $(".reset").click(function() {
    //reset AJAX
    $.ajax({
      //requests fight.php file
      url:"reset.php",
      dataType: "json",
      //sends {reset:1} as part of request
      data: {
        reset: 1
      },
      success: function(data) {
        console.log("reset fight!");
        $(".printFight").html("");
        $(".printOptions").html("");
      },
      error: function(data) {
        console.log("OMG I FAILED TO RESET! ", data.responseText);
      }
    });
  });

  function sendSelectedOption(selectedOption) {
    //fight AJAX with request data
    $.ajax({
      //requests fight.php file
      url:"fight.php",
      dataType: "json",
      data: {
        selectedOption: selectedOption
      },
      success: function(data) {
        console.log("selectedOption success: ", data);
        printStory(data);
      },
      error: function(data) {
        console.log("OMG I FAILED TO FIGHT! ", data.responseText);
      }
    });
  }
});