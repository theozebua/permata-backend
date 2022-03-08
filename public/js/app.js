const events = fetch("/api/events")
    .then((response) => response.json())
    .then((response) => {
        let arr = [];
        response.data.forEach((e) => {
            arr = [
                ...arr,
                {
                    title: e.title,
                    start: e.start,
                    end: e.start,
                    className: "bg-gradient-danger",
                },
            ];
            fullCalendarFunction(arr);
        });
    });

function fullCalendarFunction(arr) {
    const today = new Date().toISOString().slice(0, 10);
    const calendar = new FullCalendar.Calendar(
        document.getElementById("calendar"),
        {
            initialView: "dayGridMonth",
            headerToolbar: {
                start: "title",
                center: "",
                end: "today prev,next",
            },
            initialDate: today,
            events: arr,
            views: {
                month: {
                    titleFormat: {
                        month: "long",
                        year: "numeric",
                    },
                },
                agendaWeek: {
                    titleFormat: {
                        month: "long",
                        year: "numeric",
                        day: "numeric",
                    },
                },
                agendaDay: {
                    titleFormat: {
                        month: "short",
                        year: "numeric",
                        day: "numeric",
                    },
                },
            },
        }
    );
    calendar.render();
}

const dataTableBasic = new simpleDatatables.DataTable("#datatables", {
    searchable: true,
    fixedHeight: false,
    scrollX: true,
});

var toastBody = document.getElementById("toast");
var toast = new bootstrap.Toast(toastBody);
