"use strict";

var gulp = require('gulp'),
    plugins = require('gulp-load-plugins')();

    var config ={
        
    };
    gulp.task('fonts', function(){
        return gulp.src('./node_modules/font-awesome/fonts/**.*')
        .pipe(gulp.dest('./fonts'));
    });
    gulp.task('css', function() {
        return gulp.src('scss/meta.scss')
        .pipe(plugins.sass({
            outputStyle: 'compressed',
        }).on('error', plugins.sass.logError))
        .pipe(plugins.autoprefixer())
        .pipe(gulp.dest('css'))
    });