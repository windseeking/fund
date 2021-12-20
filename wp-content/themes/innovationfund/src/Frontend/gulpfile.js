const gulp = require('gulp')
const sass = require('gulp-sass')
const sassGlob = require('gulp-sass-glob')
const sourcemaps = require('gulp-sourcemaps')
const autoprefixer = require('gulp-autoprefixer')
const rename = require('gulp-rename')
const concat = require('gulp-concat')
const babel = require('gulp-babel')
const uglify = require('gulp-uglify')
const rigger = require('gulp-rigger')
const debug = require('gulp-debug')

let path = {
    src_scss: 'src/scss',
    src_js: 'src/js',
    dist_js: '../../dist/js',
    dist_css: '../../dist/css',
    vendor_css: 'src/vendor/css',
    vendor_js: 'src/vendor/js'
}

/* ========================= */
/* === Обработка стилей ==== */
/* ========================= */
gulp.task('sass:full', () => {
    const options = {
        outputStyle: 'extended',
        precision: 10
    };
    return gulp.src(path.src_scss + '/main.scss')
        .pipe(sassGlob())
        .pipe(sourcemaps.init())
        .pipe(sass(options).on('error', sass.logError))
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(debug())
        .pipe(gulp.dest(path.dist_css))
});

gulp.task('sass:minified', () => {
    const options = {
        outputStyle: 'compressed',
        precision: 10
    };
    return gulp.src(path.src_scss + '/main.scss')
        .pipe(sassGlob())
        .pipe(sourcemaps.init())
        .pipe(sass(options).on('error', sass.logError))
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(rename({suffix: '.min'}))
        .pipe(sourcemaps.write('.'))
        .pipe(debug())
        .pipe(gulp.dest(path.dist_css))
});

gulp.task('concat:css', () => {
    return gulp.src(path.vendor_css + '/*.css')
        .pipe(concat('vendor.css'))
        .pipe(debug())
        .pipe(gulp.dest(path.dist_css))
});

/* ========================= */
/* === Обработка скриптов == */
/* ========================= */
gulp.task('babel:js', () => {
    return gulp.src(path.src_js + '/init.js')
        .pipe(rigger())
        .pipe(babel({
            presets: ['env']
        }))
        .pipe(uglify())
        .pipe(rename({
            basename: "script",
            suffix: ".min",
            extname: ".js"
        }))
        .pipe(debug())
        .pipe(gulp.dest(path.dist_js))
});

gulp.task('concat:js', () => {
    return gulp.src([
        path.vendor_js + '/*.js',
        './node_modules/jquery/dist/jquery.min.js'
    ])
        .pipe(concat('vendor.js'))
        .pipe(debug())
        .pipe(gulp.dest(path.dist_js))
});

gulp.task(
    'build',
    gulp.series(gulp.parallel('sass:full', 'sass:minified', 'concat:css', 'babel:js', 'concat:js'))
);