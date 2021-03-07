var express = require('express');
var router = express.Router();

var monk = require('monk');
var db = monk('mongodb+srv://jerome:jerome2000@cluster0.oowlp.mongodb.net/myFirstDatabase?retryWrites=true&w=majority', { useNewUrlParser: true, useUnifiedTopology: true });
var admin_collection = db.get('admin');

module.exports = {
    
findByUserName: function(username, cb) {
  admin_collection.findOne({username: username}, cb);
},

};







