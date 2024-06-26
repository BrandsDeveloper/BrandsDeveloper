"use strict"

const gulp = require('gulp');
const sass = require("gulp-sass")(require('sass'));
const rename = require('gulp-rename');
const sourcemaps = require('gulp-sourcemaps');
const plumber = require('gulp-plumber');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const notify = require('gulp-notify');
const header = require('gulp-header');
 
// Source Path
var js_src = [
    "./node_modules/bootstrap/dist/js/bootstrap.min.js",
    "./node_modules/isotope-layout/dist/isotope.pkgd.min.js",
    "./node_modules/typed.js/dist/typed.umd.js",
    "./node_modules/scrollreveal/dist/scrollreveal.min.js",
];

var css_src = [
    'src/sass/**/*.scss',
    // './node_modules/animate.css/animate.min.css',
    // "./node_modules/swiper/swiper-bundle.min.css",
];

const separator = '/*==============================*/\n';
 
// Minify e Concat Scripts
function concatScripts() {
    return gulp.src(js_src)
        .pipe(plumber())
        .pipe(uglify())
        .pipe(concat('plugins.js'))
        // .pipe(rename())
        .pipe(header(separator))
        .pipe(gulp.dest('./js'))
        .pipe(notify({ message: 'JS concatenado e minificado com sucesso' }));
};

// Compila Sass
function compilaSass(){
    return gulp
    .src(css_src)
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    // .pipe(cssnano())
    .pipe(concat('temp.css'))
    .pipe(rename('style.min.css'))
    .pipe(sourcemaps.write('.', {
        includeContent: false,
        sourceRoot: function (file) {
            return '../src/sass/';
    }}))
    .pipe(gulp.dest('./css'))
    .pipe(notify({ message: 'Sass  compilado com sucesso' }));
}

gulp.task('sass', compilaSass);
gulp.task('scripts', concatScripts);
