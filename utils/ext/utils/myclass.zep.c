
#ifdef HAVE_CONFIG_H
#include "../ext_config.h"
#endif

#include <php.h>
#include "../php_ext.h"
#include "../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"


ZEPHIR_INIT_CLASS(Utils_MyClass) {

	ZEPHIR_REGISTER_CLASS(Utils, MyClass, utils, myclass, utils_myclass_method_entry, 0);

	return SUCCESS;

}

PHP_METHOD(Utils_MyClass, someMethod1) {

	int a, b;
	ZEPHIR_INIT_THIS();



	a = 1;
	b = 2;
	RETURN_LONG((a + b));

}

PHP_METHOD(Utils_MyClass, someMethod2) {

	int a, b;
	ZEPHIR_INIT_THIS();



	a = 3;
	b = 4;
	RETURN_LONG((a + b));

}

