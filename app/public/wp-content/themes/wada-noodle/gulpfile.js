const gulp = require('gulp');
const imagemin = require('gulp-imagemin');
const mozjpeg = require('imagemin-mozjpeg');
const pngquant = require('imagemin-pngquant');
const changed = require('gulp-changed');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');

gulp.task('image', function () {
  return gulp
    .src('./img/**/*.{png,jpg,svg}')
    .pipe(changed('distImg'))
    .pipe(
      imagemin([
        pngquant({
          quality: [0.7, 0.85],
          speed: 1,
        }),
        mozjpeg({
          quality: 85,
          progressive: true,
        }),
      ])
    )
    .pipe(gulp.dest('./distImg/'));
});

gulp.task('css', function () {
  return gulp
    .src('asset/css/*.css')
    .pipe(
      postcss([
        autoprefixer({



          cascade: false,
        }),
      ])
    )
    .pipe(gulp.dest('./asset/dist/'));
});

