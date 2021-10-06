const scrollItem = document.getElementById('scrollTop');
setInterval(() => {
  if (window.scrollY > 200) {
    scrollItem.style.display = 'block';
  } else {
    scrollItem.style.display = 'none';
  }
}, 800);
