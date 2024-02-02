<?php


// function to display business hours, shortcode for easy use
function displayBusinessHours()
{
    // Define the business hours
    $weekdaysHours = '9:30 AM — 5:30 PM';
    $weekendHours = '9:30 AM — 6:30 PM';

    // Define public holidays or special days
    $publicHolidays = [
        '2024-01-01', // Example: New Year's Day
        '2024-12-25', // Example: Christmas
        // Add more dates as 'YYYY-MM-DD'
    ];
    $specialHoliday = [
        '2024-02-01', // federal territory day
    ];

    // Get current date and time
    $currentDate = new DateTime();
    $dayOfWeek = $currentDate->format('l'); // Day of the week
    $currentDateFormatted = $currentDate->format('Y-m-d');
    $firstMonday = new DateTime('first monday of ' . $currentDate->format('F Y'));
    $thirdMonday = new DateTime('third monday of ' . $currentDate->format('F Y'));

    // Check if today is a public holiday
    if (in_array($currentDateFormatted, $publicHolidays)) {
        return 'Closed Today (Public Holiday)';
    }

    // Check if today is a special holiday
    if (in_array($currentDateFormatted, $specialHoliday)) {
        return 'Closed Today';
    }

    // Check if today is the first or third Monday of the month
    if ($dayOfWeek === 'Monday' && ($currentDateFormatted === $firstMonday->format('Y-m-d') || $currentDateFormatted === $thirdMonday->format('Y-m-d'))) {
        return 'Closed Today';
    }

    // Display business hours based on the day of the week
    switch ($dayOfWeek) {
        case 'Saturday':
        case 'Sunday':
            // return 'Operation Hours: ' . $weekendHours;
                        return '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                      </svg> ' . $weekendHours;
        default:
            // return 'Operation Hours: ' . $weekdaysHours;
                        return '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                      </svg> ' . $weekdaysHours;
    }
}
add_shortcode('displayBusinessHours', 'displayBusinessHours');

// display the first and third Monday of each month: default 2024
function displayFirstAndThirdMonday($year = 2024)
{
    echo '<pre>';
    for ($month = 1; $month <= 12; $month++) {
        $currentDate = new DateTime("$year-$month-01");

        $firstMonday = new DateTime('first monday of ' . $currentDate->format('F Y'));
        $thirdMonday = new DateTime('third monday of ' . $currentDate->format('F Y'));

        echo "First Monday " . $currentDate->format('F Y') . "-" . $firstMonday->format('Y-m-d') . "\n";
        echo "Third Monday " . $currentDate->format('F Y') . "-" . $thirdMonday->format('Y-m-d') . "\n";
    }
    echo '</pre>';
}
// displayFirstAndThirdMonday();


