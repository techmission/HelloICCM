<!DOCTYPE HTML>
<html>
  <head>
    <title>Hello!</title>
    <script type="text/javascript" charset="utf-8" src="cordova-1.8.1.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
    <script src="event_bindings.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.00" />
  </head>
  <body>
    {% autoescape false %}
      {% for page in pages %}{{ page }}{% endfor %}
    {% endautoescape %}
  </body>
</html>
