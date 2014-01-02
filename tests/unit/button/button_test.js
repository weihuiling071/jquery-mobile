/*
 * mobile button unit tests
 */

define([
	"jquery"
], function( $ ) {
	module( "widgets.button" );

	QUnit.moduleStart(function( options ) {
		if ( options.name !== "widgets.button" ) { return; }
		QUnit.stop();

		requirejs.undef( "step" );
		requirejs.undef( "jquery.mobile.init" );
		requirejs.undef( "step!jquery.mobile.init" );

		requirejs.config({
			config: {
				"step": {
					steps: [
						[ "css!styles/themes/default/jquery.mobile.css" ],
						[ "tests/util/jquery.setNameSpace", "tests/util/jquery.testHelper" ],
						[ "widgets/page" ],
						[ "jquery.mobile.buttonMarkup" ],
						[ "widgets/forms/button" ],
						[ "tests/unit/button/fixture" ],
						[ "jquery.mobile.init" ]
					]
				}
			}
		});

		QUnit.moduleDone(function() {
			if ( options.name !== "widgets.button" ) { return; }
			$.mobile.loading._widget = null;
			QUnit.config.moduleStart.shift();
			QUnit.config.moduleDone.shift();
		});

		require([
			"step!jquery.mobile.init"
		], function() {
			QUnit.start();
		});
	});

	test( "button elements in the keepNative set shouldn't be enhanced", function() {
		deepEqual( $("button.should-be-native").siblings("div.ui-slider").length, 0 );
	});

	test( "button elements should be enhanced", function() {
		ok( $("#enhanced").hasClass( "ui-btn" ) );
	});

	test( "button markup text value should be changed on refresh", function() {
		var textValueButton = $("#hidden-element-addition"), valueButton = $("#value");

		// the value shouldn't change unless it's been altered
		textValueButton.button( 'refresh' );
		deepEqual( textValueButton.val(), "foo" );

		// use the text where it's provided
		deepEqual( textValueButton.val(), "foo" );
		textValueButton.val( "bar" ).button( 'refresh' );
		deepEqual( textValueButton.val(), "bar" );

		// prefer the text to the value
		textValueButton.text( "bar" ).val( "baz" ).button( 'refresh' );
		deepEqual( textValueButton.text(), "bar" );
	});

	test( "theme should be inherited", function() {
		var $inherited = $( "#theme-check" ),
			$explicit = $( "#theme-check-explicit" );

		deepEqual( $inherited.css( "background-color" ), "rgb(51, 51, 51)" ); /* The RGB value should match the background color we set for ui-btn-b in the default theme */
		ok( $explicit.hasClass( "ui-btn-a" ), "should not inherit" );
	});

	test( "Enhanced button elements should allow for phrasing content.", function() {
		var $htmlstring = $( "#contains-html" ),
			$htmlval = $( "#val-contains-html" );

		ok( $htmlstring.find("sup").length, "HTML contained within a button element should carry over to the enhanced version" );
	});
});
