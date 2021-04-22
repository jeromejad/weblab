var express = require("express");
var router = express.Router({ mergeParams : true });
var Campground = require("../models/campgrounds.js");
var Comment = require("../models/comments.js")
var passport        = require("passport"),
	LocalStrategy   = require("passport-local");

User = require("../models/user");
router.get("/new", isLoggedIn, function(req, res){
	Campground.findById(req.params.id, function(err, foundcamp){
		if(err){
		console.log(err);
	       }
	else{
		res.render("comments/new",{campground: foundcamp});
	    }
	})
})

router.post("/",isLoggedIn,  function(req, res)
{
	var id = req.params.id;
	Campground.findById(id, function(err, campground){
		if(err){
		console.log(err);
	       }
	else{
		Comment.create(req.body.comment, function(err, comment){
        if(err){
                console.log(err);
                }
			else {
				 comment.author.id = req.user._id;
				 comment.author.username = req.user.username;
				comment.save();
                 campground.Comment.push(comment);
                 campground.save();
		res.redirect("/campground/"+id);
	            }
		
	     })};
	});
});	

function isLoggedIn(req, res, next){
	if (req.isAuthenticated()){
		return next();
	}
	req.flash("error", "you need to be Logged In to do that");
	res.redirect("/login");
}

module.exports = router;