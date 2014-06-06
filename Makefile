SITE_LESS = ./assets/style/style.less
SITE_CSS = ./style.css
SITE_CSS_MIN = ./style.min.css

build:
	@echo "Building .. "
	recess --compile ${SITE_LESS} > ${SITE_CSS}
	# recess --compile ${SITE_LESS} > ${SITE_CSS}
	# recess --compile ${ADMIN_LESS} > ${ADMIN_CSS}

site-css: style.css

webroot/css/*.css: assets/style/*.less
	# mkdir -p webroot/css
	recess --compile ${SITE_LESS} > ${SITE_CSS}
	recess --compress ${SITE_LESS} > ${SITE_CSS_MIN}

watch:
	echo "Watching less files..."; \
	watchr -e "watch('assets/style/.*\.less') { system 'make build' }"

.PHONY: watch site-css
