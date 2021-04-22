var express = require("express");
var router = express.Router();
var Campground = require("../models/campgrounds.js");
var passport        = require("passport"),
	LocalStrategy   = require("passport-local"),
	methodOverride  = require("method-override");
require('dotenv').config();

User = require("../models/user");
router.use(methodOverride("_method"));

var multer = require('multer');
var storage = multer.diskStorage({
  filename: function(req, file, callback) {
    callback(null, Date.now() + file.originalname);
  }
});
var imageFilter = function (req, file, cb) {
    // accept image files only
    if (!file.originalname.match(/\.(jpg|jpeg|png|gif)$/i)) {
        return cb(new Error('Only image files are allowed!'), false);
    }
    cb(null, true);
};
var upload = multer({ storage: storage, fileFilter: imageFilter})

var cloudinary = require('cloudinary');
cloudinary.config({ 
  cloud_name: 'jeromejad', 
 api_key: process.env.CLOUDINARY_API_KEY, 
  api_secret: process.env.CLOUDINARY_API_SECRET
});



router.get("/", isLoggedIn, function(req, res){
	
	Campground.find({},function(err, AllCampground){
	if(err){
		console.log(err);
	       }
	else{
		//console.log((AllCampground).populate(Comment).exec);
		res.render("campgrounds/index",{campground:AllCampground})
	    }
	});
});


router.post("/",isLoggedIn,upload.single('image'), function(req, res){
	cloudinary.uploader.upload(req.file.path, function(result) {
  // add cloudinary url for the image to the campground object under image property
  req.body.campground.image = result.secure_url;
  // add author to campground
  req.body.campground.author = {
    id: req.user._id,
    username: req.user.username
  }
  Campground.create(req.body.campground, function(err, campground) {
    if (err) {
      req.flash('error', err.message);
      return res.redirect('back');
    }
    res.redirect('/campground/' + campground.id);
  });
});

});

router.get("/new", isLoggedIn, function(req, res){
	res.render("campgrounds/new");
})

router.get("/:id/edit",campgroundOwnership,function(req, res)
{
	Campground.findById(req.params.id, function(err, foundcamp)
	{
		if(err){
		console.log(err);
	           }
	else{
//		console.log(foundcamp);
		res.render("campgrounds/edit",{campground: foundcamp});
	    }
	});
	});

router.put("/:id", campgroundOwnership,function(req, res){
	Campground.findByIdAndUpdate(req.params.id, req.body.campground,function(err, updatedcamp){
		if(err){
			res.redirect("/campground");
		}
		else {
			res.redirect("/campground/"+req.params.id);
		}
	}) 
	
})   

router.delete("/:id", campgroundOwnership, function(req, res){
	Campground.findByIdAndDelete(req.params.id, function(err){
		if(err){console.log(err)}
		else{res.redirect("/campground")}
	})
});

router.get("/:id", isLoggedIn, function(req, res){
	Campground.findById(req.params.id).populate("Comment").exec(function(err, foundcamp){
		if(err){
		console.log(err);
	       }
	else{
		res.render("campgrounds/des",{campground: foundcamp});
	    }
	})

})
	

 

function isLoggedIn(req, res, next){
	if (req.isAuthenticated()){
		return next();
	}
	req.flash("error", "you need to be Logged In to do that");
	res.redirect("/login");
}

function campgroundOwnership(req, res, next){
	if(req.isAuthenticated()){
		Campground.findById(req.params.id, function(err, foundcamp){
			if(err){
				res.redirect("back");
				
			}
			else{
				if(foundcamp.author.id.equals(req.user._id)){
					next();
				}
				else{
					res.redirect("back");
				}
			}
		})
	}
	else{
		res.redirect("/campground/login")
	}
}

module.exports = router;
