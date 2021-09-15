var request = require('request');
var path = require( 'path' );
var criticalcss = require("criticalcss");
var fs = require('fs');
var tmpDir = require('os').tmpdir();

var cssUrl = 'http://geovictoria-new.local/wp-content/wp-content/themes/geovictoria-2021/dist/css/custom.min.css';
var cssPath = path.join( tmpDir, 'custom.min.css' );
request(cssUrl).pipe(fs.createWriteStream(cssPath)).on('close', function() {
  criticalcss.getRules(cssPath, function(err, output) {
    if (err) {
      throw new Error(err);
    } else {
      criticalcss.findCritical("https://geovictoria-new.local/", { rules: JSON.parse(output) }, function(err, output) {
        if (err) {
          throw new Error(err);
        } else {
            console.log(cssPath);
          console.log(output);
        }
      });
    }
  });
});