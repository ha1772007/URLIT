<html>
  <head>
    <title>PHP Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>
  <body>
    <script src='data.js'>
      </script>

    <div>
      <h1><center>Physics</center></h1>
      <h2><center>Laws Of Motion</center></h2>

      <script>

        // Data ENd
      var i = 1
      while(i<31){
      document.write('<br><b>Q.No '+ i + '&nbsp;&nbsp;&nbsp; </b>' + data[i] + '<br>');
        i++;
      }
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
    </div>
  </body>
</html>