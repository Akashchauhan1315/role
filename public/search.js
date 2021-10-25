// google.maps.event.addDomListener(window, 'load', initialize);
//     function initialize() {
//       var input = document.getElementById('pac-input');

//       var autocomplete = new google.maps.places.Autocomplete(input);
//       autocomplete.addListener('place_changed', function () {
//       var place = autocomplete.getPlace();
//       // place variable will have all the information you are looking for.

//       var address = place.address_components;
//       var city, state, zip;
//       address.forEach(function(component) {
//         var types = component.types;
//         if (types.indexOf('locality') > -1) {
//           city = component.long_name;
//           //alert();
//         }

//         if (types.indexOf('administrative_area_level_1') > -1) {
//           state = component.long_name;
//         }

//         if (types.indexOf('postal_code') > -1) {
//           zip = component.long_name;
//         }
//       });
      
//       $('.search_latitude1').val(place.geometry.location.lat());
//       $('.search_longitude1').val(place.geometry.location.lng());
//       $('#city').val(place.name);
//       $('#state').val(state);
//       $('#zip').val(zip);

//       $('#city1').val(place.name);
//       $('#state1').val(state);
//       $('#zip1').val(zip);
//     });

//       var input1 = document.getElementById('pac-input1');

//       var autocomplete1 = new google.maps.places.Autocomplete(input1);
//       autocomplete1.addListener('place_changed', function () {
//       var place1 = autocomplete1.getPlace();
//       // place variable will have all the information you are looking for.

//       var address = place1.address_components;
//       var city, state, zip;
//       address.forEach(function(component) {
//         var types = component.types;
//         if (types.indexOf('locality') > -1) {
//           city = component.long_name;
//           //alert();
//         }

//         if (types.indexOf('administrative_area_level_1') > -1) {
//           state = component.long_name;
//         }

//         if (types.indexOf('postal_code') > -1) {
//           zip = component.long_name;
//         }
//       });
      
      

//       $('#city1').val(place1.name);
//       $('#state1').val(state);
//       $('#zip1').val(zip);
//     });
//   }

//   $("input[name=car_color]").keyup(function(event) {
//     var textBox = event.target;
//     var start = textBox.selectionStart;
//     var end = textBox.selectionEnd;
//     textBox.value = textBox.value.charAt(0).toUpperCase() + textBox.value.slice(1).toLowerCase();
//     textBox.setSelectionRange(start, end);
//   });