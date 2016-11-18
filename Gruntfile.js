/**
 * Created by apium on 28/10/2016.
 */
module.exports = function(grunt) {
	var scssFiles = 'wp-content/themes/vintage/**/*.scss';
	var htmlFile = 'template/**/*.html';

	grunt.initConfig({
		sass: {
			dev: {
				options: {
					outputStyle: 'compressed'
				},
				files: {
					'wp-content/themes/vintage/assets/css/style.min.css': 'wp-content/themes/vintage/assets/scss/main.scss'
				}
			}
		},
		watch: {
			scss: {
				files: [scssFiles],
				tasks: ['sass:dev']
			},
			liveReload: {
				files: [scssFiles, htmlFile, 'index.html'],
				options: { livereload: 12345 }
			}
		}
	});

	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('watch-sass', ['watch']);

};