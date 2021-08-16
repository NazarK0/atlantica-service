const skillGraph = document.getElementById('skill-graph');
const skillTracks = skillGraph.querySelectorAll('.skill-track');

const skillTracksArray = Array.from(skillTracks);

function animateSkillTrack(obj, end, duration) {
  let startTimestamp = null;
  const startNum = 10;
  const endNum = typeof end === 'number' ? end : Number(end);

  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.style.width = `${Math.floor(progress * (endNum - startNum) + startNum)}%`;
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      for (let i = 0; i < skillTracksArray.length; i++) {
        const skillValue = skillTracksArray[i].querySelector('.value>.number').innerHTML;
        animateSkillTrack(skillTracksArray[i], skillValue, 50)
      }
    }
  });
});

observer.observe(document.querySelector('#skill-graph'));

