@extends('admin.admin_dashboard')
@section('admin')
    <style>
        /* General page styles */
        body {
            display: flex;
            justify-content: center;
            background-color: #f0f4fe;
            /* Light blue background */
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Main container for the calendar */
        .container-all {
            display: flex;
            padding: 20px;
            width: 100%;
            /* Adjust the width as needed */
            height: auto;
            justify-content: space-between;
            /* Move the table container to the right */
            background-color: #fff;
            /* White background for the container */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Buttons */
        button {
            width: 75px;
            cursor: pointer;
            box-shadow: 0 0 2px gray;
            border: none;
            outline: none;
            padding: 5px;
            border-radius: 5px;
            color: #fff;
            background-color: #0077b6;
            /* New primary color */
            font-weight: bold;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        button:hover {
            background-color: #005b8e;
            /* Darker blue on hover */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        /* Header section */
        /* Header section */
        #header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* Vertically center content */
            padding: 10px;
            color: #0077b6;
            /* New primary color for the header text */
            font-size: 24px;
            font-weight: bold;
            /* Added font weight for a professional look */
        }

        /* Next and Back buttons */
        #header .nextButton {
            font-size: 15px;
            width: 60px;
            height: 40px;
            background-color: #0077b6;
            /* New primary color for buttons */
            color: #fff;
            margin-left: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        #header .backButton {
            font-size: 15px;
            width: 60px;
            height: 40px;
            background-color: #FF4F58;
            /* New primary color for buttons */
            color: #fff;
            margin-left: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        #header .backButton:hover {
            background-color: #ed6067;
        }



        #header .nextButton:hover {
            background-color: #005b8e;
            /* Darker blue on hover */
        }

        /* Month display */
        #monthDisplay {
            font-size: 27px;
        }


        /* Calendar container */
        #container {
            width: 100%;
        }

        /* Weekdays section */
        #weekdays {
            font-size: 20px;
            display: flex;
            justify-content: center;
            background-color: #0077b6;
            /* New primary color for weekdays background */
            color: #fff;
            width: 840px;
            padding-right: 20px;
            padding-left: 10px;

        }

        #weekdays div {
            width: 170px;
            text-align: center;
            padding: 15px 17px;
        }

        /* Calendar grid */
        #calendar {
            display: flex;
            flex-wrap: wrap;
            width: 110%;
        }

        /* Individual day styles */
        .day {
            font-size: 30px;
            width: 100px;
            padding: 10px;
            height: 100px;
            cursor: pointer;
            box-sizing: border-box;
            background-color: #0077b6;
            /* New primary color for day backgrounds */
            margin-left: 3px;
            margin: 10px;
            color: #fff;
            box-shadow: 0 0 3px #005b8e;
            /* Darker blue shadow */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .day:hover {
            background-color: #005b8e;
            /* Darker blue on hover */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .day+#currentDay {
            background-color: #005b8e;
            /* Darker blue background for the current day */
        }

        /* Event styling */
        .event {
            font-size: 10px;
            padding: 3px;
            background-color: #FF6666;
            color: #fff;
            border-radius: 5px;
            max-height: 55px;
            overflow: hidden;
        }

        /* Padding days styling */
        .padding {
            cursor: default !important;
            background-color: #f0f4fe !important;
            /* Light blue background for padding days */
            box-shadow: none !important;
        }

        /* Modal styles */
        #newEventModal,
        #deleteEventModal {
            display: none;
            z-index: 20;
            padding: 20px;
            background-color: #fff;
            /* White modal background */
            box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            width: 350px;
            top: 100px;
            left: calc(50% - 175px);
            position: absolute;
            font-family: Arial, sans-serif;
        }

        /* Input styles */
        .input {
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 25px;
            border-radius: 3px;
            outline: none;
            border: none;
            box-shadow: 0px 0px 3px gray;
        }

        .input.error {
            border: 2px solid #FF6666;
        }

        /* Button styles */
        .button {
            width: 100px;
            cursor: pointer;
            padding: 10px;
            border: none;
            border-radius: 5px;
            outline: none;
            font-weight: bold;
        }

        .teal {
            background-color: #3EAFAC;
            color: #fff;
        }

        .red {
            background-color: #FF6666;
            color: #fff;
        }

        /* Modal backdrop */
        #modalBackDrop {
            display: none;
            top: 0px;
            left: 0px;
            z-index: 10;
            width: 100vw;
            height: 100vh;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Improved styles for deleteEventModal */
        #deleteEventModal {
            display: none;
            z-index: 20;
            padding: 20px;
            background-color: #fff;
            /* White modal background */
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.4);
            border-radius: 5px;
            width: 350px;
            top: 180px;
            left: calc(60% - 185px);
            position: absolute;
            font-family: Arial, sans-serif;
            text-align: center;
            /* Center text within the modal */
        }

        #deleteEventModal h2 {
            font-size: 20px;
            font-weight: bold;
            color: #000000;
            /* Red text color for the header */
        }

        #deleteEventModal h3 {
            font-weight: lighter;
            font-size: 15px;
            color: #514c4c;
            text-align: left;
            /* Align the text to the right */
        }


        #deleteEventModal p {
            font-size: 16px;
            color: #000;
            /* Black text color for the event text */
        }

        #deleteButton {
            background-color: #FF4F58;
            /* Red background color for the delete button */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            padding: 10px;
            margin-right: 10px;
        }

        #closeButton {
            background-color: #0077b6;
            /* Light gray background color for the close button */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            padding: 10px;
        }

        #deleteButton:hover {
            background-color: #D32F3E;
            /* Darker red on hover */
        }

        #closeButton:hover {
            background-color: #aaa;
            /* Slightly darker gray on hover */
        }

        /* Center delete and close buttons in the modal */
        #deleteButton,
        #closeButton {
            display: inline-block;
            margin-top: 15px;
        }

        #deleteButton {
            font-weight: bold;
        }

        /* Space out the buttons for better readability */
        #deleteButton+#closeButton {
            margin-left: 10px;
        }

        .move-weekday {
            padding-left: 10px;
        }




        /* Event table container */
        .tablecontainer {
            width: 100%;
            padding-top: 50px;
            padding-left: 150px;
            text-align: center;
        }

        /* Event table styles */
        #eventTable {
            width: 100%;
            border-collapse: collapse;
        }

        #eventTable th,
        #eventTable td {
            padding: 15px;
            border: 1px solid #ddd;
        }

        #eventTable th {
            background-color: #0077b6;
            /* New primary color for table header */
            color: #fff;
        }

        #eventTable tbody tr:nth-child(even) {
            background-color: #f0f4fe;
            /* Light blue background for even rows */
        }

        /* Delete button in event table */
        #eventTable .delete-button {
            padding: 5px;
            background-color: #FF4F58;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        /* Action column (last column) in event table */
        #eventTable td:last-child {
            text-align: center;
        }
    </style>
    <div class="page-content">

        <div class="container-all">
            <div id="container">
                <div class="calendar-container">
                    <div id="header">
                        <div id="monthDisplay"></div>
                        <div>
                            <button class="backButton" id="backButton">Back</button>
                            <button class="nextButton" id="nextButton">Next</button>
                        </div>
                    </div>
                    <div class="move-weekday">
                        <div id="weekdays">
                            <div>Sunday</div>
                            <div>Monday</div>
                            <div>Tuesday</div>
                            <div>Wednesday</div>
                            <div>Thursday</div>
                            <div>Friday</div>
                            <div>Saturday</div>
                        </div>
                    </div>
                    <div id="calendar"></div>
                </div>
            </div>

            <div id="newEventModal">
                <h2>New Event</h2>
                <label for="dateIssuedInput">Date Issued Input</label>
                <input type="date" id="dateIssuedInput" class="input" placeholder="Date issued" /> <br>
                <label for="scheduleDateInput">Schedule Date Input</label>
                <input type="date" id="scheduleDateInput" class="input" placeholder="Schedule Date" /> <br>
                <label for="eventNumberInput">Event Number</label>
                <input type="number" id="eventNumberInput" class="input" placeholder="Event Number" />
                <label for="eventTitleInput">Event Title</label>
                <input type="text" id="eventTitleInput" class="input" placeholder="Event Title" />
                <button id="saveButton" class="button teal">Save</button>
                <button id="cancelButton" class="button red">Cancel</button>
            </div>

            <!-- Event table -->
            <div class="tablecontainer">
                <table id="eventTable">
                    <thead>
                        <tr>
                            <th>Date Issued</th>
                            <th>Event No.</th>
                            <th>Event Title</th>
                            <th>Schedule Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div id="deleteEventModal">
                <h2>Are you sure?</h2>
                <br>
                <h3>Do you really want to delete these records? this process cannot be undone.</h3>
                <br>
                <p id="eventText"></p>
                <button id="deleteButton" class="deleteButton">Delete</button>
                <button id="closeButton" class="closeButton">Close</button>
            </div>

            <div id="modalBackDrop"></div>
        </div>
    </div>
    <script>
        // Define constants for HTML elements
        const calendar = document.getElementById('calendar');
        const newEventModal = document.getElementById('newEventModal');
        const deleteEventModal = document.getElementById('deleteEventModal');
        const backDrop = document.getElementById('modalBackDrop');
        const eventTitleInput = document.getElementById('eventTitleInput');
        const eventTable = document.getElementById('eventTable').querySelector('tbody');

        // Initialize event data
        let nav = 0;
        let clicked = null;
        let events = getEventsFromLocalStorage();

        // Display the calendar
        function displayCalendar() {
            const dt = new Date();
            if (nav !== 0) {
                dt.setMonth(new Date().getMonth() + nav);
            }

            const weekdays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

            const day = dt.getDate();
            const month = dt.getMonth();
            const year = dt.getFullYear();

            const firstDayOfMonth = new Date(year, month, 1);
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            const dateString = firstDayOfMonth.toLocaleDateString('en-US', {
                weekday: 'long',
                year: 'numeric',
                month: 'numeric',
                day: 'numeric',
            });
            const paddingDays = weekdays.indexOf(dateString.split(', ')[0]);

            document.getElementById('monthDisplay').innerText =
                `${dt.toLocaleDateString('en-US', { month: 'long' })} ${year}`;

            calendar.innerHTML = '';

            for (let i = 1; i <= paddingDays + daysInMonth; i++) {
                const daySquare = document.createElement('div');
                daySquare.classList.add('day');

                const dayString = `${month + 1}/${i - paddingDays}/${year}`;

                if (i > paddingDays) {
                    daySquare.innerText = i - paddingDays;
                    const eventForDay = events.find(e => e.date === dayString);

                    if (i - paddingDays === day && nav === 0) {
                        daySquare.id = 'currentDay';
                    }

                    if (eventForDay) {
                        const eventDiv = document.createElement('div');
                        eventDiv.classList.add('event');
                        eventDiv.innerText = eventForDay.title;
                        daySquare.appendChild(eventDiv);
                    }

                    daySquare.addEventListener('click', () => openModal(dayString));
                } else {
                    daySquare.classList.add('padding');
                }

                calendar.appendChild(daySquare);
            }
        }

        // Open the modal for a specific date
        function openModal(date) {
            clicked = date;
            const eventForDay = events.find(e => e.date === clicked);

            if (eventForDay) {
                document.getElementById('eventText').innerText = eventForDay.title;
                deleteEventModal.style.display = 'block';
            } else {
                newEventModal.style.display = 'block';
            }
            backDrop.style.display = 'block';
        }

        // Close the modal
        function closeModal() {
            eventTitleInput.classList.remove('error');
            newEventModal.style.display = 'none';
            deleteEventModal.style.display = 'none';
            backDrop.style.display = 'none';
            eventTitleInput.value = '';
            clicked = null;
            displayCalendar();
            populateEventTable(); // Update the event table
        }

        // Save an event
        function saveEvent() {
            const dateIssued = document.getElementById('dateIssuedInput').value;
            const scheduleDate = document.getElementById('scheduleDateInput').value;
            const eventNumber = document.getElementById('eventNumberInput').value;
            const title = eventTitleInput.value;

            if (dateIssued && scheduleDate && eventNumber && title) {
                events.push({
                    date: dateIssued, // Store the date string as a unique identifier
                    dateIssued,
                    scheduleDate,
                    eventNumber,
                    title,
                });

                localStorage.setItem('events', JSON.stringify(events));
                closeModal();
            } else {
                eventTitleInput.classList.add('error');
            }
        }

        // Delete an event
        function deleteEvent() {
            events = events.filter(e => e.date !== clicked);
            localStorage.setItem('events', JSON.stringify(events));
            closeModal();
        }

        // Initialize event table buttons
        function initEventTableButtons() {
            // Add delete buttons to each row in the event table
            eventTable.addEventListener('click', (e) => {
                if (e.target.classList.contains('delete-button')) {
                    const date = e.target.getAttribute('data-date');
                    clicked = date;
                    openModal(date);
                }
            });
        }

        // Populate the event table with data
        function populateEventTable() {
            // Clear the table body first
            eventTable.innerHTML = '';

            // Populate the table with event data
            for (const event of events) {
                const eventRow = document.createElement('tr');
                eventRow.innerHTML = `
                   <td>${event.dateIssued}</td>
                   <td>${event.eventNumber}</td>
                   <td>${event.title}</td>
                   <td>${event.scheduleDate}</td>
                   <td><button class="delete-button" data-date="${event.date}">Delete</button></td>
               `;
                eventTable.appendChild(eventRow);
            }
        }

        // Helper function to get events from localStorage
        function getEventsFromLocalStorage() {
            return localStorage.getItem('events') ? JSON.parse(localStorage.getItem('events')) : [];
        }

        // Initialize buttons and display calendar
        function initButtons() {
            document.getElementById('nextButton').addEventListener('click', () => {
                nav++;
                displayCalendar();
            });

            document.getElementById('backButton').addEventListener('click', () => {
                nav--;
                displayCalendar();
            });

            document.getElementById('saveButton').addEventListener('click', saveEvent);
            document.getElementById('cancelButton').addEventListener('click', closeModal);
            document.getElementById('deleteButton').addEventListener('click', deleteEvent);
            document.getElementById('closeButton').addEventListener('click', closeModal);
        }

        // Initialization function
        function init() {
            initEventTableButtons();
            initButtons();
            displayCalendar();
            populateEventTable();
        }

        init(); // Call the initialization function
    </script>
@endsection
