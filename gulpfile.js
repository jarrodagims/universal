var gulp = require('gulp');
var compass = require('gulp-compass');

gulp.task('default', function() {
  // place code for your default task here
});


gulp.task('watch', function() {
	gulp.watch('./scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css'))
});