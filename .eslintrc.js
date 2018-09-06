module.exports = {
  extends: 'airbnb-base',
  rules: {
    'function-paren-newline': 0,
    'arrow-parens': 0,
    'consistent-return': 0,
    'no-param-reassign': 0,
  },
  globals: {
    document: true,
    fetch: true,
    RSE: true,
    window: true,
    wp: true,
  },
  env: {
    jquery: true,
  },
};
