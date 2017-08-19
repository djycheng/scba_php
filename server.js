const express = require('express');
const app = express();
const path = require('path');
const csv = require('fast-csv');

app.set('view engine', 'ejs');

app.use(express.static(path.join(__dirname, 'public')));

app.get('/', function (req, res) {
  res.render('pages/index');
});

app.get('/about', function (req, res) {
  var presidents = []
  csv.fromPath(path.join(__dirname, 'presidents.csv'))
   .on('data', function(data) {
      presidents = presidents.concat([data]);
   })
   .on('end', function() {
      res.render('pages/about', {presidents: presidents});
   });
});

app.get('/membership', function (req, res) {
  res.render('pages/membership');
});

app.get('/news', function (req, res) {
  res.render('pages/news');
});

app.get('/contact', function (req, res) {
  res.render('pages/contact');
});

app.get('/conference', function (req, res) {
  res.render('pages/conference');
})

app.listen(3000, function () {
  console.log('Example app listening on port 3000!');
});