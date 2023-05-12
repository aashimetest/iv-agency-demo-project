var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
var watch = require('gulp-watch');

gulp.task('sass', function() {
  return gulp.src('resources/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('public/css'));
});

gulp.task('watch', function() {
  gulp.watch('resources/sass/**/*.scss', ['sass']);
});


gulp.task('default', gulp.series('sass', 'watch'));
