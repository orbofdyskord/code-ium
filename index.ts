// Initialize and add the map
let map: google.maps.Map, infoWindow: google.maps.InfoWindow;
function initMap(): void {
    // The location of Uluru
    const uluru = { lat: -25.344, lng: 131.031 };
    // The map, centered at Uluru
    map = new google.maps.Map(
      document.getElementById("map") as HTMLElement,
      {
        zoom: 4,
        center: uluru,
      }
    );
// Constantly adjust map for current location
    if(navigator.geolocation)
    {
        navigator.geolocation.getCurrentPosition(
            (position: GeolocationPosition) => {
                const currentPosition = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                };
            infoWindow.setPosition(currentPosition);
            infoWindow.open(map)
            map.setCenter(currentPosition);
            },
        () => {
        locationServices(true, infoWindow, map.getCenter()!);
        }
        );
    }
    else {
        locationServices(false, infoWindow, map.getCenter()!);
    }
    //Check to see if browser has location services enabled
    function locationServices(
        findLocation: boolean,
        infowindow: google.maps.InfoWindow,
        currentPosition: google.maps.LatLng
        )
    {
        infoWindow.setPosition(currentPosition);
        infoWindow.setContent(
            findLocation
            ? "Can't find your position"
            : "Browser unable to run findPosition"
        );
        infoWindow.open(map);
    }
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
      position: uluru,
      map: map,
    });
  }
  
  declare global {
    interface Window {
      initMap: () => void;
    }
  }
  window.initMap = initMap;
