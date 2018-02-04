'use strict';

module.exports = function(grunt) {

	require('load-grunt-tasks')(grunt);

    grunt.initConfig({

		pkg: grunt.file.readJSON('package.json'),
		banner: '/*! <%= pkg.name %> by <%= pkg.author.name %> - v<%= pkg.version %> - ' +
		    	'<%= grunt.template.today("yyyy-mm-dd") %>\n' +
		    	'* http://<%= pkg.homepage %>/\n' +
		    	'* Copyright (c) <%= grunt.template.today("yyyy") %> ' +
		    	'<%= pkg.author.name %>; Licensed MIT */',

		config: {
		   app: 'app',
		   dist: 'dist',
           build: 'build/BeetleBailey',
		},
		bower: {
			install: {
				options: {
					targetDir: './components',
					// cleanBowerDir: true,
                    // cleanTargetDir: true,
				}
			}
		},
		watch: {
			js: {
			   files: ['source/{,*/}*.js'],
			   tasks: ['concat:js'],
			   options: {
			       // livereload: true
			   }
			},
			styles: {
				files: ['source/*/*/*.scss'],
				tasks: ['sass:dev', 'autoprefixer:dev']
			},       
		},
		concat: {
		   js: {
		       	src: [
                    'source/scripts/libraries/{,*/}*.js',
                    'source/scripts/components/{,*/}*.js',
		   			'source/scripts/{,*/}*.js',
		   			'!<%= config.app %>/scripts/vendor/*'
		   		],
		       	dest: '<%= config.app %>/scripts/lib.js'
		   },
		},
		sass: {
		   	dev: {
				files: {
				   '<%= config.app %>/styles/main.css': 'source/styles/main.scss'
				}
		   },
		   dist: {
		       options: {
		           style: 'compact'
		       },
		       files: {
		          '<%= config.dist %>/styles/main.css': 'source/styles/main.scss'
		       }
		   }
		},
        autoprefixer: {
            dev: {
                src: '<%= config.app %>/styles/*.css'
            },
            dist: {
                src: '<%= config.dist %>/styles/*.css' 
            }
        },

		copy: {
			install: {
                files: [
                    {
                        expand: true,
                        dot: true,
                        cwd: 'components/jquery',
                        dest: '<%= config.app %>/scripts/vendor',
                        src: [
                            'jquery.js'
                        ]
                    },
                    {
                        expand: true,
                        dot: true,
                        cwd: 'components/modernizer',
                        dest: '<%= config.app %>/scripts/vendor',
                        src: [
                            'modernizr.js'
                        ]
                    },
                    {
                        expand: true,
                        dot: true,
                        cwd: 'bower_components/font-awesome/fonts',
                        dest: '<%= config.app %>/fonts',
                        src: [
                            '**'
                        ]
                    }
                ]
			},
		    dist: {
		        files: [{
		            expand: true,
		            dot: true,
		            cwd: '<%= config.app %>',
		            dest: '<%= config.dist %>',
		            src: [
		                '*.{ico,png,txt}',
		                'images/{,*/}*.webp',
                        'fonts/**',
                        'scripts/*.js',
		                'scripts/vendor/*.js',
		                'styles/*.css',
		                'styles/fonts/{,*/}*.*'
		            ]
		        }]
		    },
            build: {
                files: [{
                    expand: true,
                    dest: '<%= config.build %>',
                    src: [
                    'README.txt',
                    'style.css',
                    '*.php',
                    'lib/**',
                    'dist/**',
                    'assets/**',
                    'acf/**'
                    ]
                }]
            }
		},

		//for build
		clean: {
		    dist: {
		        files: [{
		            dot: true,
		            src: [
		                '<%= config.dist %>/*'
		            ]
		        }]
		    },
            build: {
                files: [{
                    dot: true,
                    src: [
                        '<%= config.build %>/*'
                    ]
                }]
            }
		},
		uglify: {
		    dist: {
		        files: [{
		            '<%= config.dist %>/scripts/lib.js': [
		                '<%= config.dist %>/scripts/lib.js'
		            ]
		        }]
		    }
		},
		modernizr: {
            dev: {
                'dest' : '<%= config.app %>/scripts/vendor/modernizr.js',
                'files' : {
                    'src' : [
                    '<%= config.app %>/scripts/{,*/}*.js',
                    '<%= config.app %>/styles/{,*/}*.css',
                    '!<%= config.app %>/scripts/vendor/*'
                    ]
                },
                'uglify': false
            },
			dist: {
				'dest' : '<%= config.dist %>/scripts/vendor/modernizr.js',
			    'files' : {
			    	'src' : [
			        '<%= config.dist %>/scripts/{,*/}*.js',
			        '<%= config.dist %>/styles/{,*/}*.css',
			        '!<%= config.dist %>/scripts/vendor/*'
			    	]
			    },
			    'uglify': true
			}
		},

		// useminPrepare: {
		//     options: {
		//         dest: '<%= config.dist %>'
		//     },
		//     html: '<%= config.app %>/index.html'
		// },

		// // Performs rewrites based on rev and the useminPrepare configuration
		// usemin: {
		//     options: {
		//         assetsDirs: ['<%= config.dist %>', '<%= config.dist %>/images']
		//     },
		//     html: ['<%= config.dist %>/{,*/}*.html'],
		//     css: ['<%= config.dist %>/styles/{,*/}*.css']
		// },

		usebanner: {
		    options: {
		      position: 'top',
		      banner: '<%= banner %>',
		      linebreak: true
		    },
		    files: {
		      src: ['<%= config.dist %>/scripts/*.js', '<%= config.dist %>/styles/*.css']
		    }

		},
		// imagemin: {
		//     dist: {
		//         files: [{
		//             expand: true,
		//             cwd: '<%= config.app %>/images',
		//             src: '{,*/}*.{gif,jpeg,jpg,png}',
		//             dest: '<%= config.dist %>/images'
		//         }]
		//     }
		// },
		// rev: {
		//     dist: {
		//         files: {
		//             src: [
		//                 '<%= config.dist %>/scripts/lib.js',
		//                 '<%= config.dist %>/styles/main.css',
		//                 '<%= config.dist %>/images/*.*',
		//                 '<%= config.dist %>/styles/fonts/{,*/}*.*',
		//                 '<%= config.dist %>/*.{ico,png}'
		//             ]
		//         }
		//     }
		// },


		//for test
		jshint: {
		   options: {
		       jshintrc: '.jshintrc',
		       reporter: require('jshint-stylish')
		   },
		   all: [
		   		'Gruntfile.js',
		       	'source/{,*/}*.js',
                '!source/scripts/libraries/*'
		   ]
		}
    });

    grunt.registerTask('test', [
    	'jshint'
    ]);


    grunt.registerTask('build', [
        'clean:dist',
        'concat:js',
        'sass:dist',
        'autoprefixer:dist',
        // 'useminPrepare',
        // 'imagemin',
        'copy:dist',
        'modernizr:dist',
        'uglify',
        // 'rev',
        // 'usemin',
        'usebanner'
    ]);

    grunt.registerTask('compile', [
    	'concat:js',
        'modernizr:dev',
    	'sass:dev',
        'autoprefixer:dev'
	]);

    grunt.registerTask('default', [
		'test:strict', 
		'build'
	]);
    grunt.registerTask('package', [
        'build',
        'clean:build',
        'copy:build'
    ]);
};

//TODO: newer, test images