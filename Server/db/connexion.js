// const { MongoClient } = require('mongodb')
//
// const url = 'mongodb://localhost:27017';
// const client = new MongoClient(url);
// const dbName = "dashboard"
//
// let dbconnection;
//
// function connectToServer() {
//     client.connect()
//         .then(client => {
//             console.log("Successfully connected to MongoDB.")
//             dbconnection = client.db(dbName)
//         })
//         .catch(err => console.error('Failed to connect to MongoDB', err))
// }
//
// function getDb() {
//     return dbconnection
// }
//
// module.exports = {
//     connectToServer,
//     getDb,
// }
