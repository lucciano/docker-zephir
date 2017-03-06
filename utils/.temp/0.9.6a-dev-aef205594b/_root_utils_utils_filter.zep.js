[
    {
        "type": "namespace",
        "name": "Utils",
        "file": "\/root\/utils\/utils\/filter.zep",
        "line": 3,
        "char": 5
    },
    {
        "type": "class",
        "name": "Filter",
        "abstract": 0,
        "final": 0,
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "alpha",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "str",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/root\/utils\/utils\/filter.zep",
                            "line": 6,
                            "char": 37
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "char",
                            "variables": [
                                {
                                    "variable": "ch",
                                    "file": "\/root\/utils\/utils\/filter.zep",
                                    "line": 8,
                                    "char": 16
                                }
                            ],
                            "file": "\/root\/utils\/utils\/filter.zep",
                            "line": 10,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "str",
                                "file": "\/root\/utils\/utils\/filter.zep",
                                "line": 10,
                                "char": 23
                            },
                            "value": "ch",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "echo",
                                    "expressions": [
                                        {
                                            "type": "variable",
                                            "value": "ch",
                                            "file": "\/root\/utils\/utils\/filter.zep",
                                            "line": 11,
                                            "char": 20
                                        },
                                        {
                                            "type": "string",
                                            "value": "\\n",
                                            "file": "\/root\/utils\/utils\/filter.zep",
                                            "line": 11,
                                            "char": 26
                                        }
                                    ],
                                    "file": "\/root\/utils\/utils\/filter.zep",
                                    "line": 12,
                                    "char": 9
                                }
                            ],
                            "file": "\/root\/utils\/utils\/filter.zep",
                            "line": 13,
                            "char": 5
                        }
                    ],
                    "file": "\/root\/utils\/utils\/filter.zep",
                    "line": 6,
                    "last-line": 15,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "alpha2",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "str",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/root\/utils\/utils\/filter.zep",
                            "line": 15,
                            "char": 38
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "char",
                            "variables": [
                                {
                                    "variable": "ch",
                                    "file": "\/root\/utils\/utils\/filter.zep",
                                    "line": 17,
                                    "char": 16
                                }
                            ],
                            "file": "\/root\/utils\/utils\/filter.zep",
                            "line": 17,
                            "char": 23
                        },
                        {
                            "type": "declare",
                            "data-type": "string",
                            "variables": [
                                {
                                    "variable": "filtered",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "\/root\/utils\/utils\/filter.zep",
                                        "line": 17,
                                        "char": 38
                                    },
                                    "file": "\/root\/utils\/utils\/filter.zep",
                                    "line": 17,
                                    "char": 38
                                }
                            ],
                            "file": "\/root\/utils\/utils\/filter.zep",
                            "line": 19,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "str",
                                "file": "\/root\/utils\/utils\/filter.zep",
                                "line": 19,
                                "char": 23
                            },
                            "value": "ch",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "or",
                                        "left": {
                                            "type": "list",
                                            "left": {
                                                "type": "and",
                                                "left": {
                                                    "type": "greater-equal",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "ch",
                                                        "file": "\/root\/utils\/utils\/filter.zep",
                                                        "line": 20,
                                                        "char": 20
                                                    },
                                                    "right": {
                                                        "type": "char",
                                                        "value": "a",
                                                        "file": "\/root\/utils\/utils\/filter.zep",
                                                        "line": 20,
                                                        "char": 27
                                                    },
                                                    "file": "\/root\/utils\/utils\/filter.zep",
                                                    "line": 20,
                                                    "char": 27
                                                },
                                                "right": {
                                                    "type": "less-equal",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "ch",
                                                        "file": "\/root\/utils\/utils\/filter.zep",
                                                        "line": 20,
                                                        "char": 32
                                                    },
                                                    "right": {
                                                        "type": "char",
                                                        "value": "z",
                                                        "file": "\/root\/utils\/utils\/filter.zep",
                                                        "line": 20,
                                                        "char": 37
                                                    },
                                                    "file": "\/root\/utils\/utils\/filter.zep",
                                                    "line": 20,
                                                    "char": 37
                                                },
                                                "file": "\/root\/utils\/utils\/filter.zep",
                                                "line": 20,
                                                "char": 37
                                            },
                                            "file": "\/root\/utils\/utils\/filter.zep",
                                            "line": 20,
                                            "char": 40
                                        },
                                        "right": {
                                            "type": "list",
                                            "left": {
                                                "type": "and",
                                                "left": {
                                                    "type": "greater-equal",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "ch",
                                                        "file": "\/root\/utils\/utils\/filter.zep",
                                                        "line": 20,
                                                        "char": 46
                                                    },
                                                    "right": {
                                                        "type": "char",
                                                        "value": "A",
                                                        "file": "\/root\/utils\/utils\/filter.zep",
                                                        "line": 20,
                                                        "char": 53
                                                    },
                                                    "file": "\/root\/utils\/utils\/filter.zep",
                                                    "line": 20,
                                                    "char": 53
                                                },
                                                "right": {
                                                    "type": "less-equal",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "ch",
                                                        "file": "\/root\/utils\/utils\/filter.zep",
                                                        "line": 20,
                                                        "char": 58
                                                    },
                                                    "right": {
                                                        "type": "char",
                                                        "value": "Z",
                                                        "file": "\/root\/utils\/utils\/filter.zep",
                                                        "line": 20,
                                                        "char": 63
                                                    },
                                                    "file": "\/root\/utils\/utils\/filter.zep",
                                                    "line": 20,
                                                    "char": 63
                                                },
                                                "file": "\/root\/utils\/utils\/filter.zep",
                                                "line": 20,
                                                "char": 63
                                            },
                                            "file": "\/root\/utils\/utils\/filter.zep",
                                            "line": 20,
                                            "char": 65
                                        },
                                        "file": "\/root\/utils\/utils\/filter.zep",
                                        "line": 20,
                                        "char": 65
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "concat-assign",
                                                    "variable": "filtered",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "ch",
                                                        "file": "\/root\/utils\/utils\/filter.zep",
                                                        "line": 21,
                                                        "char": 34
                                                    },
                                                    "file": "\/root\/utils\/utils\/filter.zep",
                                                    "line": 21,
                                                    "char": 34
                                                }
                                            ],
                                            "file": "\/root\/utils\/utils\/filter.zep",
                                            "line": 22,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/root\/utils\/utils\/filter.zep",
                                    "line": 23,
                                    "char": 9
                                }
                            ],
                            "file": "\/root\/utils\/utils\/filter.zep",
                            "line": 25,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "filtered",
                                "file": "\/root\/utils\/utils\/filter.zep",
                                "line": 25,
                                "char": 24
                            },
                            "file": "\/root\/utils\/utils\/filter.zep",
                            "line": 26,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/root\/utils\/utils\/filter.zep",
                                "line": 16,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/root\/utils\/utils\/filter.zep",
                        "line": 16,
                        "char": 5
                    },
                    "file": "\/root\/utils\/utils\/filter.zep",
                    "line": 15,
                    "last-line": 27,
                    "char": 19
                }
            ],
            "file": "\/root\/utils\/utils\/filter.zep",
            "line": 3,
            "char": 5
        },
        "file": "\/root\/utils\/utils\/filter.zep",
        "line": 3,
        "char": 5
    }
]