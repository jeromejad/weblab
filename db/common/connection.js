
var mongoose = require("mongoose");
mongoose.connect('mongodb+srv://jerome:jerome2000@cluster0.oowlp.mongodb.net/<dbname>?retryWrites=true&w=majority', {
	useNewUrlParser : true,
	useUnifiedTopology : true
});

module.exports= mongoose;