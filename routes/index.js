var express = require("express");
var router = express.Router();
var passport        = require("passport"),
	LocalStrategy   = require("passport-local"),
    flash           = require("connect-flash");

router.use(flash());
User = require("../models/user");
router.get("/", function(req, res){
	res.render("landing");
});

router.get("/register", function(req, res){
	res.render("register");
	
});

router.post("/register", function(req, res){
	var newUser = new User({username : req.body.username});
	User.register(newUser, req.body.password, function(err, user){
	if(err){
		console.log(err);
		req.flash("error", "Username taken");
		return res.render("register");
	}
		User.authenticate("local")(req, res, function(){
			req.flash("success", "Successfully registered");
			res.redirect("/campground");
		})
		
	})
})

router.get("/login", function(req, res){
	res.render("login");
	
});

router.post("/login", function (req, res, next) {
  passport.authenticate("local",
    {
      successRedirect: "/campground",
      failureRedirect: "/login",
      failureFlash: true,
      successFlash: "Welcome, " + req.body.username + "!"
    })(req, res);
});

function isLoggedIn(req, res, next){
	if (req.isAuthenticated()){
		return next();
	}
	req.flash("error", "you need to be Logged In to do that");
	res.redirect("/login");
}

router.get("/logout", function(req, res){
	req.logout();
	req.flash("success", "Successfully Logged Out");
	res.redirect("/");
})
module.exports = router;