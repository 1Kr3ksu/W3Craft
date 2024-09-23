
    document.getElementById('youtube-link').addEventListener('click', function(event) {
        event.preventDefault(); // Zapobiega domyślnemu działaniu linku

        // Niestandardowy alert
        const userConfirmed = confirm("Subskrybuj kanał! \nNie zapomnij zasubskrybować kanału!");

        if (userConfirmed) {
            window.location.href = "https://youtube.com/yourchannel"; // Podaj swój link do YouTube
        }
    });
