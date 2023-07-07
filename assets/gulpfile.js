const gulp = require('gulp');
const concatCss = require('gulp-concat-css');
const cssNano = require('gulp-cssnano')
const minify = require('gulp-minify');
const sass = require('gulp-sass')(require('sass'));

gulp.task('sass', function sassFunc(){
    return gulp.src('./src/stylesheets/application.scss')
    .pipe(sass())
    //.pipe(concatCss('application.css'))
	.pipe(cssNano())
    .pipe(gulp.dest('./css'))
});


 

gulp.task('watch', function watchFunc() {
    gulp.watch('./src/stylesheets/project/*.*/*.scss', gulp.series('sass'));
    gulp.watch('./src/js/*.*/*.js', gulp.series('compressJs'));
});