/**
 * Import function triggers from their respective submodules:
 *
 * const {onCall} = require("firebase-functions/v2/https");
 * const {onDocumentWritten} = require("firebase-functions/v2/firestore");
 *
 * See a full list of supported triggers at https://firebase.google.com/docs/functions
 */

// const {onRequest} = require("firebase-functions/v2/https");
// const logger = require("firebase-functions/logger");

const functions = require('firebase-functions');
const axios = require('axios');

exports.syncToMySQL = functions.database.ref('/SmartPlant/{id}')
    .onWrite((change, context) => {
        const newValue = change.after.val();
        return axios.post('https://127.0.0.1:8000/sync', newValue);
    });
