import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new Calendar(calendarEl, {
        plugins: [ dayGridPlugin ],
        events: "{{ route('appointments.index') }}",
        eventClick: function(info) {
            window.location.href = info.event.url;
        }
    });

    calendar.render();
});