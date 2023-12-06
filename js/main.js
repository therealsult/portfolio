


// ==== map ====

function initMap() {
    // Styles a map in night mode.
    var map = new google.maps.Map(document.getElementById("map"), {
      center: { lat: 42.983612, lng:  -81.249725 },
      zoom: 12,
      styles: [
        { elementType: "geometry", stylers: [{ color: "#000000" }] },
        { elementType: "labels.text.stroke", stylers: [{ color: "#242f3e" }] },
        { elementType: "labels.text.fill", stylers: [{ color: "#746855" }] },
        {
          featureType: "administrative.locality",
          elementType: "labels.text.fill",
          stylers: [{ color: "#d59563" }]
        },
        {
          featureType: "poi",
          elementType: "labels.text.fill",
          stylers: [{ color: "#d59563" }]
        },
        {
          featureType: "poi.park",
          elementType: "geometry",
          stylers: [{ color: "#263c3f" }]
        },
        {
          featureType: "poi.park",
          elementType: "labels.text.fill",
          stylers: [{ color: "#6b9a76" }]
        },
        {
          featureType: "road",
          elementType: "geometry",
          stylers: [{ color: "#38414e" }]
        },
        {
          featureType: "road",
          elementType: "geometry.stroke",
          stylers: [{ color: "#212a37" }]
        },
        {
          featureType: "road",
          elementType: "labels.text.fill",
          stylers: [{ color: "#9ca5b3" }]
        },
        {
          featureType: "road.highway",
          elementType: "geometry",
          stylers: [{ color: "#746855" }]
        },
        {
          featureType: "road.highway",
          elementType: "geometry.stroke",
          stylers: [{ color: "#1f2835" }]
        },
        {
          featureType: "road.highway",
          elementType: "labels.text.fill",
          stylers: [{ color: "#f3d19c" }]
        },
        {
          featureType: "transit",
          elementType: "geometry",
          stylers: [{ color: "#2f3948" }]
        },
        {
          featureType: "transit.station",
          elementType: "labels.text.fill",
          stylers: [{ color: "#d59563" }]
        },
        {
          featureType: "water",
          elementType: "geometry",
          stylers: [{ color: "#17263c" }]
        },
        {
          featureType: "water",
          elementType: "labels.text.fill",
          stylers: [{ color: "#515c6d" }]
        },
        {
          featureType: "water",
          elementType: "labels.text.stroke",
          stylers: [{ color: "#17263c" }]
        }
      ]
    });
  }
  















// ==== contact form =====


(function() {
    var formWrap = document.getElementById( 'fs-form-wrap' );

    [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
        new SelectFx( el, {
            stickyPlaceholder: false,
            onChange: function(val){
                document.querySelector('span.cs-placeholder').style.backgroundColor = val;
            }
        });
    } );

    new FForm( formWrap, {
        onReview : function() {
            classie.add( document.body, 'overview' ); 
        }
    } );
})();





//  ===== projects js =====






// $(document).ready(function() {
//   $('.project-gallery').magnificPopup({
//   delegate: 'a', 
//   type: 'iframe',
//   gallery:{
//     enabled:true
//   }
// });
// });

  // ==== footer bottom ==== 

  const year = document.getElementById("year");

year.textContent = new Date().getFullYear();

