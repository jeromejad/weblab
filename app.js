const express = require("express");
const app = express();
app.set('view engine', "ejs");
app.get('/', (req, res) =>{
    res.render("exp1")
} );

app.listen(process.env.PORT,process.env.IP, function(){
	console.log("hello");
});