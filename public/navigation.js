if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var positionInfo = "Your current position is (" + "Latitude: " + position.coords.latitude +
                        ", " + "Longitude: " + position.coords.longitude + ")";

                    latitude = position.coords.latitude;

                    longitude = position.coords.longitude;

                    $("#dd34").val(latitude);

                    $("#dd1").val(longitude);


                });

            };