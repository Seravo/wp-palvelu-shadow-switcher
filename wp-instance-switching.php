<?php
/*
Plugin Name: WP Instance switching
Description: Switch between WP instances
Version:     0.0.1
Author:      Tari Zahabi / Seravo
Domain Path: /languages/
License:     BSD 2-Clause


* Copyright (c) 2015, Tari Zahabi
* All rights reserved.
* Redistribution and use in source and binary forms, with or without
* modification, are permitted provided that the following conditions are met:
*
*     * Redistributions of source code must retain the above copyright
*       notice, this list of conditions and the following disclaimer.
*     * Redistributions in binary form must reproduce the above copyright
*       notice, this list of conditions and the following disclaimer in the
*       documentation and/or other materials provided with the distribution.
*     * Neither the name of the University of California, Berkeley nor the
*       names of its contributors may be used to endorse or promote products
*       derived from this software without specific prior written permission.
*
* THIS SOFTWARE IS PROVIDED BY THE REGENTS AND CONTRIBUTORS ``AS IS'' AND ANY
* EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
* WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
* DISCLAIMED. IN NO EVENT SHALL THE REGENTS AND CONTRIBUTORS BE LIABLE FOR ANY
* DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
* (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
* LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
* ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
* (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
* SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

*/


class instance_switching {
  /**
  * Do the necessary initializations here
  */  
  public function __construct(){

    add_action( 'admin_bar_menu', array( $this, 'wpis_modify_admin_bar' ),999 );
    
  }


  public function wpis_modify_admin_bar( WP_Admin_Bar $wp_admin_bar ){

    if ( !function_exists( 'is_admin_bar_showing' ) ) {
			return;
		}
    if ( !is_admin_bar_showing() ) {
			return;
		}

    $args = array(
		'id'    => 'instance_switch',
		'title' => 'Switch Instance',
		'href'  => 'http://google.com',
		'meta'  => array( 'class' => 'my-toolbar-page' )
	);

    $wp_admin_bar->add_node( $args );

  }
}


global $instance_switching;

$instance_switching = new instance_switching;



?>