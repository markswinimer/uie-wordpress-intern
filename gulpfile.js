var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function() {
	return gulp.src('wp-content/themes/uie/resources/sass/uie.scss')
	  .pipe(sass()) // Converts Sass to CSS with gulp-sass
	  .pipe(gulp.dest('wp-content/themes/uie/css/'))
  });

// Gulp watch syntax
gulp.task('watch', function() {
	gulp.watch('wp-content/themes/uie/resources/sass/**/*.scss', ['sass']); 
})