# add jquery library
includeLibs.t3jquery = EXT:t3jquery/class.tx_t3jquery.php

page {
	# add jquery to page
    10 = USER
    10.userFunc = tx_t3jquery->addJqJS

	# header
	20 < preCodeHeader
	23 < header
	26 < postCodeHeader

	# feature
	30 < evaluatedPreCodeFeature
	33 = COA
	33 {
		10 = LOAD_REGISTER
		10 {
		    tempContainerWidth = {$containerWidth}
		    tempContainerWidth.dataWrap = | + {register:featureLeftPadding} + {register:featureRightPadding}
		    containerWidth.data = register:tempContainerWidth
		    containerWidth.prioriCalc = intval
		    maxImageWidth.data = register:containerWidth
		    originalContainerWidth.data = register:containerWidth
		    nestingLevel = 0
		    containerElementPresent = 0
		}
		20 = RECORDS
		20 {
		    source.current = 1
		    tables = tt_content
		    stdWrap {
		        required = 1
		        dataWrap = <div id="feature" class="{register:featureClass}"><!--TYPO3SEARCH_begin--> | <!--TYPO3SEARCH_end--><div class="clearOnly">&nbsp;</div></div><!-- end #feature  -->
		        ## Set to load register only if content is present (required = 1) so that preCodeFeature & postCodeFeature is properly triggered
		        postCObject = LOAD_REGISTER
		        postCObject.contentElementsPresent = 1
		    }
		}
		30 = LOAD_REGISTER
		30 {
		    noFeatureContentFlag = 1
		    noFeatureContentFlag.if.isLessThan.stdWrap.dataWrap = {register:contentElementsPresent}{register:containerElementPresent}
		    noFeatureContentFlag.if.value = 1
		}
	}
	36 < evaluatedPostCodeFeature

	40 < preCodeContent

	# contentblock1
	41 < preCodeContentBlock-1
	43 = COA
	43 {
		10 = LOAD_REGISTER
		10 {
			containerWidth = {$containerWidth}
			maxImageWidth = {$containerWidth}
			originalContainerWidth.data = register:containerWidth
			nestingLevel = 0
		}
		20 = COA
		20 {
		    wrap = <div id="contentBlock-1"><!--TYPO3SEARCH_begin-->|<!--TYPO3SEARCH_end--><div class="clearOnly">&nbsp;</div></div>
		    10 = TEXT
		    10 {
		        data = page:title
		        htmlSpecialChars = 1
		        wrap = <h1 class="csc-firstHeader centralHeadline page-header">|</h1>
		        if {
		            value.data = register:autoMainHeadline
		            equals = 0
		            negate = 1
		        }
		    }
		    20 = CONTENT
			20 {
			    table = tt_content
			    select.orderBy = sorting
			    select.where   = colPos = 0
			}
		}
	}
	46 < postCodeContentBlock-1

	# preCodeContent
	50 < preCodeGeneratedContent-1
	53 = COA
	53 {
		10 = LOAD_REGISTER
		10 {
		    containerWidth = {$containerWidth}
		    maxImageWidth = {$containerWidth}
		    originalContainerWidth.data = register:containerWidth
		    nestingLevel = 0
		}
		20 = CONTENT
		20 {
		    wrap = <div id="generatedContent-1">|</div><!-- end #generatedContent-1  -->
		    table = tt_content
		    select.pidInList = {$contentSource}
		    select.languageField = sys_language_uid
		}
	}
	56 < postCodeGeneratedContent-1

	90 < preCodeFooter
	93 < footer
	96 < postCodeFooter
}
