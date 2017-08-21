var express = require('express');
var morgan = require('morgan');
var path = require('path');

var app = express();
app.use(morgan('combined'));

app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'index.html'));
});

app.get('/article-one',function(req, res){
   res.sendFile(path.join(__dirname, 'ui', 'article_one.html')); 
});

app.get('/set',function(req, res){
   res.sendFile(path.join(__dirname, 'ui', 'set_portal.html')); 
});

app.get('/home',function(req, res){
   res.sendFile(path.join(__dirname, 'ui', 'home.html')); 
});

app.get('/Inst',function(req, res){
   res.sendFile(path.join(__dirname, 'ui', 'on_scheme.html')); 
});

app.get('/details',function(req, res){
   res.sendFile(path.join(__dirname, 'ui', 'details.html')); 
});

app.get('/abc',function(req, res){
   res.sendFile(path.join(__dirname, 'ui', 'abc.html')); 
});

app.get('/aboutus',function(req, res){
   res.sendFile(path.join(__dirname, 'ui', 'aboutus.html')); 
});

app.get('/ui/style.css', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'style.css'));
});

app.get('/ui/madi.png', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'madi.png'));
});


// Do not change port, otherwise your app won't run on IMAD servers
// Use 8080 only for local development if you already have apache running on 80

var port = 80;
app.listen(port, function () {
  console.log(`IMAD course app listening on port ${port}!`);
});
