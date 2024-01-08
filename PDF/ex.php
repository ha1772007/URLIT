<html>
  <head>
    <title>PHP Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>
  <body>
    <script src='data.js'></script>

    <script>
      // Function to display selected questions
      function displaySelectedQuestions(start, end) {
        if (start > 0 && end <= Object.keys(data).length && start <= end) {
          var i = start; // Start index from 1
          while (i <= end) {
            document.write('<br><b>Q.No ' + i + '&nbsp;&nbsp;&nbsp; </b>' + data[i] + '<br>'); // Adjust index and question number
            i++;
          }
        } else {
          alert('Invalid question range. Please enter a valid range.');
        }
      }

      // Prompt user for question range
      var startRange = parseInt(prompt('Enter the starting question number:', '1'));
      var endRange = parseInt(prompt('Enter the ending question number:', '10'));

      // Display selected questions
      displaySelectedQuestions(startRange, endRange);

      // Apply styling to elements
      $('p').css('display', 'inline');
      $('img').after('<br>');
      $('mjx-container').css('font-size', '100%');
      $('p').css('font-size', '16px');
      $('h1').css('font-size', '30px');
      $('*').css('font-family', 'Arial');
      $('img').before('<br>');
      $('body').css('column-count', '2');
      $('body').css('column-rule', '3px solid black');
      $('img').css('height', 'auto');
      $('img').css('width', 'auto');
    </script>
  </body>
</html>
