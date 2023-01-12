// Import essential libraries 
const express = require('express');
const app = express();
const path = require('path');
const router = express.Router();
// Setup essential routes 
router.get('/', function(req, res) {
  res.sendFile(path.join(__dirname + '/public/index.html'));
  //__dirname : It will resolve to your project folder. 
});
router.get('public/features', function(req, res) {
  res.sendFile(path.join(__dirname + '/public/features.html'));
});
router.get('public/faq', function(req, res) {
  res.sendFile(path.join(__dirname + '/public/faq.html'));
});
//add the router 
app.use('/', router);
app.listen(process.env.port || 3000);
console.log('Running at Port 3000'); 