const express = require("express");
const app = express();
app.set('view engine', "ejs");
app.set('views', __dirname + '/views');
app.use(express.static(__dirname + '/public'));
app.get('/', (req, res) =>{
    res.render("exp1")
} );
app.get('/about', (req, res) =>{
    res.render("exp2/about")
} );
app.get('/calendar', (req, res) =>{
    res.render("exp2/calendar")
} );
app.get('/admission', (req, res) =>{
    res.render("exp2/admission")
} );
app.get('/exp2', (req, res) =>{
    res.render("exp2/exp2")
} );
app.get('/exp3', (req, res) =>{
    res.render("exp3/exp3")
} );
app.get('/exp4', (req, res) =>{
    res.render("exp4/exp4")
} );
app.post('/result', (req, res) =>{
    res.render("exp2/result")
} );
app.get('/exp5', (req, res) =>{
    res.render("exp5/exp5")
} );
app.get('/bmi', (req, res) =>{
    res.render("exp5/bmi")
} );
app.get('/currency', (req, res) =>{
    res.render("exp5/currency")
} );
app.listen(process.env.port,process.env.IP, function(){
	console.log("hello");
});