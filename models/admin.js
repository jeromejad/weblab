var express = require('express');
var router = express.Router();

var monk = require('monk');
var db = monk('mongodb+srv://jerome:jerome2000@cluster0.oowlp.mongodb.net/<dbname>?retryWrites=true&w=majority');
var admin_collection = db.get('admin');

module.exports = {
    
findByUserName: function(username, cb) {
  admin_collection.findOne({username: username}, cb);
},

};







