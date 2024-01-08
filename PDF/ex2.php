<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Question Paper</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .page {
      box-sizing: border-box;
      width: 210mm; /* A4 width */
      height: 297mm; /* A4 height */
      margin: 0 auto;
      padding: 20px;
      page-break-after: always;
      display: flex;
      flex-wrap: wrap;
    }

    .content {
      width: 100%;
      box-sizing: border-box;
      display: flex;
      justify-content: space-between;
    }

    .left-column, .right-column {
      flex-basis: 48%; /* Adjust as needed */
      box-sizing: border-box;
      padding: 0 5px; /* Reduce padding */
      margin-bottom: 10px; /* Reduce margin */
    }

    .question {
      margin-bottom: 1em;
    }
  </style>
</head>
<body>

  <!-- Sample JavaScript data -->
  <script>
    const questionsData = {
      '1': 'What is PM Of India',
      '2': 'What is PM of USA',
      // Add more questions as needed
    };

    // Function to generate the content based on the questionsData
    function generateContent(questionsData) {
      const container = document.createElement('div');
      container.className = 'page';

      for (const [id, question] of Object.entries(questionsData)) {
        const contentDiv = document.createElement('div');
        contentDiv.className = 'content';

        const leftColumn = document.createElement('div');
        leftColumn.className = 'left-column';

        const rightColumn = document.createElement('div');
        rightColumn.className = 'right-column';

        const questionDiv = document.createElement('div');
        questionDiv.className = 'question';
        questionDiv.innerHTML = `<h2>Question ${id}</h2><p>${question}</p>`;

        leftColumn.appendChild(questionDiv);
        contentDiv.appendChild(leftColumn);
        contentDiv.appendChild(rightColumn);
        container.appendChild(contentDiv);

        // Switch to the right column for the next question
        if (id % 2 === 0) {
          leftColumn.style.order = 2;
          rightColumn.style.order = 1;
        }
      }

      document.body.appendChild(container);
    }

    // Call the function with your questions data
    generateContent(questionsData);
  </script>

</body>
</html>
