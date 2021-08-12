function animateNumber(obj, start, end, duration) {
  let startTimestamp = null;
  const startNum = typeof start === 'number' ? start : Number(start);
  const endNum = typeof end === 'number' ? end : Number(end);

  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (endNum - startNum) + startNum);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}

