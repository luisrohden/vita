const gulp = require('gulp');
const uglify = require('gulp-uglify');
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');
const sass = require('gulp-sass')(require('sass'));



gulp.task('css', function() {
  return gulp.src('src/sass/index.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('css/'));
});

gulp.task('minify-js', function() {
  return gulp.src('_site/js/**/*.min.js')
    .pipe(uglify())
    .pipe(gulp.dest('_site'));
});


gulp.task('default', gulp.series('css', 'js'));