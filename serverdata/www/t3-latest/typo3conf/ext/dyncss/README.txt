Less in general
===============

The parser libs may ship dedicated information based on the language you want to use.

Frontend
========

Example TYPOScript:

	page.includeCSS.testLess = EXT:dyncss_test/Resources/Public/Stylesheets/Example.less

Example Overrides (dynamic color settings, dynamic image overrides):

	plugin.tx_dyncss {
		overrides {
			register = LOAD_REGISTER
			register {
				inputColor1.cObject = TEXT
				inputColor1.cObject {
					value = {$lessColorScheme}
					split {
						token.char = 124
						cObjNum = 1|*|2
						1.current = 1
					}
				}
			}
		inputColor1 = TEXT
		inputColor1 {
			value = {$lessColorScheme}
			split {
				token.char = 124
				cObjNum = 1|*|2
				1.current = 1
			}
		}
		inputColor2 = TEXT
		inputColor2 {
			value = {$lessColorScheme}
			split {
				token.char = 124
				cObjNum = 1|*|2
				2.current = 1
			}
		}
		rahmenBoxLogo = IMG_RESOURCE
		rahmenBoxLogo {
			stdWrap.wrap = url("|")
			file = GIFBUILDER
			file {
				XY = [20.w],[20.h]
				20 = IMAGE
				20.file = GIFBUILDER
				20.file {
					XY = 128,22
					backColor.stdWrap.cObject < plugin.tx_dyncss.overrides.inputColor1
				}
				20.mask = EXT:example/css/colors/less/images/logo_sw.png
			}
		}
	}


Example less file:

	@linkColor: blue;

	a {
		color: @linkColor;
	}

	h1 {
		a {
			color: lighten(@linkColor, 20%);
		}
	}


Backend: Include in backend.php
===============================

To see how it works, please take a look into dyncss_test.