document.addEventListener('DOMContentLoaded', (event) => {
  const progressBarPh = document.querySelector('[role="progressbar-ph"]');
  const value = parseFloat(progressBarPh.style.getPropertyValue('--value-ph')).toFixed(2);
  progressBarPh.textContent = value + ' pH';
});

document.addEventListener('DOMContentLoaded', (event) => {
  const progressBarTemp = document.querySelector('[role="progressbar-temp"]');
  const value = parseFloat(progressBarTemp.style.getPropertyValue('--value-temp')).toFixed(2);
  progressBarTemp.textContent = value + ' C';
});

const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')
