'use strict';

var gulp = require('gulp'),
  watch = require('gulp-watch'),
  imagemin = require('gulp-imagemin'),
  newer = require('gulp-newer'),
  concat = require('gulp-concat'),
  rename = require('gulp-rename'),
  svgmin = require('gulp-svgmin'),
  sass = require('gulp-sass'),
  cssmin = require('gulp-minify-css'),
  autoprefixer = require('gulp-autoprefixer'),
  jshint = require('gulp-jshint'),
  runSequence = require('run-sequence'),
  browserSync = require('browser-sync').create(),
  sassGlob = require('gulp-sass-glob'),
  livereload = require('gulp-livereload');


// paths
var imgSrc = './images/src/*',
  imgDest = './images',
  svgSrc = './images/svg-src/*',
  svgDest = './images',
  sassSrc = './scss/**/*.scss',
  sassDest = './css';

gulp.task('sass', function () {
  gulp.src(sassSrc)
    .pipe(sass({
      errLogToConsole: true
    }))
    .pipe(autoprefixer('last 2 version'))
    .pipe(gulp.dest(sassDest));
});

gulp.task('styles', function () {
  return gulp
    .src(sassSrc)
    .pipe(sassGlob())
    .pipe(sass({ includePaths: ["./bower_components/foundation-sites/scss"] }))
    .pipe(gulp.dest(sassDest))
    .pipe(livereload());
});

gulp.task('cssmin', function () {
  return gulp.src('./css/styles.css')
    .pipe(cssmin())
    .pipe(rename('styles.min.css'))
    .pipe(gulp.dest(sassDest));
});

// add image minify task
gulp.task('imagemin', function () {
  return gulp.src(imgSrc)
    .pipe(newer(imgSrc))
    .pipe(imagemin())
    .pipe(gulp.dest(imgDest));
});

// add svg minify task
gulp.task('svgmin', function () {
  return gulp.src(svgSrc)
    .pipe(newer(svgSrc))
    .pipe(svgmin())
    .pipe(gulp.dest(svgDest));
});

// Run tasks without watching.
gulp.task('build', function (callback) {
  runSequence('styles', 'imagemin', 'svgmin', 'cssmin', callback);
});

gulp.task('browser-sync', function () {
  browserSync.init(["css/*.css", "js/*.js"], {
    // If running on host (not in guest VM), enable proxy mode.
    proxy: "devstack.vm",
    reloadDelay: 300, // default is 2000 (2 seconds)
    injectChanges: true, // Inject CSS changes
    // injectChanges: false, // Don't try to inject, just do a page refresh
  });
});

// Rerun the task when a file changes
gulp.task('watch', function () {
  livereload.listen();
  gulp.watch(imgSrc, ['imagemin']);
  gulp.watch(svgSrc, ['svgmin']);
  gulp.watch(sassSrc, ['styles', 'cssmin']);
});

gulp.task('serve', function (callback) {
  runSequence('build', 'browser-sync', 'watch', callback);
});

gulp.task('default', function (callback) {
  runSequence('build', 'watch', callback);
});
