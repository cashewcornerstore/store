<?php

class Aora_Merlin_Elementor {
	public function import_files_default(){
		$rev_sliders = array(
			"https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/default/revslider/slider-home-1.zip",
			"https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/default/revslider/slider-home-2.zip",
		);
	
		$data_url = "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/default/data.xml";
		$widget_url = "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/default/widgets.wie";
		

		return array(
			array(
				'import_file_name'           => 'Home 1',
				'home'                       => 'home-1',
				'import_file_url'          	 => $data_url,
				'import_widget_file_url'     => $widget_url,
				'import_redux'         => array(
					array(
						'file_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/default/home1/redux_options.json",
						'option_name' => 'aora_tbay_theme_options',
					),
				),
				'rev_sliders'                => $rev_sliders,
				'import_preview_image_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/default/home1/screenshot.jpg",
				'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'aora' ),
				'preview_url'                => 'https://elementor2.thembay.com/aora/',
			),
			array(
				'import_file_name'           => 'Home 2',
				'home'                       => 'home-2',
				'import_file_url'          	 => $data_url,
				'import_widget_file_url'     => $widget_url,
				'import_redux'         => array(
					array(
						'file_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/default/home2/redux_options.json",
						'option_name' => 'aora_tbay_theme_options',
					),
				),
				'rev_sliders'                => $rev_sliders,
				'import_preview_image_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/default/home2/screenshot.jpg",
				'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'aora' ),
				'preview_url'                => 'https://elementor2.thembay.com/aora/home-2/',
			),
			array(
				'import_file_name'           => 'Home 3',
				'home'                       => 'home-3',
				'import_file_url'          	 => $data_url,
				'import_widget_file_url'     => $widget_url,
				'import_redux'         => array(
					array(
						'file_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/default/home3/redux_options.json",
						'option_name' => 'aora_tbay_theme_options',
					),
				),
				'rev_sliders'                => $rev_sliders,
				'import_preview_image_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/default/home3/screenshot.jpg",
				'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'aora' ),
				'preview_url'                => 'https://elementor2.thembay.com/aora/home-3/',
			)
		);
	}

	public function import_files_dokan(){
		$rev_sliders = array(
			"https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/dokan/revslider/slider-home-1.zip",
			"https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/dokan/revslider/slider-home-2.zip",
		);
	
		$data_url = "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/dokan/data.xml";
		$widget_url = "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/dokan/widgets.wie";
		

		return array(
			array(
				'import_file_name'           => 'Home 1',
				'home'                       => 'home-1',
				'import_file_url'          	 => $data_url,
				'import_widget_file_url'     => $widget_url,
				'import_redux'         => array(
					array(
						'file_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/dokan/home1/redux_options.json",
						'option_name' => 'aora_tbay_theme_options',
					),
				),
				'rev_sliders'                => $rev_sliders,
				'import_preview_image_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/dokan/home1/screenshot.jpg",
				'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'aora' ),
				'preview_url'                => 'https://elementor2.thembay.com/aora_dokan/',
			),
			array(
				'import_file_name'           => 'Home 2',
				'home'                       => 'home-2',
				'import_file_url'          	 => $data_url,
				'import_widget_file_url'     => $widget_url,
				'import_redux'         => array(
					array(
						'file_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/dokan/home2/redux_options.json",
						'option_name' => 'aora_tbay_theme_options',
					),
				),
				'rev_sliders'                => $rev_sliders,
				'import_preview_image_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/dokan/home2/screenshot.jpg",
				'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'aora' ),
				'preview_url'                => 'https://elementor2.thembay.com/aora_dokan/home-2/',
			),
			array(
				'import_file_name'           => 'Home 3',
				'home'                       => 'home-3',
				'import_file_url'          	 => $data_url,
				'import_widget_file_url'     => $widget_url,
				'import_redux'         => array(
					array(
						'file_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/dokan/home3/redux_options.json",
						'option_name' => 'aora_tbay_theme_options',
					),
				),
				'rev_sliders'                => $rev_sliders,
				'import_preview_image_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/dokan/home3/screenshot.jpg",
				'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'aora' ),
				'preview_url'                => 'https://elementor2.thembay.com/aora_dokan/home-3/',
			)
		);
	}

	public function import_files_wcfm(){
		$rev_sliders = array(
			"https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcfm/revslider/slider-home-1.zip",
			"https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcfm/revslider/slider-home-2.zip",
		);
	
		$data_url = "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcfm/data.xml";
		$widget_url = "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcfm/widgets.wie";
		

		return array(
			array(
				'import_file_name'           => 'Home 1',
				'home'                       => 'home-1',
				'import_file_url'          	 => $data_url,
				'import_widget_file_url'     => $widget_url,
				'import_redux'         => array(
					array(
						'file_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcfm/home1/redux_options.json",
						'option_name' => 'aora_tbay_theme_options',
					),
				),
				'rev_sliders'                => $rev_sliders,
				'import_preview_image_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcfm/home1/screenshot.jpg",
				'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'aora' ),
				'preview_url'                => 'https://elementor2.thembay.com/aora_wcfm/',
			),
			array(
				'import_file_name'           => 'Home 2',
				'home'                       => 'home-2',
				'import_file_url'          	 => $data_url,
				'import_widget_file_url'     => $widget_url,
				'import_redux'         => array(
					array(
						'file_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcfm/home2/redux_options.json",
						'option_name' => 'aora_tbay_theme_options',
					),
				),
				'rev_sliders'                => $rev_sliders,
				'import_preview_image_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcfm/home2/screenshot.jpg",
				'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'aora' ),
				'preview_url'                => 'https://elementor2.thembay.com/aora_wcfm/home-2/',
			),
			array(
				'import_file_name'           => 'Home 3',
				'home'                       => 'home-3',
				'import_file_url'          	 => $data_url,
				'import_widget_file_url'     => $widget_url,
				'import_redux'         => array(
					array(
						'file_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcfm/home3/redux_options.json",
						'option_name' => 'aora_tbay_theme_options',
					),
				),
				'rev_sliders'                => $rev_sliders,
				'import_preview_image_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcfm/home3/screenshot.jpg",
				'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'aora' ),
				'preview_url'                => 'https://elementor2.thembay.com/aora_wcfm/home-3/',
			)
		);
	}

	public function import_files_wcmp(){
		$rev_sliders = array(
			"https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcmp/revslider/slider-home-1.zip",
			"https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcmp/revslider/slider-home-2.zip",
		);
	
		$data_url = "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcmp/data.xml";
		$widget_url = "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcmp/widgets.wie";
		

		return array(
			array(
				'import_file_name'           => 'Home 1',
				'home'                       => 'home-1',
				'import_file_url'          	 => $data_url,
				'import_widget_file_url'     => $widget_url,
				'import_redux'         => array(
					array(
						'file_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcmp/home1/redux_options.json",
						'option_name' => 'aora_tbay_theme_options',
					),
				),
				'rev_sliders'                => $rev_sliders,
				'import_preview_image_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcmp/home1/screenshot.jpg",
				'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'aora' ),
				'preview_url'                => 'https://elementor2.thembay.com/aora_wcmp/',
			),
			array(
				'import_file_name'           => 'Home 2',
				'home'                       => 'home-2',
				'import_file_url'          	 => $data_url,
				'import_widget_file_url'     => $widget_url,
				'import_redux'         => array(
					array(
						'file_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcmp/home2/redux_options.json",
						'option_name' => 'aora_tbay_theme_options',
					),
				),
				'rev_sliders'                => $rev_sliders,
				'import_preview_image_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcmp/home2/screenshot.jpg",
				'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'aora' ),
				'preview_url'                => 'https://elementor2.thembay.com/aora_wcmp/home-2/',
			),
			array(
				'import_file_name'           => 'Home 3',
				'home'                       => 'home-3',
				'import_file_url'          	 => $data_url,
				'import_widget_file_url'     => $widget_url,
				'import_redux'         => array(
					array(
						'file_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcmp/home3/redux_options.json",
						'option_name' => 'aora_tbay_theme_options',
					),
				),
				'rev_sliders'                => $rev_sliders,
				'import_preview_image_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcmp/home3/screenshot.jpg",
				'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'aora' ),
				'preview_url'                => 'https://elementor2.thembay.com/aora_wcmp/home-3/',
			)
		);
	}

	public function import_files_wcvendors(){
		$rev_sliders = array(
			"https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcvendors/revslider/slider-home-1.zip",
			"https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcvendors/revslider/slider-home-2.zip",
		);
	
		$data_url = "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcvendors/data.xml";
		$widget_url = "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcvendors/widgets.wie";
		

		return array(
			array(
				'import_file_name'           => 'Home 1',
				'home'                       => 'home-1',
				'import_file_url'          	 => $data_url,
				'import_widget_file_url'     => $widget_url,
				'import_redux'         => array(
					array(
						'file_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcvendors/home1/redux_options.json",
						'option_name' => 'aora_tbay_theme_options',
					),
				),
				'rev_sliders'                => $rev_sliders,
				'import_preview_image_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcvendors/home1/screenshot.jpg",
				'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'aora' ),
				'preview_url'                => 'https://elementor2.thembay.com/aora_wcvendors/',
			),
			array(
				'import_file_name'           => 'Home 2',
				'home'                       => 'home-2',
				'import_file_url'          	 => $data_url,
				'import_widget_file_url'     => $widget_url,
				'import_redux'         => array(
					array(
						'file_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcvendors/home2/redux_options.json",
						'option_name' => 'aora_tbay_theme_options',
					),
				),
				'rev_sliders'                => $rev_sliders,
				'import_preview_image_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcvendors/home2/screenshot.jpg",
				'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'aora' ),
				'preview_url'                => 'https://elementor2.thembay.com/aora_wcvendors/home-2/',
			),
			array(
				'import_file_name'           => 'Home 3',
				'home'                       => 'home-3',
				'import_file_url'          	 => $data_url,
				'import_widget_file_url'     => $widget_url,
				'import_redux'         => array(
					array(
						'file_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcvendors/home3/redux_options.json",
						'option_name' => 'aora_tbay_theme_options',
					),
				),
				'rev_sliders'                => $rev_sliders,
				'import_preview_image_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/wcvendors/home3/screenshot.jpg",
				'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'aora' ),
				'preview_url'                => 'https://elementor2.thembay.com/aora_wcvendors/home-3/',
			)
		);
	}

	public function import_files_rtl(){
		$rev_sliders = array(
			"https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/rtl/revslider/slider-home-1.zip",
			"https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/rtl/revslider/slider-home-2.zip",
		);
	
		$data_url = "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/rtl/data.xml";
		$widget_url = "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/rtl/widgets.wie";
		

		return array(
			array(
				'import_file_name'           => 'Home 1',
				'home'                       => 'home-1',
				'import_file_url'          	 => $data_url,
				'import_widget_file_url'     => $widget_url,
				'import_redux'         => array(
					array(
						'file_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/rtl/home1/redux_options.json",
						'option_name' => 'aora_tbay_theme_options',
					),
				),
				'rev_sliders'                => $rev_sliders,
				'import_preview_image_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/rtl/home1/screenshot.jpg",
				'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'aora' ),
				'preview_url'                => 'https://elementor2.thembay.com/aora_rtl/',
			),
			array(
				'import_file_name'           => 'Home 2',
				'home'                       => 'home-2',
				'import_file_url'          	 => $data_url,
				'import_widget_file_url'     => $widget_url,
				'import_redux'         => array(
					array(
						'file_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/rtl/home2/redux_options.json",
						'option_name' => 'aora_tbay_theme_options',
					),
				),
				'rev_sliders'                => $rev_sliders,
				'import_preview_image_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/rtl/home2/screenshot.jpg",
				'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'aora' ),
				'preview_url'                => 'https://elementor2.thembay.com/aora_rtl/home-2/',
			),
			array(
				'import_file_name'           => 'Home 3',
				'home'                       => 'home-3',
				'import_file_url'          	 => $data_url,
				'import_widget_file_url'     => $widget_url,
				'import_redux'         => array(
					array(
						'file_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/rtl/home3/redux_options.json",
						'option_name' => 'aora_tbay_theme_options',
					),
				),
				'rev_sliders'                => $rev_sliders,
				'import_preview_image_url'   => "https://bitbucket.org/devthembay/update-plugin/raw/master/demosamples/aora/rtl/home3/screenshot.jpg",
				'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'aora' ),
				'preview_url'                => 'https://elementor2.thembay.com/aora_rtl/home-3/',
			)
		);
	}
}