<!doctype html>
<html lang="en">

  <head>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCEHHBswwCP3DvDew1icNtnYgChQH1OgRk&libraries=places,geometry&v=weekly">
    </script>
    <link rel="stylesheet" href="{{ asset('google.css')}}">
  </head>

  <body>
      <div class="loader"></div>
      <section class="available-nearby" style="">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="pos-rel-block">
                <body>
                  <div class="input-line">
                    <input id="pac-input" class="controls" type="text" placeholder="Enter address">
                    <input type="submit" id="search-button" value="Search">
                  </div>
                  <input type="hidden" name="" id="dd34">
                  <input type="hidden" name="" id="dd1">
                  <div id="map"></div>
                </body>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script src="{{ asset('search.js')}}"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js?libraries=places"></script>
      <script src="{{ asset('navigation.js')}}"></script>
      <script src="{{ asset('google.js')}}"></script>
      <script src="{{ asset('loader.js')}}"></script>
  </body>
</html>
