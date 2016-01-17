var gulp = require('gulp'),
gutil = require('gulp-util'),
sass = require('gulp-sass'),
gutil = require('gulp-util')/*To insert the comment.json at the top of the styles for a nice preview of the theme*/;

gulp.task('build-css', function() {
  return gulp.src(['scss/style.scss', 'lib/**/*.scss'])
    .pipe(sass())
    .pipe(gulp.dest('styles'));
});

gulp.task('watch', function(){
   gulp.watch('scss/**/*.scss', ['build-css']);
});

gulp.task('default', ['watch']);
