var gulp = require('gulp'),
watch = require('gulp-watch'),
postcss = require('gulp-postcss'),
autoprefixer = require('autoprefixer'),
cssvars = require('postcss-simple-vars'),
nested = require('postcss-nested'),
cssImport = require('postcss-import'),
mixins = require('postcss-mixins'),
hexrgba = require('postcss-hexrgba'),
browserSync = require('browser-sync').create();

gulp.task('style', function() {
	return gulp.src('./app/assets/styles/style.css')
		.pipe(postcss([cssImport, mixins, cssvars, nested, hexrgba, autoprefixer]))
		.on('error', function(errorInfo){
			console.log(errorInfo.toString());
			this.emit('end');
		})
		.pipe(gulp.dest('./'));
});

gulp.task('watch', function() {

	browserSync.init({
		//server: { baseDir: "blog" }
		proxy: "http://localhost/wp-blog/"
	});

	watch('./**/*.php', function() {
		browserSync.reload();
	});

	watch('./app/assets/styles/**/*.css', function() {
		gulp.start('cssInject');
	});
});

gulp.task('cssInject', ['style'], function() { //make sure 'style' is dependency
	return gulp.src('./').pipe(browserSync.stream());
});