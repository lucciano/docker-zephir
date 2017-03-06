
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
#include "kernel/operators.h"
#include "kernel/memory.h"


ZEPHIR_INIT_CLASS(Utils_Filter) {

	ZEPHIR_REGISTER_CLASS(Utils, Filter, utils, filter, utils_filter_method_entry, 0);

	return SUCCESS;

}

PHP_METHOD(Utils_Filter, alpha) {

	long _0;
	char ch = 0;
	zval *str_param = NULL;
	zval str;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&str);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &str_param);

	zephir_get_strval(&str, str_param);


	for (_0 = 0; _0 < Z_STRLEN_P(&str); _0++) {
		ch = ZEPHIR_STRING_OFFSET(&str, _0);
		php_printf("%c", ch);
		php_printf("%s", "\n");
	}
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Utils_Filter, alpha2) {

	zend_bool _1$$3, _2$$3, _3$$3;
	long _0;
	char ch = 0;
	zval *str_param = NULL;
	zval str, filtered;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&str);
	ZVAL_UNDEF(&filtered);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &str_param);

	zephir_get_strval(&str, str_param);


	ZEPHIR_INIT_VAR(&filtered);
	ZVAL_STRING(&filtered, "");
	for (_0 = 0; _0 < Z_STRLEN_P(&str); _0++) {
		ch = ZEPHIR_STRING_OFFSET(&str, _0);
		_1$$3 = ch >= 'a';
		if (_1$$3) {
			_1$$3 = ch <= 'z';
		}
		_2$$3 = _1$$3;
		if (!(_2$$3)) {
			_3$$3 = ch >= 'A';
			if (_3$$3) {
				_3$$3 = ch <= 'Z';
			}
			_2$$3 = _3$$3;
		}
		if (_2$$3) {
			zephir_concat_self_char(&filtered, ch TSRMLS_CC);
		}
	}
	RETURN_CTOR(filtered);

}

