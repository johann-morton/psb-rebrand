/* file: gulpfile.js */

var gulp   = require('gulp'),
    sass   = require('gulp-sass');

// define the default task and add the watch task to it
gulp.task('default', ['watch']);

gulp.task('build-css', function() {
  return gulp.src('source/scss/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('public/assets/stylesheets'));
});

/* updated watch task to include sass */

gulp.task('watch', function() {
  gulp.watch('source/scss/**/*.scss', ['build-css']);
});