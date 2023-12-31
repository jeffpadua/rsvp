// Replace with your Google Sheets API key
const API_KEY = 'AIzaSyBeVwANukNF7zVQu36GsOs-kdQLcS5DPlQ';

// ID of the Google Sheets document
const SPREADSHEET_ID = '1LzB82Fmow1P8PBwOVl8NeGLkephVdUhMghjH-TMPt70';

function submitRSVP() {
    const fname = document.getElementById('fname').value;
    const lname = document.getElementById('lname').value;
    const attendance = document.getElementById('attendance').value;

    const data = [fname, lname, attendance];

    // Append data to Google Sheets
    appendDataToSheet(data);
}

function appendDataToSheet(data) {
    gapi.client.sheets.spreadsheets.values.append({
        spreadsheetId: SPREADSHEET_ID,
        range: 'Sheet1', // Update sheet name if needed
        valueInputOption: 'RAW',
        insertDataOption: 'INSERT_ROWS',
        resource: {
            values: [data],
        },
    }).then(response => {
        console.log('Data appended to Google Sheets:', response);
    }).catch(error => {
        console.error('Error appending data to Google Sheets:', error.result.error.message);
    });
}

function initClient() {
    gapi.client.init({
        apiKey: API_KEY,
        discoveryDocs: ['https://sheets.googleapis.com/$discovery/rest?version=v4'],
    }).then(() => {
        // API is ready
        console.log('API initialized');
    });
}

// Load the Google Sheets API
gapi.load('client', initClient);