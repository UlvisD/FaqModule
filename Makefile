# Validate code and show errors
phpcs:
	vendor/bin/phpcs --config-set installed_paths vendor/phpcompatibility/php-compatibility,vendor/magento/magento-coding-standard/ && vendor/bin/phpcs --exclude=Generic.Files.LineLength  --extensions=phtml,php --ignore=*/node_modules/* --ignore=*/lib/* -s --parallel=4 --standard=Magento2 app/code/Magebit app/design/frontend/
