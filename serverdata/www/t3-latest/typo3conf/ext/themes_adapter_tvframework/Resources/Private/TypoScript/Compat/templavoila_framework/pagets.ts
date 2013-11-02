# hide unused fields

TCEFORM.pages {
	backend_layout.disabled = 1
	backend_layout_next_level.disabled = 1
}

# configure the layoutfield to fit the tvf

TCEFORM.pages.layout {
	removeItems = 1,2,3
	addItems {
		100 = f1a
		101 = f1b
		102 = f1c
		103 = f1d
		104 = f1e
		105 = f1f
		110 = f2a
		111 = f2b
		112 = f2c
		113 = f2d
		114 = f2e
		120 = f3a
		121 = f3b
		122 = f3c
		123 = f3d
	}
}