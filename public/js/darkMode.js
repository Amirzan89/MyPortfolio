var darkIcon = document.getElementById('darkIcon');
var lightIcon = document.getElementById('lightIcon');
var darkMode = false;
function changeMode(){
  if (!darkMode) {
    setTimeout(() => {
      document.documentElement.classList.add('dark');
      localStorage.setItem('dark-mode', 'enabled');
      lightIcon.classList.add('hidden');
      darkIcon.classList.remove('hidden');
      darkMode = true;
    }, 500);
  } else {
    setTimeout(() => {
      document.documentElement.classList.remove('dark');
      localStorage.setItem('dark-mode', null);
      darkIcon.classList.add('hidden');
      lightIcon.classList.remove('hidden');
      darkMode = false;
    }, 500);
  }
}