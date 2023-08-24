const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');

gulp.task('sass', function () {
    // Compile bandeiratheme.scss
    gulp.src('assets/scss/bandeiratheme.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(cleanCSS())
        .pipe(rename('bandeiratheme.min.css'))
        .pipe(gulp.dest('assets/css'));

    // Compile custom page-template SCSS files
    gulp.src('assets/scss/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(cleanCSS())
        .pipe(rename({ suffix: '.min' })) // Append .min to the compiled CSS files
        .pipe(gulp.dest('assets/css'));
});

gulp.task('watch', function () {
    // Watch all SCSS files inside the 'assets/scss' folder and subfolders,
    gulp.watch('assets/scss/**/*.scss', gulp.series('sass'));
});
