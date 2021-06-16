const prod = process.env.NODE_ENV === 'production'
const gulp = require('gulp')
const gulpif = require('gulp-if')
const sass = require('gulp-sass')
const sassGlob = require('gulp-sass-glob')
const sourcemaps = require('gulp-sourcemaps')
const group_media = require('gulp-group-css-media-queries')
const autoprefixer = require('gulp-autoprefixer')
const cleancss = require('gulp-clean-css')
const rename_file = require('gulp-rename')
const server = require('browser-sync').create()

/* ========================= */
/* === Обработка стилей ==== */
/* ========================= */
function styles() {
    return gulp.src( './src/scss/main.scss')
        .pipe(gulpif(!prod, sourcemaps.init()))
        .pipe(sassGlob()) // автоимпорт всех файлов из папки компонентов
        .pipe(sass({
            outputeStyle: "expanded",
        }))
        .pipe(group_media())
        .pipe(rename_file({ suffix: '.min', prefix : '' }))
        .pipe(gulpif(prod, autoprefixer(['cover 99.5%'])))
        .pipe(gulpif(prod, cleancss()))
        .pipe(gulpif(!prod, sourcemaps.write()))
        .pipe(gulp.dest( '../../dist/css/' ))
        .pipe(server.stream())
}

exports.build = gulp.series(
    gulp.parallel(styles)
);