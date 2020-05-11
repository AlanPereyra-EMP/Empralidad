<?php
// 1) Header
// 2) Colors
// 3) Whatsapp
// 4) Single sections
// 5) Homepage secitons
// 6) Molile buttons
// 7) Woocomerce
// 8) Facebook
// 9) Social buttons
// 10) Corp text
// 11) QR code (argentina)
// 12) GitHub Password

	function informatica_pereyra_customize_register($wp_customize){

		// 1) Header
			// Add panel
				$wp_customize->add_panel( 'ip_panel_head', array(
					'priority' => 1,
					'title' => __( 'Cabecera', 'informatica_pereyra' )
				));
			// end add panel
			// Mobile Logo
				$wp_customize->add_section('ip_section_logo', array(
					'title'=> __('Logo', 'informatica_pereyra'),
					'priority' => 1,
					'panel' => 'ip_panel_head'
				));
				$wp_customize->add_setting('ip_head_logo', array(
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_string'
				));

				$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ip_head_logo_control', array(
					'label'=> __('Logo para dispositivos móviles', 'informatica_pereyra'),
					'description'=> __( 'Ideal 1:1, máxima 21:9 (horizontal)', 'informatica_pereyra' ),
					'section'=> 'ip_section_logo',
					'settings'=> 'ip_head_logo',
					'flex_width' => true,
					'flex_height' => true
				)));
			// end mobile logo
			// Desktop Logo
				$wp_customize->add_setting('ip_head_logo_desktop', array(
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_string'
				));

				$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ip_head_logo_desktop_control', array(
					'label'=> __('Logo para pantallas grades', 'informatica_pereyra'),
					'description'=> __( 'Ideal 1:1, máxima 21:9 (horizontal)', 'informatica_pereyra' ),
					'section'=> 'ip_section_logo',
					'settings'=> 'ip_head_logo_desktop',
					'flex_width' => true,
					'flex_height' => true
				)));
			// end desktop logo
			// Slide1
				$wp_customize->add_section('ip_section_slide1', array(
					'title'=> __('Video de fondo', 'informatica_pereyra'),
					'priority' => 2,
					'panel' => 'ip_panel_head'
				));
				// Img 1
					$wp_customize->add_setting('ip_head_slide1', array(
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string',

					));

					$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'ip_head_slide1_control', array(
						'mime_type' => 'video',
						'label'=> __('Video de  fondo', 'informatica_pereyra'),
						'section'=> 'ip_section_slide1',
						'settings'=> 'ip_head_slide1',
						'description'=> __( 'Seleciona un video de fondo (adaptativo)', 'informatica_pereyra' )
					)));
				// end img1
				// filter-brightness 1
					$wp_customize->add_setting('ip_head_filter1', array(
						'default' => 'false',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));
					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_filter_control1', array(
					            'label'          => __( 'Oscurecer', 'informatica_pereyra' ),
					            'section'        => 'ip_section_slide1',
					            'settings'       => 'ip_head_filter1',
					            'type'           => 'radio',
					            'choices'        => array(
					            	'dark'   => __( 'Oscurecer imagen', 'informatica_pereyra' ),
					            	'color'   => __( 'Color principal', 'informatica_pereyra' ),
					                'false' => __( 'Por defecto', 'informatica_pereyra' )
					            )
					)));
				// end filter-brightness 1
			//Text header
				$wp_customize->add_section('ip_section_head_text', array(
					'title'=> __('Texto principal', 'informatica_pereyra'),
					'priority' => 3,
					'panel' => 'ip_panel_head'
				));
				// Title 1
					$wp_customize->add_setting('ip_head_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_string'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_text_control', array(
					'label'=> __('Titulo principal', 'informatica_pereyra'),
					'section'=> 'ip_section_head_text',
					'settings'=> 'ip_head_text'

				)));
				// end title 1
				// Textarea 1
					$wp_customize->add_setting('ip_head_textarea', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_string'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_textarea_control', array(
					'label'=> __('Texto', 'informatica_pereyra'),
					'section'=> 'ip_section_head_text',
					'settings'=> 'ip_head_textarea',
					'type' => 'textarea',
					'description'=> __( 'Texto destacado principal', 'informatica_pereyra' )

				)));
				// end textarea 1
				// Button 1
					$wp_customize->add_setting('ip_head_btn1', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_btn_control1', array(
						'label'=> __('Texto de boton', 'informatica_pereyra'),
						'section'=> 'ip_section_head_text',
						'settings'=> 'ip_head_btn1',
						'description'	  => __( 'Agrega un boton hacia alguna web', 'informatica_pereyra' )

					)));
				// end button 1
				// Link button 1
					$wp_customize->add_setting('ip_head_link_btn1', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_link_btn_control1', array(
						'label'=> __('Link del boton', 'informatica_pereyra'),
						'section'=> 'ip_section_head_text',
						'settings'=> 'ip_head_link_btn1',
						'description'	  => __( 'Pega acá el link del boton', 'informatica_pereyra' )

					)));
				// end link button 1
				// button or audio
					$wp_customize->add_setting('ip_head_audio', array(
						'default' => 'false',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));
					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_btn_aud_control1', array(
											'label'          => __( 'Mostrar botón o audio', 'informatica_pereyra' ),
											'section'        => 'ip_section_head_text',
											'settings'       => 'ip_head_audio',
											'type'           => 'radio',
											'choices'        => array(
												'button'   => __( 'Botón', 'informatica_pereyra' ),
												'audio'   => __( 'Audio', 'informatica_pereyra' ),
													'false' => __( 'deshabilitar', 'informatica_pereyra' )
											)
					)));
				// end button or audio
				// Link audio
					$wp_customize->add_setting('ip_head_link_audio', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_link_audio_control1', array(
						'label'=> __('Link del audio', 'informatica_pereyra'),
						'section'=> 'ip_section_head_text',
						'settings'=> 'ip_head_link_audio',
						'description'	  => __( 'Pega acá el link del servidor de streaming', 'informatica_pereyra' )

					)));
				// end link audio
				//Text header 2
					// if show
						$wp_customize->add_setting('ip_head_show2', array(
							'default' => 'Ocultar',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));
						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_show_control2', array(
												'label'          => __( 'Mostrar u Ocultar sección', 'informatica_pereyra' ),
												'section'        => 'ip_section_head_text2',
												'settings'       => 'ip_head_show2',
												'type'           => 'radio',
												'choices'        => array(
													'true'   => __( 'Mostrar', 'informatica_pereyra' ),
													'false' => __( 'Ocultar', 'informatica_pereyra' )
												)
						)));
					// end if
						$wp_customize->add_section('ip_section_head_text2', array(
							'title'=> __('Texto 2', 'informatica_pereyra'),
							'priority' => 4,
							'panel' => 'ip_panel_head'
						));
						// Title 2
							$wp_customize->add_setting('ip_head_text2', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_text_control2', array(
							'label'=> __('Titulo principal', 'informatica_pereyra'),
							'section'=> 'ip_section_head_text2',
							'settings'=> 'ip_head_text2'

						)));
						// end title 2
						// Textarea 2
							$wp_customize->add_setting('ip_head_textarea2', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_textarea_control2', array(
							'label'=> __('Texto', 'informatica_pereyra'),
							'section'=> 'ip_section_head_text2',
							'settings'=> 'ip_head_textarea2',
							'type' => 'textarea',
							'description'=> __( 'Texto destacado principal', 'informatica_pereyra' )

						)));
						// end textarea 2
						// Button 2
							$wp_customize->add_setting('ip_head_btn2', array(
									'default' => '',
									'trasnport' => 'refresh',
									'sanitize_callback' => 'sanitize_string'
								));

							$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_btn_control2', array(
								'label'=> __('Texto de boton', 'informatica_pereyra'),
								'section'=> 'ip_section_head_text2',
								'settings'=> 'ip_head_btn2',
								'description'	  => __( 'Agrega un boton hacia alguna web', 'informatica_pereyra' )

							)));
						// end button 2
						// Link button 2
							$wp_customize->add_setting('ip_head_link_button2', array(
									'default' => '',
									'trasnport' => 'refresh',
									'sanitize_callback' => 'sanitize_string'
								));

							$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_link_btn_control2', array(
								'label'=> __('Link del boton', 'informatica_pereyra'),
								'section'=> 'ip_section_head_text2',
								'settings'=> 'ip_head_link_button2',
								'description'	  => __( 'Pega acá el link del boton', 'informatica_pereyra' )

							)));
						// end link button 1
						// button or audio
							$wp_customize->add_setting('ip_head_audio2', array(
								'default' => 'false',
								'trasnport' => 'refresh',
								'sanitize_callback' => 'sanitize_string'
							));
							$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_btn_aud_control2', array(
													'label'          => __( 'Mostrar botón o audio', 'informatica_pereyra' ),
													'section'        => 'ip_section_head_text2',
													'settings'       => 'ip_head_audio2',
													'type'           => 'radio',
													'choices'        => array(
														'button'   => __( 'Botón', 'informatica_pereyra' ),
														'audio'   => __( 'Audio', 'informatica_pereyra' ),
															'false' => __( 'deshabilitar', 'informatica_pereyra' )
													)
							)));
						// end button or audio
						// Link audio
							$wp_customize->add_setting('ip_head_link_audio2', array(
									'default' => '',
									'trasnport' => 'refresh',
									'sanitize_callback' => 'sanitize_string'
								));

							$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_link_audio_control2', array(
								'label'=> __('Link del audio', 'informatica_pereyra'),
								'section'=> 'ip_section_head_text2',
								'settings'=> 'ip_head_link_audio2',
								'description'	  => __( 'Pega acá el link del audio o canción de bienvenida', 'informatica_pereyra' )

							)));
						// end link audio
				// end slide2
				//Text header 3
					// If show
						$wp_customize->add_setting('ip_head_show3', array(
							'default' => 'Ocultar',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));
						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_show_control3', array(
												'label'          => __( 'Mostrar u Ocultar sección', 'informatica_pereyra' ),
												'section'        => 'ip_section_head_text3',
												'settings'       => 'ip_head_show3',
												'type'           => 'radio',
												'choices'        => array(
													'true'   => __( 'Mostrar', 'informatica_pereyra' ),
													'false' => __( 'Ocultar', 'informatica_pereyra' )
												)
						)));
					// end if
					$wp_customize->add_section('ip_section_head_text3', array(
						'title'=> __('Texto 3', 'informatica_pereyra'),
						'priority' => 5,
						'panel' => 'ip_panel_head'
					));
					// Title 3
						$wp_customize->add_setting('ip_head_text3', array(
						'default' => '',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_text_control3', array(
						'label'=> __('Titulo principal', 'informatica_pereyra'),
						'section'=> 'ip_section_head_text3',
						'settings'=> 'ip_head_text3'

					)));
					// end title 3
					// Textarea 3
						$wp_customize->add_setting('ip_head_textarea3', array(
						'default' => '',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_textarea3_control', array(
						'label'=> __('Texto', 'informatica_pereyra'),
						'section'=> 'ip_section_head_text3',
						'settings'=> 'ip_head_textarea3',
						'type' => 'textarea',
						'description'=> __( 'Texto destacado principal', 'informatica_pereyra' )

					)));
					// end textarea 3
					// Button 3
						$wp_customize->add_setting('ip_head_button3', array(
								'default' => '',
								'trasnport' => 'refresh',
								'sanitize_callback' => 'sanitize_string'
							));

						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_btn_control3', array(
							'label'=> __('Texto de boton', 'informatica_pereyra'),
							'section'=> 'ip_section_head_text3',
							'settings'=> 'ip_head_button3',
							'description'	  => __( 'Agrega un boton hacia alguna web', 'informatica_pereyra' )

						)));
					// end button 3
					// Link button 3
						$wp_customize->add_setting('ip_head_link_button3', array(
								'default' => '',
								'trasnport' => 'refresh',
								'sanitize_callback' => 'sanitize_string'
							));

						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_link_btn_control3', array(
							'label'=> __('Link del boton', 'informatica_pereyra'),
							'section'=> 'ip_section_head_text3',
							'settings'=> 'ip_head_link_button3',
							'description'	  => __( 'Pega acá el link del boton', 'informatica_pereyra' )

						)));
					// end link button 3
					// button or audio
						$wp_customize->add_setting('ip_head_audio3', array(
							'default' => 'false',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));
						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_btn_aud_control3', array(
												'label'          => __( 'Mostrar botón o audio', 'informatica_pereyra' ),
												'section'        => 'ip_section_head_text3',
												'settings'       => 'ip_head_audio3',
												'type'           => 'radio',
												'choices'        => array(
													'button'   => __( 'Botón', 'informatica_pereyra' ),
													'audio'   => __( 'Audio', 'informatica_pereyra' ),
														'false' => __( 'deshabilitar', 'informatica_pereyra' )
												)
						)));
					// end button or audio
					// Link audio
						$wp_customize->add_setting('ip_head_link_audio3', array(
								'default' => '',
								'trasnport' => 'refresh',
								'sanitize_callback' => 'sanitize_string'
							));

						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_head_link_audio_control3', array(
							'label'=> __('Link del audio', 'informatica_pereyra'),
							'section'=> 'ip_section_head_text3',
							'settings'=> 'ip_head_link_audio3',
							'description'	  => __( 'Pega acá el link del audio o canción de bienvenida', 'informatica_pereyra' )

						)));
					// end link audio
			// end slide1
		// end header
		// 2) Styles
			// Add panel
				$wp_customize->add_panel( 'ip_panel_styles', array(
					'priority' => 2,
					'title' => __( 'Estilos', 'informatica_pereyra' )
				));
				// Backgrounds
					$wp_customize->add_section('ip_section_styles_background', array(
						'title'=> __('Fondos', 'informatica_pereyra'),
						'priority' => 1,
						'panel' => 'ip_panel_styles'
					));
					// Primary color
					$wp_customize->add_setting('ip_background_primary', array(
						'default' => '#005777',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ip_styles_background_color_control', array(
						'label'=> __('Fondo principal', 'informatica_pereyra'),
						'section'=> 'ip_section_styles_background',
						'settings'=> 'ip_background_primary',
						'description'=> __( 'Fondo principal de la web', 'informatica_pereyra' )

					)));
					// Secondary color
					$wp_customize->add_setting('ip_background_secondary', array(
						'default' => '#005777',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ip_styles_background_secondary_control', array(
						'label'=> __('Fondo secundario', 'informatica_pereyra'),
						'section'=> 'ip_section_styles_background',
						'settings'=> 'ip_background_secondary',
						'description'=> __( 'Fondo de tarjetas y elementos secundarios', 'informatica_pereyra' )

					)));
					// Transparency
					$wp_customize->add_setting('ip_background_secondary_transparency', array(
						'default' => 'ff',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_encoded'
					));
					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_background_secondary_transparency_control', array(
											'label'          => __( 'Transparencia', 'informatica_pereyra' ),
											'description'=> __( 'Transparecnia de fondo secundario', 'informatica_pereyra' ),
											'section'        => 'ip_section_styles_background',
											'settings'       => 'ip_background_secondary_transparency',
											'type'           => 'radio',
											'choices'        => array(
												'cc'   => __( 'Activar', 'informatica_pereyra' ),
												'ff' => __( 'Desactivar', 'informatica_pereyra' )
											)
					)));
				// end backgrounds
				//Tipography
					$wp_customize->add_section('ip_section_styles_tipography', array(
						'title'=> __('Tipografía', 'informatica_pereyra'),
						'priority' => 2,
						'panel' => 'ip_panel_styles'
					));
					// Options
						// Color typography
						// color text
						$wp_customize->add_setting('ip_tipography_primarycolor', array(
							'default' => '#262626',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

						$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ip_tipography_primarycolor_control', array(
							'label'=> __('Texto principal', 'informatica_pereyra'),
							'section'=> 'ip_section_styles_tipography',
							'settings'=> 'ip_tipography_primarycolor'

						)));
						// color featured
						$wp_customize->add_setting('ip_tipography_color', array(
							'default' => '#005777',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

						$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ip_tipography_color_control', array(
							'label'=> __('Texto secundario', 'informatica_pereyra'),
							'section'=> 'ip_section_styles_tipography',
							'settings'=> 'ip_tipography_color',
							'description'=> __( 'Texto dentro de fondo secundario', 'informatica_pereyra' )

						)));
						// Font size
						$wp_customize->add_setting('ip_styles_tipography_size', array(
							'default' => 1,
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));
						$wp_customize->add_control('ip_styles_tipography_size_control1', array(
												'label'          => __( 'Tamaño', 'informatica_pereyra' ),
												'section'        => 'ip_section_styles_tipography',
												'settings'       => 'ip_styles_tipography_size',
												'type'					 => 'range',
											  'input_attrs' 	 => array(
											    'min' => 10,
											    'max' => 50,
											    'step' => 1,
											  )
						));
						// type
						$wp_customize->add_setting('ip_styles_tipography', array(
							'default' => 'sans-serif',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));
						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_styles_tipography_control1', array(
												'label'          => __( 'Tipografía', 'informatica_pereyra' ),
												'section'        => 'ip_section_styles_tipography',
												'settings'       => 'ip_styles_tipography',
												'type'           => 'radio',
												'choices'        => array(
													'serif'  			 => __( 'Serif', 'informatica_pereyra' ),
													'sans-serif'   => __( 'Sans-serif', 'informatica_pereyra' ),
													'varela round' => __( 'Varela Round', 'informatica_pereyra' ),
													'indie flower' => __( 'Indie Flower', 'informatica_pereyra' )
												)
						)));
						// text shadow
						$wp_customize->add_setting('ip_styles_text_shadow', array(
							'default' => 'false',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));
						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_styles_text_shadow_control1', array(
												'label'          => __( 'Sombras', 'informatica_pereyra' ),
												'section'        => 'ip_section_styles_tipography',
												'settings'       => 'ip_styles_text_shadow',
												'type'           => 'radio',
												'choices'        => array(
													'true'   => __( 'Activado', 'informatica_pereyra' ),
													'false'   => __( 'Desactivado', 'informatica_pereyra' )
												)
						)));
					// end options
					// Btn
						$wp_customize->add_section('ip_section_btn', array(
								'title'=> __('Botones', 'informatica_pereyra'),
								'priority' => 3,
								'panel' => 'ip_panel_styles'
							));
						// btn bg
							$wp_customize->add_setting('ip_btn_bg', array(
								'default' => '#005777',
								'trasnport' => 'refresh',
								'sanitize_callback' => 'sanitize_string'
							));

							$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ip_btn_bg_control', array(
								'label'=> __('Color de fondo', 'informatica_pereyra'),
								'section'=> 'ip_section_btn',
								'settings'=> 'ip_btn_bg'

							)));
						// btn text color
							$wp_customize->add_setting('ip_btn_color', array(
								'default' => '#ffffff',
								'trasnport' => 'refresh',
								'sanitize_callback' => 'sanitize_string'
							));

							$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ip_btn_color_control', array(
								'label'=> __('Texto', 'informatica_pereyra'),
								'section'=> 'ip_section_btn',
								'settings'=> 'ip_btn_color'

							)));
				//Borders
					$wp_customize->add_section('ip_section_styles_border', array(
						'title'=> __('Bordes', 'informatica_pereyra'),
						'priority' => 4,
						'panel' => 'ip_panel_styles'
					));
					// Options
						$wp_customize->add_setting('ip_styles_border', array(
							'default' => 'false',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));
						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_styles_border_control1', array(
												'label'          => __( 'Redondeado', 'informatica_pereyra' ),
												'section'        => 'ip_section_styles_border',
												'settings'       => 'ip_styles_border',
												'type'           => 'radio',
												'choices'        => array(
													'true'   => __( 'Habilitar', 'informatica_pereyra' ),
														'false' => __( 'Deshabilitar', 'informatica_pereyra' )
												)
						)));
		// end styles
		// 4) Whatsapp
			$wp_customize->add_section('ip_section_what', array(
				'title'=> __('Whatsapp', 'informatica_pereyra'),
				'priority' => 3
			));
			// Number
				$wp_customize->add_setting('ip_what_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_number'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_what_text_control', array(
					'label'=> __('Numero de contacto ', 'informatica_pereyra'),
					'section'=> 'ip_section_what',
					'description'	  => __( 'Tu numero sin espacios ni simbolos', 'informatica_pereyra' ),
					'settings'=> 'ip_what_text',

				)));
			// end number
		// end whatsapp
		// 5) Ads
			// Add panel
				$wp_customize->add_panel( 'ip_panel_ads', array(
					'priority' => 4,
					'title' => __( 'Secciones destacadas en articulos', 'informatica_pereyra' )
				));
			// end add panel
			// Ad 1
				$wp_customize->add_section('ip_section_ad1', array(
					'title'=> __('Publicidad superior', 'informatica_pereyra'),
					'priority' => 1,
					'panel' => 'ip_panel_ads',
					'description' => __('Esta sección se ve en la parte superior de todos los articulos', 'informatica_pereyra')
				));
				// Show 1
					$wp_customize->add_setting('ip_ads_show1', array(
						'default' => 'false',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_encoded'
					));
					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_ads_show_control1', array(
					            'label'          => __( 'Mostrar u Ocultar', 'informatica_pereyra' ),
					            'section'        => 'ip_section_ad1',
					            'settings'       => 'ip_ads_show1',
					            'type'           => 'radio',
					            'choices'        => array(
					            	'true'   => __( 'Mostrar', 'informatica_pereyra' ),
					                'false' => __( 'Ocultar', 'informatica_pereyra' )
					            )
					)));
				// end show 1
				// Img 1
					$wp_customize->add_setting('ip_ads_img1', array(
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ip_ads_img_control1', array(
						'label'=> __('Imagen', 'informatica_pereyra'),
						'section'=> 'ip_section_ad1',
						'settings'=> 'ip_ads_img1',
						'width' => 500,
						'height' => 250
					)));
				// end img 1
				// Title 1
					$wp_customize->add_setting('ip_ads_title1', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_ads_title_control1', array(
						'label'=> __('Titulo', 'informatica_pereyra'),
						'section'=> 'ip_section_ad1',
						'settings'=> 'ip_ads_title1',
						'description'	  => __( 'Es recomendable explicar que se trata de una publicidad', 'informatica_pereyra' )
					)));
				// end title 1
				// Text 1
					$wp_customize->add_setting('ip_ads_text1', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_encoded'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_ads_text_control1', array(
						'label'=> __('Script o Texto descriptivo', 'informatica_pereyra'),
						'section'=> 'ip_section_ad1',
						'type' => 'textarea',
						'settings'=> 'ip_ads_text1',
						'description'	  => __( 'Pega acá tu script de AdSense o banner promocional', 'informatica_pereyra' )

					)));
				// end text 1
				// Button 1
					$wp_customize->add_setting('ip_ads_btn1', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_ads_btn_control1', array(
						'label'=> __('Texto de boton', 'informatica_pereyra'),
						'section'=> 'ip_section_ad1',
						'settings'=> 'ip_ads_btn1',
						'description'	  => __( 'Agrega un boton hacia alguna web', 'informatica_pereyra' )

					)));
				// end button 1
				// Link button 1
					$wp_customize->add_setting('ip_ads_link_btn1', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_ads_link_btn_control1', array(
						'label'=> __('Link del boton', 'informatica_pereyra'),
						'section'=> 'ip_section_ad1',
						'settings'=> 'ip_ads_link_btn1',
						'description'	  => __( 'Pega acá el link del boton', 'informatica_pereyra' )

					)));
				// end link button 1
			// end ad 1
			// Ad 2
				$wp_customize->add_section('ip_section_ad2', array(
					'title'=> __('Publicidad inferior', 'informatica_pereyra'),
					'priority' => 2,
					'panel' => 'ip_panel_ads',
					'description' => __('Esta sección se ve en la parte inferior de todos los articulos', 'informatica_pereyra')
				));
				// Show 2
					$wp_customize->add_setting('ip_ads_show2', array(
						'default' => 'false',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_encoded'
					));
					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_ads_show_control2', array(
					            'label'          => __( 'Mostrar u Ocultar', 'informatica_pereyra' ),
					            'section'        => 'ip_section_ad2',
					            'settings'       => 'ip_ads_show2',
					            'type'           => 'radio',
					            'choices'        => array(
					            	'true'   => __( 'Mostrar', 'informatica_pereyra' ),
					                'false' => __( 'Ocultar', 'informatica_pereyra' )
					            )
					)));
				// end show 2
				// Img 2
					$wp_customize->add_setting('ip_ads_img2', array(
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ip_ads_img_control2', array(
						'label'=> __('Imagen', 'informatica_pereyra'),
						'section'=> 'ip_section_ad2',
						'settings'=> 'ip_ads_img2',
						'width' => 500,
						'height' => 250
					)));
				// end img 2
				// Title 2
					$wp_customize->add_setting('ip_ads_title2', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_ads_title_control2', array(
						'label'=> __('Titulo', 'informatica_pereyra'),
						'section'=> 'ip_section_ad2',
						'settings'=> 'ip_ads_title2',
						'description'	  => __( 'Es recomendable explicar que se trata de una publicidad', 'informatica_pereyra' )

					)));
				// end title 2
				// Text 2
					$wp_customize->add_setting('ip_ads_text2', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_encoded'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_ads_text_control2', array(
						'label'=> __('Script o Texto descriptivo', 'informatica_pereyra'),
						'section'=> 'ip_section_ad2',
						'type' => 'textarea',
						'settings'=> 'ip_ads_text2',
						'description'	  => __( 'Pega acá tu script de AdSense o banner promocional', 'informatica_pereyra' )

					)));
				// end text 2
				// Button 2
					$wp_customize->add_setting('ip_ads_btn2', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_ads_btn_control2', array(
						'label'=> __('Texto de boton', 'informatica_pereyra'),
						'section'=> 'ip_section_ad2',
						'settings'=> 'ip_ads_btn2',
						'description'	  => __( 'Agrega un boton hacia alguna web', 'informatica_pereyra' )

					)));
				// end button 2
				// Link button 2
					$wp_customize->add_setting('ip_ads_link_btn2', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_ads_link_btn_control2', array(
						'label'=> __('Link del boton', 'informatica_pereyra'),
						'section'=> 'ip_section_ad2',
						'settings'=> 'ip_ads_link_btn2',
						'description'	  => __( 'Pega acá el link del boton', 'informatica_pereyra' )

					)));
				// end link button 2
			// end ad 2
		// end ads
		// 6) Homepage section
			// Add panel
				$wp_customize->add_panel( 'ip_panel_home_text', array(
					'priority' => 5,
					'title' => __( 'Secciones homepage', 'informatica_pereyra' )
				));
			// end add panel
			// section 1
				$wp_customize->add_section('ip_section_homepage1', array(
					'title'=> __('Seccion 1', 'informatica_pereyra'),
					'priority' => 1,
					'panel' => 'ip_panel_home_text',
					'description' => __('Esta sección se ve en la parte superior solo en dispositivos grandes, en dispositivos pequeños se ve en la parte inferior', 'informatica_pereyra')
				));
				// Show 1
					$wp_customize->add_setting('ip_homepage_show1', array(
						'default' => 'false',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_encoded'
					));
					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_homepage_show_control1', array(
					            'label'          => __( 'Mostrar u Ocultar', 'informatica_pereyra' ),
					            'section'        => 'ip_section_homepage1',
					            'settings'       => 'ip_homepage_show1',
					            'type'           => 'radio',
					            'choices'        => array(
					            	'true'   => __( 'Mostrar', 'informatica_pereyra' ),
					                'false' => __( 'Ocultar', 'informatica_pereyra' )
					            )
					)));
				// end show 1
				// Img 1
					$wp_customize->add_setting('ip_homepage_img1', array(
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ip_homepage_img_control1', array(
						'label'=> __('Imagen', 'informatica_pereyra'),
						'section'=> 'ip_section_homepage1',
						'settings'=> 'ip_homepage_img1',
						'width' => 500,
						'height' => 250
					)));
				// end img 1
				// Title 1
					$wp_customize->add_setting('ip_homepage_title1', array(
							'default' => 'Anuncio destacado personalizable',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_homepage_title_control1', array(
						'label'=> __('Titulo', 'informatica_pereyra'),
						'section'=> 'ip_section_homepage1',
						'settings'=> 'ip_homepage_title1'
					)));
				// end title 1
				// Text 1
					$wp_customize->add_setting('ip_homepage_text1', array(
							'default' => 'Podes escribir acá avisos o pegar scripts de anuncios (adsense)',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_encoded'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_homepage_text_control1', array(
						'label'=> __('Script o Texto descriptivo', 'informatica_pereyra'),
						'section'=> 'ip_section_homepage1',
						'type' => 'textarea',
						'settings'=> 'ip_homepage_text1'
					)));
					// alings 1
						$wp_customize->add_setting('ip_homepage_text_aling1', array(
							'default' => 'center',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_encoded'
						));
						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_homepage_title_aling_control1', array(
						            'label'          => __( 'Alineación', 'informatica_pereyra' ),
						            'section'        => 'ip_section_homepage1',
						            'settings'       => 'ip_homepage_text_aling1',
						            'type'           => 'radio',
						            'choices'        => array(
						            	'left'   => __( 'Izquierda', 'informatica_pereyra' ),
						                'center' => __( 'Centrado', 'informatica_pereyra' ),
						                'right'  => __( 'Derecha', 'informatica_pereyra' ),
						                'justify'=> __( 'Justificado', 'informatica_pereyra' )
						            )
						)));
					// end alings 1
				// end text 1
				// Button 1
					$wp_customize->add_setting('ip_homepage_btn1', array(
							'default' => 'Boton a otra pagina o a un articulo',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_homepage_btn_control1', array(
						'label'=> __('Texto de boton', 'informatica_pereyra'),
						'section'=> 'ip_section_homepage1',
						'settings'=> 'ip_homepage_btn1'

					)));
				// end button 1
				// Link button 1
					$wp_customize->add_setting('ip_homepage_link_btn1', array(
							'default' => '#',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_homepage_link_btn_control1', array(
						'label'=> __('Link del boton', 'informatica_pereyra'),
						'section'=> 'ip_section_homepage1',
						'settings'=> 'ip_homepage_link_btn1'

					)));
				// end link button 1
			// end section 1
			// Section 2
				$wp_customize->add_section('ip_section_homepage2', array(
					'title'=> __('Seccion 2', 'informatica_pereyra'),
					'priority' => 2,
					'panel' => 'ip_panel_home_text'
				));
				// Show 2
					$wp_customize->add_setting('ip_homepage_show2', array(
						'default' => 'false',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_encoded'
					));
					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_homepage_show_control2', array(
					            'label'          => __( 'Mostrar u Ocultar', 'informatica_pereyra' ),
					            'section'        => 'ip_section_homepage2',
					            'settings'       => 'ip_homepage_show2',
					            'type'           => 'radio',
					            'choices'        => array(
					            	'true'   => __( 'Mostrar', 'informatica_pereyra' ),
					                'false' => __( 'Ocultar', 'informatica_pereyra' )
					            )
					)));
				// end show 2
				// Img 2
					$wp_customize->add_setting('ip_homepage_img2', array(
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ip_homepage_img_control2', array(
						'label'=> __('Imagen', 'informatica_pereyra'),
						'section'=> 'ip_section_homepage2',
						'settings'=> 'ip_homepage_img2',
						'width' => 500,
						'height' => 250
					)));
				// end img 2
				// Title 2
					$wp_customize->add_setting('ip_homepage_title2', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_homepage_title_control2', array(
						'label'=> __('Titulo', 'informatica_pereyra'),
						'section'=> 'ip_section_homepage2',
						'settings'=> 'ip_homepage_title2'
					)));
				// end title 2
				// Text 2
					$wp_customize->add_setting('ip_homepage_text2', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_encoded'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_homepage_text_control2', array(
						'label'=> __('Script o Texto descriptivo', 'informatica_pereyra'),
						'section'=> 'ip_section_homepage2',
						'type' => 'textarea',
						'settings'=> 'ip_homepage_text2'
					)));
					// alings 2
						$wp_customize->add_setting('ip_homepage_text_aling2', array(
							'default' => 'center',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_encoded'
						));
						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_homepage_title_aling_control2', array(
						            'label'          => __( 'Alineación', 'informatica_pereyra' ),
						            'section'        => 'ip_section_homepage2',
						            'settings'       => 'ip_homepage_text_aling2',
						            'type'           => 'radio',
						            'choices'        => array(
						            	'left'   => __( 'Izquierda', 'informatica_pereyra' ),
						                'center' => __( 'Centrado', 'informatica_pereyra' ),
						                'right'  => __( 'Derecha', 'informatica_pereyra' ),
						                'justify'=> __( 'Justificado', 'informatica_pereyra' )
						            )
						)));
					// end alings 2
				// end text 2
				// Button 2
					$wp_customize->add_setting('ip_homepage_btn2', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_homepage_btn_control2', array(
						'label'=> __('Texto de boton', 'informatica_pereyra'),
						'section'=> 'ip_section_homepage2',
						'settings'=> 'ip_homepage_btn2'

					)));
				// end button 2
				// Link button 2
					$wp_customize->add_setting('ip_homepage_link_btn2', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_homepage_link_btn_control2', array(
						'label'=> __('Link del boton', 'informatica_pereyra'),
						'section'=> 'ip_section_homepage2',
						'settings'=> 'ip_homepage_link_btn2'

					)));
				// end link button 2
			// end section 2
			// Section 3
				$wp_customize->add_section('ip_section_homepage3', array(
					'title'=> __('Seccion 3', 'informatica_pereyra'),
					'priority' => 3,
					'panel' => 'ip_panel_home_text'
				));
				// Show 3
					$wp_customize->add_setting('ip_homepage_show3', array(
						'default' => 'false',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_encoded'
					));
					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_homepage_show_control3', array(
					            'label'          => __( 'Mostrar u Ocultar', 'informatica_pereyra' ),
					            'section'        => 'ip_section_homepage3',
					            'settings'       => 'ip_homepage_show3',
					            'type'           => 'radio',
					            'choices'        => array(
					            	'true'   => __( 'Mostrar', 'informatica_pereyra' ),
					                'false' => __( 'Ocultar', 'informatica_pereyra' )
					            )
					)));
				// end show 3
				// Img 3
					$wp_customize->add_setting('ip_homepage_img3', array(
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ip_homepage_img_control3', array(
						'label'=> __('Imagen', 'informatica_pereyra'),
						'section'=> 'ip_section_homepage3',
						'settings'=> 'ip_homepage_img3',
						'width' => 500,
						'height' => 250
					)));
				// end img 3
				// Title 3
					$wp_customize->add_setting('ip_homepage_title3', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_homepage_title_control3', array(
						'label'=> __('Titulo', 'informatica_pereyra'),
						'section'=> 'ip_section_homepage3',
						'settings'=> 'ip_homepage_title3'
					)));
				// end text 3
				// Text 3
					$wp_customize->add_setting('ip_homepage_text3', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_encoded'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_homepage_text_control3', array(
						'label'=> __('Script o Texto descriptivo', 'informatica_pereyra'),
						'section'=> 'ip_section_homepage3',
						'type' => 'textarea',
						'settings'=> 'ip_homepage_text3'
					)));
					// alings 3
						$wp_customize->add_setting('ip_homepage_text_aling3', array(
							'default' => 'center',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_encoded'
						));
						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_homepage_title_aling_control3', array(
						            'label'          => __( 'Alineación', 'informatica_pereyra' ),
						            'section'        => 'ip_section_homepage3',
						            'settings'       => 'ip_homepage_text_aling3',
						            'type'           => 'radio',
						            'choices'        => array(
						            	'left'    => __( 'Izquierda', 'informatica_pereyra' ),
						                'center'  => __( 'Centrado', 'informatica_pereyra' ),
						                'right'   => __( 'Derecha', 'informatica_pereyra' ),
						                'justify' => __( 'Justificado', 'informatica_pereyra' )
						            )
						)));
					// end alings 3
				// end text 3
				// Button 3
					$wp_customize->add_setting('ip_homepage_btn3', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_homepage_btn_control3', array(
						'label'=> __('Texto de boton', 'informatica_pereyra'),
						'section'=> 'ip_section_homepage3',
						'settings'=> 'ip_homepage_btn3'

					)));
				// end button 3
				// Link button 3
					$wp_customize->add_setting('ip_homepage_link_btn3', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_homepage_link_btn_control3', array(
						'label'=> __('Link del boton', 'informatica_pereyra'),
						'section'=> 'ip_section_homepage3',
						'settings'=> 'ip_homepage_link_btn3'

					)));
				// end link button 3
			// end section 3
		// end homepage sectons
		// 7) Mobile buttons
			$wp_customize->add_section('ip_section_mobile', array(
				'title'=> __('Mobile', 'informatica_pereyra'),
				'priority' => 6
			));
			// User button
				$wp_customize->add_setting('ip_mobile_user_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_mobile_user_text_control', array(
					'label'=> __('Area de clientes', 'informatica_pereyra'),
					'section'=> 'ip_section_mobile',
					'settings'=> 'ip_mobile_user_text',
					'description'	  => __( 'Pega el link de la pagina de area de clientes (si es que tenés)', 'informatica_pereyra' ),

				)));
			// end user button
			// Whatsapp button
				$wp_customize->add_setting('ip_mobile_whatsapp_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_mobile_comment_text_control', array(
					'label'=> __('Whatsapp', 'informatica_pereyra'),
					'section'=> 'ip_section_mobile',
					'settings'=> 'ip_mobile_whatsapp_text',
					'type'           => 'radio',
					'choices'        => array(
						'true'   => __( 'Mostrar', 'informatica_pereyra' ),
							'false' => __( 'Ocultar', 'informatica_pereyra' )
					)
				)));
			// end comment button
			// Cart button
				$wp_customize->add_setting('ip_mobile_cart_text', array(
					'default' => 'false',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_mobile_cart_text_control', array(
					'label'=> __('Carrito', 'informatica_pereyra'),
					'section'=> 'ip_section_mobile',
					'settings'=> 'ip_mobile_cart_text',
					'type'           => 'radio',
					'choices'        => array(
						'true'   => __( 'Mostrar', 'informatica_pereyra' ),
							'false' => __( 'Ocultar', 'informatica_pereyra' )
					)
				)));
			// end cart button
			// Ssearch button
				$wp_customize->add_setting('ip_mobile_search_text', array(
					'default' => 'false',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));
				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_mobile_search_text_control', array(
				            'label'          => __( 'Buscar', 'informatica_pereyra' ),
				            'section'        => 'ip_section_mobile',
				            'settings'       => 'ip_mobile_search_text',
				            'type'           => 'radio',
				            'choices'        => array(
				            	'true'   => __( 'Mostrar', 'informatica_pereyra' ),
				                'false' => __( 'Ocultar', 'informatica_pereyra' )
				            )
				)));
			// end search form
		// end social buttons
		// 8) Woocomerce
			if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

				$wp_customize->add_section('ip_section_woocommerce_featured', array(
		            'title' => __('Productos destacados', 'informatica_pereyra'),
		            'description' => __('Los productos destacados se verán en la homepage'),
		            'theme_supports' => array('woocommerce'),
		            'priority' => 7,
		            'panel' => 'woocommerce'
			    ));
			    // Show 1
					$wp_customize->add_setting('ip_woocommerce_featured_show', array(
						'default' => 'false',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_encoded'
					));
					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_woocommerce_featured_show_control', array(
					            'label'          => __( 'Mostrar u Ocultar', 'informatica_pereyra' ),
					            'section'        => 'ip_section_woocommerce_featured',
					            'settings'       => 'ip_woocommerce_featured_show',
					            'type'           => 'radio',
					            'choices'        => array(
					            	'true'   => __( 'Mostrar', 'informatica_pereyra' ),
					                'false' => __( 'Ocultar', 'informatica_pereyra' )
					            ),
					            'input_attrs' => array(
								    'class' => 'd-inline-block'
								  )
					)));
				// end show 1
			    // Title 1
						$wp_customize->add_setting('ip_woocommerce_featured_title', array(
						'default' => '',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_woocommerce_featured_title_control', array(
						'label'=> __('Título', 'informatica_pereyra'),
						'section'=> 'ip_section_woocommerce_featured',
						'settings'=> 'ip_woocommerce_featured_title'

					)));
				// end title 1
				// Text 1
						$wp_customize->add_setting('ip_woocommerce_featured_text', array(
						'default' => '',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_woocommerce_featured_text_control', array(
						'label'=> __('Texto (opcional)', 'informatica_pereyra'),
						'section'=> 'ip_section_woocommerce_featured',
						'settings'=> 'ip_woocommerce_featured_text'

					)));
				// end text 1
			}
		// end woocomerce
		// 9) Analytics
			// Add panel
				$wp_customize->add_panel( 'ip_panel_analytics', array(
					'priority' => 7,
					'title' => __( 'Analítica', 'informatica_pereyra' )
				));
			// pixel
				$wp_customize->add_section('ip_section_face', array(
					'title'=> __('Facebook', 'informatica_pereyra'),
					'priority' => 1,
					'panel' => 'ip_panel_analytics'
				));
				$wp_customize->add_setting('ip_face_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_face_text_control', array(
					'label'=> __('Pixel de facebook', 'informatica_pereyra'),
					'section'=> 'ip_section_face',
					'settings'=> 'ip_face_text',
					'description'	  => __( 'Pega tu pixel (codigo manual)', 'informatica_pereyra' ),
				)));
			// end pixel
			// google
				$wp_customize->add_section('ip_section_google', array(
					'title'=> __('Google', 'informatica_pereyra'),
					'priority' => 1,
					'panel' => 'ip_panel_analytics'
				));
				$wp_customize->add_setting('ip_google_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_google_text_control', array(
					'label'=> __('Google analytics', 'informatica_pereyra'),
					'section'=> 'ip_section_google',
					'settings'=> 'ip_google_text',
					'description'	  => __( 'Pega tu codigo de google analytics', 'informatica_pereyra' ),
				)));
			// end pixel
		// end analytics
		// 10) Social buttons
			$wp_customize->add_section('ip_section_social', array(
				'title'=> __('Social', 'informatica_pereyra'),
				'priority' => 8
			));
			// Facebook button
				$wp_customize->add_setting('ip_social_face_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_social_face_text_control', array(
					'label'=> __('Facebook', 'informatica_pereyra'),
					'section'=> 'ip_section_social',
					'settings'=> 'ip_social_face_text',
					'description'	  => __( 'Pega el link de tu perfil de Facebook', 'informatica_pereyra' ),

				)));
			// end Facebook button
			// Instagram button
				$wp_customize->add_setting('ip_social_insta_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_social_insta_text_control', array(
					'label'=> __('Instagram', 'informatica_pereyra'),
					'section'=> 'ip_section_social',
					'settings'=> 'ip_social_insta_text',
					'description'	  => __( 'Pega el link de tu perfil de Instagram', 'informatica_pereyra' ),

				)));
			// end instagram button
			// Twitter button
				$wp_customize->add_setting('ip_social_tw_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_social_tw_text_control', array(
					'label'=> __('Twitter', 'informatica_pereyra'),
					'section'=> 'ip_section_social',
					'settings'=> 'ip_social_tw_text',
					'description'	  => __( 'Pega el link de tu perfil de Twitter', 'informatica_pereyra' ),

				)));
			// end twitter button
			// Youtube button
				$wp_customize->add_setting('ip_social_yt_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_social_yt_text_control', array(
					'label'=> __('Youtube', 'informatica_pereyra'),
					'section'=> 'ip_section_social',
					'settings'=> 'ip_social_yt_text',
					'description'	  => __( 'Pega el link de tu perfil de Youtube', 'informatica_pereyra' ),

				)));
			// end twitter button
		// end social buttons
		// 11) Corp texts

			$wp_customize->add_section('ip_section_text', array(
				'title'=> __('Textos corporativos', 'informatica_pereyra'),
				'priority' => 9
			));

			// Terms and conditions

				$wp_customize->add_setting('ip_headline_term', array(
				'default' => 'Example headline text',
				'sanitize_callback' => 'sanitize_string'

				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_footer_headline_term', array(
					'label'=> 'headline',
					'section'=> 'ip_section_text_headline',
					'settings'=> 'ip_headline_term'
				)));


				$wp_customize->add_setting('ip_headline_link_term', array(
				'default' => '#',
				'sanitize_callback' => 'sanitize_url_'

				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_footer_link_term', array(
					'label'=> 'Pagina de Terminos y Condiciones',
					'section'=> 'ip_section_text',
					'settings'=> 'ip_headline_link_term',
					'type' => 'dropdown-pages',

				)));
			// end terms and conditions
			// Privacy policies
				$wp_customize->add_setting('ip_headline_poli', array(
				'default' => 'Example headline text',
				'sanitize_callback' => 'sanitize_string'

				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_footer_headline_poli', array(
					'label'=> 'headline',
					'section'=> 'ip_section_text_headline',
					'settings'=> 'ip_headline_poli'
				)));


				$wp_customize->add_setting('ip_headline_link_poli', array(
				'default' => '#',
				'sanitize_callback' => 'sanitize_url_'

				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_footer_link_poli', array(
					'label'=> 'Pagina de Politicas de Privacidad',
					'section'=> 'ip_section_text',
					'settings'=> 'ip_headline_link_poli',
					'type' => 'dropdown-pages',

				)));
			// end privacy policies
			// Copyright
				$wp_customize->add_setting('ip_footer_text', array(
					'default' => 'Copyright © 2018',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_string'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_footer_text_control', array(
					'label'=> __('Copyright de esta web ', 'informatica_pereyra'),
					'section'=> 'ip_section_text',
					'settings'=> 'ip_footer_text',

				)));
			// end copyright
		// end corp texts
		// 12) QR code (argentina)
			$wp_customize->add_section('ip_section_qr', array(
				'title'=> __('Codigo QR Afip', 'informatica_pereyra'),
				'priority' => 10
			));
			// Code
				$wp_customize->add_setting('ip_qr_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_qr_text_control', array(
					'label'=> __('Codigo QR', 'informatica_pereyra'),
					'section'=> 'ip_section_qr',
					'settings'=> 'ip_qr_text',
					'description'	  => __( 'Pega tu Codigo QR de la afip (Argentina)', 'informatica_pereyra' ),

				)));
			// end code
		// end qr code
		// 13) GitHub Password
		$wp_customize->add_section('ip_section_github_pass', array(
			'title'=> __('Soporte Premium', 'informatica_pereyra'),
			'priority' => 10
		));
		// Code
			$wp_customize->add_setting('ip_github_pass', array(
				'default' => '',
				'trasnport' => 'refresh',
				'sanitize_callback' => 'sanitize_encoded'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ip_qr_text_control', array(
				'label'=> __('Contraseña', 'informatica_pereyra'),
				'section'=> 'ip_section_github_pass',
				'settings'=> 'ip_github_pass',
				'description'	  => __( 'Visita https://informatica.pereyra.online para contratar el soporte', 'informatica_pereyra' )

			)));
		// end code


	}


	add_action('customize_register', 'informatica_pereyra_customize_register');
	function sanitize_number( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);}
    function sanitize_string( $input ) {
    return filter_var($input, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);}
    function sanitize_url_( $input ) {
    return filter_var($input, FILTER_SANITIZE_URL );}
    function sanitize_encoded( $input ) {
    return filter_var($input, FILTER_UNSAFE_RAW);}


 ?>
