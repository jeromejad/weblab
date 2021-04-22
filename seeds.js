var mongoose = require("mongoose");
var Campground = require("./models/campgrounds");
var Comment   = require("./models/comments");
 
var data = [
    
        {name:"Theo", image:"https://i.imgur.com/Udycfj3m.jpg",description:"Theo is a CSE student, NSS DON"},
       {name:"Shawn", image:"https://i.imgur.com/qfpsN4n.jpg?1",description:"Shawn is a cse student,Hacker"},
    	{name:"SubraMani", image:"https://i.imgur.com/2zz4CSbm.jpg?1",description:"SRM Hacker,cse student"},
        {name:"Vijeth", image:"https://i.imgur.com/7qkPBNf.png",description:"editor,Gta5 pro player"},
    
]
 
function seedDB(){
   //Remove all campgrounds
   Campground.remove({}, function(err){
        if(err){
            console.log(err);
        }
        console.log("removed campgrounds!");
        Comment.remove({}, function(err) {
            if(err){
                console.log(err);
            }
            console.log("removed comments!");
             //add a few campgrounds
            data.forEach(function(seed){
                Campground.create(seed, function(err, campground){
                    if(err){
                        console.log(err)
                    } else {
                        console.log("added a campground");
                        //create a comment
                        Comment.create(
                            {
                                text: "I wanna meet him",
                                author: "Priya"
                            }, function(err, comment){
                                if(err){
                                    console.log(err);
                                } else {
                                    campground.Comment.push(comment);
                                    campground.save();
                                    console.log("Created new comment");
                                }
                            });
                    }
                });
            });
        });
    }); 
    //add a few comments
}
 
module.exports = seedDB;