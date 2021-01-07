const express = require("express");
const app = express();
app.set('views', "ejs");
app.get('/', (req, res) =>{
    res.render("exp1")
} );

app.listen(process.env.PORT,process.env.IP, function(){
	console.log("hello");
});