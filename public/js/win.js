//  About Text Replace

const NORMAL_PLAYBACK_RATE = 200;
const REDUCED_PLAYBACK_RATE = 1000;

let rate = NORMAL_PLAYBACK_RATE;

const mediaQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
if (mediaQuery.matches) rate = REDUCED_PLAYBACK_RATE;

const words = [
  'passion',
  'Innovation',
  'Empowerment',
  'Inclusivity',
  'Diversity',
  ' Let Win',
  'Together',
  'opportunity',
];

textReplace(words, 'target-word', rate);

function textReplace(words, targetElement, rate) {
  let wordIndex = 0;

  const randomWordElement = document.getElementById(targetElement);

  const changeWordWithAnimation = () => {
    randomWordElement.style.opacity = 0; // Fade out
    setTimeout(function () {
      wordIndex = (wordIndex + 1) % words.length;
      randomWordElement.textContent = words[wordIndex];
      randomWordElement.style.opacity = 1; // Fade in
    }, 50);
  };

  const interval = setInterval(changeWordWithAnimation, rate);
}