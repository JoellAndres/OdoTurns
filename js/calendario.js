document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendario');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale:"es",
    });
    calendar.render();
  });