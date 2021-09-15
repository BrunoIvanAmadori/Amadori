// Requires Gulp v4.
// $ npm uninstall --global gulp gulp-cli
// $ rm /usr/local/share/man/man1/gulp.1
// $ npm install --global gulp-cli
// $ npm install
const { src, dest, watch, series, parallel } = require('gulp');
const browsersync = require('browser-sync').create();
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const plumber = require('gulp-plumber');
const sasslint = require('gulp-sass-lint');
const cache = require('gulp-cached');
const notify = require('gulp-notify');
const terser = require('gulp-terser');

// Compile CSS from Sass.
function buildCssStyles() {
  return src(['src/scss/*.scss', 'src/scss/**/*.scss'])
    .pipe(plumbError()) // Global error handler through all pipes.
    .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7']))
    .pipe(sourcemaps.write())
    .pipe(dest('dist/css/'))
    .pipe(browsersync.stream());
}

function buildJsScripts() {
  return src(['src/js/*.js', 'src/js/**/*.js'])
    .pipe(plumbError()) // Global error handler through all pipes.
    .pipe(sourcemaps.init())
    .pipe(terser())
    .pipe(sourcemaps.write())
    .pipe(dest('dist/js/'))
    .pipe(browsersync.stream());
}



// Watch changes on all *.scss files, lint them and
// trigger buildCssStyles() at the end.
function watchStyles() {
  watch(
    ['scss/*.scss', 'scss/**/*.scss'],
    { events: 'all', ignoreInitial: false },
    series(sassLint, buildCssStyles)
  );
}

// Watch changes on all *.scss files, lint them and
// trigger buildCssStyles() at the end.
function watchScripts() {
  watch(
    ['src/js/*.js', 'src/js/**/*.js'],
    { events: 'all', ignoreInitial: false },
    series(sassLint, buildJsScripts)
  );
}

// Init BrowserSync.
function browserSync(done) {
  browsersync.init({
    proxy: 'geovictoria-new.local', // Change this value to match your local URL.
    injectChanges: false,
    socket: {
      domain: 'localhost:3000'
    }
  });
  done();
}

// Init Sass linter.
function sassLint() {
  return src(['scss/*.scss', 'scss/**/*.scss'])
    .pipe(cache('sasslint'))
    .pipe(sasslint({
      configFile: '.sass-lint.yml'
    }))
    .pipe(sasslint.format())
    .pipe(sasslint.failOnError());
}

// Error handler.
function plumbError() {
  return plumber({
    errorHandler: function(err) {
      notify.onError({
        templateOptions: {
          date: new Date()
        },
        title: "Gulp error in " + err.plugin,
        message:  err.formatted
      })(err);
      this.emit('end');
    }
  })
}

// Export commands.
exports.default = parallel(browserSync, watchStyles, watchScripts); // $ gulp
exports.sass = buildCssStyles; // $ gulp sass
exports.js = buildJsScripts; // $ gulp sass
exports.watch = parallel(watchStyles, watchScripts); // $ gulp watch
exports.build = parallel(buildCssStyles, buildJsScripts); // $ gulp build
