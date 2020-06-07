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

	function empralidad_customize_register($wp_customize){

		// 1) Header
			// Add panel
				$wp_customize->add_panel( 'emp_panel_head', array(
					'priority' => 1,
					'title' => __( 'Cabecera', 'empralidad' )
				));
			// end add panel
			// Mobile Logo
				$wp_customize->add_section('emp_section_logo', array(
					'title'=> __('Logo', 'empralidad'),
					'priority' => 1,
					'panel' => 'emp_panel_head'
				));
				$wp_customize->add_setting('emp_head_logo', array(
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_string'
				));

				$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'emp_head_logo_control', array(
					'label'=> __('Logo para dispositivos móviles', 'empralidad'),
					'description'=> __( 'Ideal 1:1, máxima 21:9 (horizontal)', 'empralidad' ),
					'section'=> 'emp_section_logo',
					'settings'=> 'emp_head_logo',
					'flex_width' => true,
					'flex_height' => true
				)));
			// end mobile logo
			// Desktop Logo
				$wp_customize->add_setting('emp_head_logo_desktop', array(
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_string'
				));

				$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'emp_head_logo_desktop_control', array(
					'label'=> __('Logo para pantallas grades', 'empralidad'),
					'description'=> __( 'Ideal 1:1, máxima 21:9 (horizontal)', 'empralidad' ),
					'section'=> 'emp_section_logo',
					'settings'=> 'emp_head_logo_desktop',
					'flex_width' => true,
					'flex_height' => true
				)));
			// end desktop logo
			//Text header
				$wp_customize->add_section('emp_section_head_text', array(
					'title'=> __('Titulo cabecera', 'empralidad'),
					'priority' => 3,
					'panel' => 'emp_panel_head'
				));
				// Title 1
					$wp_customize->add_setting('emp_head_text_title', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_string'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_text_title_control', array(
					'label'=> __('Titulo principal', 'empralidad'),
					'section'=> 'emp_section_head_text',
					'settings'=> 'emp_head_text_title'

				)));
					// Font size
					$wp_customize->add_setting('emp_head_text_title_size', array(
						'default' => 1,
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));
					$wp_customize->add_control('emp_head_text_title_size_control1', array(
											'label'          => __( 'Tamaño', 'empralidad' ),
											'section'        => 'emp_section_head_text',
											'settings'       => 'emp_head_text_title_size',
											'type'					 => 'range',
											'input_attrs' 	 => array(
												'min' => 45,
												'max' => 250,
												'step' => 1,
											)
					));
					// end title 1
				// Textarea 1
					$wp_customize->add_setting('emp_head_textarea', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_string'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_textarea_control', array(
					'label'=> __('Texto', 'empralidad'),
					'section'=> 'emp_section_head_text',
					'settings'=> 'emp_head_textarea',
					'type' => 'textarea',
					'description'=> __( 'Texto destacado principal', 'empralidad' )

				)));
				// end textarea 1
				// Button 1
					$wp_customize->add_setting('emp_head_btn1', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_btn_control1', array(
						'label'=> __('Texto de boton', 'empralidad'),
						'section'=> 'emp_section_head_text',
						'settings'=> 'emp_head_btn1',
						'description'	  => __( 'Agrega un boton hacia alguna web', 'empralidad' )

					)));
				// end button 1
				// Link button 1
					$wp_customize->add_setting('emp_head_link_btn1', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_link_btn_control1', array(
						'label'=> __('Link del boton', 'empralidad'),
						'section'=> 'emp_section_head_text',
						'settings'=> 'emp_head_link_btn1',
						'description'	  => __( 'Pega acá el link del boton', 'empralidad' )

					)));
				// end link button 1
				// button or audio
					$wp_customize->add_setting('emp_head_audio', array(
						'default' => 'false',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));
					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_btn_aud_control1', array(
											'label'          => __( 'Mostrar botón o audio', 'empralidad' ),
											'section'        => 'emp_section_head_text',
											'settings'       => 'emp_head_audio',
											'type'           => 'radio',
											'choices'        => array(
												'button'   => __( 'Botón', 'empralidad' ),
												'audio'   => __( 'Audio', 'empralidad' ),
													'false' => __( 'deshabilitar', 'empralidad' )
											)
					)));
				// end button or audio
				// Link audio
					$wp_customize->add_setting('emp_head_link_audio', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_link_audio_control1', array(
						'label'=> __('Link del audio', 'empralidad'),
						'section'=> 'emp_section_head_text',
						'settings'=> 'emp_head_link_audio',
						'description'	  => __( 'Pega acá el link del servidor de streaming', 'empralidad' )

					)));
				// end link audio
				//Text header 2
					// if show
						$wp_customize->add_setting('emp_head_show2', array(
							'default' => 'Ocultar',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));
						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_show_control2', array(
												'label'          => __( 'Mostrar u Ocultar sección', 'empralidad' ),
												'section'        => 'emp_section_head_text2',
												'settings'       => 'emp_head_show2',
												'type'           => 'radio',
												'choices'        => array(
													'true'   => __( 'Mostrar', 'empralidad' ),
													'false' => __( 'Ocultar', 'empralidad' )
												)
						)));
					// end if
						$wp_customize->add_section('emp_section_head_text2', array(
							'title'=> __('Titulo cabecera 2', 'empralidad'),
							'priority' => 4,
							'panel' => 'emp_panel_head'
						));
						// Title 2
							$wp_customize->add_setting('emp_head_text2', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_text_control2', array(
							'label'=> __('Titulo principal', 'empralidad'),
							'section'=> 'emp_section_head_text2',
							'settings'=> 'emp_head_text2'

						)));
						// end title 2
						// Textarea 2
							$wp_customize->add_setting('emp_head_textarea2', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_textarea_control2', array(
							'label'=> __('Texto', 'empralidad'),
							'section'=> 'emp_section_head_text2',
							'settings'=> 'emp_head_textarea2',
							'type' => 'textarea',
							'description'=> __( 'Texto destacado principal', 'empralidad' )

						)));
						// end textarea 2
						// Button 2
							$wp_customize->add_setting('emp_head_btn2', array(
									'default' => '',
									'trasnport' => 'refresh',
									'sanitize_callback' => 'sanitize_string'
								));

							$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_btn_control2', array(
								'label'=> __('Texto de boton', 'empralidad'),
								'section'=> 'emp_section_head_text2',
								'settings'=> 'emp_head_btn2',
								'description'	  => __( 'Agrega un boton hacia alguna web', 'empralidad' )

							)));
						// end button 2
						// Link button 2
							$wp_customize->add_setting('emp_head_link_button2', array(
									'default' => '',
									'trasnport' => 'refresh',
									'sanitize_callback' => 'sanitize_string'
								));

							$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_link_btn_control2', array(
								'label'=> __('Link del boton', 'empralidad'),
								'section'=> 'emp_section_head_text2',
								'settings'=> 'emp_head_link_button2',
								'description'	  => __( 'Pega acá el link del boton', 'empralidad' )

							)));
						// end link button 1
						// button or audio
							$wp_customize->add_setting('emp_head_audio2', array(
								'default' => 'false',
								'trasnport' => 'refresh',
								'sanitize_callback' => 'sanitize_string'
							));
							$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_btn_aud_control2', array(
													'label'          => __( 'Mostrar botón o audio', 'empralidad' ),
													'section'        => 'emp_section_head_text2',
													'settings'       => 'emp_head_audio2',
													'type'           => 'radio',
													'choices'        => array(
														'button'   => __( 'Botón', 'empralidad' ),
														'audio'   => __( 'Audio', 'empralidad' ),
															'false' => __( 'deshabilitar', 'empralidad' )
													)
							)));
						// end button or audio
						// Link audio
							$wp_customize->add_setting('emp_head_link_audio2', array(
									'default' => '',
									'trasnport' => 'refresh',
									'sanitize_callback' => 'sanitize_string'
								));

							$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_link_audio_control2', array(
								'label'=> __('Link del audio', 'empralidad'),
								'section'=> 'emp_section_head_text2',
								'settings'=> 'emp_head_link_audio2',
								'description'	  => __( 'Pega acá el link del audio o canción de bienvenida', 'empralidad' )

							)));
						// end link audio
				// end slide2
				//Text header 3
					// If show
						$wp_customize->add_setting('emp_head_show3', array(
							'default' => 'Ocultar',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));
						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_show_control3', array(
												'label'          => __( 'Mostrar u Ocultar sección', 'empralidad' ),
												'section'        => 'emp_section_head_text3',
												'settings'       => 'emp_head_show3',
												'type'           => 'radio',
												'choices'        => array(
													'true'   => __( 'Mostrar', 'empralidad' ),
													'false' => __( 'Ocultar', 'empralidad' )
												)
						)));
					// end if
					$wp_customize->add_section('emp_section_head_text3', array(
						'title'=> __('Titulo cabecera 3', 'empralidad'),
						'priority' => 5,
						'panel' => 'emp_panel_head'
					));
					// Title 3
						$wp_customize->add_setting('emp_head_text3', array(
						'default' => '',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_text_control3', array(
						'label'=> __('Titulo principal', 'empralidad'),
						'section'=> 'emp_section_head_text3',
						'settings'=> 'emp_head_text3'

					)));
					// end title 3
					// Textarea 3
						$wp_customize->add_setting('emp_head_textarea3', array(
						'default' => '',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_textarea3_control', array(
						'label'=> __('Texto', 'empralidad'),
						'section'=> 'emp_section_head_text3',
						'settings'=> 'emp_head_textarea3',
						'type' => 'textarea',
						'description'=> __( 'Texto destacado principal', 'empralidad' )

					)));
					// end textarea 3
					// Button 3
						$wp_customize->add_setting('emp_head_button3', array(
								'default' => '',
								'trasnport' => 'refresh',
								'sanitize_callback' => 'sanitize_string'
							));

						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_btn_control3', array(
							'label'=> __('Texto de boton', 'empralidad'),
							'section'=> 'emp_section_head_text3',
							'settings'=> 'emp_head_button3',
							'description'	  => __( 'Agrega un boton hacia alguna web', 'empralidad' )

						)));
					// end button 3
					// Link button 3
						$wp_customize->add_setting('emp_head_link_button3', array(
								'default' => '',
								'trasnport' => 'refresh',
								'sanitize_callback' => 'sanitize_string'
							));

						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_link_btn_control3', array(
							'label'=> __('Link del boton', 'empralidad'),
							'section'=> 'emp_section_head_text3',
							'settings'=> 'emp_head_link_button3',
							'description'	  => __( 'Pega acá el link del boton', 'empralidad' )

						)));
					// end link button 3
					// button or audio
						$wp_customize->add_setting('emp_head_audio3', array(
							'default' => 'false',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));
						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_btn_aud_control3', array(
												'label'          => __( 'Mostrar botón o audio', 'empralidad' ),
												'section'        => 'emp_section_head_text3',
												'settings'       => 'emp_head_audio3',
												'type'           => 'radio',
												'choices'        => array(
													'button'   => __( 'Botón', 'empralidad' ),
													'audio'   => __( 'Audio', 'empralidad' ),
														'false' => __( 'deshabilitar', 'empralidad' )
												)
						)));
					// end button or audio
					// Link audio
						$wp_customize->add_setting('emp_head_link_audio3', array(
								'default' => '',
								'trasnport' => 'refresh',
								'sanitize_callback' => 'sanitize_string'
							));

						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_link_audio_control3', array(
							'label'=> __('Link del audio', 'empralidad'),
							'section'=> 'emp_section_head_text3',
							'settings'=> 'emp_head_link_audio3',
							'description'	  => __( 'Pega acá el link del audio o canción de bienvenida', 'empralidad' )

						)));
					// end link audio
			// end slide1
		// end header
		// 2) Styles
			// Add panel
				$wp_customize->add_panel( 'emp_panel_styles', array(
					'priority' => 2,
					'title' => __( 'Estilos', 'empralidad' )
				));
				// Backgrounds
					$wp_customize->add_section('emp_section_styles_background', array(
						'title'=> __('Colores de fondos', 'empralidad'),
						'priority' => 1,
						'panel' => 'emp_panel_styles'
					));
					// Primary color
					$wp_customize->add_setting('emp_background_primary', array(
						'default' => '#005777',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_styles_background_color_control', array(
						'label'=> __('Fondo principal', 'empralidad'),
						'section'=> 'emp_section_styles_background',
						'settings'=> 'emp_background_primary',
						'description'=> __( 'Fondo principal de la web', 'empralidad' )

					)));
					// Secondary color
					$wp_customize->add_setting('emp_background_secondary', array(
						'default' => '#005777',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_styles_background_secondary_control', array(
						'label'=> __('Fondo secundario', 'empralidad'),
						'section'=> 'emp_section_styles_background',
						'settings'=> 'emp_background_secondary',
						'description'=> __( 'Fondo de tarjetas y elementos secundarios', 'empralidad' )

					)));
					// Transparency
					$wp_customize->add_setting('emp_background_secondary_transparency', array(
						'default' => 'ff',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_encoded'
					));
					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_background_secondary_transparency_control', array(
											'label'          => __( 'Transparencia', 'empralidad' ),
											'description'=> __( 'Transparencia de fondo secundario', 'empralidad' ),
											'section'        => 'emp_section_styles_background',
											'settings'       => 'emp_background_secondary_transparency',
											'type'           => 'radio',
											'choices'        => array(
												'cc'   => __( 'Activar', 'empralidad' ),
												'ff' => __( 'Desactivar', 'empralidad' )
											)
					)));
				// end backgrounds
				// Media background
					$wp_customize->add_section('emp_section_emp_background_media', array(
						'title'=> __('Imagen/Video de fondo', 'empralidad'),
						'priority' => 2,
						'panel' => 'emp_panel_styles'
					));
					// Video background 1
						$wp_customize->add_setting('emp_background_media_video', array(
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string',

						));

						$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'emp_background_media_video_control', array(
							'mime_type' => 'video',
							'label'=> __('Video de  fondo', 'empralidad'),
							'section'=> 'emp_section_emp_background_media',
							'settings'=> 'emp_background_media_video',
							'description'=> __( 'Seleciona un video de fondo (adaptativo)', 'empralidad' )
						)));
					// end video background
					// Image background 1
						$wp_customize->add_setting('emp_background_media_image', array(
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string',

						));

						$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'emp_background_media_image_control', array(
							'mime_type' => 'image',
							'label'=> __('Imagen de  fondo', 'empralidad'),
							'section'=> 'emp_section_emp_background_media',
							'settings'=> 'emp_background_media_image',
							'description'=> __( 'Seleciona una imagen de fondo (png)', 'empralidad' )
						)));
					// end image background
					// filter-brightness 1
						$wp_customize->add_setting('emp_background_media_filter', array(
							'default' => '1',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));
						$wp_customize->add_control('emp_background_media_filter_control1', array(
												'label'          => __( 'Opacidad', 'empralidad' ),
												'section'        => 'emp_section_emp_background_media',
												'settings'       => 'emp_background_media_filter',
												'type'					 => 'range',
												'input_attrs' 	 => array(
													'min' => 0.01,
													'max' => 1,
													'step' => 0.01,
												)
						));
					// Background image size
						$wp_customize->add_setting('emp_background_media_filter', array(
							'default' => '1',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));
						$wp_customize->add_control('emp_background_media_filter_control1', array(
												'label'          => __( 'Opacidad', 'empralidad' ),
												'section'        => 'emp_section_emp_background_media',
												'settings'       => 'emp_background_media_filter',
												'type'					 => 'range',
												'input_attrs' 	 => array(
													'min' => 0.01,
													'max' => 1,
													'step' => 0.01,
												)
						));
				//Tipography
					$wp_customize->add_section('emp_section_styles_tipography', array(
						'title'=> __('Tipografía', 'empralidad'),
						'priority' => 2,
						'panel' => 'emp_panel_styles'
					));
					// Options
						// Color typography
						// color text
						$wp_customize->add_setting('emp_tipography_primarycolor', array(
							'default' => '#262626',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

						$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_tipography_primarycolor_control', array(
							'label'=> __('Texto cabecera', 'empralidad'),
							'section'=> 'emp_section_styles_tipography',
							'settings'=> 'emp_tipography_primarycolor'

						)));
						// color featured
						$wp_customize->add_setting('emp_tipography_color', array(
							'default' => '#005777',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

						$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_tipography_color_control', array(
							'label'=> __('Texto secundario', 'empralidad'),
							'section'=> 'emp_section_styles_tipography',
							'settings'=> 'emp_tipography_color',
							'description'=> __( 'Texto dentro de fondo secundario', 'empralidad' )

						)));
						// Font size
						$wp_customize->add_setting('emp_styles_tipography_size', array(
							'default' => 1,
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));
						$wp_customize->add_control('emp_styles_tipography_size_control1', array(
												'label'          => __( 'Tamaño', 'empralidad' ),
												'section'        => 'emp_section_styles_tipography',
												'settings'       => 'emp_styles_tipography_size',
												'type'					 => 'range',
											  'input_attrs' 	 => array(
											    'min' => 10,
											    'max' => 50,
											    'step' => 1,
											  )
						));
						// type
						$wp_customize->add_setting('emp_styles_tipography', array(
							'default' => 'sans-serif',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));
						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_styles_tipography_control1', array(
												'label'          => __( 'Tipografía', 'empralidad' ),
												'section'        => 'emp_section_styles_tipography',
												'settings'       => 'emp_styles_tipography',
												'type'           => 'radio',
												'choices'        => array(
													'serif'  			 => __( 'Serif', 'empralidad' ),
													'sans-serif'   => __( 'Sans-serif', 'empralidad' ),
													'varela round' => __( 'Varela Round', 'empralidad' ),
													'indie flower' => __( 'Indie Flower', 'empralidad' )
												)
						)));
						// text shadow
						$wp_customize->add_setting('emp_styles_text_shadow', array(
							'default' => 'false',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));
						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_styles_text_shadow_control1', array(
												'label'          => __( 'Sombras', 'empralidad' ),
												'section'        => 'emp_section_styles_tipography',
												'settings'       => 'emp_styles_text_shadow',
												'type'           => 'radio',
												'choices'        => array(
													'true'   => __( 'Activado', 'empralidad' ),
													'false'   => __( 'Desactivado', 'empralidad' )
												)
						)));
					// end options
					// Btn
						$wp_customize->add_section('emp_section_btn', array(
								'title'=> __('Botones', 'empralidad'),
								'priority' => 3,
								'panel' => 'emp_panel_styles'
							));
						// btn bg
							$wp_customize->add_setting('emp_btn_bg', array(
								'default' => '#005777',
								'trasnport' => 'refresh',
								'sanitize_callback' => 'sanitize_string'
							));

							$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_btn_bg_control', array(
								'label'=> __('Color de fondo', 'empralidad'),
								'section'=> 'emp_section_btn',
								'settings'=> 'emp_btn_bg'

							)));
						// btn text color
							$wp_customize->add_setting('emp_btn_color', array(
								'default' => '#ffffff',
								'trasnport' => 'refresh',
								'sanitize_callback' => 'sanitize_string'
							));

							$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_btn_color_control', array(
								'label'=> __('Texto', 'empralidad'),
								'section'=> 'emp_section_btn',
								'settings'=> 'emp_btn_color'

							)));
				//Borders
					$wp_customize->add_section('emp_section_styles_border', array(
						'title'=> __('Bordes', 'empralidad'),
						'priority' => 4,
						'panel' => 'emp_panel_styles'
					));
					// Options
						$wp_customize->add_setting('emp_styles_border', array(
							'default' => 'false',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));
						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_styles_border_control1', array(
												'label'          => __( 'Redondeado', 'empralidad' ),
												'section'        => 'emp_section_styles_border',
												'settings'       => 'emp_styles_border',
												'type'           => 'radio',
												'choices'        => array(
													'true'   => __( 'Habilitar', 'empralidad' ),
														'false' => __( 'Deshabilitar', 'empralidad' )
												)
						)));
		// end styles
		// 4) Whatsapp
			$wp_customize->add_section('emp_section_what', array(
				'title'=> __('Whatsapp', 'empralidad'),
				'priority' => 3
			));
			// Number
				$wp_customize->add_setting('emp_what_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_number'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_what_text_control', array(
					'label'=> __('Numero de contacto ', 'empralidad'),
					'section'=> 'emp_section_what',
					'description'	  => __( 'Tu numero sin espacios ni simbolos', 'empralidad' ),
					'settings'=> 'emp_what_text',

				)));
			// end number
		// end whatsapp
		// 5) Ads
			// Add panel
				$wp_customize->add_panel( 'emp_panel_ads', array(
					'priority' => 4,
					'title' => __( 'Secciones destacadas en articulos', 'empralidad' )
				));
			// end add panel
			// Ad 1
				$wp_customize->add_section('emp_section_ad1', array(
					'title'=> __('Publicidad superior', 'empralidad'),
					'priority' => 1,
					'panel' => 'emp_panel_ads',
					'description' => __('Esta sección se ve en la parte superior de todos los articulos', 'empralidad')
				));
				// Show 1
					$wp_customize->add_setting('emp_ads_show1', array(
						'default' => 'false',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_encoded'
					));
					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_ads_show_control1', array(
					            'label'          => __( 'Mostrar u Ocultar', 'empralidad' ),
					            'section'        => 'emp_section_ad1',
					            'settings'       => 'emp_ads_show1',
					            'type'           => 'radio',
					            'choices'        => array(
					            	'true'   => __( 'Mostrar', 'empralidad' ),
					                'false' => __( 'Ocultar', 'empralidad' )
					            )
					)));
				// end show 1
				// Img 1
					$wp_customize->add_setting('emp_ads_img1', array(
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'emp_ads_img_control1', array(
						'label'=> __('Imagen', 'empralidad'),
						'section'=> 'emp_section_ad1',
						'settings'=> 'emp_ads_img1',
						'width' => 500,
						'height' => 250
					)));
				// end img 1
				// Title 1
					$wp_customize->add_setting('emp_ads_title1', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_ads_title_control1', array(
						'label'=> __('Titulo', 'empralidad'),
						'section'=> 'emp_section_ad1',
						'settings'=> 'emp_ads_title1',
						'description'	  => __( 'Es recomendable explicar que se trata de una publicidad', 'empralidad' )
					)));
				// end title 1
				// Text 1
					$wp_customize->add_setting('emp_ads_text1', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_encoded'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_ads_text_control1', array(
						'label'=> __('Script o Texto descriptivo', 'empralidad'),
						'section'=> 'emp_section_ad1',
						'type' => 'textarea',
						'settings'=> 'emp_ads_text1',
						'description'	  => __( 'Pega acá tu script de AdSense o banner promocional', 'empralidad' )

					)));
				// end text 1
				// Button 1
					$wp_customize->add_setting('emp_ads_btn1', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_ads_btn_control1', array(
						'label'=> __('Texto de boton', 'empralidad'),
						'section'=> 'emp_section_ad1',
						'settings'=> 'emp_ads_btn1',
						'description'	  => __( 'Agrega un boton hacia alguna web', 'empralidad' )

					)));
				// end button 1
				// Link button 1
					$wp_customize->add_setting('emp_ads_link_btn1', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_ads_link_btn_control1', array(
						'label'=> __('Link del boton', 'empralidad'),
						'section'=> 'emp_section_ad1',
						'settings'=> 'emp_ads_link_btn1',
						'description'	  => __( 'Pega acá el link del boton', 'empralidad' )

					)));
				// end link button 1
			// end ad 1
			// Ad 2
				$wp_customize->add_section('emp_section_ad2', array(
					'title'=> __('Publicidad inferior', 'empralidad'),
					'priority' => 2,
					'panel' => 'emp_panel_ads',
					'description' => __('Esta sección se ve en la parte inferior de todos los articulos', 'empralidad')
				));
				// Show 2
					$wp_customize->add_setting('emp_ads_show2', array(
						'default' => 'false',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_encoded'
					));
					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_ads_show_control2', array(
					            'label'          => __( 'Mostrar u Ocultar', 'empralidad' ),
					            'section'        => 'emp_section_ad2',
					            'settings'       => 'emp_ads_show2',
					            'type'           => 'radio',
					            'choices'        => array(
					            	'true'   => __( 'Mostrar', 'empralidad' ),
					                'false' => __( 'Ocultar', 'empralidad' )
					            )
					)));
				// end show 2
				// Img 2
					$wp_customize->add_setting('emp_ads_img2', array(
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'emp_ads_img_control2', array(
						'label'=> __('Imagen', 'empralidad'),
						'section'=> 'emp_section_ad2',
						'settings'=> 'emp_ads_img2',
						'width' => 500,
						'height' => 250
					)));
				// end img 2
				// Title 2
					$wp_customize->add_setting('emp_ads_title2', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_ads_title_control2', array(
						'label'=> __('Titulo', 'empralidad'),
						'section'=> 'emp_section_ad2',
						'settings'=> 'emp_ads_title2',
						'description'	  => __( 'Es recomendable explicar que se trata de una publicidad', 'empralidad' )

					)));
				// end title 2
				// Text 2
					$wp_customize->add_setting('emp_ads_text2', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_encoded'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_ads_text_control2', array(
						'label'=> __('Script o Texto descriptivo', 'empralidad'),
						'section'=> 'emp_section_ad2',
						'type' => 'textarea',
						'settings'=> 'emp_ads_text2',
						'description'	  => __( 'Pega acá tu script de AdSense o banner promocional', 'empralidad' )

					)));
				// end text 2
				// Button 2
					$wp_customize->add_setting('emp_ads_btn2', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_ads_btn_control2', array(
						'label'=> __('Texto de boton', 'empralidad'),
						'section'=> 'emp_section_ad2',
						'settings'=> 'emp_ads_btn2',
						'description'	  => __( 'Agrega un boton hacia alguna web', 'empralidad' )

					)));
				// end button 2
				// Link button 2
					$wp_customize->add_setting('emp_ads_link_btn2', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_ads_link_btn_control2', array(
						'label'=> __('Link del boton', 'empralidad'),
						'section'=> 'emp_section_ad2',
						'settings'=> 'emp_ads_link_btn2',
						'description'	  => __( 'Pega acá el link del boton', 'empralidad' )

					)));
				// end link button 2
			// end ad 2
		// end ads
		// 6) Homepage section
			// Add panel
				$wp_customize->add_panel( 'emp_panel_home_text', array(
					'priority' => 5,
					'title' => __( 'Secciones homepage', 'empralidad' )
				));
			// end add panel
			// section 1
				$wp_customize->add_section('emp_section_homepage1', array(
					'title'=> __('Seccion 1', 'empralidad'),
					'priority' => 1,
					'panel' => 'emp_panel_home_text',
					'description' => __('Esta sección se ve en la parte superior solo en dispositivos grandes, en dispositivos pequeños se ve en la parte inferior', 'empralidad')
				));
				// Show 1
					$wp_customize->add_setting('emp_homepage_show1', array(
						'default' => 'false',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_encoded'
					));
					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_show_control1', array(
					            'label'          => __( 'Mostrar u Ocultar', 'empralidad' ),
					            'section'        => 'emp_section_homepage1',
					            'settings'       => 'emp_homepage_show1',
					            'type'           => 'radio',
					            'choices'        => array(
					            	'true'   => __( 'Mostrar', 'empralidad' ),
					                'false' => __( 'Ocultar', 'empralidad' )
					            )
					)));
				// end show 1
				// Img 1
					$wp_customize->add_setting('emp_homepage_img1', array(
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'emp_homepage_img_control1', array(
						'label'=> __('Imagen', 'empralidad'),
						'section'=> 'emp_section_homepage1',
						'settings'=> 'emp_homepage_img1',
						'width' => 500,
						'height' => 250
					)));
				// end img 1
				// Title 1
					$wp_customize->add_setting('emp_homepage_title1', array(
							'default' => 'Anuncio destacado personalizable',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_title_control1', array(
						'label'=> __('Titulo', 'empralidad'),
						'section'=> 'emp_section_homepage1',
						'settings'=> 'emp_homepage_title1'
					)));
				// end title 1
				// Text 1
					$wp_customize->add_setting('emp_homepage_text1', array(
							'default' => 'Podes escribir acá avisos o pegar scripts de anuncios (adsense)',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_encoded'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_text_control1', array(
						'label'=> __('Script o Texto descriptivo', 'empralidad'),
						'section'=> 'emp_section_homepage1',
						'type' => 'textarea',
						'settings'=> 'emp_homepage_text1'
					)));
					// alings 1
						$wp_customize->add_setting('emp_homepage_text_aling1', array(
							'default' => 'center',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_encoded'
						));
						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_title_aling_control1', array(
						            'label'          => __( 'Alineación', 'empralidad' ),
						            'section'        => 'emp_section_homepage1',
						            'settings'       => 'emp_homepage_text_aling1',
						            'type'           => 'radio',
						            'choices'        => array(
						            	'left'   => __( 'Izquierda', 'empralidad' ),
						                'center' => __( 'Centrado', 'empralidad' ),
						                'right'  => __( 'Derecha', 'empralidad' ),
						                'justify'=> __( 'Justificado', 'empralidad' )
						            )
						)));
					// end alings 1
				// end text 1
				// Button 1
					$wp_customize->add_setting('emp_homepage_btn1', array(
							'default' => 'Boton a otra pagina o a un articulo',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_btn_control1', array(
						'label'=> __('Texto de boton', 'empralidad'),
						'section'=> 'emp_section_homepage1',
						'settings'=> 'emp_homepage_btn1'

					)));
				// end button 1
				// Link button 1
					$wp_customize->add_setting('emp_homepage_link_btn1', array(
							'default' => '#',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_link_btn_control1', array(
						'label'=> __('Link del boton', 'empralidad'),
						'section'=> 'emp_section_homepage1',
						'settings'=> 'emp_homepage_link_btn1'

					)));
				// end link button 1
			// end section 1
			// Section 2
				$wp_customize->add_section('emp_section_homepage2', array(
					'title'=> __('Seccion 2', 'empralidad'),
					'priority' => 2,
					'panel' => 'emp_panel_home_text'
				));
				// Show 2
					$wp_customize->add_setting('emp_homepage_show2', array(
						'default' => 'false',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_encoded'
					));
					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_show_control2', array(
					            'label'          => __( 'Mostrar u Ocultar', 'empralidad' ),
					            'section'        => 'emp_section_homepage2',
					            'settings'       => 'emp_homepage_show2',
					            'type'           => 'radio',
					            'choices'        => array(
					            	'true'   => __( 'Mostrar', 'empralidad' ),
					                'false' => __( 'Ocultar', 'empralidad' )
					            )
					)));
				// end show 2
				// Img 2
					$wp_customize->add_setting('emp_homepage_img2', array(
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'emp_homepage_img_control2', array(
						'label'=> __('Imagen', 'empralidad'),
						'section'=> 'emp_section_homepage2',
						'settings'=> 'emp_homepage_img2',
						'width' => 500,
						'height' => 250
					)));
				// end img 2
				// Title 2
					$wp_customize->add_setting('emp_homepage_title2', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_title_control2', array(
						'label'=> __('Titulo', 'empralidad'),
						'section'=> 'emp_section_homepage2',
						'settings'=> 'emp_homepage_title2'
					)));
				// end title 2
				// Text 2
					$wp_customize->add_setting('emp_homepage_text2', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_encoded'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_text_control2', array(
						'label'=> __('Script o Texto descriptivo', 'empralidad'),
						'section'=> 'emp_section_homepage2',
						'type' => 'textarea',
						'settings'=> 'emp_homepage_text2'
					)));
					// alings 2
						$wp_customize->add_setting('emp_homepage_text_aling2', array(
							'default' => 'center',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_encoded'
						));
						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_title_aling_control2', array(
						            'label'          => __( 'Alineación', 'empralidad' ),
						            'section'        => 'emp_section_homepage2',
						            'settings'       => 'emp_homepage_text_aling2',
						            'type'           => 'radio',
						            'choices'        => array(
						            	'left'   => __( 'Izquierda', 'empralidad' ),
						                'center' => __( 'Centrado', 'empralidad' ),
						                'right'  => __( 'Derecha', 'empralidad' ),
						                'justify'=> __( 'Justificado', 'empralidad' )
						            )
						)));
					// end alings 2
				// end text 2
				// Button 2
					$wp_customize->add_setting('emp_homepage_btn2', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_btn_control2', array(
						'label'=> __('Texto de boton', 'empralidad'),
						'section'=> 'emp_section_homepage2',
						'settings'=> 'emp_homepage_btn2'

					)));
				// end button 2
				// Link button 2
					$wp_customize->add_setting('emp_homepage_link_btn2', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_link_btn_control2', array(
						'label'=> __('Link del boton', 'empralidad'),
						'section'=> 'emp_section_homepage2',
						'settings'=> 'emp_homepage_link_btn2'

					)));
				// end link button 2
			// end section 2
			// Section 3
				$wp_customize->add_section('emp_section_homepage3', array(
					'title'=> __('Seccion 3', 'empralidad'),
					'priority' => 3,
					'panel' => 'emp_panel_home_text'
				));
				// Show 3
					$wp_customize->add_setting('emp_homepage_show3', array(
						'default' => 'false',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_encoded'
					));
					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_show_control3', array(
					            'label'          => __( 'Mostrar u Ocultar', 'empralidad' ),
					            'section'        => 'emp_section_homepage3',
					            'settings'       => 'emp_homepage_show3',
					            'type'           => 'radio',
					            'choices'        => array(
					            	'true'   => __( 'Mostrar', 'empralidad' ),
					                'false' => __( 'Ocultar', 'empralidad' )
					            )
					)));
				// end show 3
				// Img 3
					$wp_customize->add_setting('emp_homepage_img3', array(
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'emp_homepage_img_control3', array(
						'label'=> __('Imagen', 'empralidad'),
						'section'=> 'emp_section_homepage3',
						'settings'=> 'emp_homepage_img3',
						'width' => 500,
						'height' => 250
					)));
				// end img 3
				// Title 3
					$wp_customize->add_setting('emp_homepage_title3', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_title_control3', array(
						'label'=> __('Titulo', 'empralidad'),
						'section'=> 'emp_section_homepage3',
						'settings'=> 'emp_homepage_title3'
					)));
				// end text 3
				// Text 3
					$wp_customize->add_setting('emp_homepage_text3', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_encoded'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_text_control3', array(
						'label'=> __('Script o Texto descriptivo', 'empralidad'),
						'section'=> 'emp_section_homepage3',
						'type' => 'textarea',
						'settings'=> 'emp_homepage_text3'
					)));
					// alings 3
						$wp_customize->add_setting('emp_homepage_text_aling3', array(
							'default' => 'center',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_encoded'
						));
						$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_title_aling_control3', array(
						            'label'          => __( 'Alineación', 'empralidad' ),
						            'section'        => 'emp_section_homepage3',
						            'settings'       => 'emp_homepage_text_aling3',
						            'type'           => 'radio',
						            'choices'        => array(
						            	'left'    => __( 'Izquierda', 'empralidad' ),
						                'center'  => __( 'Centrado', 'empralidad' ),
						                'right'   => __( 'Derecha', 'empralidad' ),
						                'justify' => __( 'Justificado', 'empralidad' )
						            )
						)));
					// end alings 3
				// end text 3
				// Button 3
					$wp_customize->add_setting('emp_homepage_btn3', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_btn_control3', array(
						'label'=> __('Texto de boton', 'empralidad'),
						'section'=> 'emp_section_homepage3',
						'settings'=> 'emp_homepage_btn3'

					)));
				// end button 3
				// Link button 3
					$wp_customize->add_setting('emp_homepage_link_btn3', array(
							'default' => '',
							'trasnport' => 'refresh',
							'sanitize_callback' => 'sanitize_string'
						));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_link_btn_control3', array(
						'label'=> __('Link del boton', 'empralidad'),
						'section'=> 'emp_section_homepage3',
						'settings'=> 'emp_homepage_link_btn3'

					)));
				// end link button 3
			// end section 3
		// end homepage sectons
		// 7) Mobile buttons
			$wp_customize->add_section('emp_section_mobile', array(
				'title'=> __('Mobile', 'empralidad'),
				'priority' => 6
			));
			// User button
				$wp_customize->add_setting('emp_mobile_user_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_mobile_user_text_control', array(
					'label'=> __('Area de clientes', 'empralidad'),
					'section'=> 'emp_section_mobile',
					'settings'=> 'emp_mobile_user_text',
					'description'	  => __( 'Pega el link de la pagina de area de clientes (si es que tenés)', 'empralidad' ),

				)));
			// end user button
			// Whatsapp button
				$wp_customize->add_setting('emp_mobile_whatsapp_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_mobile_comment_text_control', array(
					'label'=> __('Whatsapp', 'empralidad'),
					'section'=> 'emp_section_mobile',
					'settings'=> 'emp_mobile_whatsapp_text',
					'type'           => 'radio',
					'choices'        => array(
						'true'   => __( 'Mostrar', 'empralidad' ),
							'false' => __( 'Ocultar', 'empralidad' )
					)
				)));
			// end comment button
			// Cart button
				$wp_customize->add_setting('emp_mobile_cart_text', array(
					'default' => 'false',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_mobile_cart_text_control', array(
					'label'=> __('Carrito', 'empralidad'),
					'section'=> 'emp_section_mobile',
					'settings'=> 'emp_mobile_cart_text',
					'type'           => 'radio',
					'choices'        => array(
						'true'   => __( 'Mostrar', 'empralidad' ),
							'false' => __( 'Ocultar', 'empralidad' )
					)
				)));
			// end cart button
			// Ssearch button
				$wp_customize->add_setting('emp_mobile_search_text', array(
					'default' => 'false',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));
				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_mobile_search_text_control', array(
				            'label'          => __( 'Buscar', 'empralidad' ),
				            'section'        => 'emp_section_mobile',
				            'settings'       => 'emp_mobile_search_text',
				            'type'           => 'radio',
				            'choices'        => array(
				            	'true'   => __( 'Mostrar', 'empralidad' ),
				                'false' => __( 'Ocultar', 'empralidad' )
				            )
				)));
			// end search form
		// end social buttons
		// 8) Woocomerce
			if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

				$wp_customize->add_section('emp_section_woocommerce_featured', array(
		            'title' => __('Productos destacados', 'empralidad'),
		            'description' => __('Los productos destacados se verán en la homepage'),
		            'theme_supports' => array('woocommerce'),
		            'priority' => 7,
		            'panel' => 'woocommerce'
			    ));
			    // Show 1
					$wp_customize->add_setting('emp_woocommerce_featured_show', array(
						'default' => 'false',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_encoded'
					));
					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_woocommerce_featured_show_control', array(
					            'label'          => __( 'Mostrar u Ocultar', 'empralidad' ),
					            'section'        => 'emp_section_woocommerce_featured',
					            'settings'       => 'emp_woocommerce_featured_show',
					            'type'           => 'radio',
					            'choices'        => array(
					            	'true'   => __( 'Mostrar', 'empralidad' ),
					                'false' => __( 'Ocultar', 'empralidad' )
					            ),
					            'input_attrs' => array(
								    'class' => 'd-inline-block'
								  )
					)));
				// end show 1
			    // Title 1
						$wp_customize->add_setting('emp_woocommerce_featured_title', array(
						'default' => '',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_woocommerce_featured_title_control', array(
						'label'=> __('Título', 'empralidad'),
						'section'=> 'emp_section_woocommerce_featured',
						'settings'=> 'emp_woocommerce_featured_title'

					)));
				// end title 1
				// Text 1
						$wp_customize->add_setting('emp_woocommerce_featured_text', array(
						'default' => '',
						'trasnport' => 'refresh',
						'sanitize_callback' => 'sanitize_string'
					));

					$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_woocommerce_featured_text_control', array(
						'label'=> __('Texto (opcional)', 'empralidad'),
						'section'=> 'emp_section_woocommerce_featured',
						'settings'=> 'emp_woocommerce_featured_text'

					)));
				// end text 1
			}
		// end woocomerce
		// 9) Analytics
			// Add panel
				$wp_customize->add_panel( 'emp_panel_analytics', array(
					'priority' => 7,
					'title' => __( 'Analítica', 'empralidad' )
				));
			// pixel
				$wp_customize->add_section('emp_section_face', array(
					'title'=> __('Facebook', 'empralidad'),
					'priority' => 1,
					'panel' => 'emp_panel_analytics'
				));
				$wp_customize->add_setting('emp_face_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_face_text_control', array(
					'label'=> __('Pixel de facebook', 'empralidad'),
					'section'=> 'emp_section_face',
					'settings'=> 'emp_face_text',
					'description'	  => __( 'Pega tu pixel (codigo manual)', 'empralidad' ),
				)));
			// end pixel
			// google
				$wp_customize->add_section('emp_section_google', array(
					'title'=> __('Google', 'empralidad'),
					'priority' => 1,
					'panel' => 'emp_panel_analytics'
				));
				$wp_customize->add_setting('emp_google_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_google_text_control', array(
					'label'=> __('Google analytics', 'empralidad'),
					'section'=> 'emp_section_google',
					'settings'=> 'emp_google_text',
					'description'	  => __( 'Pega tu codigo de google analytics', 'empralidad' ),
				)));
			// end pixel
		// end analytics
		// 10) Social buttons
			$wp_customize->add_section('emp_section_social', array(
				'title'=> __('Social', 'empralidad'),
				'priority' => 8
			));
			// Facebook button
				$wp_customize->add_setting('emp_social_face_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_social_face_text_control', array(
					'label'=> __('Facebook', 'empralidad'),
					'section'=> 'emp_section_social',
					'settings'=> 'emp_social_face_text',
					'description'	  => __( 'Pega el link de tu perfil de Facebook', 'empralidad' ),

				)));
			// end Facebook button
			// Instagram button
				$wp_customize->add_setting('emp_social_insta_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_social_insta_text_control', array(
					'label'=> __('Instagram', 'empralidad'),
					'section'=> 'emp_section_social',
					'settings'=> 'emp_social_insta_text',
					'description'	  => __( 'Pega el link de tu perfil de Instagram', 'empralidad' ),

				)));
			// end instagram button
			// Twitter button
				$wp_customize->add_setting('emp_social_tw_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_social_tw_text_control', array(
					'label'=> __('Twitter', 'empralidad'),
					'section'=> 'emp_section_social',
					'settings'=> 'emp_social_tw_text',
					'description'	  => __( 'Pega el link de tu perfil de Twitter', 'empralidad' ),

				)));
			// end twitter button
			// Youtube button
				$wp_customize->add_setting('emp_social_yt_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_social_yt_text_control', array(
					'label'=> __('Youtube', 'empralidad'),
					'section'=> 'emp_section_social',
					'settings'=> 'emp_social_yt_text',
					'description'	  => __( 'Pega el link de tu perfil de Youtube', 'empralidad' ),

				)));
			// end twitter button
		// end social buttons
		// 11) Corp texts

			$wp_customize->add_section('emp_section_text', array(
				'title'=> __('Footer', 'empralidad'),
				'priority' => 9
			));

			// Terms and conditions

				$wp_customize->add_setting('emp_headline_term', array(
				'default' => 'Example headline text',
				'sanitize_callback' => 'sanitize_string'

				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_footer_headline_term', array(
					'label'=> 'headline',
					'section'=> 'emp_section_text_headline',
					'settings'=> 'emp_headline_term'
				)));


				$wp_customize->add_setting('emp_headline_link_term', array(
				'default' => '#',
				'sanitize_callback' => 'sanitize_url_'

				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_footer_link_term', array(
					'label'=> 'Pagina de Terminos y Condiciones',
					'section'=> 'emp_section_text',
					'settings'=> 'emp_headline_link_term',
					'type' => 'dropdown-pages',

				)));
			// end terms and conditions
			// Privacy policies
				$wp_customize->add_setting('emp_headline_poli', array(
				'default' => 'Example headline text',
				'sanitize_callback' => 'sanitize_string'

				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_footer_headline_poli', array(
					'label'=> 'headline',
					'section'=> 'emp_section_text_headline',
					'settings'=> 'emp_headline_poli'
				)));


				$wp_customize->add_setting('emp_headline_link_poli', array(
				'default' => '#',
				'sanitize_callback' => 'sanitize_url_'

				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_footer_link_poli', array(
					'label'=> 'Pagina de Politicas de Privacidad',
					'section'=> 'emp_section_text',
					'settings'=> 'emp_headline_link_poli',
					'type' => 'dropdown-pages',

				)));
			// end privacy policies
			// Copyright
				$wp_customize->add_setting('emp_footer_text', array(
					'default' => 'Copyright © 2018',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_string'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_footer_text_control', array(
					'label'=> __('Copyright de esta web ', 'empralidad'),
					'section'=> 'emp_section_text',
					'settings'=> 'emp_footer_text',

				)));
			// end copyright
		// end corp texts
		// 12) QR code (argentina)
			$wp_customize->add_section('emp_section_qr', array(
				'title'=> __('Codigo QR Afip', 'empralidad'),
				'priority' => 10
			));
			// Code
				$wp_customize->add_setting('emp_qr_text', array(
					'default' => '',
					'trasnport' => 'refresh',
					'sanitize_callback' => 'sanitize_encoded'
				));

				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_qr_text_control', array(
					'label'=> __('Codigo QR', 'empralidad'),
					'section'=> 'emp_section_qr',
					'settings'=> 'emp_qr_text',
					'description'	  => __( 'Pega tu Codigo QR de la afip (Argentina)', 'empralidad' ),

				)));
			// end code
		// end qr code
		// 13) GitHub Password
		$wp_customize->add_section('emp_section_github_pass', array(
			'title'=> __('Soporte Premium', 'empralidad'),
			'priority' => 10
		));
		// Code
			$wp_customize->add_setting('emp_github_pass', array(
				'default' => '',
				'trasnport' => 'refresh',
				'sanitize_callback' => 'sanitize_encoded'
			));

			$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_qr_text_control', array(
				'label'=> __('Contraseña', 'empralidad'),
				'section'=> 'emp_section_github_pass',
				'settings'=> 'emp_github_pass',
				'description'	  => __( 'Visita https://empralidad.com.ar para contratar el soporte', 'empralidad' )

			)));
		// end code


	}


	add_action('customize_register', 'empralidad_customize_register');
	function sanitize_number( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);}
    function sanitize_string( $input ) {
    return filter_var($input, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);}
    function sanitize_url_( $input ) {
    return filter_var($input, FILTER_SANITIZE_URL );}
    function sanitize_encoded( $input ) {
    return filter_var($input, FILTER_UNSAFE_RAW);}


 ?>
