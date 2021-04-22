var express = require("express");
var app = express();
var bodyParser = require("body-parser");

var passport        = require("passport"),      //Authentication
	LocalStrategy   = require("passport-local"),
	methodOverride  = require("method-override"),
	flash           = require("connect-flash");
	var mongoose = require("mongoose");
mongoose.connect('mongodb+srv://jerome:jerome2000@cluster0.oowlp.mongodb.net/<dbname>?retryWrites=true&w=majority', {
	useNewUrlParser : true,
	useUnifiedTopology : true
});
require('dotenv').config();

//Routes
var commentRoutes = require("./routes/comments.js");
var campgroundRoutes = require("./routes/campground.js");
var indexRoutes = require("./routes/index.js");

//Models
User = require("./models/user"); 
const Campground = require("./models/campgrounds.js");
const Comment = require("./models/comments.js");

//Seed the database
//seedDB = require("./seeds.js");
//seedDB();
app.set("view engine", "ejs");
app.use(bodyParser.urlencoded({extended:true}));
app.use(express.static(__dirname + "/public"));
app.use(require("express-session")({
   secret : "hello there",
   resave : false,
   saveUninitialized: false
}));
app.use(flash());

app.use(passport.initialize());
app.use(passport.session());
passport.use(new LocalStrategy(User.authenticate()));
passport.serializeUser(User.serializeUser());
passport.deserializeUser(User.deserializeUser());


app.use(function(req, res, next){
	res.locals.currentUser = req.user;
	res.locals.error       = req.flash("error");
	res.locals.success     = req.flash("success");
	next();
});

app.use("/campground/:id/comments", commentRoutes);
app.use("/campground", campgroundRoutes);
app.use(indexRoutes);
app.use(methodOverride("_method"));


//process.env.PORT,process.env.IP,

app.listen(process.env.PORT,process.env.IP, function(){
	console.log("hello");
});
		