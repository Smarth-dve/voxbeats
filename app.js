const express = require("express");
const bodyParser = require("body-parser");
const request = require("request");

// require("./db/conn");


const app = express();

app.use(express.static("public"));
app.use(bodyParser.urlencoded({extended : true}));

app.get("/signup",function(req, res){
    res.sendFile(__dirname + "/signup.html");
});

app.post("/signup",function(req, res)
{ 
    var email = req.body.email;
    var password = req.body.password;
    var cpassword = req.body.confirm-password;
    var profilename = req.body.profilename;
    var month = req.body.month;
    var day = req.body.day;
    var year = req.body.year;

    console.log(email, profilename,day);

});
app.use(express.static("public"));
app.use(bodyParser.urlencoded({extended : true}));

app.get("/login",function(req, res){
    res.sendFile(__dirname + "/login.html");
});

app.get("/home",function(req, res){
    res.sendFile(__dirname + "/index.html");
});


app.listen(6969,function(){
    console.log("Server is running on port 6969");
});




