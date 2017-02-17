var gulp = require('gulp'),
sass = require('gulp-sass');

gulp.task('build-css', function() {
  return gulp.src(['scss/style.scss', 'lib/**/*.scss'])
    .pipe(sass())
    .pipe(gulp.dest('styles'));
});

gulp.task('watch', function(){
   gulp.watch('scss/**/*.scss', ['build-css']);
});

gulp.task('default', ['watch']);
