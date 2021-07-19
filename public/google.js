$(document).ready(function () {
    var baseURL="http://localhost/role/public/";
    var first = 0;
    var secondtime = 0;
    if (first == 0) {
        function initialize() {
          
            $(".gm-style-iw-d").css("max-height", "553px");

            var latitude = null;
            var longitude = null;
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var positionInfo =
                        "Your current position is (" +
                        "Latitude: " +
                        position.coords.latitude +
                        ", " +
                        "Longitude: " +
                        position.coords.longitude +
                        ")";

                    latitude = -37.8329513;

                    longitude = 144.9339125;

                    $("#dd34").val(latitude);

                    //alert('dd');

                    $("#dd1").val(longitude);

                    $("#latitudelogin").val(latitude);

                    $("#longitudelogin").val(longitude);
                    $.ajax({
                        async: false,
                        url: baseURL + "/GoogleMapAddress",
                        method: "get",
                        data: { latitude: latitude, longitude: longitude },
                        dataType: "JSON",

                        success: function (data) {
                            dosomthing(data);
                        },
                        error: function (data) {
                            //alert('hh1');
                        },
                    });
                }, function() {
                    //alert('akash');
                    latitude = -37.8320449622055;

                    longitude = 144.93382639769698;
                    $.ajax({
                        async: false,
                        url: baseURL + "/GoogleMapAddress",
                        method: "get",
                        data: { latitude: latitude, longitude: longitude },
                        dataType: "JSON",

                        success: function (data) {
                            dosomthing(data);
                        },
                        error: function (data) {
                            //alert('hh1');
                        },
                    });

                });

                // alert(navigator.geolocation+'hh');
            }

            var gmarkers = [];
            var RoseHulman;

            var newlat = ($("#dd34").val() === '' ? -37.8135857 : $("#dd34").val() ) ;
            var newlong = ($("#dd1").val() === '' ? 144.9666155 :  $("#dd1").val());
            RoseHulman = new google.maps.LatLng(newlat, newlong);

            var styles = [
                {
                    stylers: [
                        {
                            hue: "#EDEDED",
                        },
                        {
                            saturation: -90,
                        },
                    ],
                },
                {
                    featureType: "poi",
                    elementType: "labels",
                    stylers: [
                        {
                            lightness: 100,
                        },
                        {
                            visibility: "simplified",
                        },
                    ],
                },
                {
                    featureType: "poi",
                    elementType: "labels",
                    stylers: [
                        {
                            visibility: "off",
                        },
                    ],
                },
            ];

            var styledMap = new google.maps.StyledMapType(styles, {
                //name: "Petrol"
            });


            var mapOptions = {
                center: RoseHulman,
                zoom: 10,
                mapTypeControl: false,
                zoomControl: true,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.SMALL,
                },
                // mapTypeControlOptions: {

                //   mapTypeIds: ['map_style', google.maps.MapTypeId.MAP],
                // },
                scrollwheel: false,
                streetViewControl: true,
            };

            var map = new google.maps.Map(
                document.getElementById("map"),
                mapOptions
            );

            map.mapTypes.set("map_style", styledMap);
            map.setMapTypeId("map_style");

            var infowindow = new google.maps.InfoWindow({
                maxWidth: 300,
                infoBoxClearance: new google.maps.Size(1, 1),
                disableAutoPan: false,
            });

            var marker, i, icon, image;
            var locations;
            var currentMarker;

            var markerRed;
            function dosomthing(response) {
                
                locations = response;
                for (i = 0; i < locations.length; i++) {
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(
                            locations[i].latitude,
                            locations[i].longitude
                        ),
                        title: locations[i].street_address,
                        map: map,
                        icon: "images/icon-blue.png",
                    });
                    gmarkers.push(marker);
                    //marker.setIcon('http://maps.google.com/mapfiles/ms/icons/purple-dot.png');
                    google.maps.event.addListener(
                        marker,
                        "click",
                        (function (marker, i) {

                            if (markerRed) {
                                markerRed[i].setIcon("images/icon-blue.png");
                            }
                            
                            
                            map.setCenter(new google.maps.LatLng(-37.8135857, 144.9666155));

                            var latitude1 = locations[i].latitude;
                            var longitude1 = locations[i].longitude;
                            var latitude2 = latitude;
                            var longitude2 = longitude;

                            var distance1 = google.maps.geometry.spherical.computeDistanceBetween(
                                new google.maps.LatLng(latitude1, longitude1),
                                new google.maps.LatLng(latitude2, longitude2)
                            );
                            var distance = Math.ceil(distance1) + "m";
                            
                            return function () {
                                
                                infowindow.close();
                                if (
                                    locations[i].description !== "" ||
                                    locations[i].street_address !== ""
                                ) {
                                    if(locations[i].merchantdetails.description === null){
                                        locations[i].merchantdetails.description = 'Platinum outside wash with wash';
                                    }else{
                                        locations[i].merchantdetails.description = locations[i].merchantdetails.description;
                                    }
                                    var washprice;
                                    if(locations[i].hand_price != ""){

                                         washprice="Hand";

                                    }else if(locations[i].auto_price != ""){

                                         washprice="Tunnel";

                                    }else if(locations[i].auto_price != "" && locations[i].hand_price != ""){

                                         washprice="Hand & Tunnel";
                                    }

                                    var washdescription;
                                    if(locations[i].hand_description != null){

                                         washdescription=locations[i].hand_description;

                                    }else if(locations[i].auto_description != null){

                                         washdescription=locations[i].auto_description;

                                    }else if(locations[i].hand_description != null && locations[i].auto_description != null){

                                         washdescription=locations[i].hand_description;
                                    }

                                    var day;
                                    switch (new Date().getDay()) {
                                      case 0:
                                        day = locations[i].merchantdetails.sunday;
                                        break;
                                      case 1:
                                        day = locations[i].merchantdetails.monday;
                                        break;
                                      case 2:
                                        day = locations[i].merchantdetails.tuesday;
                                        break;
                                      case 3:
                                        day = locations[i].merchantdetails.wednesday;
                                        break;
                                      case 4:
                                        day = locations[i].merchantdetails.thursday;
                                        break;
                                      case 5:
                                        day = locations[i].merchantdetails.friday;
                                        break;
                                      case  6:
                                        day = locations[i].merchantdetails.saturday;
                                    }
                                    
                                    if(locations[i].merchantdetails.image !=null){

                                        var bannerImage=locations[i].merchantdetails.image;
                                    }else{

                                        var bannerImage='/images/ic_merchant-img.png';
                                    }
                                    infowindow.setContent(
                                        "<div class='map-cntnt-blk ' style='border: 1px solid whitesmoke;'>" +
                                        
                                            "<div class='map-cntnt-blk p-0'>" +
                                            "<img class='img-fluid w-100 responsiveimage' src='"+baseURL+bannerImage +"'>" +
                                            "<div class='pt-3 pl-3 pr-0 pb-3'>" +
                                            "<h5 style='text-transform: capitalize;'>" +
                                            locations[i].name +
                                            "</h5>" +
                                            "<p style='color:#7E8085;font-size: 15px;margin-bottom: 6px;'>"+washprice+" Carwash â€¢ "+
                                            "</p>" +
                                            "<p style='color:#7E8085;font-size: 15px;margin-bottom: 6px;' class='mb-0'>Open â€¢ Closes  "+day+"</p>" +
                                            "<hr>" +
                                            "<p style='color:#7E8085' class='mb-2'><img class='mr-2' src='images/ic_location.png'>" +
                                            locations[i].street_address +
                                            "</p>" +
                                            "<p style='color:#7E8085' class='mb-2'><img class='mr-2' style='width: 24px;height: 24px;' src='images/car.png'>" +washdescription+
                                            "</p>" +
                                            "</div>"
                                    ) + "</div>";
                                    this.setIcon("images/icon-green.png");
                                    infowindow.open(map, marker);
                                    
                                    markerRed = marker;
                                }
                            };
                        })(marker, i)
                    );
                }
                //this.setIcon("images/icon-blue.png");
            }

            var infowindow = new google.maps.InfoWindow({
                content: "",
                pixelOffset: new google.maps.Size(-250, -100),
            });

            google.maps.event.addListener(
                infowindow,
                "closeclick",
                function () {
                    if (markerRed) {
                        markerRed.setIcon("images/icon-blue.png");
                    }

                    map.setCenter(this.getPosition()); 
                }
            );

            function toggleMarkers() {
                for (i = 0; i < gmarkers.length; i++) {
                    if (gmarkers[i].getMap() != null) gmarkers[i].setMap(null);
                    else gmarkers[i].setMap(map);
                }
            }

            function hasImage(location) {
                return "";
            }
        }
    }

    google.maps.event.addDomListener(window, "load", initialize);
    function initialize() {
        var input = document.getElementById("pac-input");
        var autocomplete = new google.maps.places.Autocomplete(input);
        
    }

    var geocoder = new google.maps.Geocoder();
    document.getElementById("search-button")
        .addEventListener("click", function () {

            geocodeAddress(geocoder, map);
            first++;
        });

    function geocodeAddress(geocoder, resultsMap) {
        
        var address = document.getElementById("pac-input").value;
        geocoder.geocode({ address: address }, function (results, status) {
            if (status === "OK") {
                var latii = results[0].geometry.location.lat();
                
                var laoong = results[0].geometry.location.lng();
                 var gmarkers = [];
                 var markerRed;
                 var latitude = null;
                var longitude = null;
                
                var styles = [
                {
                    stylers: [
                        {
                            hue: "#EDEDED",
                        },
                        {
                            saturation: -90,
                        },
                    ],
                },
                {
                    featureType: "poi",
                    elementType: "labels",
                    stylers: [
                        {
                            lightness: 100,
                        },
                        {
                            visibility: "simplified",
                        },
                    ],
                },
                {
                    featureType: "poi",
                    elementType: "labels",
                    stylers: [
                        {
                            visibility: "off",
                        },
                    ],
                },
            ];

            var styledMap = new google.maps.StyledMapType(styles, {
                //name: "Petrol"
            });
                
                var latlng = new google.maps.LatLng(latii, laoong);
                var mapOptions = {
                center: latlng,
                zoom: 10,
                mapTypeControl: false,
                zoomControl: true,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.SMALL,
                },
                // mapTypeControlOptions: {

                //   mapTypeIds: ['map_style', google.maps.MapTypeId.MAP],
                // },
                scrollwheel: false,
                streetViewControl: true,
            };

            var map = new google.maps.Map(
                document.getElementById("map"),
                mapOptions
            );

            map.mapTypes.set("map_style", styledMap);
            map.setMapTypeId("map_style");

            var infowindow = new google.maps.InfoWindow({
                maxWidth: 300,
                infoBoxClearance: new google.maps.Size(1, 1),
                disableAutoPan: false,
            });
                $.ajax({
                    async: false,
                    url: baseURL + "/GoogleMapAddress",
                    method: "get",
                    data: { latitude: latii, longitude: laoong },
                    dataType: "JSON",

                    success: function (data) {
                        var marker, j, icon, image;

                        for (j = 0; j < data.length; j++) {
                            //alert(data[j].latitude);

                            var marker = new google.maps.Marker({
                                map: map,
                                position: new google.maps.LatLng(
                                    data[j].latitude,
                                    data[j].longitude
                                ),
                                icon: "images/icon-blue.png",
                            });

                            gmarkers.push(marker);
                            //marker.setIcon('http://maps.google.com/mapfiles/ms/icons/purple-dot.png');
                            google.maps.event.addListener(
                                marker,
                                "click",
                                (function (marker, j) {
                                    if (markerRed) {
                                        markerRed.setIcon(
                                            "images/icon-blue.png"
                                        );
                                    }
                                    //map.setCenter(marker.getPosition());

                                    var latitude1 = data[j].latitude;
                                    var longitude1 = data[j].longitude;
                                    var latitude2 = latitude;
                                    var longitude2 = longitude;

                                    var distance1 = google.maps.geometry.spherical.computeDistanceBetween(
                                        new google.maps.LatLng(
                                            latitude1,
                                            longitude1
                                        ),
                                        new google.maps.LatLng(
                                            latitude2,
                                            longitude2
                                        )
                                    );
                                    var distance = Math.ceil(distance1) + "m";

                                    //alert(distance);

                                    return function () {
                                        //alert('chauhan');
                                        infowindow.close();
                                        if (
                                            data[j].description !== "" ||
                                            data[j].street_address !== ""
                                        ) {
                                            if(data[j].merchantdetails.description === null){
                                                data[j].merchantdetails.description = 'Platinum outside wash with wash';
                                            }else{
                                                data[j].merchantdetails.description = data[j].merchantdetails.description;
                                            }

                                            var washprice;
                                            if(data[j].hand_price != ""){

                                                 washprice="Hand";

                                            }else if(data[j].auto_price != ""){

                                                 washprice="Tunnel";

                                            }else if(data[j].auto_price != "" && data[j].hand_price != ""){

                                                 washprice="Hand & Tunnel";
                                            }

                                            var washdescription;

                                            if(data[j].hand_description != null){

                                                 washdescription=data[j].hand_description;

                                            }else if(data[j].auto_description != null){

                                                 washdescription=data[j].auto_description;

                                            }else if(data[j].hand_description != null && data[j].auto_description != null){

                                                 washdescription=data[j].hand_description;
                                            }

                                            var day;
                                            switch (new Date().getDay()) {
                                              case 0:
                                                day = data[j].merchantdetails.sunday;
                                                break;
                                              case 1:
                                                day = data[j].merchantdetails.monday;
                                                break;
                                              case 2:
                                                day = data[j].merchantdetails.tuesday;
                                                break;
                                              case 3:
                                                day = data[j].merchantdetails.wednesday;
                                                break;
                                              case 4:
                                                day = data[j].merchantdetails.thursday;
                                                break;
                                              case 5:
                                                day = data[j].merchantdetails.friday;
                                                break;
                                              case  6:
                                                day = data[j].merchantdetails.saturday;
                                            }

                                            if(data[j].merchantdetails.image !=null){

                                                var bannerImage=data[j].merchantdetails.image;
                                            }else{

                                                var bannerImage='/images/ic_merchant-img.png';
                                            }
                                           
                                            
                                            infowindow.setContent(
                                                "<div class='map-cntnt-blk ' style='border: 1px solid whitesmoke;'>" +
                                                    
                                                    "<div class='map-cntnt-blk p-0'>" +
                                                    "<img class='img-fluid w-100 responsiveimage' src='"+baseURL+bannerImage +"'>" +
                                                    "<div class='pt-3 pl-3 pr-0 pb-3'>" +
                                                    "<h5 style='text-transform: capitalize;'>" +
                                                    data[j].name +
                                                    "</h5>" +
                                                    "<p style='color:#7E8085'>"+washprice+" Carwash â€¢ " +
                                                    "</p>" +
                                                    "<p style='color:#7E8085' class='mb-0'>Open â€¢ Closes  "+day+"</p>" +
                                                    "<hr>" +
                                                    "<p style='color:#7E8085' class='mb-2'><img class='mr-2' src='images/ic_location.png'>" +
                                                    data[j].street_address +
                                                    "<p style='color:#7E8085' class='mb-2'><img style='width: 24px;height: 24px;' class='mr-2' src='images/car.png'>"   + washdescription +
                                                    "</p>" +
                                                    "</div>"
                                            ) + "</div>";
                                            infowindow.open(map, marker);
                                            marker.setIcon(
                                                "images/icon-green.png"
                                            );
                                            markerRed = marker;
                                        }
                                    };
                                })(marker, j)
                            );
                        }
                    },
                    error: function (data) {
                        //alert('hh1');
                    },
                });

                var infowindow = new google.maps.InfoWindow({
                    //pixelOffset: new google.maps.Size(200,0)

                    pixelOffset: new google.maps.Size(-250, -100),
                });

                google.maps.event.addListener(
                    infowindow,
                    "closeclick",
                    function () {
                        if (markerRed) {
                            markerRed.setIcon("images/icon-blue.png");
                        }

                        map.setCenter(markerRed.getPosition()); 
                    }
                );
            } else {
                alert(
                    "Geocode was not successful for the following reason: " +
                        status
                );
            }
        });
    }

    google.maps.event.addDomListener(window, "page:load", initialize);
});