
js:
	clear
	cd sources/javascript/ ; make
	cp sources/javascript/build/build.js theme/core.js

css:
	cp sources/style/components/necolas-normalize.css/normalize.css sources/style/deps/normalize.styl
	stylus sources/style/style.styl -o theme/

init:
	cd sources/style; npm install nib
	cd sources/style; component install necolas/normalize.css

ftp-deploy:
	bash util/ftp-push.sh

ftp-deploy-js:
	bash util/ftp-push-js.sh

ftp-deploy-css:
	bash util/ftp-push-css.sh

all:
	clear
	make css
	make js
	make ftp-deploy

.PHONY: css ftp-deploy all
