<!-- geochart.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GeoChart</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">  
  </head>
  <body>
    <div class="container">
      <h2>GeoChart</h2><br/>
      <div id="geo"></div>
      <?= $lava->render('GeoChart', 'Football Fans', 'geo') ?>
   </div>
  </body>
</html>