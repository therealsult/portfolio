//Hero reveal -- need html and css 

tl = gsap.timeline({
	defaults: {
		duration: 1.0,
		ease: "expo.inOut"
	}
});

tl.to(".slide-1", { width: 0 }).to("#introduction", { height: 0 });



//scroll animation js -- need html and css

gsap.registerPlugin(ScrollTrigger);

let section = document.getElementsByClassName("section-2");
const boxes = document.querySelectorAll(".box");

const tl = gsap.timeline();
boxes.forEach((box, i) => {
  if (i !== 0) {
    tl.fromTo(
      box,
      {
        opacity: 0,
        yPercent: 100
      },
      {
        opacity: 1,
        yPercent: 0
      },
      i
    );
  }
  if (i !== boxes.length - 1) {
    tl.fromTo(
      box,
      {
        opacity: 1,
        yPercent: 0
      },
      {
        opacity: 0,
        yPercent: -100,
        delay: 1
      },
      i
    );
  }
});
console.log(section);
ScrollTrigger.create({
  trigger: section,
  pin: true,
  markers: true,
  start: "top top",
  end: `+=${window.innerHeight * boxes.length}`,
  animation: tl,
  scrub: true
});
