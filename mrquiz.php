    <html>
    <head>
        <title>Quiz</title>
 
        <link rel="stylesheet" href="css/main.css">
        <script src="quiz.js"></script>
    </head>
    <body>
    <div class="wrap" style="background-image: url('quiz_bg/img_quiz2.jpg');">
    <div class="form-header">
        <h2 id="test_status"></h2>
        <div id="test"></div>
    </div>
    </div>
    <script>
            // pos is position of where the user in the test or which question they're up to
    var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
    // this is a multidimensional array with 4 inner array elements with 5 elements inside them
    var questions = [
      {
          question: "How many ethnic groups do we have in Nigeria?",
          a: "260",
          b: "250",
          c: "270",
          answer: "B"
        },
      {
          question: "Who is the current chief of justices of Nigeria?",
          a: "Ibrahim Tanko Muhammad",
          b: "Chief Obafemi Awolowo",
          c: "Mr durodola",
          answer: "A"
        },
      {
          question: "In Nigeria, democracy day is now celebrated on.,",
          a: "June 12",
          b: "October 20",
          c: "November 21",
          answer: "A"
        },
      {
          question: "Which is the most populated country in the world?",
          a: "Congo",
          b: "Nigeria",
          c: "China, with 1.4 billion residents",
          answer: "C"
        },
        {
          question: "Who was the first Nigerian female psychiatrist?",
          a: "Dr. Bertha Johnson",
          b: "mrs durodola",
          c: "chief mrs ramsome kuti",
          answer: "A"
        },
        {
          question: "Nigeria’s Inspector General of Police is?",
          a: "Adamu Mohammed",
          b: "charle Adamu",
          c: "Charle Bello",
          answer: "A"
        },
        {
          question: "Which is the second largest continent in the world?",
          a: "America",
          b: "Africa",
          c: "Australia",
          answer: "B"
        },
        {
          question: "The hottest region in the world is called?",
          a: "South East",
          b: "North central",
          c: "The Sahara Desert",
          answer: "C"
        },
        {
          question: "Who is the current chairman of ECOWAS?",
          a: "President Muhama don Issoufou of Niger Republic.",
          b: "President Muhamadu Buhari",
          c: "Dr Ebele Goodlock Jonathan",
          answer: "A"
        },
        {
          question: "Which African country first gained independence?",
          a: "Liberia in 1847",
          b: "Nigeria in 1960",
          c: "South Africa in 1950",
          answer: "A"
        }
      ];
    // this get function is short for the getElementById function  
    function get(x){
      return document.getElementById(x);
    }
    // this function renders a question for display on the page
    function renderQuestion(){
      test = get("test");
      if(pos >= questions.length){
        test.innerHTML = "<h2>You got "+correct+" of "+questions.length+" questions correct</h2>";
        get("test_status").innerHTML = "Test completed";
        // resets the variable to allow users to restart the test
        pos = 0;
        correct = 0;
        // stops rest of renderQuestion function running when test is completed
        return false;
      }
      get("test_status").innerHTML = "Question "+(pos+1)+" of "+questions.length;
      
      question = questions[pos].question;
      chA = questions[pos].a;
      chB = questions[pos].b;
      chC = questions[pos].c;
      // display the question
      test.innerHTML = "<h3>"+question+"</h3>";
      // display the answer options
      // the += appends to the data we started on the line above
      test.innerHTML += "<label> <input type='radio' name='choices' value='A'> "+chA+"</label><br>";
      test.innerHTML += "<label> <input type='radio' name='choices' value='B'> "+chB+"</label><br>";
      test.innerHTML += "<label> <input type='radio' name='choices' value='C'> "+chC+"</label><br><br>";
      test.innerHTML += "<button onclick='checkAnswer()'>Submit Answer</button>";
    }
    function checkAnswer(){
      // use getElementsByName because we have an array which it will loop through
      choices = document.getElementsByName("choices");
      for(var i=0; i<choices.length; i++){
        if(choices[i].checked){
          choice = choices[i].value;
        }
      }
      // checks if answer matches the correct choice
      if(choice == questions[pos].answer){
        //each time there is a correct answer this value increases
        correct++;
      }
      // changes position of which character user is on
      pos++;
      // then the renderQuestion function runs again to go to next question
      renderQuestion();
    }
    // Add event listener to call renderQuestion on page load event
    window.addEventListener("load", renderQuestion);

    
    </script>
    </body>
    </html>
    