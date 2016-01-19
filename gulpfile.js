// http://gulpjs.com
// https://www.npmjs.com/package/gulp
var gulp = require('gulp');
// https://www.npmjs.com/package/gulp-phpcpd
var phpcpd = require('gulp-phpcpd');
// https://www.npmjs.com/package/gulp-phpcs
var phpcs = require('gulp-phpcs');
// https://www.npmjs.com/package/gulp-phpcbf
var phpcbf = require('gulp-phpcbf');

// PHP Copy/Paste Detector
gulp.task('phpcpd', function () {
  return gulp.src('docroot/**/*.php')
    .pipe(phpcpd());
});

// PHP_CodeSniffer
gulp.task('phpcs', function () {
  return gulp.src(['docroot/**/*.php', '!vendor/**/*.*', '!docroot/opcache.php', '!docroot/memcached.php'])
  // Validate files using PHP Code Sniffer
  .pipe(phpcs({
    bin: '/usr/local/bin/phpcs',
    standard: 'PSR2',
    warningSeverity: 0
  }))
  // Log all problems that was found
  .pipe(phpcs.reporter('log'));
});

// PHP Code Beautifier
// Use with care as it cleans up and alters PHP code files
gulp.task('phpcbf', function () {
  return gulp.src(['docroot/**/*.php', '!vendor/**/*.*', '!docroot/opcache.php', '!docroot/memcached.php'])
  .pipe(phpcbf({
    bin: '/usr/local/bin/phpcbf',
    standard: 'PSR2',
    warningSeverity: 0
  }))
  .pipe(gulp.dest('docroot'));
});

// Default task
gulp.task('default', function () {

});

// Watch task
gulp.task('watch', function () {

});

// Serve task
gulp.task('serve', function () {

});
