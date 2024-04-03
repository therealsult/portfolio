// ====== gsap text ======

//----hero----
const heroH2 = new SplitType('#hero-h2')

gsap.to('.char', {
  y: 0,
  stagger: 0.05,
  delay: 0.2,
  duration: 0.1,
})


//----about----
const words = ["Abdullah.", "A Designer.", "A Developer.", "A Creator."]

let cursor = gsap.to('.cursor', {
  delay:.2, 
  opacity:0, 
  ease: "power2.inOut", 
  repeat:-1})

let masterTl = gsap.timeline({
  repeat: -1
})
  .pause()

let boxTl = gsap.timeline() 

boxTl.from('.hi', {
  duration:1, 
  y:"7vw", 
  ease: "power3.out"
})
  
  .to('.text-c', {
    duration:0, 
    onComplete: () => masterTl.play() 
  })

  words.forEach(word => {
  let tl = gsap.timeline({
    repeat: 1, 
    yoyo: true, 
    repeatDelay:1
  })

  tl.to('.text', {
    duration: 1, 
    text: word
  })

  masterTl.add(tl)

})




gsap.registerPlugin(ScrollTrigger);

var { chars } = new SplitText("h1", { type: "chars" });

gsap.to(chars, {
  color: "#fff",
  stagger: {
    each: 0.1
  },
  scrollTrigger: {
    trigger: "#banner-1",
    scrub: true,
    pin: true
  }
});





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
  












  // // ==== hero ==== 

  // const header = document.querySelector("header");
  // const sectionOne = document.getElementById("#hero");
  
  // const sectionOneOptions = {
  //   rootMargin: "-200px 0px 0px 0px"
  // };
  
  // const sectionOneObserver = new IntersectionObserver(function(
  //   entries,
  //   sectionOneObserver
  // ) {
  //   entries.forEach(entry => {
  //     if (!entry.isIntersecting) {
  //       header.classList.add("nav-scrolled");
  //     } else {
  //       header.classList.remove("nav-scrolled");
  //     }
  //   });
  // },
  // sectionOneOptions);
  
  // sectionOneObserver.observe(sectionOne);


  