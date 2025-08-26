// Ajouter l'heure footer
document.addEventListener("DOMContentLoaded", () => {
  function updateTime() {
    const now = new Date();
    const timeString = now.toLocaleTimeString('en-US', {
      hour: '2-digit',
      minute: '2-digit',
      second: '2-digit',
      hour12: true
    });
    document.getElementById('time').textContent = timeString;
  }

  setInterval(updateTime, 1000);
  updateTime();
});