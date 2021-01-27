var mysql = require('mysql');

var con = mysql.createConnection({
    host: "den1.mysql4.gear.host",
    user: "onlineord",
    password: "Bd4tO--2FL7V"
});

con.connect(function(err) {
    if (err) throw err;
    console.log("Connected!");
});