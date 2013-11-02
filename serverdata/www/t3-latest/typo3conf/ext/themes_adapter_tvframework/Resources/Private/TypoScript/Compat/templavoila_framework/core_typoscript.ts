##############################################################
# dsConfig is the library included in each TV datastructures
##############################################################

dsConfig = COA
dsConfig.10 = CASE
dsConfig.10 {
	key.field = field_auto_header_switch
	default = LOAD_REGISTER
	default.autoMainHeadline = {$autoMainHeadlineDefault}
	1 = LOAD_REGISTER
	1.autoMainHeadline = 1
	2 = LOAD_REGISTER
	2.autoMainHeadline = 0
}
dsConfig.20 = CASE
dsConfig.20 {
	key.field = field_feature_bleed_switch
	default = CASE
	default {
		key = {$featureBleedDefault}
		default = LOAD_REGISTER
		default {
			featureClass = none
			featureLeftPadding = 0
			featureRightPadding = 0
		}
		1 = LOAD_REGISTER
		1 {
			featureClass = bleed
			featureLeftPadding = {$featureLeftPadding}
			featureRightPadding = {$featureRightPadding}
		}
	}
	1 = LOAD_REGISTER
	1 {
		featureClass = bleed
		featureLeftPadding = {$featureLeftPadding}
		featureRightPadding = {$featureRightPadding}
	}
	2 = LOAD_REGISTER
	2 {
		featureClass = none
		featureLeftPadding = 0
		featureRightPadding = 0
	}
}

dsConfig.generatedContent-1.contentSource = {$generatedContent-1.source}
dsConfig.generatedContent-2.contentSource = {$generatedContent-2.source}

##############################################################
# containerWidth is the library used to supply the main container
# widths to the data structures. The actual values are supplied
# by constants whose values are set within each skin
##############################################################

containerWidth {
	f1a {
		feature = {$containerWidth.f1a.feature}
		contentBlock-1 = {$containerWidth.f1a.contentBlock-1}
	}
	f1b {
		feature = {$containerWidth.f1b.feature}
		contentBlock-1 = {$containerWidth.f1b.contentBlock-1}
	}
	f1c {
		feature = {$containerWidth.f1c.feature}
		contentBlock-1 = {$containerWidth.f1c.contentBlock-1}
	}
	f1d {
		feature = {$containerWidth.f1d.feature}
		contentBlock-1 = {$containerWidth.f1d.contentBlock-1}
		generatedContent-1 = {$containerWidth.f1d.generatedContent-1}
	}
	f1e {
		feature = {$containerWidth.f1e.feature}
		contentBlock-1 = {$containerWidth.f1e.contentBlock-1}
		generatedContent-2 = {$containerWidth.f1e.generatedContent-2}
	}
	f1f {
		feature = {$containerWidth.f1f.feature}
		contentBlock-1 = {$containerWidth.f1f.contentBlock-1}
		generatedContent-1 = {$containerWidth.f1f.generatedContent-1}
		generatedContent-2 = {$containerWidth.f1f.generatedContent-2}
	}
	f2a {
		feature = {$containerWidth.f2a.feature}
		contentBlock-1 = {$containerWidth.f2a.contentBlock-1}
		contentBlock-2 = {$containerWidth.f2a.contentBlock-2}
	}
	f2b {
		feature = {$containerWidth.f2b.feature}
		contentBlock-1 = {$containerWidth.f2b.contentBlock-1}
		contentBlock-2 = {$containerWidth.f2b.contentBlock-2}
	}
	f2c {
		feature = {$containerWidth.f2c.feature}
		contentBlock-1 = {$containerWidth.f2c.contentBlock-1}
		contentBlock-2 = {$containerWidth.f2c.contentBlock-2}
	}
	f2d {
		feature = {$containerWidth.f2d.feature}
		contentBlock-1 = {$containerWidth.f2d.contentBlock-1}
		contentBlock-2 = {$containerWidth.f2d.contentBlock-2}
		generatedContent-1 = {$containerWidth.f2d.generatedContent-1}
	}
	f2e {
		feature = {$containerWidth.f2e.feature}
		contentBlock-1 = {$containerWidth.f2e.contentBlock-1}
		contentBlock-2 = {$containerWidth.f2e.contentBlock-2}
		generatedContent-2 = {$containerWidth.f2e.generatedContent-2}
	}
	f3a {
		feature = {$containerWidth.f3a.feature}
		contentBlock-1 = {$containerWidth.f3a.contentBlock-1}
		contentBlock-2 = {$containerWidth.f3a.contentBlock-2}
		contentBlock-3 = {$containerWidth.f3a.contentBlock-3}
	}
	f3b {
		feature = {$containerWidth.f3b.feature}
		contentBlock-1 = {$containerWidth.f3b.contentBlock-1}
		contentBlock-2 = {$containerWidth.f3b.contentBlock-2}
		contentBlock-3 = {$containerWidth.f3b.contentBlock-3}
	}
	f3c {
		feature = {$containerWidth.f3c.feature}
		contentBlock-1 = {$containerWidth.f3c.contentBlock-1}
		contentBlock-2 = {$containerWidth.f3c.contentBlock-2}
		contentBlock-3 = {$containerWidth.f3c.contentBlock-3}
	}
	f3d {
		feature = {$containerWidth.f3d.feature}
		contentBlock-1 = {$containerWidth.f3d.contentBlock-1}
		contentBlock-2 = {$containerWidth.f3d.contentBlock-2}
		contentBlock-3 = {$containerWidth.f3d.contentBlock-3}
	}
}



##############################################################
# moduleGroupSetup is the library used to load the register
# with the various values needed by the module groups. The 
# default values supplied by the the skins via constants
##############################################################

### Setup for Modules

moduleGroupSetup = COA
moduleGroupSetup.10 = LOAD_REGISTER
moduleGroupSetup.10 {
	moduleGutter = {$globalGutter}
	moduleBodyWrapBorderWidth1 = {$moduleBodyWrapBorderWidth}
	moduleBodyTopBuffer1 = {$moduleBodyTopBuffer}
	moduleBodyLeftBuffer1 = {$moduleBodyLeftBuffer}
	moduleBodyRightBuffer1 = {$moduleBodyRightBuffer}
	moduleBodyBottomBuffer1 = {$moduleBodyBottomBuffer}
	moduleBodyWrapBorderWidth2 = {$moduleBodyWrapBorderWidth}
	moduleBodyTopBuffer2 = {$moduleBodyTopBuffer}
	moduleBodyLeftBuffer2 = {$moduleBodyLeftBuffer}
	moduleBodyRightBuffer2 = {$moduleBodyRightBuffer}
	moduleBodyBottomBuffer2 = {$moduleBodyBottomBuffer}
	moduleBodyWrapBorderWidth3 = {$moduleBodyWrapBorderWidth}
	moduleBodyTopBuffer3 = {$moduleBodyTopBuffer}
	moduleBodyLeftBuffer3 = {$moduleBodyLeftBuffer}
	moduleBodyRightBuffer3 = {$moduleBodyRightBuffer}
	moduleBodyBottomBuffer3 = {$moduleBodyBottomBuffer}
	moduleBodyWrapBorderWidth4 = {$moduleBodyWrapBorderWidth}
	moduleBodyTopBuffer4 = {$moduleBodyTopBuffer}
	moduleBodyLeftBuffer4 = {$moduleBodyLeftBuffer}
	moduleBodyRightBuffer4 = {$moduleBodyRightBuffer}
	moduleBodyBottomBuffer4 = {$moduleBodyBottomBuffer}
	graphicHeaderMod1.cObject =< graphicHeaderMod1
	graphicHeaderMod2.cObject =< graphicHeaderMod2
	graphicHeaderMod3.cObject =< graphicHeaderMod3
	graphicHeaderMod4.cObject =< graphicHeaderMod4
	defaultHeaderInsideModule = {$defaultHeaderInsideModule}
}

moduleGroupSetup.15 = CASE
moduleGroupSetup.15 {
	key = {$moduleFooterTotalHeight}
	default = LOAD_REGISTER
	default {
		renderedModuleFooter = <div class="moduleFooter"><span>&nbsp;</span></div>
		renderedModuleFooter1.data = register:renderedModuleFooter
	 	renderedModuleFooter2.data = register:renderedModuleFooter
		renderedModuleFooter3.data = register:renderedModuleFooter
	 	renderedModuleFooter4.data = register:renderedModuleFooter
	}
	0 = LOAD_REGISTER
	0 {
		renderedModuleFooter = 
	}
}

moduleGroupSetup.20 = CASE
moduleGroupSetup.20 {
	key.field = field_module_1_frame
	default = CASE
	default {
		key.field = field_module_1_show_title
		default = CASE
		default {
			key = {$showModuleTitleDefault}
			default = LOAD_REGISTER
			default {
				renderedModuleHeader1.field = field_module_1_title
				renderedModuleHeader1.parseFunc < lib.parseFunc
				renderedModuleHeader1.dataWrap = <{$moduleTitleTag} class="moduleHeader"><span class="moduleHeaderInnerWrap"><span {register:graphicHeaderMod1}>|&nbsp;</span></span></{$moduleTitleTag}>
				classModule1 = module module-1
			}
			0 = LOAD_REGISTER
			0 {
				renderedModuleHeader1 = <{$moduleTitleTag} class="moduleHeader moduleHeaderNoTitle"><span class="moduleHeaderInnerWrap">&nbsp;</span></{$moduleTitleTag}>
				classModule1 = module module-1
			}
		}
		1 = LOAD_REGISTER
		1 {
			renderedModuleHeader1.field = field_module_1_title
			renderedModuleHeader1.parseFunc < lib.parseFunc
			renderedModuleHeader1.dataWrap = <{$moduleTitleTag} class="moduleHeader"><span class="moduleHeaderInnerWrap"><span {register:graphicHeaderMod1}>|&nbsp;</span></span></{$moduleTitleTag}>
			classModule1 = module module-1
		}
		2 = LOAD_REGISTER
		2 {
			renderedModuleHeader1 = <{$moduleTitleTag} class="moduleHeader moduleHeaderNoTitle"><span class="moduleHeaderInnerWrap">&nbsp;</span></{$moduleTitleTag}>
			classModule1 = module module-1
		}
	}
	1 = LOAD_REGISTER
	1 {
		renderedModuleHeader1 = 
		renderedModuleFooter1 =
		classModule1 = module module-1 unframed
		moduleBodyWrapBorderWidth1 = 0
		moduleBodyTopBuffer1 = 0
		moduleBodyLeftBuffer1 = 0
		moduleBodyRightBuffer1 = 0
		moduleBodyBottomBuffer1 = 0
	}
}

moduleGroupSetup.25 = CASE
moduleGroupSetup.25 {
	key.field = field_module_2_frame
	default = CASE
	default {
		key.field = field_module_2_show_title
		default = CASE
		default {
			key = {$showModuleTitleDefault}
			default = LOAD_REGISTER
			default {
				renderedModuleHeader2.field = field_module_2_title
				renderedModuleHeader2.parseFunc < lib.parseFunc
				renderedModuleHeader2.dataWrap = <{$moduleTitleTag} class="moduleHeader"><span class="moduleHeaderInnerWrap"><span {register:graphicHeaderMod2}>|&nbsp;</span></span></{$moduleTitleTag}>
				classModule2 = module module-2
			}
			0 = LOAD_REGISTER
			0 {
				renderedModuleHeader2 = <{$moduleTitleTag} class="moduleHeader moduleHeaderNoTitle"><span class="moduleHeaderInnerWrap">&nbsp;</span></{$moduleTitleTag}>
				classModule2 = module module-2
			}
		}
		1 = LOAD_REGISTER
		1 {
			renderedModuleHeader2.field = field_module_2_title
			renderedModuleHeader2.parseFunc < lib.parseFunc
			renderedModuleHeader2.dataWrap = <{$moduleTitleTag} class="moduleHeader"><span class="moduleHeaderInnerWrap"><span {register:graphicHeaderMod2}>|&nbsp;</span></span></{$moduleTitleTag}>
			classModule2 = module module-2
		}
		2 = LOAD_REGISTER
		2 {
			renderedModuleHeader2 = <{$moduleTitleTag} class="moduleHeader moduleHeaderNoTitle"><span class="moduleHeaderInnerWrap">&nbsp;</span></{$moduleTitleTag}>
			classModule2 = module module-2
		}
	}
	1 = LOAD_REGISTER
	1 {
		renderedModuleHeader2 = 
		renderedModuleFooter2 =
		classModule2 = module module-2 unframed
		moduleBodyWrapBorderWidth2 = 0
		moduleBodyTopBuffer2 = 0
		moduleBodyLeftBuffer2 = 0
		moduleBodyRightBuffer2 = 0
		moduleBodyBottomBuffer2 = 0
	}
}

moduleGroupSetup.30 = CASE
moduleGroupSetup.30 {
	key.field = field_module_3_frame
	default = CASE
	default {
		key.field = field_module_3_show_title
		default = CASE
		default {
			key = {$showModuleTitleDefault}
			default = LOAD_REGISTER
			default {
				renderedModuleHeader3.field = field_module_3_title
				renderedModuleHeader3.parseFunc < lib.parseFunc
				renderedModuleHeader3.dataWrap = <{$moduleTitleTag} class="moduleHeader"><span class="moduleHeaderInnerWrap"><span {register:graphicHeaderMod3}>|&nbsp;</span></span></{$moduleTitleTag}>
				classModule3 = module module-3
			}
			0 = LOAD_REGISTER
			0 {
				renderedModuleHeader3 = <{$moduleTitleTag} class="moduleHeader moduleHeaderNoTitle"><span class="moduleHeaderInnerWrap">&nbsp;</span></{$moduleTitleTag}>
				classModule3 = module module-3
			}
		}
		1 = LOAD_REGISTER
		1 {
			renderedModuleHeader3.field = field_module_3_title
			renderedModuleHeader3.parseFunc < lib.parseFunc
			renderedModuleHeader3.dataWrap = <{$moduleTitleTag} class="moduleHeader"><span class="moduleHeaderInnerWrap"><span {register:graphicHeaderMod3}>|&nbsp;</span></span></{$moduleTitleTag}>
			classModule3 = module module-3
		}
		2 = LOAD_REGISTER
		2 {
			renderedModuleHeader3 = <{$moduleTitleTag} class="moduleHeader moduleHeaderNoTitle"><span class="moduleHeaderInnerWrap">&nbsp;</span></{$moduleTitleTag}>
			classModule3 = module module-3
		}
	}
	1 = LOAD_REGISTER
	1 {
		renderedModuleHeader3 = 
		renderedModuleFooter3 =
		classModule3 = module module-3 unframed
		moduleBodyWrapBorderWidth3 = 0
		moduleBodyTopBuffer3 = 0
		moduleBodyLeftBuffer3 = 0
		moduleBodyRightBuffer3 = 0
		moduleBodyBottomBuffer3 = 0
	}
}


moduleGroupSetup.35 = CASE
moduleGroupSetup.35 {
	key.field = field_module_4_frame
	default = CASE
	default {
		key.field = field_module_4_show_title
		default = CASE
		default {
			key = {$showModuleTitleDefault}
			default = LOAD_REGISTER
			default {
				renderedModuleHeader4.field = field_module_4_title
				renderedModuleHeader4.parseFunc < lib.parseFunc
				renderedModuleHeader4.dataWrap = <{$moduleTitleTag} class="moduleHeader"><span class="moduleHeaderInnerWrap"><span {register:graphicHeaderMod4}>|&nbsp;</span></span></{$moduleTitleTag}>
				classModule4 = module module-4
			}
			0 = LOAD_REGISTER
			0 {
				renderedModuleHeader4 = <{$moduleTitleTag} class="moduleHeader moduleHeaderNoTitle"><span class="moduleHeaderInnerWrap">&nbsp;</span></{$moduleTitleTag}>
				classModule4 = module module-4
			}
		}
		1 = LOAD_REGISTER
		1 {
			renderedModuleHeader4.field = field_module_4_title
			renderedModuleHeader4.parseFunc < lib.parseFunc
			renderedModuleHeader4.dataWrap = <{$moduleTitleTag} class="moduleHeader"><span class="moduleHeaderInnerWrap"><span {register:graphicHeaderMod4}>|&nbsp;</span></span></{$moduleTitleTag}>
			classModule4 = module module-4
		}
		2 = LOAD_REGISTER
		2 {
			renderedModuleHeader4 = <{$moduleTitleTag} class="moduleHeader moduleHeaderNoTitle"><span class="moduleHeaderInnerWrap">&nbsp;</span></{$moduleTitleTag}>
			classModule4 = module module-4
		}
	}
	1 = LOAD_REGISTER
	1 {
		renderedModuleHeader4 = 
		renderedModuleFooter4 =
		classModule4 = module module-4 unframed
		moduleBodyWrapBorderWidth4 = 0
		moduleBodyTopBuffer4 = 0
		moduleBodyLeftBuffer4 = 0
		moduleBodyRightBuffer4 = 0
		moduleBodyBottomBuffer4 = 0
	}
}

moduleGroupSetup.40 = CASE
moduleGroupSetup.40 {
	key.data = register:moduleDistribution
	default = LOAD_REGISTER
	default {
		tempModuleWidth.data = register:containerWidth
		tempModuleWidth.dataWrap = (|-{register:moduleGutter})/2
		moduleWidth1.data = register:tempModuleWidth
		moduleWidth1.prioriCalc = intval
		moduleWidth2.data = register:tempModuleWidth
		moduleWidth2.prioriCalc = intval
		classModule1Distribution = oneHalf
		classModule1Distribution.noTrimWrap = | ||
		classModule2Distribution = oneHalf
		classModule2Distribution.noTrimWrap = | ||
	}
	11 = LOAD_REGISTER
	11 {
		moduleWidth1.data = register:containerWidth
	}
	1323 = LOAD_REGISTER
	1323 {
		tempModuleWidth1.data = register:containerWidth
		tempModuleWidth1.dataWrap = (|-({register:moduleGutter}*2))/3
		tempModuleWidth2.data = register:containerWidth
		tempModuleWidth2.dataWrap = (((|-({register:moduleGutter}*2))/3)*2)+{register:moduleGutter}
		moduleWidth1.data = register:tempModuleWidth1
		moduleWidth1.prioriCalc = intval
		moduleWidth2.data = register:tempModuleWidth2
		moduleWidth2.prioriCalc = intval
		classModule1Distribution = oneThird
		classModule1Distribution.noTrimWrap = | ||
		classModule2Distribution = twoThird
		classModule2Distribution.noTrimWrap = | ||
	}
	2313 = LOAD_REGISTER
	2313 {
		tempModuleWidth1.data = register:containerWidth
		tempModuleWidth1.dataWrap = (((|-({register:moduleGutter}*2))/3)*2)+{register:moduleGutter}
		tempModuleWidth2.data = register:containerWidth
		tempModuleWidth2.dataWrap = (|-({register:moduleGutter}*2))/3
		moduleWidth1.data = register:tempModuleWidth1
		moduleWidth1.prioriCalc = intval
		moduleWidth2.data = register:tempModuleWidth2
		moduleWidth2.prioriCalc = intval
		classModule1Distribution = twoThird
		classModule1Distribution.noTrimWrap = | ||
		classModule2Distribution = oneThird
		classModule2Distribution.noTrimWrap = | ||
	}
	3414 = LOAD_REGISTER
	3414 {
		tempModuleWidth1.data = register:containerWidth
		tempModuleWidth1.dataWrap = (((|-({register:moduleGutter}*3))/4)*3)+({register:moduleGutter}*2)
		tempModuleWidth2.data = register:containerWidth
		tempModuleWidth2.dataWrap = (|-({register:moduleGutter}*3))/4
		moduleWidth1.data = register:tempModuleWidth1
		moduleWidth1.prioriCalc = intval
		moduleWidth2.data = register:tempModuleWidth2
		moduleWidth2.prioriCalc = intval
		classModule1Distribution = threeQuarter
		classModule1Distribution.noTrimWrap = | ||
		classModule2Distribution = oneQuarter
		classModule2Distribution.noTrimWrap = | ||
	}
	1434 = LOAD_REGISTER
	1434 {
		tempModuleWidth1.data = register:containerWidth
		tempModuleWidth1.dataWrap = (|-({register:moduleGutter}*3))/4
		tempModuleWidth2.data = register:containerWidth
		tempModuleWidth2.dataWrap = (((|-({register:moduleGutter}*3))/4)*3)+({register:moduleGutter}*2)
		moduleWidth1.data = register:tempModuleWidth1
		moduleWidth1.prioriCalc = intval
		moduleWidth2.data = register:tempModuleWidth2
		moduleWidth2.prioriCalc = intval
		classModule1Distribution = oneQuarter
		classModule1Distribution.noTrimWrap = | ||
		classModule2Distribution = threeQuarter
		classModule2Distribution.noTrimWrap = | ||
	}
	131313 = LOAD_REGISTER
	131313 {
		tempModuleWidth.data = register:containerWidth
		tempModuleWidth.dataWrap = (|-({register:moduleGutter}*2))/3
		moduleWidth1.data = register:tempModuleWidth
		moduleWidth1.prioriCalc = intval
		moduleWidth2.data = register:tempModuleWidth
		moduleWidth2.prioriCalc = intval
		moduleWidth3.data = register:tempModuleWidth
		moduleWidth3.prioriCalc = intval
		classModule1Distribution = oneThird
		classModule1Distribution.noTrimWrap = | ||
		classModule2Distribution = oneThird
		classModule2Distribution.noTrimWrap = | ||
		classModule3Distribution = oneThird
		classModule3Distribution.noTrimWrap = | ||
	}
	121414 = LOAD_REGISTER
	121414 {
		tempModuleWidth1.data = register:containerWidth
		tempModuleWidth1.dataWrap = ((|-({register:moduleGutter}*3))/2)+{register:moduleGutter}
		tempModuleWidth2.data = register:containerWidth
		tempModuleWidth2.dataWrap = (|-({register:moduleGutter}*3))/4
		tempModuleWidth3.data = register:containerWidth
		tempModuleWidth3.dataWrap = (|-({register:moduleGutter}*3))/4
		moduleWidth1.data = register:tempModuleWidth1
		moduleWidth1.prioriCalc = intval
		moduleWidth2.data = register:tempModuleWidth2
		moduleWidth2.prioriCalc = intval
		moduleWidth3.data = register:tempModuleWidth3
		moduleWidth3.prioriCalc = intval
		classModule1Distribution = oneHalf
		classModule1Distribution.noTrimWrap = | ||
		classModule2Distribution = oneQuarter
		classModule2Distribution.noTrimWrap = | ||
		classModule3Distribution = oneQuarter
		classModule3Distribution.noTrimWrap = | ||
	}
	141214 = LOAD_REGISTER
	141214 {
		tempModuleWidth1.data = register:containerWidth
		tempModuleWidth1.dataWrap = (|-({register:moduleGutter}*3))/4
		tempModuleWidth2.data = register:containerWidth
		tempModuleWidth2.dataWrap = ((|-({register:moduleGutter}*3))/2)+{register:moduleGutter}
		tempModuleWidth3.data = register:containerWidth
		tempModuleWidth3.dataWrap = (|-({register:moduleGutter}*3))/4
		moduleWidth1.data = register:tempModuleWidth1
		moduleWidth1.prioriCalc = intval
		moduleWidth2.data = register:tempModuleWidth2
		moduleWidth2.prioriCalc = intval
		moduleWidth3.data = register:tempModuleWidth3
		moduleWidth3.prioriCalc = intval
		classModule1Distribution = oneQuarter
		classModule1Distribution.noTrimWrap = | ||
		classModule2Distribution = oneHalf
		classModule2Distribution.noTrimWrap = | ||
		classModule3Distribution = oneQuarter
		classModule3Distribution.noTrimWrap = | ||
	}
	141412 = LOAD_REGISTER
	141412 {
		tempModuleWidth1.data = register:containerWidth
		tempModuleWidth1.dataWrap = (|-({register:moduleGutter}*3))/4
		tempModuleWidth2.data = register:containerWidth
		tempModuleWidth2.dataWrap = (|-({register:moduleGutter}*3))/4
		tempModuleWidth3.data = register:containerWidth
		tempModuleWidth3.dataWrap = ((|-({register:moduleGutter}*3))/2)+{register:moduleGutter}
		moduleWidth1.data = register:tempModuleWidth1
		moduleWidth1.prioriCalc = intval
		moduleWidth2.data = register:tempModuleWidth2
		moduleWidth2.prioriCalc = intval
		moduleWidth3.data = register:tempModuleWidth3
		moduleWidth3.prioriCalc = intval
		classModule1Distribution = oneQuarter
		classModule1Distribution.noTrimWrap = | ||
		classModule2Distribution = oneQuarter
		classModule2Distribution.noTrimWrap = | ||
		classModule3Distribution = oneHalf
		classModule3Distribution.noTrimWrap = | ||
	}
	14141414 = LOAD_REGISTER
	14141414 {
		tempModuleWidth.data = register:containerWidth
		tempModuleWidth.dataWrap = (|-({register:moduleGutter}*3))/4
		moduleWidth1.data = register:tempModuleWidth
		moduleWidth1.prioriCalc = intval
		moduleWidth2.data = register:tempModuleWidth
		moduleWidth2.prioriCalc = intval
		moduleWidth3.data = register:tempModuleWidth
		moduleWidth3.prioriCalc = intval
		moduleWidth4.data = register:tempModuleWidth
		moduleWidth4.prioriCalc = intval
	}
}



### Sets the width of module content area

moduleGroupSetup.50 = COA
moduleGroupSetup.50.10 = CASE
moduleGroupSetup.50.10 {
	key.field = field_module_1_bleed
	default = LOAD_REGISTER
	default {
		tempBodyWidthMod1.data = register:moduleWidth1
		tempBodyWidthMod1.dataWrap = |-({register:moduleBodyLeftBuffer1}+{register:moduleBodyRightBuffer1})-(2*{register:moduleBodyWrapBorderWidth1})
		bodyWidthMod1.data = register:tempBodyWidthMod1
		bodyWidthMod1.prioriCalc = intval
		moduleBodyClass1 = moduleBody
	}
	1 = LOAD_REGISTER
	1 {
		tempBodyWidthMod1.data = register:moduleWidth1
		tempBodyWidthMod1.dataWrap = |-(2*{register:moduleBodyWrapBorderWidth1})
		bodyWidthMod1.data = register:tempBodyWidthMod1
		bodyWidthMod1.prioriCalc = intval
		moduleBodyTopBuffer1 = 0
		moduleBodyLeftBuffer1 = 0
		moduleBodyRightBuffer1 = 0
		moduleBodyBottomBuffer1 = 0
		moduleBodyClass1 = moduleBody moduleBodyBleed
	}
}
moduleGroupSetup.50.20 = CASE
moduleGroupSetup.50.20 {
	key.field = field_module_2_bleed
	default = LOAD_REGISTER
	default {
		tempBodyWidthMod2.data = register:moduleWidth2
		tempBodyWidthMod2.dataWrap = |-({register:moduleBodyLeftBuffer2}+{register:moduleBodyRightBuffer2})-(2*{register:moduleBodyWrapBorderWidth2})
		bodyWidthMod2.data = register:tempBodyWidthMod2
		bodyWidthMod2.prioriCalc = intval
		moduleBodyClass2 = moduleBody
	}
	1 = LOAD_REGISTER
	1 {
		tempBodyWidthMod2.data = register:moduleWidth2
		tempBodyWidthMod2.dataWrap = |-(2*{register:moduleBodyWrapBorderWidth2})
		bodyWidthMod2.data = register:tempBodyWidthMod2
		bodyWidthMod2.prioriCalc = intval
		moduleBodyTopBuffer2 = 0
		moduleBodyLeftBuffer2 = 0
		moduleBodyRightBuffer2 = 0
		moduleBodyBottomBuffer2 = 0
		moduleBodyClass2 = moduleBody moduleBodyBleed
	}
}

moduleGroupSetup.50.30 = CASE
moduleGroupSetup.50.30 {
	key.field = field_module_3_bleed
	default = LOAD_REGISTER
	default {
		tempBodyWidthMod3.data = register:moduleWidth3
		tempBodyWidthMod3.dataWrap = |-({register:moduleBodyLeftBuffer3}+{register:moduleBodyRightBuffer3})-(2*{register:moduleBodyWrapBorderWidth3})
		bodyWidthMod3.data = register:tempBodyWidthMod3
		bodyWidthMod3.prioriCalc = intval
		moduleBodyClass3 = moduleBody
	}
	1 = LOAD_REGISTER
	1 {
		tempBodyWidthMod3.data = register:moduleWidth3
		tempBodyWidthMod3.dataWrap = |-(2*{register:moduleBodyWrapBorderWidth3})
		bodyWidthMod3.data = register:tempBodyWidthMod3
		bodyWidthMod3.prioriCalc = intval
		moduleBodyTopBuffer3 = 0
		moduleBodyLeftBuffer3 = 0
		moduleBodyRightBuffer3 = 0
		moduleBodyBottomBuffer3 = 0
		moduleBodyClass3 = moduleBody moduleBodyBleed
	}
}

moduleGroupSetup.50.40 = CASE
moduleGroupSetup.50.40 {
	key.field = field_module_4_bleed
	default = LOAD_REGISTER
	default {
		tempBodyWidthMod4.data = register:moduleWidth4
		tempBodyWidthMod4.dataWrap = |-({register:moduleBodyLeftBuffer4}+{register:moduleBodyRightBuffer4})-(2*{register:moduleBodyWrapBorderWidth4})
		bodyWidthMod4.data = register:tempBodyWidthMod4
		bodyWidthMod4.prioriCalc = intval
		moduleBodyClass4 = moduleBody
	}
	1 = LOAD_REGISTER
	1 {
		tempBodyWidthMod4.data = register:moduleWidth4
		tempBodyWidthMod4.dataWrap = |-(2*{register:moduleBodyWrapBorderWidth4})
		bodyWidthMod4.data = register:tempBodyWidthMod4
		bodyWidthMod4.prioriCalc = intval
		moduleBodyTopBuffer4 = 0
		moduleBodyLeftBuffer4 = 0
		moduleBodyRightBuffer4 = 0
		moduleBodyBottomBuffer4 = 0
		moduleBodyClass4 = moduleBody moduleBodyBleed
	}
}

##############################################################
# columnGroupSetup is the library used to load the register with
# the various values needed by the column groups. There are default
# values supplied by the the skins via constants
##############################################################

columnGroupSetup = COA
columnGroupSetup.10 = LOAD_REGISTER
columnGroupSetup.10 {
	columnGutter = {$globalGutter}
	columnRuleDefault = {$columnRuleDefault}
}

columnGroupSetup.20 = CASE
columnGroupSetup.20 {
	key.data = register:columnRuleDefault
	default = LOAD_REGISTER
	default.columnGroupDefaultClass = columnGroup
	1 = LOAD_REGISTER
	1.columnGroupDefaultClass = columnGroup columnGroupRule
}
columnGroupSetup.30 = CASE
columnGroupSetup.30 {
	key.field = field_group_rule
	default = LOAD_REGISTER
	default.columnGroupClass.data = register:columnGroupDefaultClass
	1 = LOAD_REGISTER
	1.columnGroupClass = columnGroup columnGroupRule
	2 = LOAD_REGISTER
	2.columnGroupClass = columnGroup
}
columnGroupSetup.40 = CASE
columnGroupSetup.40 {
	key.field = field_column_distribution
	default = LOAD_REGISTER
	default {
		tempColumnWidth.data = register:containerWidth
		tempColumnWidth.dataWrap = (|-{register:columnGutter})/2
		columnWidth1.data = register:tempColumnWidth
		columnWidth1.prioriCalc = intval
		columnWidth2.data = register:tempColumnWidth
		columnWidth2.prioriCalc = intval
		classColumn1Distribution = oneHalf
		classColumn1Distribution.noTrimWrap = | ||
		classColumn2Distribution = oneHalf
		classColumn2Distribution.noTrimWrap = | ||
	}
	1323 = LOAD_REGISTER
	1323 {
		tempColumnWidth1.data = register:containerWidth
		tempColumnWidth1.dataWrap = (|-({register:columnGutter}*2))/3
		tempColumnWidth2.data = register:containerWidth
		tempColumnWidth2.dataWrap = (((|-({register:columnGutter}*2))/3)*2)+{register:columnGutter}
		columnWidth1.data = register:tempColumnWidth1
		columnWidth1.prioriCalc = intval
		columnWidth2.data = register:tempColumnWidth2
		columnWidth2.prioriCalc = intval
		classColumn1Distribution = oneThird
		classColumn1Distribution.noTrimWrap = | ||
		classColumn2Distribution = twoThird
		classColumn2Distribution.noTrimWrap = | ||
	}
	2313 = LOAD_REGISTER
	2313 {
		tempColumnWidth1.data = register:containerWidth
		tempColumnWidth1.dataWrap = (((|-({register:columnGutter}*2))/3)*2)+{register:columnGutter}
		tempColumnWidth2.data = register:containerWidth
		tempColumnWidth2.dataWrap = (|-({register:columnGutter}*2))/3
		columnWidth1.data = register:tempColumnWidth1
		columnWidth1.prioriCalc = intval
		columnWidth2.data = register:tempColumnWidth2
		columnWidth2.prioriCalc = intval
		classColumn1Distribution = twoThird
		classColumn1Distribution.noTrimWrap = | ||
		classColumn2Distribution = oneThird
		classColumn2Distribution.noTrimWrap = | ||
	}
	3414 = LOAD_REGISTER
	3414 {
		tempColumnWidth1.data = register:containerWidth
		tempColumnWidth1.dataWrap = (((|-({register:columnGutter}*3))/4)*3)+({register:columnGutter}*2)
		tempColumnWidth2.data = register:containerWidth
		tempColumnWidth2.dataWrap = (|-({register:columnGutter}*3))/4
		columnWidth1.data = register:tempColumnWidth1
		columnWidth1.prioriCalc = intval
		columnWidth2.data = register:tempColumnWidth2
		columnWidth2.prioriCalc = intval
		classColumn1Distribution = threeQuarter
		classColumn1Distribution.noTrimWrap = | ||
		classColumn2Distribution = oneQuarter
		classColumn2Distribution.noTrimWrap = | ||
	}
	1434 = LOAD_REGISTER
	1434 {
		tempColumnWidth1.data = register:containerWidth
		tempColumnWidth1.dataWrap = (|-({register:columnGutter}*3))/4
		tempColumnWidth2.data = register:containerWidth
		tempColumnWidth2.dataWrap = (((|-({register:columnGutter}*3))/4)*3)+({register:columnGutter}*2)
		columnWidth1.data = register:tempColumnWidth1
		columnWidth1.prioriCalc = intval
		columnWidth2.data = register:tempColumnWidth2
		columnWidth2.prioriCalc = intval
		classColumn1Distribution = oneQuarter
		classColumn1Distribution.noTrimWrap = | ||
		classColumn2Distribution = threeQuarter
		classColumn2Distribution.noTrimWrap = | ||
	}
	131313 = LOAD_REGISTER
	131313 {
		tempColumnWidth.data = register:containerWidth
		tempColumnWidth.dataWrap = (|-({register:columnGutter}*2))/3
		columnWidth1.data = register:tempColumnWidth
		columnWidth1.prioriCalc = intval
		columnWidth2.data = register:tempColumnWidth
		columnWidth2.prioriCalc = intval
		columnWidth3.data = register:tempColumnWidth
		columnWidth3.prioriCalc = intval
		classColumn1Distribution = oneThird
		classColumn1Distribution.noTrimWrap = | ||
		classColumn2Distribution = oneThird
		classColumn2Distribution.noTrimWrap = | ||
		classColumn3Distribution = oneThird
		classColumn3Distribution.noTrimWrap = | ||
	}
	121414 = LOAD_REGISTER
	121414 {
		tempColumnWidth1.data = register:containerWidth
		tempColumnWidth1.dataWrap = ((|-({register:columnGutter}*3))/2)+{register:columnGutter}
		tempColumnWidth2.data = register:containerWidth
		tempColumnWidth2.dataWrap = (|-({register:columnGutter}*3))/4
		tempColumnWidth3.data = register:containerWidth
		tempColumnWidth3.dataWrap = (|-({register:columnGutter}*3))/4
		columnWidth1.data = register:tempColumnWidth1
		columnWidth1.prioriCalc = intval
		columnWidth2.data = register:tempColumnWidth2
		columnWidth2.prioriCalc = intval
		columnWidth3.data = register:tempColumnWidth3
		columnWidth3.prioriCalc = intval
		classColumn1Distribution = oneHalf
		classColumn1Distribution.noTrimWrap = | ||
		classColumn2Distribution = oneQuarter
		classColumn2Distribution.noTrimWrap = | ||
		classColumn3Distribution = oneQuarter
		classColumn3Distribution.noTrimWrap = | ||
	}
	141214 = LOAD_REGISTER
	141214 {
		tempColumnWidth1.data = register:containerWidth
		tempColumnWidth1.dataWrap = (|-({register:columnGutter}*3))/4
		tempColumnWidth2.data = register:containerWidth
		tempColumnWidth2.dataWrap = ((|-({register:columnGutter}*3))/2)+{register:columnGutter}
		tempColumnWidth3.data = register:containerWidth
		tempColumnWidth3.dataWrap = (|-({register:columnGutter}*3))/4
		columnWidth1.data = register:tempColumnWidth1
		columnWidth1.prioriCalc = intval
		columnWidth2.data = register:tempColumnWidth2
		columnWidth2.prioriCalc = intval
		columnWidth3.data = register:tempColumnWidth3
		columnWidth3.prioriCalc = intval
		classColumn1Distribution = oneQuarter
		classColumn1Distribution.noTrimWrap = | ||
		classColumn2Distribution = oneHalf
		classColumn2Distribution.noTrimWrap = | ||
		classColumn3Distribution = oneQuarter
		classColumn3Distribution.noTrimWrap = | ||
	}
	141412 = LOAD_REGISTER
	141412 {
		tempColumnWidth1.data = register:containerWidth
		tempColumnWidth1.dataWrap = (|-({register:columnGutter}*3))/4
		tempColumnWidth2.data = register:containerWidth
		tempColumnWidth2.dataWrap = (|-({register:columnGutter}*3))/4
		tempColumnWidth3.data = register:containerWidth
		tempColumnWidth3.dataWrap = ((|-({register:columnGutter}*3))/2)+{register:columnGutter}
		columnWidth1.data = register:tempColumnWidth1
		columnWidth1.prioriCalc = intval
		columnWidth2.data = register:tempColumnWidth2
		columnWidth2.prioriCalc = intval
		columnWidth3.data = register:tempColumnWidth3
		columnWidth3.prioriCalc = intval
		classColumn1Distribution = oneQuarter
		classColumn1Distribution.noTrimWrap = | ||
		classColumn2Distribution = oneQuarter
		classColumn2Distribution.noTrimWrap = | ||
		classColumn3Distribution = oneHalf
		classColumn3Distribution.noTrimWrap = | ||
	}
}

##############################################################
# The following allows for custom header, footer, preCode and
# postCode objects to be written for each template as well as
# global defaults for each
##############################################################

f1a.preCodeHeader =< preCodeHeader
f1a.evaluatedPreCodeHeader =< f1a.preCodeHeader

f1a.header =< header
f1a.evaluatedHeader =< f1a.header

f1a.postCodeHeader =< postCodeHeader
f1a.evaluatedPostCodeHeader =< f1a.postCodeHeader

f1a.preCodeFeature =< preCodeFeature
f1a.evaluatedPreCodeFeature =< f1a.preCodeFeature
f1a.evaluatedPreCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f1a.postCodeFeature =< postCodeFeature
f1a.evaluatedPostCodeFeature =< f1a.postCodeFeature
f1a.evaluatedPostCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f1a.preCodeContent =< preCodeContent
f1a.evaluatedPreCodeContent =< f1a.preCodeContent

f1a.preCodeContentBlock-1 =< preCodeContentBlock-1
f1a.evaluatedPreCodeContentBlock-1 =< f1a.preCodeContentBlock-1

f1a.postCodeContentBlock-1 =< postCodeContentBlock-1
f1a.evaluatedPostContentBlock-1 =< f1a.postCodeContentBlock-1

f1a.preCodeFooter =< preCodeFooter
f1a.evaluatedPreCodeFooter =< f1a.preCodeFooter

f1a.footer =< footer
f1a.evaluatedFooter =< f1a.footer

f1a.postCodeFooter =< postCodeFooter
f1a.evaluatedPostCodeFooter =< f1a.postCodeFooter

f1b.preCodeHeader =< preCodeHeader
f1b.evaluatedPreCodeHeader =< f1b.preCodeHeader

f1b.header =< header
f1b.evaluatedHeader =< f1b.header

f1b.postCodeHeader =< postCodeHeader
f1b.evaluatedPostCodeHeader =< f1b.postCodeHeader

f1b.preCodeFeature =< preCodeFeature
f1b.evaluatedPreCodeFeature =< f1b.preCodeFeature
f1b.evaluatedPreCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f1b.postCodeFeature =< postCodeFeature
f1b.evaluatedPostCodeFeature =< f1b.postCodeFeature
f1b.evaluatedPostCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f1b.preCodeContent =< preCodeContent
f1b.evaluatedPreCodeContent =< f1b.preCodeContent

f1b.preCodeContentBlock-1 =< preCodeContentBlock-1
f1b.evaluatedPreCodeContentBlock-1 =< f1b.preCodeContentBlock-1

f1b.postCodeContentBlock-1 =< postCodeContentBlock-1
f1b.evaluatedPostContentBlock-1 =< f1b.postCodeContentBlock-1

f1b.preCodeFooter =< preCodeFooter
f1b.evaluatedPreCodeFooter =< f1b.preCodeFooter

f1b.footer =< footer
f1b.evaluatedFooter =< f1b.footer

f1b.postCodeFooter =< postCodeFooter
f1b.evaluatedPostCodeFooter =< f1b.postCodeFooter

f1c.preCodeHeader =< preCodeHeader
f1c.evaluatedPreCodeHeader =< f1c.preCodeHeader

f1c.header =< header
f1c.evaluatedHeader =< f1c.header

f1c.postCodeHeader =< postCodeHeader
f1c.evaluatedPostCodeHeader =< f1c.postCodeHeader

f1c.preCodeFeature =< preCodeFeature
f1c.evaluatedPreCodeFeature =< f1c.preCodeFeature
f1c.evaluatedPreCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f1c.postCodeFeature =< postCodeFeature
f1c.evaluatedPostCodeFeature =< f1c.postCodeFeature
f1c.evaluatedPostCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f1c.preCodeContent =< preCodeContent
f1c.evaluatedPreCodeContent =< f1c.preCodeContent

f1c.preCodeContentBlock-1 =< preCodeContentBlock-1
f1c.evaluatedPreCodeContentBlock-1 =< f1c.preCodeContentBlock-1

f1c.postCodeContentBlock-1 =< postCodeContentBlock-1
f1c.evaluatedPostContentBlock-1 =< f1c.postCodeContentBlock-1

f1c.preCodeFooter =< preCodeFooter
f1c.evaluatedPreCodeFooter =< f1c.preCodeFooter

f1c.footer =< footer
f1c.evaluatedFooter =< f1c.footer

f1c.postCodeFooter =< postCodeFooter
f1c.evaluatedPostCodeFooter =< f1c.postCodeFooter

f1d.preCodeHeader =< preCodeHeader
f1d.evaluatedPreCodeHeader =< f1d.preCodeHeader

f1d.header =< header
f1d.evaluatedHeader =< f1d.header

f1d.postCodeHeader =< postCodeHeader
f1d.evaluatedPostCodeHeader =< f1d.postCodeHeader

f1d.preCodeFeature =< preCodeFeature
f1d.evaluatedPreCodeFeature =< f1d.preCodeFeature
f1d.evaluatedPreCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f1d.postCodeFeature =< postCodeFeature
f1d.evaluatedPostCodeFeature =< f1d.postCodeFeature
f1d.evaluatedPostCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f1d.preCodeContent =< preCodeContent
f1d.evaluatedPreCodeContent =< f1d.preCodeContent

f1d.preCodeGeneratedContent-1 =< preCodeGeneratedContent-1
f1d.evaluatedPreCodeGeneratedContent-1 =< f1d.preCodeGeneratedContent-1

f1d.postCodeGeneratedContent-1 =< postCodeGeneratedContent-1
f1d.evaluatedPostCodeGeneratedContent-1 =< f1d.postCodeGeneratedContent-1

f1d.preCodeContentBlock-1 =< preCodeContentBlock-1
f1d.evaluatedPreCodeContentBlock-1 =< f1d.preCodeContentBlock-1

f1d.postCodeContentBlock-1 =< postCodeContentBlock-1
f1d.evaluatedPostContentBlock-1 =< f1d.postCodeContentBlock-1

f1d.preCodeFooter =< preCodeFooter
f1d.evaluatedPreCodeFooter =< f1d.preCodeFooter

f1d.footer =< footer
f1d.evaluatedFooter =< f1d.footer

f1d.postCodeFooter =< postCodeFooter
f1d.evaluatedPostCodeFooter =< f1d.postCodeFooter

f1e.preCodeHeader =< preCodeHeader
f1e.evaluatedPreCodeHeader =< f1e.preCodeHeader

f1e.header =< header
f1e.evaluatedHeader =< f1e.header

f1e.postCodeHeader =< postCodeHeader
f1e.evaluatedPostCodeHeader =< f1e.postCodeHeader

f1e.preCodeFeature =< preCodeFeature
f1e.evaluatedPreCodeFeature =< f1e.preCodeFeature
f1e.evaluatedPreCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f1e.postCodeFeature =< postCodeFeature
f1e.evaluatedPostCodeFeature =< f1e.postCodeFeature
f1e.evaluatedPostCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f1e.preCodeContent =< preCodeContent
f1e.evaluatedPreCodeContent =< f1e.preCodeContent

f1e.preCodeContentBlock-1 =< preCodeContentBlock-1
f1e.evaluatedPreCodeContentBlock-1 =< f1e.preCodeContentBlock-1

f1e.postCodeContentBlock-1 =< postCodeContentBlock-1
f1e.evaluatedPostContentBlock-1 =< f1e.postCodeContentBlock-1

f1e.preCodeGeneratedContent-2 =< preCodeGeneratedContent-2
f1e.evaluatedPreCodeGeneratedContent-2 =< f1e.preCodeGeneratedContent-2

f1e.postCodeGeneratedContent-2 =< postCodeGeneratedContent-2
f1e.evaluatedPostCodeGeneratedContent-2 =< f1e.postCodeGeneratedContent-2

f1e.preCodeFooter =< preCodeFooter
f1e.evaluatedPreCodeFooter =< f1e.preCodeFooter

f1e.footer =< footer
f1e.evaluatedFooter =< f1e.footer

f1e.postCodeFooter =< postCodeFooter
f1e.evaluatedPostCodeFooter =< f1e.postCodeFooter

f1f.preCodeHeader =< preCodeHeader
f1f.evaluatedPreCodeHeader =< f1f.preCodeHeader

f1f.header =< header
f1f.evaluatedHeader =< f1f.header

f1f.postCodeHeader =< postCodeHeader
f1f.evaluatedPostCodeHeader =< f1f.postCodeHeader

f1f.preCodeFeature =< preCodeFeature
f1f.evaluatedPreCodeFeature =< f1f.preCodeFeature
f1f.evaluatedPreCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f1f.postCodeFeature =< postCodeFeature
f1f.evaluatedPostCodeFeature =< f1f.postCodeFeature
f1f.evaluatedPostCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f1f.preCodeContent =< preCodeContent
f1f.evaluatedPreCodeContent =< f1f.preCodeContent

f1f.preCodeGeneratedContent-1 =< preCodeGeneratedContent-1
f1f.evaluatedPreCodeGeneratedContent-1 =< f1f.preCodeGeneratedContent-1

f1f.postCodeGeneratedContent-1 =< postCodeGeneratedContent-1
f1f.evaluatedPostCodeGeneratedContent-1 =< f1f.postCodeGeneratedContent-1

f1f.preCodeContentBlock-1 =< preCodeContentBlock-1
f1f.evaluatedPreCodeContentBlock-1 =< f1f.preCodeContentBlock-1

f1f.postCodeContentBlock-1 =< postCodeContentBlock-1
f1f.evaluatedPostContentBlock-1 =< f1f.postCodeContentBlock-1

f1f.preCodeGeneratedContent-2 =< preCodeGeneratedContent-2
f1f.evaluatedPreCodeGeneratedContent-2 =< f1f.preCodeGeneratedContent-2

f1f.postCodeGeneratedContent-2 =< postCodeGeneratedContent-2
f1f.evaluatedPostCodeGeneratedContent-2 =< f1f.postCodeGeneratedContent-2

f1f.preCodeFooter =< preCodeFooter
f1f.evaluatedPreCodeFooter =< f1f.preCodeFooter

f1f.footer =< footer
f1f.evaluatedFooter =< f1f.footer

f1f.postCodeFooter =< postCodeFooter
f1f.evaluatedPostCodeFooter =< f1f.postCodeFooter

f2a.preCodeHeader =< preCodeHeader
f2a.evaluatedPreCodeHeader =< f2a.preCodeHeader

f2a.header =< header
f2a.evaluatedHeader =< f2a.header

f2a.postCodeHeader =< postCodeHeader
f2a.evaluatedPostCodeHeader =< f2a.postCodeHeader

f2a.preCodeFeature =< preCodeFeature
f2a.evaluatedPreCodeFeature =< f2a.preCodeFeature
f2a.evaluatedPreCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f2a.postCodeFeature =< postCodeFeature
f2a.evaluatedPostCodeFeature =< f2a.postCodeFeature
f2a.evaluatedPostCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f2a.preCodeContent =< preCodeContent
f2a.evaluatedPreCodeContent =< f2a.preCodeContent

f2a.preCodeContentBlock-1 =< preCodeContentBlock-1
f2a.evaluatedPreCodeContentBlock-1 =< f2a.preCodeContentBlock-1

f2a.postCodeContentBlock-1 =< postCodeContentBlock-1
f2a.evaluatedPostContentBlock-1 =< f2a.postCodeContentBlock-1

f2a.preCodeContentBlock-2 =< preCodeContentBlock-2
f2a.evaluatedPreCodeContentBlock-2 =< f2a.preCodeContentBlock-2

f2a.postCodeContentBlock-2 =< postCodeContentBlock-2
f2a.evaluatedPostContentBlock-2 =< f2a.postCodeContentBlock-2

f2a.preCodeFooter =< preCodeFooter
f2a.evaluatedPreCodeFooter =< f2a.preCodeFooter

f2a.footer =< footer
f2a.evaluatedFooter =< f2a.footer

f2a.postCodeFooter =< postCodeFooter
f2a.evaluatedPostCodeFooter =< f2a.postCodeFooter

f2b.preCodeHeader =< preCodeHeader
f2b.evaluatedPreCodeHeader =< f2b.preCodeHeader

f2b.header =< header
f2b.evaluatedHeader =< f2b.header

f2b.postCodeHeader =< postCodeHeader
f2b.evaluatedPostCodeHeader =< f2b.postCodeHeader

f2b.preCodeFeature =< preCodeFeature
f2b.evaluatedPreCodeFeature =< f2b.preCodeFeature
f2b.evaluatedPreCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f2b.postCodeFeature =< postCodeFeature
f2b.evaluatedPostCodeFeature =< f2b.postCodeFeature
f2b.evaluatedPostCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f2b.preCodeContent =< preCodeContent
f2b.evaluatedPreCodeContent =< f2b.preCodeContent

f2b.preCodeContentBlock-1 =< preCodeContentBlock-1
f2b.evaluatedPreCodeContentBlock-1 =< f2b.preCodeContentBlock-1

f2b.postCodeContentBlock-1 =< postCodeContentBlock-1
f2b.evaluatedPostContentBlock-1 =< f2b.postCodeContentBlock-1

f2b.preCodeContentBlock-2 =< preCodeContentBlock-2
f2b.evaluatedPreCodeContentBlock-2 =< f2b.preCodeContentBlock-2

f2b.postCodeContentBlock-2 =< postCodeContentBlock-2
f2b.evaluatedPostContentBlock-2 =< f2b.postCodeContentBlock-2

f2b.preCodeFooter =< preCodeFooter
f2b.evaluatedPreCodeFooter =< f2b.preCodeFooter

f2b.footer =< footer
f2b.evaluatedFooter =< f2b.footer

f2b.postCodeFooter =< postCodeFooter
f2b.evaluatedPostCodeFooter =< f2b.postCodeFooter

f2c.preCodeHeader =< preCodeHeader
f2c.evaluatedPreCodeHeader =< f2c.preCodeHeader

f2c.header =< header
f2c.evaluatedHeader =< f2c.header

f2c.postCodeHeader =< postCodeHeader
f2c.evaluatedPostCodeHeader =< f2c.postCodeHeader

f2c.preCodeFeature =< preCodeFeature
f2c.evaluatedPreCodeFeature =< f2c.preCodeFeature
f2c.evaluatedPreCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f2c.postCodeFeature =< postCodeFeature
f2c.evaluatedPostCodeFeature =< f2c.postCodeFeature
f2c.evaluatedPostCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f2c.preCodeContent =< preCodeContent
f2c.evaluatedPreCodeContent =< f2c.preCodeContent

f2c.preCodeContentBlock-1 =< preCodeContentBlock-1
f2c.evaluatedPreCodeContentBlock-1 =< f2c.preCodeContentBlock-1

f2c.postCodeContentBlock-1 =< postCodeContentBlock-1
f2c.evaluatedPostContentBlock-1 =< f2c.postCodeContentBlock-1

f2c.preCodeContentBlock-2 =< preCodeContentBlock-2
f2c.evaluatedPreCodeContentBlock-2 =< f2c.preCodeContentBlock-2

f2c.postCodeContentBlock-2 =< postCodeContentBlock-2
f2c.evaluatedPostContentBlock-2 =< f2c.postCodeContentBlock-2

f2c.preCodeFooter =< preCodeFooter
f2c.evaluatedPreCodeFooter =< f2c.preCodeFooter

f2c.footer =< footer
f2c.evaluatedFooter =< f2c.footer

f2c.postCodeFooter =< postCodeFooter
f2c.evaluatedPostCodeFooter =< f2c.postCodeFooter

f2d.preCodeHeader =< preCodeHeader
f2d.evaluatedPreCodeHeader =< f2d.preCodeHeader

f2d.header =< header
f2d.evaluatedHeader =< f2d.header

f2d.postCodeHeader =< postCodeHeader
f2d.evaluatedPostCodeHeader =< f2d.postCodeHeader

f2d.preCodeFeature =< preCodeFeature
f2d.evaluatedPreCodeFeature =< f2d.preCodeFeature
f2d.evaluatedPreCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f2d.postCodeFeature =< postCodeFeature
f2d.evaluatedPostCodeFeature =< f2d.postCodeFeature
f2d.evaluatedPostCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f2d.preCodeContent =< preCodeContent
f2d.evaluatedPreCodeContent =< f2d.preCodeContent

f2d.preCodeGeneratedContent-1 =< preCodeGeneratedContent-1
f2d.evaluatedPreCodeGeneratedContent-1 =< f2d.preCodeGeneratedContent-1

f2d.postCodeGeneratedContent-1 =< postCodeGeneratedContent-1
f2d.evaluatedPostCodeGeneratedContent-1 =< f2d.postCodeGeneratedContent-1

f2d.preCodeContentBlock-1 =< preCodeContentBlock-1
f2d.evaluatedPreCodeContentBlock-1 =< f2d.preCodeContentBlock-1

f2d.postCodeContentBlock-1 =< postCodeContentBlock-1
f2d.evaluatedPostContentBlock-1 =< f2d.postCodeContentBlock-1

f2d.preCodeContentBlock-2 =< preCodeContentBlock-2
f2d.evaluatedPreCodeContentBlock-2 =< f2d.preCodeContentBlock-2

f2d.postCodeContentBlock-2 =< postCodeContentBlock-2
f2d.evaluatedPostContentBlock-2 =< f2d.postCodeContentBlock-2

f2d.preCodeFooter =< preCodeFooter
f2d.evaluatedPreCodeFooter =< f2d.preCodeFooter

f2d.footer =< footer
f2d.evaluatedFooter =< f2d.footer

f2d.postCodeFooter =< postCodeFooter
f2d.evaluatedPostCodeFooter =< f2d.postCodeFooter

f2e.preCodeHeader =< preCodeHeader
f2e.evaluatedPreCodeHeader =< f2e.preCodeHeader

f2e.header =< header
f2e.evaluatedHeader =< f2e.header

f2e.postCodeHeader =< postCodeHeader
f2e.evaluatedPostCodeHeader =< f2e.postCodeHeader

f2e.preCodeFeature =< preCodeFeature
f2e.evaluatedPreCodeFeature =< f2e.preCodeFeature
f2e.evaluatedPreCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f2e.postCodeFeature =< postCodeFeature
f2e.evaluatedPostCodeFeature =< f2e.postCodeFeature
f2e.evaluatedPostCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f2e.preCodeContent =< preCodeContent
f2e.evaluatedPreCodeContent =< f2e.preCodeContent

f2e.preCodeContentBlock-1 =< preCodeContentBlock-1
f2e.evaluatedPreCodeContentBlock-1 =< f2e.preCodeContentBlock-1

f2e.postCodeContentBlock-1 =< postCodeContentBlock-1
f2e.evaluatedPostContentBlock-1 =< f2e.postCodeContentBlock-1

f2e.preCodeContentBlock-2 =< preCodeContentBlock-2
f2e.evaluatedPreCodeContentBlock-2 =< f2e.preCodeContentBlock-2

f2e.postCodeContentBlock-2 =< postCodeContentBlock-2
f2e.evaluatedPostContentBlock-2 =< f2e.postCodeContentBlock-2

f2e.preCodeGeneratedContent-2 =< preCodeGeneratedContent-2
f2e.evaluatedPreCodeGeneratedContent-2 =< f2e.preCodeGeneratedContent-2

f2e.postCodeGeneratedContent-2 =< postCodeGeneratedContent-2
f2e.evaluatedPostCodeGeneratedContent-2 =< f2e.postCodeGeneratedContent-2

f2e.preCodeFooter =< preCodeFooter
f2e.evaluatedPreCodeFooter =< f2e.preCodeFooter

f2e.footer =< footer
f2e.evaluatedFooter =< f2e.footer

f2e.postCodeFooter =< postCodeFooter
f2e.evaluatedPostCodeFooter =< f2e.postCodeFooter

f3a.preCodeHeader =< preCodeHeader
f3a.evaluatedPreCodeHeader =< f3a.preCodeHeader

f3a.header =< header
f3a.evaluatedHeader =< f3a.header

f3a.postCodeHeader =< postCodeHeader
f3a.evaluatedPostCodeHeader =< f3a.postCodeHeader

f3a.preCodeFeature =< preCodeFeature
f3a.evaluatedPreCodeFeature =< f3a.preCodeFeature
f3a.evaluatedPreCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f3a.postCodeFeature =< postCodeFeature
f3a.evaluatedPostCodeFeature =< f3a.postCodeFeature
f3a.evaluatedPostCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f3a.preCodeContent =< preCodeContent
f3a.evaluatedPreCodeContent =< f3a.preCodeContent

f3a.preCodeContentBlock-1 =< preCodeContentBlock-1
f3a.evaluatedPreCodeContentBlock-1 =< f3a.preCodeContentBlock-1

f3a.postCodeContentBlock-1 =< postCodeContentBlock-1
f3a.evaluatedPostContentBlock-1 =< f3a.postCodeContentBlock-1

f3a.preCodeContentBlock-2 =< preCodeContentBlock-2
f3a.evaluatedPreCodeContentBlock-2 =< f3a.preCodeContentBlock-2

f3a.postCodeContentBlock-2 =< postCodeContentBlock-2
f3a.evaluatedPostContentBlock-2 =< f3a.postCodeContentBlock-2

f3a.preCodeContentBlock-3 =< preCodeContentBlock-3
f3a.evaluatedPreCodeContentBlock-3 =< f3a.preCodeContentBlock-3

f3a.postCodeContentBlock-3 =< postCodeContentBlock-3
f3a.evaluatedPostContentBlock-3 =< f3a.postCodeContentBlock-3

f3a.preCodeFooter =< preCodeFooter
f3a.evaluatedPreCodeFooter =< f3a.preCodeFooter

f3a.footer =< footer
f3a.evaluatedFooter =< f3a.footer

f3a.postCodeFooter =< postCodeFooter
f3a.evaluatedPostCodeFooter =< f3a.postCodeFooter

f3b.preCodeHeader =< preCodeHeader
f3b.evaluatedPreCodeHeader =< f3b.preCodeHeader

f3b.header =< header
f3b.evaluatedHeader =< f3b.header

f3b.postCodeHeader =< postCodeHeader
f3b.evaluatedPostCodeHeader =< f3b.postCodeHeader

f3b.preCodeFeature =< preCodeFeature
f3b.evaluatedPreCodeFeature =< f3b.preCodeFeature
f3b.evaluatedPreCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f3b.postCodeFeature =< postCodeFeature
f3b.evaluatedPostCodeFeature =< f3b.postCodeFeature
f3b.evaluatedPostCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f3b.preCodeContent =< preCodeContent
f3b.evaluatedPreCodeContent =< f3b.preCodeContent

f3b.preCodeContentBlock-1 =< preCodeContentBlock-1
f3b.evaluatedPreCodeContentBlock-1 =< f3b.preCodeContentBlock-1

f3b.postCodeContentBlock-1 =< postCodeContentBlock-1
f3b.evaluatedPostContentBlock-1 =< f3b.postCodeContentBlock-1

f3b.preCodeContentBlock-2 =< preCodeContentBlock-2
f3b.evaluatedPreCodeContentBlock-2 =< f3b.preCodeContentBlock-2

f3b.postCodeContentBlock-2 =< postCodeContentBlock-2
f3b.evaluatedPostContentBlock-2 =< f3b.postCodeContentBlock-2

f3b.preCodeContentBlock-3 =< preCodeContentBlock-3
f3b.evaluatedPreCodeContentBlock-3 =< f3b.preCodeContentBlock-3

f3b.postCodeContentBlock-3 =< postCodeContentBlock-3
f3b.evaluatedPostContentBlock-3 =< f3b.postCodeContentBlock-3

f3b.preCodeFooter =< preCodeFooter
f3b.evaluatedPreCodeFooter =< f3b.preCodeFooter

f3b.footer =< footer
f3b.evaluatedFooter =< f3b.footer

f3b.postCodeFooter =< postCodeFooter
f3b.evaluatedPostCodeFooter =< f3b.postCodeFooter

f3c.preCodeHeader =< preCodeHeader
f3c.evaluatedPreCodeHeader =< f3c.preCodeHeader

f3c.header =< header
f3c.evaluatedHeader =< f3c.header

f3c.postCodeHeader =< postCodeHeader
f3c.evaluatedPostCodeHeader =< f3c.postCodeHeader

f3c.preCodeFeature =< preCodeFeature
f3c.evaluatedPreCodeFeature =< f3c.preCodeFeature
f3c.evaluatedPreCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f3c.postCodeFeature =< postCodeFeature
f3c.evaluatedPostCodeFeature =< f3c.postCodeFeature
f3c.evaluatedPostCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f3c.preCodeContent =< preCodeContent
f3c.evaluatedPreCodeContent =< f3c.preCodeContent

f3c.preCodeContentBlock-1 =< preCodeContentBlock-1
f3c.evaluatedPreCodeContentBlock-1 =< f3c.preCodeContentBlock-1

f3c.postCodeContentBlock-1 =< postCodeContentBlock-1
f3c.evaluatedPostContentBlock-1 =< f3c.postCodeContentBlock-1

f3c.preCodeContentBlock-2 =< preCodeContentBlock-2
f3c.evaluatedPreCodeContentBlock-2 =< f3c.preCodeContentBlock-2

f3c.postCodeContentBlock-2 =< postCodeContentBlock-2
f3c.evaluatedPostContentBlock-2 =< f3c.postCodeContentBlock-2

f3c.preCodeContentBlock-3 =< preCodeContentBlock-3
f3c.evaluatedPreCodeContentBlock-3 =< f3c.preCodeContentBlock-3

f3c.postCodeContentBlock-3 =< postCodeContentBlock-3
f3c.evaluatedPostContentBlock-3 =< f3c.postCodeContentBlock-3

f3c.preCodeFooter =< preCodeFooter
f3c.evaluatedPreCodeFooter =< f3c.preCodeFooter

f3c.footer =< footer
f3c.evaluatedFooter =< f3c.footer

f3c.postCodeFooter =< postCodeFooter
f3c.evaluatedPostCodeFooter =< f3c.postCodeFooter

f3d.preCodeHeader =< preCodeHeader
f3d.evaluatedPreCodeHeader =< f3d.preCodeHeader

f3d.header =< header
f3d.evaluatedHeader =< f3d.header

f3d.postCodeHeader =< postCodeHeader
f3d.evaluatedPostCodeHeader =< f3d.postCodeHeader

f3d.preCodeFeature =< preCodeFeature
f3d.evaluatedPreCodeFeature =< f3d.preCodeFeature
f3d.evaluatedPreCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f3d.postCodeFeature =< postCodeFeature
f3d.evaluatedPostCodeFeature =< f3d.postCodeFeature
f3d.evaluatedPostCodeFeature.if.isFalse.data = register:noFeatureContentFlag

f3d.preCodeContent =< preCodeContent
f3d.evaluatedPreCodeContent =< f3d.preCodeContent

f3d.preCodeContentBlock-1 =< preCodeContentBlock-1
f3d.evaluatedPreCodeContentBlock-1 =< f3d.preCodeContentBlock-1

f3d.postCodeContentBlock-1 =< postCodeContentBlock-1
f3d.evaluatedPostContentBlock-1 =< f3d.postCodeContentBlock-1

f3d.preCodeContentBlock-2 =< preCodeContentBlock-2
f3d.evaluatedPreCodeContentBlock-2 =< f3d.preCodeContentBlock-2

f3d.postCodeContentBlock-2 =< postCodeContentBlock-2
f3d.evaluatedPostContentBlock-2 =< f3d.postCodeContentBlock-2

f3d.preCodeContentBlock-3 =< preCodeContentBlock-3
f3d.evaluatedPreCodeContentBlock-3 =< f3d.preCodeContentBlock-3

f3d.postCodeContentBlock-3 =< postCodeContentBlock-3
f3d.evaluatedPostContentBlock-3 =< f3d.postCodeContentBlock-3

f3d.preCodeFooter =< preCodeFooter
f3d.evaluatedPreCodeFooter =< f3d.preCodeFooter

f3d.footer =< footer
f3d.evaluatedFooter =< f3d.footer

f3d.postCodeFooter =< postCodeFooter
f3d.evaluatedPostCodeFooter =< f3d.postCodeFooter


###  Defines the page object and uses TemplaVoila to render the page ###
page = PAGE
page {
	typeNum = 0
	config {
		# Set up XHTML Transitional output
		xmlprologue = none
		doctype = xhtml_trans

		# Get rid of extra comments in the XHTML output.
		disablePrefixComment = 1

		# Turn off the page title since we'll manually add it later.
		noPageTitle = 2

		# Enabled indexed search indexing.
		index_enable = 1
  
		# Clear the cache at midnight so that scheduled content appears on time.
		cache_clearAtMidnight = 1

		# Shorten email links using MD5 Hash.
		notification_email_urlmode = 76

		# Add the URL in front of local anchors to account for base URL.
		prefixLocalAnchors = all
	}

	headerData {
		# Set the new page title
		1 = COA
		1 {
			wrap = <title> | </title>

			1 = TEXT
			1.data = TSFE:page|title
			1.htmlSpecialChars = 1

			# Don't repeat the same title twice.
			2 = TEXT
			2.noTrimWrap = | &#124; {$siteTitle} |
			2.if {
				value.data = TSFE:page|title
				equals = {$siteTitle}
				negate = 1
			}
		}

		2 =< additionalDocHeadCode

	}

	includeCSS.tf_skin_main = {$templavoila_framework.skinPath}css/mainstyles.css
	includeCSS.tf_skin_rte = {$templavoila_framework.skinPath}css/rte.css

	includeJS.tf_skin = {$templavoila_framework.skinPath}js/skin.js
}

[globalVar = LIT:1 = {$enableJQuery}]
page {
	includeJSlibs.tf_jquery = {$templavoila_framework.corePath}js/jquery-1.7.2.min.js
	includeJSlibs.tf_jquery.forceOnTop = 1

	includeJS.tf_core = {$templavoila_framework.corePath}js/core.js
	
	jsInline {
		1 = TEXT
		1.dataWrap = jQuery.noConflict();
	}
}
[global]

# Let TemplaVoila render the page content.
page.10 = USER
page.10.userFunc = tx_templavoila_pi1->main_page

# Temporarily disabled - See http://bugs.typo3.org/view.php?id=17890
# page.10.renderUnmapped = false

page.10.disableExplosivePreview = 1
plugin.tx_templavoila_pi1.disableExplosivePreview = 1
