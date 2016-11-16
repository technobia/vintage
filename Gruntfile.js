/**
 * Created by apium on 28/10/2016.
 */
module.exports = function(grunt) {
	var scssFiles = 'wp-content/assets/**/*.scss';
	var htmlFile = 'template/**/*.html';

	grunt.initConfig({
		sass: {
			dev: {
				options: {
					outputStyle: 'compressed'
				},
				files: {
					'wp-content/themes/vintage/css/style.min.css': 'wp-content/assets/scss/main.scss'
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