<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Utils',
    'file' => '/root/utils/utils/filter.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Filter',
    'abstract' => 0,
    'final' => 0,
    'definition' => 
    array (
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'alpha',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'str',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/root/utils/utils/filter.zep',
              'line' => 6,
              'char' => 37,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'char',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'ch',
                  'file' => '/root/utils/utils/filter.zep',
                  'line' => 8,
                  'char' => 16,
                ),
              ),
              'file' => '/root/utils/utils/filter.zep',
              'line' => 10,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'str',
                'file' => '/root/utils/utils/filter.zep',
                'line' => 10,
                'char' => 23,
              ),
              'value' => 'ch',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'echo',
                  'expressions' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => 'ch',
                      'file' => '/root/utils/utils/filter.zep',
                      'line' => 11,
                      'char' => 20,
                    ),
                    1 => 
                    array (
                      'type' => 'string',
                      'value' => '\\n',
                      'file' => '/root/utils/utils/filter.zep',
                      'line' => 11,
                      'char' => 26,
                    ),
                  ),
                  'file' => '/root/utils/utils/filter.zep',
                  'line' => 12,
                  'char' => 9,
                ),
              ),
              'file' => '/root/utils/utils/filter.zep',
              'line' => 13,
              'char' => 5,
            ),
          ),
          'file' => '/root/utils/utils/filter.zep',
          'line' => 6,
          'last-line' => 15,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'alpha2',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'str',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/root/utils/utils/filter.zep',
              'line' => 15,
              'char' => 38,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'char',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'ch',
                  'file' => '/root/utils/utils/filter.zep',
                  'line' => 17,
                  'char' => 16,
                ),
              ),
              'file' => '/root/utils/utils/filter.zep',
              'line' => 17,
              'char' => 23,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'filtered',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/root/utils/utils/filter.zep',
                    'line' => 17,
                    'char' => 38,
                  ),
                  'file' => '/root/utils/utils/filter.zep',
                  'line' => 17,
                  'char' => 38,
                ),
              ),
              'file' => '/root/utils/utils/filter.zep',
              'line' => 19,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'str',
                'file' => '/root/utils/utils/filter.zep',
                'line' => 19,
                'char' => 23,
              ),
              'value' => 'ch',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'or',
                    'left' => 
                    array (
                      'type' => 'list',
                      'left' => 
                      array (
                        'type' => 'and',
                        'left' => 
                        array (
                          'type' => 'greater-equal',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'ch',
                            'file' => '/root/utils/utils/filter.zep',
                            'line' => 20,
                            'char' => 20,
                          ),
                          'right' => 
                          array (
                            'type' => 'char',
                            'value' => 'a',
                            'file' => '/root/utils/utils/filter.zep',
                            'line' => 20,
                            'char' => 27,
                          ),
                          'file' => '/root/utils/utils/filter.zep',
                          'line' => 20,
                          'char' => 27,
                        ),
                        'right' => 
                        array (
                          'type' => 'less-equal',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'ch',
                            'file' => '/root/utils/utils/filter.zep',
                            'line' => 20,
                            'char' => 32,
                          ),
                          'right' => 
                          array (
                            'type' => 'char',
                            'value' => 'z',
                            'file' => '/root/utils/utils/filter.zep',
                            'line' => 20,
                            'char' => 37,
                          ),
                          'file' => '/root/utils/utils/filter.zep',
                          'line' => 20,
                          'char' => 37,
                        ),
                        'file' => '/root/utils/utils/filter.zep',
                        'line' => 20,
                        'char' => 37,
                      ),
                      'file' => '/root/utils/utils/filter.zep',
                      'line' => 20,
                      'char' => 40,
                    ),
                    'right' => 
                    array (
                      'type' => 'list',
                      'left' => 
                      array (
                        'type' => 'and',
                        'left' => 
                        array (
                          'type' => 'greater-equal',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'ch',
                            'file' => '/root/utils/utils/filter.zep',
                            'line' => 20,
                            'char' => 46,
                          ),
                          'right' => 
                          array (
                            'type' => 'char',
                            'value' => 'A',
                            'file' => '/root/utils/utils/filter.zep',
                            'line' => 20,
                            'char' => 53,
                          ),
                          'file' => '/root/utils/utils/filter.zep',
                          'line' => 20,
                          'char' => 53,
                        ),
                        'right' => 
                        array (
                          'type' => 'less-equal',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'ch',
                            'file' => '/root/utils/utils/filter.zep',
                            'line' => 20,
                            'char' => 58,
                          ),
                          'right' => 
                          array (
                            'type' => 'char',
                            'value' => 'Z',
                            'file' => '/root/utils/utils/filter.zep',
                            'line' => 20,
                            'char' => 63,
                          ),
                          'file' => '/root/utils/utils/filter.zep',
                          'line' => 20,
                          'char' => 63,
                        ),
                        'file' => '/root/utils/utils/filter.zep',
                        'line' => 20,
                        'char' => 63,
                      ),
                      'file' => '/root/utils/utils/filter.zep',
                      'line' => 20,
                      'char' => 65,
                    ),
                    'file' => '/root/utils/utils/filter.zep',
                    'line' => 20,
                    'char' => 65,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'concat-assign',
                          'variable' => 'filtered',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'ch',
                            'file' => '/root/utils/utils/filter.zep',
                            'line' => 21,
                            'char' => 34,
                          ),
                          'file' => '/root/utils/utils/filter.zep',
                          'line' => 21,
                          'char' => 34,
                        ),
                      ),
                      'file' => '/root/utils/utils/filter.zep',
                      'line' => 22,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/root/utils/utils/filter.zep',
                  'line' => 23,
                  'char' => 9,
                ),
              ),
              'file' => '/root/utils/utils/filter.zep',
              'line' => 25,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'filtered',
                'file' => '/root/utils/utils/filter.zep',
                'line' => 25,
                'char' => 24,
              ),
              'file' => '/root/utils/utils/filter.zep',
              'line' => 26,
              'char' => 5,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/root/utils/utils/filter.zep',
                'line' => 16,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/root/utils/utils/filter.zep',
            'line' => 16,
            'char' => 5,
          ),
          'file' => '/root/utils/utils/filter.zep',
          'line' => 15,
          'last-line' => 27,
          'char' => 19,
        ),
      ),
      'file' => '/root/utils/utils/filter.zep',
      'line' => 3,
      'char' => 5,
    ),
    'file' => '/root/utils/utils/filter.zep',
    'line' => 3,
    'char' => 5,
  ),
);