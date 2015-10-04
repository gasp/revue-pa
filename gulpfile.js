'use strict';

var gulp = require('gulp');
var bower = require('gulp-bower');
var less = require('gulp-less');

var files_less = [
  './squelettes/less/app.less',
  './squelettes/less/bootstrap.less'
];

gulp.task('bower', function() {
  return bower()
    .pipe(gulp.dest('./squelettes/libs/'));
});

gulp.task('install', ['bower', 'dist'], function() {

});

gulp.task('less', function () {
  return gulp.src(files_less)
    .pipe(less())
    .pipe(gulp.dest('./squelettes/css/'));
});

gulp.task('default', ['less'], function() {
  gulp.watch('./squelettes/less/*.less', ['less']);
});
