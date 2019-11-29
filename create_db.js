var mysql = require('mysql');

// var con = mysql.createConnection({
//   host: "localhost",
//   user: "root",
//   password: "password"
// });

// con.connect(function(err) {
//   if (err) throw err;
//   console.log("Connected!");
//   con.query("CREATE DATABASE tarunaturals1", function (err, result) {
//     if (err) throw err;
//     console.log("Database created");
//   });
// });
var con = mysql.createConnection({
  host: "127.0.0.1",
  user: "root",
  password: "password",
  database: "tarunaturals1"
});
con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  var sql = "CREATE TABLE list (first_name VARCHAR(50), last_name VARCHAR(50), email VARCHAR (50));";
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("Table created");
  });
});
