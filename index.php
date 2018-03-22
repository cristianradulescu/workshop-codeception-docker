<html>
  <head>
    <title>Codeception - Docker demo</title>
  </head>
  <body>
    <h1>Codeception - Docker demo</h1>
    <button onclick="changeContent('new content')">My button</button>
    <div id="content">old content</div>

    <script>
    function changeContent(content) {
        var elem = document.getElementById('content');
        elem.textContent = content;
      }
    </script>
  </body>
</html>