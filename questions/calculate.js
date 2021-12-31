function cal(answers, choices, score, option, choice, s, count) {
  // Assigning text location class
  for (var i = 0; i < 10; i++) {
    s[i] = name(i);
  }

  // Click event for options
  $(s[0]).click(function(event) {
    help(0, this);
  });

  $(s[1]).click(function(event) {
    help(1, this);
  });

  $(s[2]).click(function(event) {
    help(2, this);
  });

  $(s[3]).click(function(event) {
    help(3, this);
  });

  $(s[4]).click(function(event) {
    help(4, this);
  });

  $(s[5]).click(function(event) {
    help(5, this);
  });

  $(s[6]).click(function(event) {
    help(6, this);
  });

  $(s[7]).click(function(event) {
    help(7, this);
  });

  $(s[8]).click(function(event) {
    help(8, this);
  });

  $(s[9]).click(function(event) {
    help(9, this);
  })

  // Returns class name of option clicked
  function name(k) {
    var s = "." + choices[k] + " .choice-container";
    return s;
  }

  // Adds background to option clicked
  function add_class(p) {
    $(".bar" + (p + 1).toString()).addClass("press");
  }

  // Calculates Score
  function calculate(txt, n) {
    if (txt === answers[n] && choice[n] == 1) {
      score++;
      answers[n] = "";
      choice[n] = 0;
      count = count + 1;
    }
     else if(txt != answers[n] && choice[n] == 1){
      choice[n] = 0;
      count = count + 1;
    }
  }

  // Handles all the operations of option clicked
  function help(i, obj) {
    add_class(i);
    if (option[i] === 1) {
      $(obj).addClass("press");
      option[i] = 0;
    }
    var text = event.target.className.slice(-1);
    calculate(text, i);
    $("#carouselExampleControls").carousel("next");
  }

  $('.but1').click(function() {
    $(".f").text("Total number of questions: 10");
    $(".s").text('Number of questions attempted: ' + count);
  });


  $(".but3").click(function () {
      createCookie('score', score, "0.0001");
  });

  // Function to create the cookie
  function createCookie(name, value, days) {
      var expires;

      if (days) {
          var date = new Date();
          date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
          expires = "; expires=" + date.toGMTString();
      }
      else {
          expires = "";
      }

      document.cookie = escape(name) + "=" +
          escape(value) + expires + "; path=../";
  }

}
