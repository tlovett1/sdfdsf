module.exports = {
  extends: 'airbnb-base',
  rules: {
    'function-paren-newline': 0,
    'arrow-parens': 0,
    'consistent-return': 0,
    'no-param-reassign': 0,
    'no-new': 0,
  },
  globals: {
    document: true,
    fetch: true,
    ATU: true,
    window: true,
    wp: true,
  },
  env: {
    jquery: true,
  },
};
