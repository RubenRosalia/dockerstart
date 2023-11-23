const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const terser = require('gulp-terser');
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');

// Compile and Minify SASS to CSS
gulp.task('sass', function () {
  return gulp
    .src('src/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('dist/css'));
});

// Minify main.js inside src/js and output to dist/js
gulp.task('js-main', function () {
  return gulp
    .src('src/js/main.js')
    .pipe(terser())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('dist/js'));
});

// Copy all JavaScript files in src/js/modules to dist/js/modules
gulp.task('js-modules', function () {
  return gulp
    .src('src/js/modules/**/*.js')
    .pipe(gulp.dest('dist/js/modules'));
});

// Default task (run 'gulp' in the terminal)
gulp.task('default', gulp.series('sass', 'js-main', 'js-modules'));

// Watch for changes in SASS and JavaScript files
gulp.task('watch', function () {
  gulp.watch('src/scss/**/*.scss', gulp.series('sass'));
  gulp.watch('src/js/main.js', gulp.series('js-main'));
  gulp.watch('src/js/modules/**/*.js', gulp.series('js-modules'));
});
