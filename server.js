const express = require('express');
const app = express();
const path = require('path');

var constants = require('./constants')

app.set('view engine', 'ejs');

app.use(express.static(path.join(__dirname, 'public')));

app.get('/', function (req, res) {
  res.render('pages/index');
});

app.listen(3000, function () {
  console.log('Example app listening on port 3000!');
});