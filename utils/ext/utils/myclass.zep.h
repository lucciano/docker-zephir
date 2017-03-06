
extern zend_class_entry *utils_myclass_ce;

ZEPHIR_INIT_CLASS(Utils_MyClass);

PHP_METHOD(Utils_MyClass, someMethod1);
PHP_METHOD(Utils_MyClass, someMethod2);

ZEPHIR_INIT_FUNCS(utils_myclass_method_entry) {
	PHP_ME(Utils_MyClass, someMethod1, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Utils_MyClass, someMethod2, NULL, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
