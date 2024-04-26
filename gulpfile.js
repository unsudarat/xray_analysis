'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));

gulp.task('xray', function () {
  return gulp.src('./assets/scss/style.scss')
    .pipe(sass.sync({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('./assets/css'));
});
 
gulp.task('xray:watch', function () {
  gulp.watch(['./assets/scss/*', './assets/scss/*/*'], gulp.series('xray'));
});

// Node v. 14+
// npm install gulp sass gulp-sass --save-dev
// gulp xray
// gulp xray:watch
